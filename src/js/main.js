$(document ).ready(function() {

    if ($('.header__slots').length){

        var slotslider = new Swiper('.header__slots.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 0,
            navigation: {
                nextEl: '.header__slots-next',
                prevEl: '.header__slots-prev',
            },
        });
    }
});






