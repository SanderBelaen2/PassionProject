{
  const init = () => {
    validation();
  };

  const validation = () => {
    const $form = document.querySelector(`.submit__form`);
    const fields = $form.querySelectorAll(`input`);
    const select = $form.querySelector(`select`);
    const checkbox = $form.querySelector(`input[type=checkbox]`);

    $form.noValidate = true;
    $form.addEventListener(`submit`, e => {
      if (!$form.checkValidity()) {
        e.preventDefault();
        fields.forEach(showValidationInfo);
        showValidationInfoSelect(select);
        showValidationInfoCheckbox(checkbox);
      }
    });

    select.addEventListener(`change`, () => showValidationInfoSelect(select));
    checkbox.addEventListener(`change`, () =>
      showValidationInfoCheckbox(checkbox)
    );

    fields.forEach(field => {
      field.addEventListener(`input`, handleInputField);
    });
    fields.forEach(field => {
      field.addEventListener(`blur`, handleBlurField);
    });
  };

  const handleInputField = e => {
    if (e.currentTarget.checkValidity()) {
      if (
        e.currentTarget.nextElementSibling.classList.contains(
          `submit__input__error-active`
        )
      ) {
        e.currentTarget.nextElementSibling.classList.remove(
          `submit__input__error-active`
        );
        setTimeout(() => {
          e.currentTarget.nextElementSibling.innerHTML = ``;
        }, 300);
        clearTimeout();
      }
    }
  };

  const showValidationInfo = $field => {
    let message;
    if ($field.validity.valueMissing) {
      message = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> You have to fill in this too...`;
    }
    if ($field.validity.typeMismatch) {
      message = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> Hmm, this doesn't seem right...`;
    }
    if (message) {
      $field.nextElementSibling.classList.add(`submit__input__error-active`);
      $field.nextElementSibling.innerHTML = message;
    }
  };

  const handleBlurField = e => {
    if (e.currentTarget.validity.typeMismatch) {
      e.currentTarget.nextElementSibling.classList.add(
        `submit__input__error-active`
      );
      e.currentTarget.nextElementSibling.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> Hmm, this doesn't seem right...`;
    }
    if (e.currentTarget.validity.valueMissing) {
      console.log(e.currentTarget.nextElementSibling);
      e.currentTarget.nextElementSibling.classList.add(
        `submit__input__error-active`
      );
      e.currentTarget.nextElementSibling.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> This field is required...`;
    }
  };

  const showValidationInfoSelect = select => {
    let message;
    if (select.value === "0") {
      message = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> Oh and, you have to choose the right category.`;
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
