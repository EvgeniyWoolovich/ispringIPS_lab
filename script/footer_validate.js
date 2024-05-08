document.addEventListener('DOMContentLoaded', () => {

    const emailField = document.getElementById('email_field');
    const footerForm = document.getElementById('form');
    const submitButton = document.querySelector('.form__submit');
    const errorField = document.querySelector('.form__error');
    emailField.addEventListener('blur', event => {
        let inoutValue = emailField.value;
        if (validateEmail(inoutValue)) {
            submitButton.disabled = false;
            emailField.classList.remove('error');
            errorField.classList.remove('visible');
        } else {
            submitButton.disabled = true
            emailField.classList.add('error');
            errorField.classList.add('visible');
            errorField.innerText = 'Incorrect e-mail, enter type: email@domain.com';
        }
    });

    function validateEmail(email) {
        return String(email)
            .toLowerCase()
            .match(
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
    }
})
