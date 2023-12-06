const mobileMenu = async function () {
    if ( window.innerWidth < 1023 ) {
        const   mobileMenu = 'mobile-menu',
                btn = document.querySelector(`.${mobileMenu}__btn`),
                btnBack = document.querySelector(`.${mobileMenu}__btn-back`),
                header = document.querySelector(`.${mobileMenu}__header`),
                wrapper = document.querySelector(`.${mobileMenu}__wrapper`),
                menuWrapper = document.querySelector(`.${mobileMenu}__wrapper__menu`),
                submenuWrapper = document.querySelector(`.${mobileMenu}__wrapper__submenu__wrapper`),
                menu = document.querySelectorAll(`.${mobileMenu}__menu > li > a`);
        
        btn.addEventListener('click', (e) => {
            btn.classList.toggle('is-active');
            header.classList.toggle('mobile-menu__header--active');
            wrapper.classList.toggle('mobile-menu__wrapper--active');
            document.body.classList.toggle('overflow-hidden');
        });

        btnBack.addEventListener('click', (e) => {
            menuWrapper.classList.remove('opacity-0');
            wrapper.classList.remove('active-submenu');
            header.classList.remove('active-submenu');
        });
        
        menu.forEach(( link ) => {
            link.addEventListener('click', (e) => {
                
                if ( link.parentElement.classList.contains('menu-item-has-children') ) {
                    e.preventDefault();
                    const submenu = link.nextSibling.nextSibling.outerHTML;
                    console.log(submenu)

                    header.classList.add('active-submenu');
                    wrapper.classList.add('active-submenu');
                    menuWrapper.classList.add('opacity-0');
                    submenuWrapper.innerHTML = submenu;
                }
            })
        })
    }
};
export const init = mobileMenu();