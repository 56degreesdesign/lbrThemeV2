module.exports = function () {
    const fWeather = require('../components/weather');
    const fTime = require('../components/time');

    const toggleMenu = document.querySelectorAll('.toggle-menu')
    const menuWrapper = document.querySelector('.menu-wrapper')
    let isFirstMenuOpen = true;

    if (toggleMenu && menuWrapper) {
        function toggleActiveMenu() {
            menuWrapper.classList.toggle('active');
            document.body.classList.toggle('overflow-hidden');

            if (isFirstMenuOpen) {
                isFirstMenuOpen = false;
                fWeather();
                fTime();
            }
        }

        toggleMenu.forEach(item => {
            item.addEventListener('click', toggleActiveMenu);
        });
    }
    
    if (document.readyState !== 'loading') {
        addTransitionToMenu();
    } else {
        document.addEventListener('DOMContentLoaded', function () {
            addTransitionToMenu();
        });
    }

    function addTransitionToMenu() {
        const menuWrapper = document.querySelector('.menu-wrapper');
        if (menuWrapper) {
            menuWrapper.classList.add('duration-500');
        }
    }
}
