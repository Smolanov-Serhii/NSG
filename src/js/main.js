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

    if ($('.slot-category-page .cat-play').length && $('.slot-category-page .sb-play').length){
        DublicateHeight();
        function DublicateHeight(){
            let DonorHeight = $('.cat-play').height();
            $('.sb-play').outerHeight(DonorHeight);
        }

        $( window ).resize(function() {
            DublicateHeight();
        });

    }

    if ($('.slot-article .single-slot-article__item').length && $('.slot-article .single-slot-article__desc').length){
        DublicateHeight();
        function DublicateHeight(){
            let DonorHeight = $('.slot-article .single-slot-article__item').height();
            $('.slot-article .single-slot-article__desc').outerHeight(DonorHeight);
        }

        $( window ).resize(function() {
            DublicateHeight();
        });

    }

    if ($('.slot-category-page .category-first').length && $('.slot-category-page .sb-best').length){
        DublicateHeight();
        function DublicateHeight(){
            let DonorHeight = $('.category-first').height();
            $('.sb-best').outerHeight(DonorHeight);
        }

        $( window ).resize(function() {
            DublicateHeight();
        });

    }

    if ($('.news').length){
        $('.news .news__wrapper').slick({
            dots: true,
            infinite: false,
            arrows: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
        });
    }

    if ($('.single-slot-article__items').length){
        $('.single-slot-article__items').slick({
            dots: true,
            infinite: false,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            appendDots: $('.single-slot-article .slick-slider-dots'),
        });
    }

    if ($('.popular').length){
        $('.popular__tabs-list .popular__tab').click(function() {
            $('.popular__tabs-list .popular__tab').removeClass('active-tab');
            $('.popular .popular__slider').removeClass('active-tab');
            $(this).addClass('active-tab');
            let CurrentId = $(this).data('id');
            let NeedElem = $("#"+CurrentId+"");
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






