document.addEventListener("DOMContentLoaded", (event) => {
    let video = document.querySelector("section.video-zoom video");
    gsap.registerPlugin(ScrollTrigger);
    let mm = gsap.matchMedia();

    mm.add("(min-width: 768px)", () => {
        gsap.fromTo(
            "section.banner .img-ai img", {
                y: -50,
            }, {
                y: 20,
                duration: 2,
                ease: "power2.out",
            }
        );
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: "section.banner .img-ai",
                pin: true,
                start: "top-=100px top",
                end: "top+=80px top",
                scrub: 1,
                ease: "power1.out",
            },
        });

        tl.to("section.banner .img-ai img", {
            y: 0,
            duration: 2,
            ease: "power2.out",
        });

        let tl2 = gsap.timeline({
            scrollTrigger: {
                trigger: "section.video-zoom",
                pin: true,
                start: "top-=100px top",
                end: "bottom+=200px top",
                scrub: 1,
                ease: "power1.out",

                onEnter: () => {
                    const video = document.querySelector("section.video-zoom video");
                    if (video && video.paused) {
                        video.play();
                    }
                },
            },
        });
        tl2.to("section.video-zoom video", {
            scale: 1.3,
            duration: 2,
            ease: "power1.out",
        });
    });
    mm.add("(max-width: 767px)", () => {
        gsap.to("section.video-zoom video", {
            scale: 0.7,
            duration: 2,
            ease: "power1.out",
        });
        let tl2 = gsap.timeline({
            scrollTrigger: {
                trigger: "section.video-zoom",
                pin: true,
                start: "bottom bottom",
                end: "bottom-=100px bottom",
                scrub: 1,
                ease: "power1.out",
                onEnter: () => {
                    const video = document.querySelector("section.video-zoom video");
                    if (video && video.paused) {
                        video.play();
                    }
                },
            },
        });
        tl2.to("section.video-zoom video", {
            scale: 1,
            duration: 2,
            ease: "power1.out",
        });
    });
});
if (document.querySelector(".partners.splide")) {
    new Splide(".partners.splide ", {
        focus: "center",
        arrows: false,
        pagination: false,
        perPage: 5,
        autoScroll: {
            speed: 1,
        },
        type: "loop",
        breakpoints: {
            640: {
                perPage: 2,
            },
        },
    }).mount(window.splide.Extensions);
}
if (document.querySelector(".box-tab")) {
    var Tabshead = document.querySelectorAll(".box-tab .tab-item .tab-head");
    var TabsContent = document.querySelectorAll(
        ".box-tab .tab-item .tab-content"
    );
    Tabshead.forEach(function(e) {
        e.addEventListener("click", function(el) {
            TabsContent.forEach(function(ell) {
                if (ell.getAttribute("data-tab") == e.getAttribute("data-tab")) {
                    if (ell.classList.contains("active")) {
                        ell.classList.remove("active");
                        e.classList.remove("active");
                    } else {
                        ell.classList.add("active");
                        e.classList.add("active");
                    }
                }
            });
        });
    });
}
if (document.querySelector(".slide-customer")) {
    const swiper = new Swiper(".slide-customer .swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        effect: "fade",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
}

window.addEventListener("scroll", function() {
    if (window.scrollY > 100) {
        document.querySelector("header").classList.add("scrolled");
    } else {
        document.querySelector("header").classList.remove("scrolled");
    }
});

if (window.innerWidth >= 1024) {
    var contenBanner = document.querySelector("section.banner .content-banner");
    var wTitle = document.querySelector("section.banner .title .text-left");
    if (contenBanner && wTitle) {
        document.fonts.ready.then(() => {
            contenBanner.style.marginLeft = wTitle.offsetWidth + 22 + "px";
        });
        let debounceResize;
        window.addEventListener("resize", function(e) {
            clearTimeout(debounceResize);
            debounceResize = setTimeout(function() {
                if (e.target.innerWidth >= 1024) {
                    contenBanner.style.marginLeft = wTitle.offsetWidth + 22 + "px";
                } else {
                    contenBanner.style.marginLeft = "0px";
                }
            }, 100);
        });
    }
}