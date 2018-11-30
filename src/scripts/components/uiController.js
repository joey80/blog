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
    const links = document.querySelector('.header__links__container');
    
    // Toggles the menu
    const toggleMenu = () => {
        if (navMenu.classList.contains('header__links--show')) {

            // Move the menu back up
            navMenu.classList.remove('header__links--show');
            links.classList.remove('header__links__container--show');

            // Change the menu button back to hamburger
            hamburger.classList.remove('fa-times');
            hamburger.classList.add('fa-bars');

        } else {

            // Move the menu down and delay the link reveal
            navMenu.classList.add('header__links--show');
            setTimeout( function() {
                links.classList.add('header__links__container--show');
            }, 150);

            // Change the menu to a close icon
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
