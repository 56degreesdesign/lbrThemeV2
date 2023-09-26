module.exports = function () {
    const lazyLoadContact = [...document.querySelectorAll('.lazy-load-contact')];


    lazyLoadContact.forEach(element => {
        const button = element.querySelector('.lazy-load-contact-button');
        const iframe = element.querySelector('.lazy-load-contact-form');

        let isOpen = false;
        let firstOpen = false;
        function open() {
            if (!firstOpen) {
                firstOpen = true;
                if (iframe) {
                    element.querySelector(".lds-ring").classList.add("play");

                    iframe.addEventListener("load", () => {
                        element.querySelector(".lds-ring").remove();
                    })
                    iframe.setAttribute('src', iframe.dataset.src)
                }
            }
        }
        function close() {

        }
        if (button) {
            button.addEventListener('click', () => {
                if (isOpen) {
                    close()
                }
                else {
                    open()
                }
            })
        }
    })

}