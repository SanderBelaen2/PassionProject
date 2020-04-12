{
  const init = () => {
    validation();
  };

  const validation = () => {
    const $form = document.querySelector(`.landing__newsletter__form__container`);
    const $field = $form.querySelector(`.landing__newsletter__form__input`);

    $form.noValidate = true;
    $form.addEventListener(`submit`, e => {
      if (!$form.checkValidity()) {
        e.preventDefault();
        showValidationInfo($field);
      }
    });

    $field.addEventListener(`input`, handleInputField);
    $field.addEventListener(`blur`, handleBlurField);
  };

  const handleInputField = e => {
    if (e.currentTarget.checkValidity()) {
      if (
        e.target.parentElement.nextElementSibling.classList.contains('submit__input__error-active')
      ) {
        e.target.parentElement.nextElementSibling.classList.add('fade-out');
        setTimeout(() => {
          e.target.parentElement.nextElementSibling.classList.remove('submit__input__error-active');
          e.target.parentElement.nextElementSibling.innerHTML = ``;
        }, 300);
        clearTimeout();
      }
    }
  };

  const showValidationInfo = $field => {
    let message;
    if ($field.validity.valueMissing) {
      message = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> You have to fill in your emailadres first...`;
    }
    if ($field.validity.typeMismatch) {
      message = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> Hmm, this doesn't seem right...`;
    }
    if (message) {
      $field.parentElement.nextElementSibling.classList.add(`submit__input__error-active`);
      $field.parentElement.nextElementSibling.innerHTML = message;
    }
  };

  const handleBlurField = e => {
    if (e.currentTarget.validity.typeMismatch) {
      e.currentTarget.parentElement.nextElementSibling.classList.add(`submit__input__error-active`);
      e.currentTarget.parentElement.nextElementSibling.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> Hmm, this doesn't seem right...`;
    }
    if (e.currentTarget.validity.valueMissing) {
      console.log(e.currentTarget.parentElement.nextElementSibling);
      e.currentTarget.parentElement.nextElementSibling.classList.add(`submit__input__error-active`);
      e.currentTarget.parentElement.nextElementSibling.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> This field is required...`;
    }
  };

  init();
}
