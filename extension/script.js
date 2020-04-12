{
  const init = () => {
    window.addEventListener('load', function () {
      redirect();
    });
  };

  const redirect = () => {
    if (window.location.href.includes(`mockup`) && window.location.href.includes(`google`)) {
      let q = new URL(window.location.href).searchParams.get('q');
      q = q.replace('free', '').replace('mockup', '').replace('mockupworld', '').replace('mockups', '').trim();
      notification(q);
    }
  };

  const notification = (q = '') => {
    const dom = document.body;
    const container = document.createElement(`aside`);
    container.classList.add(`octo___notification__container`);
    container.innerHTML = `
    <img class="octo__notification__img" src="https://octopuuus.com/assets/extension/notification.svg">
    <p class="octo__notification__text">Looking for mockups?</p>
    <img id="octo__notification__remove" class="octo__notification__remove" src="https://octopuuus.com/assets/extension/cross.svg">
    `;
    container.addEventListener(`click`, () => {
      if (q !== '') {
        window.location.href = `https://malli.graphics/category/all/1/${q}`;
      } else {
        window.location.href = 'https://malli.graphics?ref=extention';
      }
    });
    dom.append(container);
    hidePopup(`octo__notification__remove`);

    setTimeout(() => {
      container.remove();
    }, 10000);
  };

  const hidePopup = id => {
    const element = document.getElementById(id);
    element.addEventListener(`click`, () => {
      element.closest(`aside`).remove();
    });
  };

  init();
}
