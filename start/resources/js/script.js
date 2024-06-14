'use strict';

const headerNav = document.querySelector('.Header_Nav');
const button = document.querySelector('.Button');
const body = document.body

const toggleMenu = () => {
    headerNav.classList.toggle('MenuIsOpen')
    button.classList.toggle('ButtonIsOpen')
    body.classList.toggle("IsScrollAllowed")
}

button.addEventListener('click', () => {
    toggleMenu()
})

