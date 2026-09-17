document.addEventListener('DOMContentLoaded', function () {
    // Swiper Testimoni
    const testimonialSwiperEl = document.querySelector('.testimonial-swiper');
    if (testimonialSwiperEl) {
        new Swiper('.testimonial-swiper', {
            effect: 'slide',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            slideToClickedSlide: true,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1.2,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    }
});
