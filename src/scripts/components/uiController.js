/**
* uiController.js - Controller for UI for the blog
*
* Author - Joey Leger (2018)
* Description - Controls the UI client-side functionality
*
*/
const uiController = (function() {

    // Set up some variables
    const menuButton = document.querySelector('.nav__menu');
    const navMenu = document.querySelector('.header__links');
    const hamburger = document.querySelector('.hamburger');
    
    // Toggles the menu
    const toggleMenu = () => {
        if (navMenu.classList.contains('header__links--show')) {
            navMenu.classList.remove('header__links--show');
            hamburger.classList.remove('fa-times');
            hamburger.classList.add('fa-bars');
        } else {
            navMenu.classList.add('header__links--show');
            hamburger.classList.remove('fa-bars');
            hamburger.classList.add('fa-times');
        }
    };

    const setupEventListeners = () => {
        menuButton.addEventListener('click', toggleMenu);
    };

    return {
        init: function() {
            setupEventListeners();
        }
    };

})();

export { uiController };
