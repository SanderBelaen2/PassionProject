require('./style.css');

const goodmorning = document.querySelector(`.goodmorning`);

{
  const init = () => {
    //General
    changeDocumentTitleOnBlur();
    adaptGoodmorning();
  };

  // GENERAL

  const changeDocumentTitleOnBlur = () => {
    const currentTitle = document.title;
    window.addEventListener('focus', () => {
      document.title = currentTitle;
    });
    window.addEventListener('blur', () => {
      document.title = 'Hey! Come Back!';
    });
  };

  const adaptGoodmorning = () => {
    if (goodmorning) {
      const hr = new Date().getHours();

      if (hr >= 6) {
        if (hr < 12) {
          goodmorning.textContent = `Good Morning`;
        }
      }
      if (hr >= 12) {
        if (hr < 18) {
          goodmorning.textContent = `Good Afternoon`;
        } else if (hr < 21) {
          goodmorning.textContent = `Good Evening`;
        }
      }
      if (hr >= 21) {
        goodmorning.textContent = `Good Night`;
      }
      if (hr < 6) {
        goodmorning.textContent = `Good Night`;
      }
    }
  };

  init();
}
