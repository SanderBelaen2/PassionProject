require('./style.css');
import AOS from 'aos';

const $submit = document.getElementById('submit');
const $detail = document.getElementById('detail');
const $sub = document.getElementById('sub');
const $swipe = document.getElementById('swipe');

{
  const init = () => {
    changeDocumentTitleOnBlur();
    fixTiltOnSafari();
    preventFlickering();

    if ($detail) {
      require('./js/detail.js');
    } else if ($submit) {
      require('./js/submit.js');
    } else if ($sub) {
      require('./js/sub.js');
    } else if ($swipe) {
      require('./js/swipe.js');
    }

    AOS.init();
  };

  const preventFlickering = () => {
    window.addEventListener('load', () => {
      document.querySelector(`body`).classList.remove(`preload`);
    });
  };

  const changeDocumentTitleOnBlur = () => {
    const currentTitle = document.title;
    window.addEventListener('focus', () => {
      document.title = currentTitle;
    });
    window.addEventListener('blur', () => {
      document.title = 'Mockups - Malli Graphics';
    });
  };

  const fixTiltOnSafari = () => {
    const isSafari = window.safari !== undefined;
    if (isSafari) {
      const articles = document.querySelectorAll(`article[data-tilt]`);
      if (articles) {
        Array.from(articles).forEach(($article) => {
          $article.removeAttribute('data-tilt');
          $article.removeAttribute('data-tilt-max');
          $article.removeAttribute('data-tilt-scale');
        });
      }
      const $detailImage = document.querySelector(`.detail__image`);
      if ($detailImage) {
        $detailImage.removeAttribute('data-tilt');
        $detailImage.removeAttribute('data-tilt-max');
        $detailImage.removeAttribute('data-tilt-scale');
      }
    }
  };

  init();
}
