$(function(){
   var swiperPartner = new Swiper('.swiper.swiperPartner',{
        autoplay: {
            delay: 2000,
        },
        speed: 1000,
        slidesPerView: 5,
        spaceBetween: 30,
        loop: true,
        hasNavigation: true,
        grabCursor: true,
        breakpoints: {
            1024: {
                slidesPerView: 5
            },
            768: {
                slidesPerView: 3
            },
            319: {
                slidesPerView: 2
            }
        },
        pagination: {
        enabled: true,
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
        },
   });
});

$(function(){
    var swiperTestimonial = new Swiper('.swiper.swiperTestimonial',{
        autoplay: {
            delay: 3000,
        },
        speed: 2000,
        slidesPerView: 2,
        spaceBetween: 50,
        loop: true,
        hasNavigation: true,
        grabCursor: true,
        breakpoints: {
            768:{
                slidesPerView: 2,
            },
            319: {
                slidesPerView: 1,
            },
        },
    });
});