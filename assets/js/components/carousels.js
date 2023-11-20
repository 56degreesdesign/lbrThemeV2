const sliders = async function () {
    const swipers = document.querySelectorAll('.swiper-carousel');
    const bannerSwipers = document.querySelectorAll('.banner-carousel');
    const smallSwipers = document.querySelectorAll('.small-carousel');
    const blogSwiper = document.querySelector('.blog-carousel');
    const InstagramSwiper = document.querySelectorAll('.instagram-carousel');

    if (bannerSwipers || swipers || blogSwiper || InstagramSwiper) {
        let Swiper = await (await import("swiper/bundle")).default;

        if (swipers) {
            swipers.forEach(el => {
                let swiperCarousel = new Swiper(el, {
                    loop: false,
                    speed: 600,
                    slidesPerView: 1.5,
                    spaceBetween: 16,
                    breakpoints: {
                        768: {
                            slidesPerView: 2.5,
                            spaceBetween: 32
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 21,
                        },
                        1920: {
                            slidesPerView: 3,
                            spaceBetween: 21,
                        },
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
        
        if (InstagramSwiper) {
            InstagramSwiper.forEach(el => {
                let swiperCarousel = new Swiper(el, {
                    loop: false,
                    speed: 600,
                    slidesPerView: 1.5,
                    spaceBetween: 0,
                    // autoplay: {
                    //     delay: 5000,
                    //     disableOnInteraction: false,
                    // },
                    breakpoints: {
                        768: {
                            slidesPerView: 2.5,
                            // spaceBetween: 32
                        },
                        1024: {
                            slidesPerView: 3,
                            // spaceBetween: 21,
                        },
                        1920: {
                            slidesPerView: 3,
                            // spaceBetween: 21,
                        },
                    },
                    navigation: {
                        nextEl: el.parentElement.querySelector('.swiper-next-el'),
                        prevEl: el.parentElement.querySelector('.swiper-prev-el'),
                    },
                    pagination: {
                        el: el.parentElement.querySelector('.swiper-pagination-el'),
                        type: 'fraction',
                    },
                });

                // const prevBtn = el.parentElement.querySelector('.swiper-prev-el'),
                //     nextBtn = el.parentElement.querySelector('.swiper-next-el');
                //
                // if (prevBtn != null) {
                //     prevBtn.addEventListener('click', () => {
                //         swiperCarousel.slidePrev()
                //     }, false);
                // }
                //
                // if (nextBtn != null) {
                //     nextBtn.addEventListener('click', () => {
                //         swiperCarousel.slideNext()
                //     }, false);
                // }
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
                    loop: false,
                    speed: 600,
                    slidesPerView: 1,
                    spaceBetween: 21,
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
        
        if (blogSwiper) {
            let swiperCarousel = new Swiper(blogSwiper, {
                // loop: true,
                speed: 600,
                slidesPerView: 1,
                spaceBetween: 21,
                // autoplay: {
                //     delay: 5000,
                //     disableOnInteraction: false,
                // },
                pagination: {
                    el: blogSwiper.parentElement.parentElement.querySelector('.swiper-pagination-el'),
                    type: 'fraction',
                },
            });

            const prevBtn = blogSwiper.parentElement.parentElement.querySelector('.swiper-prev-el'),
                nextBtn = blogSwiper.parentElement.parentElement.querySelector('.swiper-next-el');

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
        }
    }
};
export const init = sliders;