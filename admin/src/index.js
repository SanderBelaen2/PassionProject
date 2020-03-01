require("./style.css");
const instagramCount = document.querySelector(`#instagramCount`);
const approveButtons = document.querySelectorAll(`.approveThisMockup`);
const deleteButtons = document.querySelectorAll(`.deleteThisMockup`);

{
  const init = () => {
    InstagramCount();

    if (approveButtons) {
      checkApproveButtons();
    }

    if (deleteButtons) {
      checkDeleteButtons();
      console.log("buttons found");
    }
  };

  const InstagramCount = () => {
    if (instagramCount) {
      fetch("https://www.instagram.com/malli.graphics/?__a=1")
        .then(r => r.json())
        .then(changeInstagramCount);
    }
  };

  const changeInstagramCount = data => {
    instagramCount.textContent = data.graphql.user.edge_followed_by.count;
  };

  const checkApproveButtons = () => {
    approveButtons.forEach(approveBtn => {
      approveBtn.addEventListener(`click`, handleClickApproveBtn);
    });
  };

  const checkDeleteButtons = () => {
    console.log("function found");
    deleteButtons.forEach(deleteBtn => {
      deleteBtn.addEventListener(`click`, handleClickDeleteBtn);
    });
  };

  const handleClickApproveBtn = e => {
    e.preventDefault();
    const platform = e.target.parentElement.parentElement.querySelector(
      ".platform"
    ).value;
    const category = e.target.parentElement.parentElement.querySelector(
      ".category"
    ).value;

    let formData = new FormData();
    formData.append("action", "approve");
    formData.append("platform", platform);
    formData.append("category", category);
    formData.append("mockup_id", e.target.id);
    const base = document.querySelector(`#base`);
    if (base) {
      base.remove();
    }
    fetch(``, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: "post",
      body: formData
    });
    e.target.parentElement.parentElement.remove();
  };

  const handleClickDeleteBtn = e => {
    console.log(e.target.parentElement.querySelector("input[name=mockup_id]"));
    e.preventDefault();
    const mockup_id = e.target.parentElement.querySelector(
      "input[name=mockup_id]"
    ).value;
    const mockup_img = e.target.parentElement.querySelector(
      "input[name=mockup_img]"
    ).value;

    let formData = new FormData();
    formData.append("action", "delete");
    formData.append("mockup_img", mockup_img);
    formData.append("mockup_id", mockup_id);
    const base = document.querySelector(`#base`);
    if (base) {
      base.remove();
    }
    fetch(``, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: "post",
      body: formData
    });
    e.target.parentElement.parentElement.parentElement.remove();
  };

  init();
}
