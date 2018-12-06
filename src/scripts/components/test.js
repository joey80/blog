/**
* test.js - Test javascript file
*
* Author - Joey Leger (2018)
* Description - This is just for testing purposes
*
*/
const test = (function() {

    // Set up some variables

    const helloTest = () => {
        console.log('hello from test.js');
    };

    const setupEventListeners = () => {

    };

    return {
        init: function() {
            helloTest();
            setupEventListeners();
        }
    };

})();

export { test };
