const gsapController = async function () {
    const sectionAnimate = document.querySelector(".cards-animate") !== null;

    if (sectionAnimate) {
        let gsap = await (await import('gsap')).default;
        let ScrollTrigger = await (await import('gsap/ScrollTrigger')).default;

        gsap.registerPlugin(ScrollTrigger)
        if (sectionAnimate) {
            let sectionAnimate = await (await import('./gsap/cards-animate')).default;
            sectionAnimate(gsap, ScrollTrigger);
        }
        
    }
};

export const init = gsapController;