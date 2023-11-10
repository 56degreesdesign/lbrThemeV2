window.$ = window.jQuery = require('jquery');

// LazyLoad - https://github.com/aFarkas/lazysizes
import 'lazysizes'
// import a plugin
import 'lazysizes/plugins/parent-fit/ls.parent-fit'

// Theme Functions
const fSmoothScroll = require('./utils/smooth-scroll')
const fGsapController = require('./components/gsap-controller')
const fCarousels = require('./components/carousels');
const fHeader = require('./components/header');
const fContact = require('./components/lazy-load-contact-form')
const fContactLazy = require('./components/contact-lazy')
const fSwiperLazy = require('./components/swiper-lazy')



import 'select2';
// Vue Support Function
import {
    createApp,
    defineAsyncComponent
} from 'vue'

const InitVueComponents = () => {
    // Async components
    let MapDirections, Resort, NewsAndEvents;

    if (document.querySelector(".map-directions")) {
        MapDirections = defineAsyncComponent({
            loader: () => import("./vue/map-directions.vue"),
            delay: 500,
        });
    }
    if (document.querySelector(".news-and-events")) {
        NewsAndEvents = defineAsyncComponent({
            loader: () => import("./vue/news-and-events.vue"),
            delay: 500,
        });
    }

    if (document.querySelector(".resort")) {
        Resort = defineAsyncComponent({
            loader: () => import("./vue/resort.vue"),
            delay: 500,
        });
    }
    
    // Init Vue Instance
    const $VueApp = createApp({});

    if (MapDirections) {
        $VueApp.component("map-directions", MapDirections);
    }
    if (NewsAndEvents) {
        $VueApp.component("news-and-events", NewsAndEvents);
    }
    if (Resort) {
        $VueApp.component("resort", Resort);
    }
    

    // $VueApp.use(VueMasonryPlugin);
    $VueApp.mount('#vue-space');
}

// Initialise our components on jQuery.ready…
fContactLazy.init()
jQuery(function ($) {
    fSmoothScroll()
    InitVueComponents()
    fGsapController.init()
    fHeader()
    fContact()
    fSwiperLazy();
    
    $(document).ready(function () {
        $('.form select').select2({
            minimumResultsForSearch: Infinity,
            width: '100%'
        });

        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
    
    const menuItems = document.querySelectorAll('.menu-item-has-children');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    const toggleSubmenu = (event) => {
        dropdownMenu.classList.toggle('active', event.type === 'mouseenter');
    };
    dropdownMenu.addEventListener("mouseenter", toggleSubmenu, false);
    dropdownMenu.addEventListener("mouseleave", toggleSubmenu, false);

    menuItems.forEach((menuItem, index) => {
        menuItem.addEventListener('mouseenter', toggleSubmenu, false);
        menuItem.addEventListener('mouseleave', toggleSubmenu, false);
    });
})