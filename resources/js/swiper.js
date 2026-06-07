document.addEventListener('DOMContentLoaded', () => {

    new Swiper(".homeSwiper", {

        loop: true,

        effect: "fade",

        fadeEffect: {
            crossFade: true
        },

        autoplay: {
            delay: 7000,
            disableOnInteraction: false
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },

    });

});