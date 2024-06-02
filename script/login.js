import {fillBackgroundInput, getUserSession, setUserSession} from "./common.js"

const emailInput = document.getElementById('email_input');
const passwordInput = document.getElementById('password_input');
const submitButton = document.getElementById('submit_login');
const togglePassword = document.querySelector('.authentication__toggle-password');
const formErrorMessage = document.querySelector('.authentication__error-field');
const loginHandler = 'logination_api.php';

const errorFiledSelector = 'authentication__error';
const errorSelector = 'error';
const activeSelector = 'active';
const hiddenSelector = 'hidden';
const PASSWORD_TYPE = 'password';
const USER_EMAIL = 'user_email';
const USER_ID = 'id';
const TEXT_TYPE = 'text';
const EMAIL_TYPE = 'email';
const STATUS = 'status';
const STATUS_APPROVED = 1;
const STATUS_REJECT = 0;
const ERROR_MESSAGE = {
    [PASSWORD_TYPE]: 'Password is required.',
    [USER_EMAIL]: 'Email is required.'
}

const LOGIN_DATE = {
    [PASSWORD_TYPE]: '',
    [USER_EMAIL]: '',
}
const minPasswordLength = 8;
const VALIDATE_EMAIL_REG_EXP = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/gi

document.addEventListener('DOMContentLoaded', () => {
    if (getUserSession()) {
        window.location.replace("/admin_panel");
    }

    const validateFiled = eventTarget => {
        const typeInput = eventTarget.getAttribute('type');
        const targetName = eventTarget.name;
        const inputValue = eventTarget.value;

        if (typeInput === PASSWORD_TYPE) {
            if (inputValue.length < minPasswordLength) {
                ERROR_MESSAGE[targetName] = 'Password is required.'
            } else {
                ERROR_MESSAGE[targetName] = ''
            }
        }

        if (typeInput === EMAIL_TYPE) {
            if (!inputValue) {
                ERROR_MESSAGE[targetName] = 'Email is required.'
            }

            if (!inputValue.match(VALIDATE_EMAIL_REG_EXP) && inputValue) {
                ERROR_MESSAGE[targetName] = 'Incorrect email format. Correct format is ****@**.***';
            }

            if ((inputValue.match(VALIDATE_EMAIL_REG_EXP) && inputValue)) {
                ERROR_MESSAGE[targetName] = '';
            }
        }
    };

    const togglePasswordButton = eventTarget => {
        if (eventTarget.classList.contains(activeSelector)) {
            passwordInput.setAttribute('type', PASSWORD_TYPE);
            eventTarget.classList.remove(activeSelector);
        } else {
            passwordInput.setAttribute('type', TEXT_TYPE);
            eventTarget.classList.add(activeSelector);
        }
    };

    const printErrorInputMessage = eventTarget => {
        const typeInput = eventTarget.name;
        const errorField = document.querySelector(`.${errorFiledSelector}_${typeInput}`);
        errorField.innerText = ERROR_MESSAGE[typeInput];
        ERROR_MESSAGE[typeInput] ? errorField.classList.add(errorSelector) : errorField.classList.remove(errorSelector)
    };

    const insertInputValueByDate = eventTarget => {
        LOGIN_DATE[eventTarget.name] = eventTarget.value;
    }

    const isValidForm = () => {

        for (let error in ERROR_MESSAGE) {
            if (ERROR_MESSAGE[error]) {
                return
            }
        }

        for (let elementData in LOGIN_DATE) {
            if (!LOGIN_DATE[elementData]) return;
        }

        return true
    }

    const fetchLoginProcessing = async () => {
        let response = await fetch(loginHandler, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(LOGIN_DATE)
        })
        if (response.ok) {
            return await response.json();
        } else {
            console.log("Ошибка HTTP: " + response.status);
        }

        return false;
    }

    const authorization = async () => {
        const fetchResult = await fetchLoginProcessing();
        if (fetchResult[STATUS]) {
            formErrorMessage.classList.add(hiddenSelector);
            setUserSession(LOGIN_DATE[USER_EMAIL], fetchResult[USER_ID]);
            window.location.replace("/admin_panel");
        } else {
            formErrorMessage.classList.remove(hiddenSelector);
        }
    }

    togglePassword.addEventListener('click', event => {
        togglePasswordButton(event.target)
    });

    [passwordInput, emailInput].map(element => {
        element.addEventListener('blur', event => {
            fillBackgroundInput(event.target);
            validateFiled(event.target);
            insertInputValueByDate(event.target);
            printErrorInputMessage(event.target);
        })
    })

    submitButton.addEventListener('click', event => {
        event.preventDefault();
        if (isValidForm()) {
            authorization();
        } else {
            formErrorMessage.classList.remove(hiddenSelector);
        }
    })
})
