const getUserSession = () => {
    return sessionStorage.getItem('authoring_user_email');
}

const getUserId = () => {
    return sessionStorage.getItem('author_id');
}

const setUserSession = (email, userId) => {
    sessionStorage.setItem('authoring_user_email', email);
    sessionStorage.setItem('author_id', userId);
}
const logOut = () => {
    sessionStorage.clear();
    window.location.replace("/home")
}

const fillBackgroundInput = eventTarget => {
    eventTarget.value ? eventTarget.classList.add('fill') : eventTarget.classList.remove('fill')
}

export {getUserSession, getUserId, setUserSession, fillBackgroundInput, logOut};
