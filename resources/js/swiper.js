document.addEventListener('DOMContentLoaded', () => {
    // نبحث عن العنصر أولاً
    const homeSwiperElement = document.querySelector(".homeSwiper");

    // إذا وجدنا العنصر، نقوم بتشغيل Swiper، وإذا لم نجده (كما في صفحة اللوجن) لا نفعل شيئاً
    if (homeSwiperElement) {
        new Swiper(homeSwiperElement, {
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
    }
});