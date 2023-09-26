const contactLazy = async function () {
    const forms = document.querySelectorAll(".contact-forms-wrapper");
    if (forms) {
        forms.forEach(form => {
            const iframe = form.querySelector('.lazy-load-contact-form');
            form.querySelector(".lds-ring").classList.add("play");

            const observe = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        observe.unobserve(form);

                        setTimeout(() => {

                            iframe.setAttribute('src', iframe.dataset.src)

                        }, 100)

                        iframe.addEventListener("load", () => {
                            form.querySelector(".lds-ring").remove();
                        })

                        form.addEventListener('loadeddata', (e) => {
                            form.classList.add('opacity-100');

                        });
                    }
                })
            })
            observe.observe(form);
        });
    }
}

export const init = contactLazy;