require("./style.css");

{
  const init = () => {
    changeDocumentTitleOnBlur();
    checkDetail();
    fixTiltOnSafari();
    preventFlickering();
  };

  const preventFlickering = () => {
    window.addEventListener("load", () => {
      document.querySelector(`body`).classList.remove(`preload`);
    });
  };

  const changeDocumentTitleOnBlur = () => {
    const currentTitle = document.title;
    window.addEventListener("focus", () => {
      document.title = currentTitle;
    });
    window.addEventListener("blur", () => {
      document.title = "Hey, come back! We miss you!";
    });
  };

  const checkDetail = () => {
    if (document.URL.includes("detail")) {
      document.addEventListener(`keydown`, handleKeyPressed);
    }
  };

  const handleKeyPressed = e => {
    const key = e.key;
    const $location = document.querySelector(`#randomMockup`);
    if ($location) {
      switch (key) {
        case "ArrowLeft":
          window.history.back();
          break;
        case "ArrowRight":
          window.location = $location.href;
          break;
      }
    }
  };

  const fixTiltOnSafari = () => {
    const isSafari = window.safari !== undefined;
    if (isSafari) {
      const articles = document.querySelectorAll(`article[data-tilt]`);
      if (articles) {
        Array.from(articles).forEach($article => {
          $article.removeAttribute("data-tilt");
          $article.removeAttribute("data-tilt-max");
          $article.removeAttribute("data-tilt-scale");
        });
      }
      const $detailImage = document.querySelector(`.detail__image`);
      if ($detailImage) {
        $detailImage.removeAttribute("data-tilt");
        $detailImage.removeAttribute("data-tilt-max");
        $detailImage.removeAttribute("data-tilt-scale");
      }
    }
  };

  init();
}
