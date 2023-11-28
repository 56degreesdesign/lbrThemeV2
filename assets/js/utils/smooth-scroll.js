module.exports = function () {
    const links = document.querySelectorAll('a[href*="#"]:not([href="#"]):not([href="#0"])');

    for (const link of links) {
        link.addEventListener("click", clickHandlerRef);
    }

    function clickHandlerRef(e) {
        const href = this.getAttribute("href");
        if (window.location.href.indexOf(href.split("#")[0]) > -1) {
            e.preventDefault();
            const offsetTop = document.querySelector('#' + href.split("#")[1]).offsetTop;
            scroll({
                top: offsetTop - 50,
                behavior: "smooth"
            });

        }
        else if (document.querySelector(href).offsetTop) {
            e.preventDefault();
            const offsetTop = document.querySelector(href).offsetTop;
            scroll({
                top: offsetTop - 50,
                behavior: "smooth"
            });

        }
    }

    if (window.location.href.indexOf("#") > -1) {
        const path = window.location.hash;
        const offsetTop = document.querySelector(path).offsetTop;

        scroll({
            top: offsetTop - 50,
            behavior: "smooth"
        });
    }


};