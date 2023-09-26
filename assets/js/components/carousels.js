const sliders = async function () {
    const swipers = document.querySelectorAll('.swiper-carousel');
    const bannerSwipers = document.querySelectorAll('.banner-carousel');
    const smallSwipers = document.querySelectorAll('.small-carousel');



    if (bannerSwipers || swipers) {
        let Swiper = await (await import("swiper/bundle")).default;

        if (swipers) {
            swipers.forEach(el => {
                let swiperCarousel = new Swiper(el, {
                    loop: true,
                    speed: 600,
                    slidesPerView: 3,
                    spaceBetween: 21,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: el.parentElement.querySelector('.swiper-pagination-el'),
                        type: 'fraction',
                    },
                });

                const prevBtn = el.parentElement.querySelector('.swiper-prev-el'),
                    nextBtn = el.parentElement.querySelector('.swiper-next-el');

                if (prevBtn != null) {
                    prevBtn.addEventListener('click', () => {
                        swiperCarousel.slidePrev()
                    }, false);
                }

                if (nextBtn != null) {
                    nextBtn.addEventListener('click', () => {
                        swiperCarousel.slideNext()
                    }, false);
                }
            });
        }

        if (bannerSwipers) {
            bannerSwipers.forEach(el => {
                let swiperCarousel = new Swiper(el, {
                    loop: true,
                    speed: 600,
                    slidesPerView: 1,
                    spaceBetween: 21,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: el.parentElement.querySelector('.swiper-pagination-el'),
                        type: 'fraction',
                    },
                });

                const prevBtn = el.parentElement.querySelector('.swiper-prev-el'),
                    nextBtn = el.parentElement.querySelector('.swiper-next-el');

                if (prevBtn != null) {
                    prevBtn.addEventListener('click', () => {
                        swiperCarousel.slidePrev()
                    }, false);
                }

                if (nextBtn != null) {
                    nextBtn.addEventListener('click', () => {
                        swiperCarousel.slideNext()
                    }, false);
                }
            });
        }

        if (smallSwipers) {
            smallSwipers.forEach(el => {
                let swiperCarousel = new Swiper(el, {
                    loop: true,
                    speed: 600,
                    slidesPerView: 1,
                    spaceBetween: 21,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: el.parentElement.querySelector('.swiper-pagination-el'),
                        type: 'fraction',
                    },
                });

                const prevBtn = el.parentElement.querySelector('.swiper-prev-el'),
                    nextBtn = el.parentElement.querySelector('.swiper-next-el');

                if (prevBtn != null) {
                    prevBtn.addEventListener('click', () => {
                        swiperCarousel.slidePrev()
                    }, false);
                }

                if (nextBtn != null) {
                    nextBtn.addEventListener('click', () => {
                        swiperCarousel.slideNext()
                    }, false);
                }
            });
        }
    }
};
export const init = sliders;