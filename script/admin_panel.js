import {fillBackgroundInput, getUserId, getUserSession, logOut} from "./common.js"

document.addEventListener('DOMContentLoaded', async () => {
    const MAX_FILE_SIZ_LARGE = 5242880;
    const MAX_FILE_SIZ_SMALL = 10485760;
    const USER_SESSION = getUserSession();
    const AUTHOR_ID_SESSION = getUserId();
    const ERROR = 'error';
    const UPLOAD = 'upload';
    const INPUT_WRAPPER_SELECTOR = 'admin-form__input-wrapper';
    const ERROR_FIELD_SELECTOR = 'admin-form__hidden-error';
    const VIEW_FIELD_SELECTOR = 'view-post__image';
    const VIEW_BACKGROUND_INPUT_SELECTOR = 'admin-form__view-background';
    const DROP_AREA_SELECTOR = 'drop-area';
    const EVENT_TYPE_CHANGE = 'change';
    const AUTHOR_ID = 'author_id';
    const POST_TYPE = 'type-post';
    const NOT_CHECKED_VALUE = '0';
    const CHECKED_VALUE = '1';
    const validExtensions = ['image/jpeg', 'image/png', 'image/svg'];
    const uploadHandler = 'api.php';

    const inputTitle = document.getElementById('title_input');
    const inputDescription = document.getElementById('subtitle_input');
    const inputAuthorName = document.getElementById('author-name_input');
    const inputPublishDate = document.getElementById('publish-date_input');
    const inputAuthorPhoto = document.getElementById('author-photo_input');
    const inputImageLarge = document.getElementById('image-large_input');
    const inputImageSmall = document.getElementById('image-small_input');
    const inputTextArea = document.getElementById('content_input');
    const inputFeaturedPost = document.getElementById('featured');
    const inputMostRecentPost = document.getElementById('recent');
    const inputNote = document.getElementById('note_input');

    const dropAreaAuthorPhoto = document.getElementById('drop-area_author-photo');
    const dropAreaImageLarge = document.getElementById('drop-area_image-large');
    const dropAreaImageSmall = document.getElementById('drop-area_image-small');

    const backgroundFieldAuthorPhoto = document.getElementById('author-photo_background-preview-photo');
    const backgroundFieldImageLarge = document.getElementById('image-large_background-preview-photo');
    const backgroundFieldImageSmall = document.getElementById('image-small_background-preview-photo');

    const uploadButtonAuthorPhoto = document.getElementById('author-photo_button-upload');
    const uploadButtonImageLarge = document.getElementById('image-large_button-upload');
    const uploadButtonImageSmall = document.getElementById('image-small_button-upload');

    const removeButtonAuthorPhoto = document.getElementById('drop-area_author-photo');
    const removeButtonImageLarge = document.getElementById('drop-area_image-large');
    const removeButtonImageSmall = document.getElementById('drop-area_image-small');

    const pushFieldError = document.querySelector('.admin-form__push_error');
    const pushFieldAccept = document.querySelector('.admin-form__push_accept');

    const userIconName = document.getElementById('user_icon');
    const logoutButton = document.getElementById('user_logout');

    const submitButton = document.getElementById('submit');

    const DATA = {
        [inputTitle.name]: '',
        [inputDescription.name]: '',
        [inputTextArea.name]: '',
        [inputAuthorName.name]: '',
        [inputAuthorPhoto.name]: '',
        [inputImageLarge.name]: '',
        [inputImageSmall.name]: '',
        [inputPublishDate.name]: '',
        [AUTHOR_ID]: '',
        [inputFeaturedPost.name]: NOT_CHECKED_VALUE,
        [inputMostRecentPost.name]: NOT_CHECKED_VALUE,
        [inputNote.name]: '',
    }

    const ERROR_MESSAGE = {
        [inputTitle.name]: {
            error: 'Title is required',
            name: 'Title'
        },
        [inputDescription.name]: {
            error: 'Short description is required',
            name: 'Short description'
        },
        [inputAuthorName.name]: {
            error: 'Author name is required',
            name: 'Author name'
        },
        [inputPublishDate.name]: {
            error: 'Publish date is required',
            name: 'Publish date'
        },
        [inputAuthorPhoto.name]: {
            error: 'Author Photo is required',
            name: 'Author Photo'
        },
        [inputImageLarge.name]: {
            error: 'Hero Image is required',
            name: 'Hero Image'
        },
        [inputImageSmall.name]: {
            error: 'Hero Image is required',
            name: 'Hero Image'
        },
        [inputTextArea.name]: {
            error: 'Post content is required',
            name: 'Post content'
        },
        [POST_TYPE]: {
            error: 'Post type not selected',
            name: 'Post type'
        },
        [inputNote.name]: {
            error: 'Note not selected',
            name: 'Note'
        }
    }

    if (USER_SESSION) {
        userIconName.innerText = USER_SESSION[0];
        DATA[AUTHOR_ID] = AUTHOR_ID_SESSION;
        console.log(DATA);
    } else {
        window.location.replace("/home")
    }

    const isValidateTextInput = eventTarget => {
        const errorElement = ERROR_MESSAGE[eventTarget.name]

        eventTarget.value ? errorElement.error = '' : errorElement.error = `${errorElement.name} is required.`;
        return eventTarget.value;
    }

    const isValidateFileInput = (targetName, file) => {
        const errorElement = ERROR_MESSAGE[targetName]
        const maxCurrentSize = targetName === inputImageLarge.name ? MAX_FILE_SIZ_LARGE : MAX_FILE_SIZ_SMALL

        if (file.size > maxCurrentSize) {
            errorElement.error = `${errorElement.name} is oversized`;
        }

        if (!(validExtensions.includes(file.type))) {
            errorElement.error = `${errorElement.name} is the wrong type`;
        }

        if (file.size <= maxCurrentSize && validExtensions.includes(file.type)) {
            errorElement.error = '';
        }

        return file.size <= maxCurrentSize && validExtensions.includes(file.type);
    };

    const validatePostType = () => {
        if ((DATA[inputFeaturedPost.name] === NOT_CHECKED_VALUE) && (DATA[inputMostRecentPost.name] === NOT_CHECKED_VALUE)) {
            ERROR_MESSAGE[POST_TYPE].error = `${ERROR_MESSAGE[POST_TYPE].name} not selected`;
        } else {
            ERROR_MESSAGE[POST_TYPE].error = '';
        }
    }

    const printErrorMessage = inputName => {
        const errorFiledWrapper = document.querySelector(`.${INPUT_WRAPPER_SELECTOR}_${inputName}`);

        document.querySelector(`.${ERROR_FIELD_SELECTOR}_${inputName}`).innerText = ERROR_MESSAGE[inputName].error;
        ERROR_MESSAGE[inputName][ERROR] ? errorFiledWrapper.classList.add(ERROR) : errorFiledWrapper.classList.remove(ERROR)
    }

    const insertValueInputInDate = eventTarget => {
        DATA[eventTarget.name] = eventTarget.value;
    }

    const insertDefaultValue = eventTarget => {
        const targetName = eventTarget.name;

        document.querySelectorAll(`.view-post__${targetName}`).forEach(element => {
            element.textContent = eventTarget.placeholder;
        })
    }

    const getValueFromDataInput = eventTarget => {
        const targetName = eventTarget.name;

        document.querySelectorAll(`.view-post__${targetName}`).forEach(element => {
            element.textContent = DATA[targetName];
        })
    }

    const getDataValueFromDataInput = targetName => {
        const date = new Date(DATA[targetName]);

        document.querySelector(`.view-post__${targetName}`).textContent = date.toLocaleDateString('en-US', {
            day: 'numeric', month: 'numeric', year: 'numeric'
        }).replace(/ /g, '/');
    }

    const handleDrop = event => {
        const dataTrans = event.dataTransfer;
        return dataTrans.files[0];
    }

    const uploadFileInData = (targetName, file, renderFunction) => {
        let reader = new FileReader();

        reader.readAsDataURL(file);
        reader.onloadend = function () {
            DATA[targetName] = reader.result;
            renderFunction(targetName)
        }
        document.getElementById(`${DROP_AREA_SELECTOR}_${targetName}`).classList.add(UPLOAD);
    }

    const renderImage = targetName => {
        const image = DATA[targetName];

        document.querySelector(`.${VIEW_FIELD_SELECTOR}_${targetName}`).style.backgroundImage = `url(${image})`;
        document.querySelector(`.${VIEW_BACKGROUND_INPUT_SELECTOR}_${targetName}`).style.backgroundImage = `url(${image})`;
    }

    const redirectButton = targetName => {
        document.getElementById(`${targetName}_input`).click()
    }

    const removeImage = targetName => {
        DATA[targetName] = '';
        document.querySelector(`.${VIEW_FIELD_SELECTOR}_${targetName}`).style.backgroundImage = ``;
        document.querySelector(`.${VIEW_BACKGROUND_INPUT_SELECTOR}_${targetName}`).style.backgroundImage = ``;
        document.getElementById(`${DROP_AREA_SELECTOR}_${targetName}`).classList.remove(UPLOAD);
    }

    const processingFile = event => {
        const file = event.type === EVENT_TYPE_CHANGE ? event.target.files[0] : handleDrop(event);
        const target = event.target;
        const targetName = target.dataset.name;

        if (!file) return;

        if (isValidateFileInput(targetName, file)) {
            insertValueInputInDate(target);
            uploadFileInData(targetName, file, renderImage);
        }

        printErrorMessage(targetName);
    };

    const isValidForm = () => {
        for (let input in ERROR_MESSAGE) {
            if (ERROR_MESSAGE[input].error) return;////
        }

        for (let elementData in DATA) {
            if (!DATA[elementData]) return;//
        }

        uploadProcessing();
        return true
    };

    const uploadProcessing = async () => {
        let result = await fetch(uploadHandler, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(DATA)
        });

        console.log(result)

        if (result.ok) {
            console.log(result.json());
        } else {
            alert("Ошибка HTTP: " + result.status);
        }
    }

    const printPushAccept = () => {
        pushFieldAccept.classList.add('active');
        pushFieldError.classList.remove('active');
        console.log(JSON.stringify(DATA));
    };
    const printPushError = () => {
        pushFieldAccept.classList.remove('active');
        pushFieldError.classList.add('active');
    };

    const insertCheckboxStateInDate = eventTarget => {
        const targetName = eventTarget.name;
        eventTarget.checked
            ? (DATA[targetName] = CHECKED_VALUE) //
            : (DATA[targetName] = NOT_CHECKED_VALUE);
    }

    const preventDefaults = event => {
        event.preventDefault();
    };

    logoutButton.addEventListener('click', logOut);

    [dropAreaAuthorPhoto, dropAreaImageLarge, dropAreaImageSmall].map(element => {
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            element.addEventListener(eventName, preventDefaults);
        });
    });

    [inputTitle, inputDescription, inputAuthorName, inputTextArea, inputNote].map(element => {
        element.addEventListener('input', event => {
            const eventTarget = event.target

            if (isValidateTextInput(eventTarget)) {
                insertValueInputInDate(eventTarget);
                getValueFromDataInput(eventTarget);
            } else {
                insertDefaultValue(eventTarget);
            }

            printErrorMessage(eventTarget.dataset.name);
            fillBackgroundInput(eventTarget);
        })
    });

    inputPublishDate.addEventListener('change', event => {
        const eventTarget = event.target

        if (isValidateTextInput(eventTarget)) {
            insertValueInputInDate(eventTarget);
            getDataValueFromDataInput(eventTarget.dataset.name);
        }
        printErrorMessage(eventTarget.dataset.name);
        fillBackgroundInput(eventTarget);
    });

    [dropAreaAuthorPhoto, dropAreaImageLarge, dropAreaImageSmall].map(element => {
        element.addEventListener('drop', event => {
            processingFile(event);
        })
    });

    [backgroundFieldAuthorPhoto, backgroundFieldImageLarge, backgroundFieldImageSmall, uploadButtonAuthorPhoto, uploadButtonImageLarge, uploadButtonImageSmall].map(element => {
        element.addEventListener('click', event => {
            redirectButton(event.target.dataset.name);
        })
    });

    [removeButtonAuthorPhoto, removeButtonImageSmall, removeButtonImageLarge].map(element => {
        element.addEventListener('click', event => {
            removeImage(event.target.dataset.name);
        })
    });

    [inputAuthorPhoto, inputImageLarge, inputImageSmall].map(element => {
        element.addEventListener('change', event => {
            processingFile(event);
        })
    });

    [inputFeaturedPost, inputMostRecentPost].map(element => {
        element.addEventListener('click', event => {
            insertCheckboxStateInDate(event.target);
            validatePostType();
            printErrorMessage(POST_TYPE);
        })
    })

    submitButton.addEventListener('click', event => {
        event.preventDefault();
        isValidForm() ? printPushAccept() : printPushError();
    })
})