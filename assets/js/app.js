window.$ = window.jQuery = require('jquery');

// LazyLoad - https://github.com/aFarkas/lazysizes
import 'lazysizes'
// import a plugin
import 'lazysizes/plugins/parent-fit/ls.parent-fit'

// Theme Functions
const fSmoothScroll = require('./utils/smooth-scroll')
// const fGsapController = require('./components/gsap-controller')
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
    let MapDirections;

    if (document.querySelector(".map-directions")) {
        MapDirections = defineAsyncComponent({
            loader: () => import("./vue/map-directions.vue"),
            delay: 500,
        });
    }
    
    // Init Vue Instance
    const $VueApp = createApp({});

    if (MapDirections) {
        $VueApp.component("map-directions", MapDirections);
    }
    

    // $VueApp.use(VueMasonryPlugin);
    $VueApp.mount('#vue-space');
}

// Initialise our components on jQuery.ready…
fContactLazy.init()
jQuery(function ($) {
    fSmoothScroll()
    InitVueComponents()
    // fGsapController.init()
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
    
})