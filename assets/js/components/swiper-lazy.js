module.exports = function () {
const fCarousels = require("./carousels");
if ( document.querySelector(".swiper") ) {
    let isLoadSwiper = false;
    document.querySelectorAll(".swiper").forEach(item => {
        const swiperObserve = new IntersectionObserver(entries => {
            for (const entry of entries) {
                if ( entry.isIntersecting ) {
                    swiperObserve.unobserve(item);

                    if ( !isLoadSwiper ) {
                        fCarousels.init();
                    }

                    isLoadSwiper = true;
                }
            }
        })
        swiperObserve.observe(item);
    })
} 
}