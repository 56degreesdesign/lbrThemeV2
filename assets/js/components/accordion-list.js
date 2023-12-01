module.exports = function () {
        class Accordion {
            constructor(accordionElement) {
                this.accordion = accordionElement;
                this.content = this.accordion.querySelector(".accordion-list-content");
                this.button = this.accordion.querySelector(".accordion-list-button");

                this.isOpen = false;
                this.pagination = this.accordion.dataset.pagination ? Number(this.accordion.dataset.pagination) : -1;

                if (this.content && this.pagination && this.content.children.length > this.pagination) {
                    this.init();
                }
            }

            setContentHeight(height) {
                if (this.content) {
                    this.content.style.maxHeight = height + "px";
                }
            }

            open() {
                this.isOpen = true;
                this.accordion.classList.add("open");
                this.setContentHeight(this.content.scrollHeight);
            }

            close() {
                this.isOpen = false;
                this.accordion.classList.remove("open");
                this.setContentHeight(0); // Close the accordion by setting the height to 0
            }

            getContentHeight() {
                let height = 0;

                for (let i = 0; i < this.pagination; i++) {
                    if (this.content.children[i]) {
                        height += this.content.children[i].clientHeight;
                    }
                }

                return height;
            }

            init() {
                this.accordion.classList.add("init");
                this.setContentHeight(this.getContentHeight());

                if (this.accordion.classList.contains("open")) {
                    this.open();
                }

                window.addEventListener("resize", () => {
                    if (this.isOpen) {
                        this.setContentHeight(this.content.scrollHeight);
                    } else {
                        this.setContentHeight(this.getContentHeight());
                    }
                });

                if (this.button) {
                    this.button.addEventListener("click", () => {
                        if (this.accordion.classList.contains("open")) {
                            this.close();
                        } else {
                            this.closeAll(); // Close all accordions before opening the clicked one
                            this.open();
                        }
                    });
                }

                const observer = new MutationObserver(mutationsList => {
                    for (let mutation of mutationsList) {
                        if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                            const newClasses = this.accordion.className.split(' ');

                            if (!this.isOpen && newClasses.includes('open')) {
                                this.open();
                            } else if (this.isOpen && !newClasses.includes('open')) {
                                this.close();
                            }
                        }
                    }
                });

                observer.observe(this.accordion, { attributes: true });
            }

            closeAll() {
                // Close all accordions
                const accordions = document.querySelectorAll(".accordion-list");
                accordions.forEach(accordion => {
                    const instance = accordion.AccordionInstance;
                    if (instance && instance.isOpen) {
                        instance.close();
                    }
                });
            }
        }

        const accordionLists = [...document.querySelectorAll(".accordion-list")];

        if (accordionLists) {
            accordionLists.forEach(accordionElement => {
                const accordion = new Accordion(accordionElement);
                accordionElement.AccordionInstance = accordion; // Store the accordion instance in the element

                if (accordion.button) {
                    accordion.button.addEventListener("click", () => {
                        if (window.innerWidth >= 1024 && accordionElement.closest(".accordion-list-group")) {
                            const group = accordionElement.closest(".accordion-list-group");
                            console.log(group)

                            group.querySelectorAll(".accordion-list").forEach(el => {
                                if (accordion.accordion !== el) {
                                    if (!accordion.isOpen) {
                                        el.classList.remove("open");
                                    } else {
                                        el.classList.add("open");

                                    }
                                }
                            })
                        }
                    })
                }
            })
        }
    


}