{
  const init = () => {
    checkDetail();
    shareBtn();
    openReport();
    closeReport();
  };

  const openReport = () => {
    validation();
    const openBtn = document.querySelector(`.detail__report__open`);
    const report = document.querySelector(`.detail__report__container`);

    if (openBtn && report) {
      openBtn.addEventListener(`click`, () => {
        report.classList.remove('hide');
        document.addEventListener('click', e => {
          if (
            e.target.closest('form') ||
            e.target.closest('.detail__report__open')
          ) {
            console.log('erin');
          } else {
            report.classList.add('hide');
          }
        });
      });
    }
  };

  const closeReport = () => {
    const closeBtn = document.querySelector(`.detail__report__close`);
    if (closeBtn) {
      closeBtn.addEventListener(`click`, handleClickCloseBtn);
    }
  };

  const handleClickCloseBtn = () => {
    const report = document.querySelector(`.detail__report__container`);
    report.classList.add('hide');
  };

  const checkDetail = () => {
    window.addEventListener(`load`, () => {
      setTimeout(() => {
        if (document.URL.includes('detail')) {
          document.addEventListener(`keydown`, handleKeyPressed);
        }
      }, 300);
    });
  };

  const handleKeyPressed = e => {
    const key = e.key;
    const $location = document.querySelector(`#randomMockup`);
    if ($location) {
      switch (key) {
      case 'ArrowLeft':
        window.history.back();
        break;
      case 'ArrowRight':
        window.location = $location.href;
        break;
      }
    }
  };

  const shareBtn = () => {
    const $shareBtn = document.querySelector(`.native__share`);
    if (navigator.share) {
      if ($shareBtn) {
        $shareBtn.addEventListener(`click`, handleClicksharebtn);
      }
    } else {
      if ($shareBtn) {
        $shareBtn.remove();
      }
    }
  };

  const handleClicksharebtn = () => {
    const title = document.title;
    const url = document.querySelector('link[rel=canonical]')
      ? document.querySelector('link[rel=canonical]').href
      : document.location.href;
    if (navigator.share) {
      navigator
        .share({
          title: title,
          url: url
        })
        .then(() => {
          console.log('Thanks for sharing!');
        })
        .catch(console.error);
    }
  };

  const validation = () => {
    const $form = document.querySelector(`.detail__report__form`);
    const select = $form.querySelector(`select`);
    const checkbox = $form.querySelector(`input[type=checkbox]`);

    $form.noValidate = true;
    $form.addEventListener(`submit`, e => {
      if (!$form.checkValidity()) {
        e.preventDefault();
        showValidationInfoSelect(select);
        showValidationInfoCheckbox(checkbox);
      }
    });

    select.addEventListener(`change`, () => showValidationInfoSelect(select));
    checkbox.addEventListener(`change`, () =>
      showValidationInfoCheckbox(checkbox)
    );
  };

  const showValidationInfoSelect = select => {
    let message;
    if (select.value === '') {
      message = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>Hey, you have to select the problem.`;
    } else {
      select.parentElement.nextElementSibling.classList.remove(
        `submit__input__error-active`
      );
      message = ``;
    }
    if (message) {
      select.parentElement.nextElementSibling.classList.add(
        `submit__input__error-active`
      );
      select.parentElement.nextElementSibling.innerHTML = message;
    }
  };

  const showValidationInfoCheckbox = checkbox => {
    let message;
    if (!checkbox.checked) {
      message = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> You have to check this box.`;
    } else {
      checkbox.parentElement.nextElementSibling.classList.remove(
        `submit__input__error-active`
      );
      message = ``;
    }
    if (message) {
      checkbox.parentElement.nextElementSibling.classList.add(
        `submit__input__error-active`
      );
      checkbox.parentElement.nextElementSibling.innerHTML = message;
    }
  };

  init();
}
