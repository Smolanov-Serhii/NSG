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

    if ($('.popular').length){
        $('.popular__tabs-list .popular__tab').click(function() {
            $('.popular__tabs-list .popular__tab').removeClass('active-tab');
            $(this).addClass('active-tab');
            let CurrentId = $(this).data('id');
            console.log(CurrentId);
            let NeedElem = $("#"+CurrentId+"");
            console.log(NeedElem);
            $('.popular .popular__slider').removeClass('active-tab');
            NeedElem.addClass('active-tab');
            $(".popular .popular__slider-wrapper").slick('slickSetOption', 'adaptiveHeight', true, true);

        });
        $(document).ready(function() {
            $('.popular .popular__slider-wrapper').slick({
                dots: true,
                infinite: true,
                arrows: false,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 5,
            });
        });
    }

});






