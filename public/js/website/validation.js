const isValidEmail = email =>
  !!email.match(
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );

const validatePhoneNumber = (element, phoneInput) => {
  if (!phoneInput.isValidNumber()) {
    element.style.borderColor = 'red';
    document.getElementById(`${element.id}_error`).innerHTML =
      'Please provide a valid phone number';
    return true;
  } else {
    element.style.borderColor = '';
    document.getElementById(`${element.id}_error`).innerHTML = '';
    return false;
  }
};

const validateEmail = ({ id, value: email, style: { borderColor } }) => {
  const error_div = $(`#${id}_error`);

  if (!isValidEmail(email)) {
    borderColor = 'red';
    error_div.html(`Please provide a valid Email ID`);
    return true;
  } else {
    borderColor = '';
    error_div.html(``);
    return false;
  }
};

const isRequiredValid = field => field.value.trim() !== '';

const setHiddenISOFields = phoneInput => {
  document.getElementById('dialCode').value =
    phoneInput.getSelectedCountryData()['dialCode'];
  document.getElementById('iso2').value =
    phoneInput.getSelectedCountryData()['iso2'];
};

const getPasswordStrength = ({
  id,
  value: password,
  style: { borderColor },
}) => {
  const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;
  const error_div = $(`#${id}_error`);

  if (!regex.test(password)) {
    borderColor = 'red';
    error_div.html(`Password didn't match the following requrements`);
    $('#strength-indicator').css('color', 'red').html('Bad');
    return false;
  } else if (
    password.length >= 10 &&
    /.*[!@#$%^&*()_+}{":;'?\/><.,]/.test(password)
  ) {
    borderColor = '';
    error_div.html(``);
    $('#strength-indicator').css('color', 'green').html('Strong');
    return true;
  } else {
    borderColor = '';
    error_div.html(``);
    $('#strength-indicator').css('color', 'blue').html('Weak');
    return true;
  }
};

const isPasswordMatched = ({
  id,
  value: confirm_password_val,
  style: { borderColor },
}) => {
  const new_password = $('#new_password').val();
  const error_div = $(`#${id}_error`);

  if (new_password == confirm_password_val) {
    borderColor = ``;
    error_div.html(``);
    return true;
  } else {
    borderColor = 'red';
    error_div.html(`Confirm password does not match the new password`);
    return false;
  }
};

const validateThisForm = (elements, phoneInput) => {
  let formerror = false;
  for (const element of elements) {
    if (element.hasAttribute('required')) {
      if (!isRequiredValid(element)) {
        element.style.borderColor = 'red';
        
        const errorElement = document.getElementById(`${element.id}_error`);
        if (errorElement) {
          errorElement.innerHTML = 'This field is required';
        }
        
        formerror = true;
      } else {
        element.style.borderColor = '';
        
        const errorElement = document.getElementById(`${element.id}_error`);
        if (errorElement) {
          errorElement.innerHTML = '';
        }
      }
    }
    
    if (
      element.id === 'mobile_number' &&
      validatePhoneNumber(element, phoneInput)
    )
      formerror = true;

    if (element.id === 'email' && validateEmail(element)) formerror = true;

    if (element.id === 'new_password' && !getPasswordStrength(element))
      formerror = true;

    if (element.id === 'confirmed_new_password' && !isPasswordMatched(element))
      formerror = true;
  }

  return formerror;
};

const getStates = (id, selected_state = null) => {
  const dom_element = $('#state');
  dom_element.empty();
  dom_element.append(new Option('Choose an Option', ''));
  if (!id) return;

  fetch(`${url}/api/country/${id}`)
      .then(response => response.json())
      .then(data => {
        data.states.forEach(({ name, id }) => {
          // Check if the state is selected (using the selected_state parameter)
          if (selected_state == id) {
            dom_element.append(new Option(name, id, true, true));
          } else {
            dom_element.append(new Option(name, id));
          }
        });
      });
};


$(document).ready(function () {
  const mobileNumberId = document.getElementById('mobile_number');
  let phoneInput = null;

  if (mobileNumberId) {
    const isoDataId = $('#isodata');

    const initialCountry = isoDataId.attr('data-value') || 'ae';
    const utilsScript =
      'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js';

    phoneInput = window.intlTelInput(mobileNumberId, {
      initialCountry,
      utilsScript,
    });

    setHiddenISOFields(phoneInput);
    mobileNumberId.addEventListener('countrychange', () => {
      setHiddenISOFields(phoneInput);
    });
  }

  const allForms = $('form');
  allForms.submit(function (e) {
    e.preventDefault();
    const hasError = validateThisForm(this.elements, phoneInput);
    if (!hasError) this.submit();
  });

  allForms.on('focusout keyup', 'input, select, textarea', function (e) {
    validateThisForm([e.target], phoneInput);
  });

  $('.toggle-password').on('click', function () {
    $(this).toggleClass('fa-eye fa-eye-slash');
    const input = $(this).closest('.showPassword').find('.inputField');
    input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
  });

  $('#country').on('change', function () {
    getStates($(this).val());
  });

  const old_state_data = $('#old_state_data').attr('data-points');
  if (old_state_data) {
    getStates($('#country').val(), old_state_data);
  }
});
