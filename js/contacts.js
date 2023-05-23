const form = document.querySelector('#form');
const nameInput = document.querySelector('#name');
const email = document.querySelector('#email');
const text = document.querySelector('#text');
const checkbox = document.querySelector('#check');
const btn = document.querySelector('#form-btn');

const emailReg = new RegExp(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/);
const digitReg = new RegExp(/\d/);

function validateEmail(value) {
  return emailReg.test(value);
}

function validateName(value) {
  return value.trim().length && !digitReg.test(value);
}

function validateText(value) {
  return value.trim().length;
}

function submitForm() {
  const nameVal = nameInput.value.trim();
  const emailVal = email.value.trim();
  const textVal = text.value.trim();
  const check = checkbox.checked;

  if (!nameVal) {
    setErrorFor(nameInput, 'The name cannot be empty');
  } else if (digitReg.test(nameVal)) {
    setErrorFor(nameInput, 'The name cannot contain digits');
  } else {
    setSuccessFor(nameInput);
  }

  if (!emailVal) {
    setErrorFor(email, 'The E-mail cannot be empty');
  } else if (!emailReg.test(emailVal)) {
    setErrorFor(email, 'Wrong E-mail');
  } else {
    setSuccessFor(email);
  }

  if (!textVal) {
    setErrorFor(text, 'Your comment cannot be empty');
  } else {
    setSuccessFor(text);
  }

  if (!check) {
    setErrorFor(checkbox, 'Consent to the processing of personal data is required');
  } else {
    setSuccessFor(checkbox);
  }

  return validateName(nameVal) && validateEmail(emailVal) && validateText(textVal) && check;
}

function setErrorFor(input, message) {
  const formInput = input.parentElement;
  const small = formInput.querySelector('small');

  small.textContent = message;
  formInput.classList.add('error');
  formInput.classList.remove('success');
}

function setSuccessFor(input) {
  const formInput = input.parentElement;

  formInput.classList.add('success');
  formInput.classList.remove('error');
}

form.addEventListener('submit', (e) => {
  e.preventDefault();

  if (submitForm()) {
    window.open('/thank_you.html');
  } else {
    return;
  }
});
