
module.exports = function (gsap, ScrollTrigger) {
    const section = document.querySelector(".cards-animate");
    const elements = document.querySelectorAll(".card-animate__item");
    
    if (elements && window.innerWidth > 768) {
        

        const time = window.innerWidth >= 768 ? 150 : 100;

        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: "top top",
                end: () => `+=${elements.length * time}%`,
                pin: true,
                scrub: 0.01,
            }
        })

        tl.fromTo(
            '.card-animate__item:not(:first-child)',
            {
                yPercent: 121,
                // scale: 0.75
            },
            {
                yPercent: 0,
                // scale: 1,
                duration: 5,
                // stagger: elements.length - 1,                    
                stagger: {
                    each: elements.length - 0.1,
                }
            },
        )
            .to('.card-animate__item', { duration: 1 })
        
    }
}