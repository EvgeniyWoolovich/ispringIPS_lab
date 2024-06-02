document.addEventListener('DOMContentLoaded', () => {
    const burgerButton = document.querySelector('.navigation__burger');
    const menuFiled = document.querySelector('.navigation__menu_header');
    const activeSelector = 'active';

    burgerButton.addEventListener('click', event => {
        burgerButton.classList.toggle(activeSelector)
        menuFiled.classList.toggle(activeSelector)
    })
})