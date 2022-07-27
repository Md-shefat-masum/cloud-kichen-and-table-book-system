$(function () {
    if (document.querySelector('.typed')) {

        let typed = new Typed('.typed', {
            strings: ['Delicious Foods Zone |',
                'Online Canteen |',
                'Hot and Spicy Foods |'
            ],
            typeSpeed: 40,
            backSpeed: 40,
            loop: true,

        });
    }

    if (document.querySelector('.offer_slick')) {
        $('.offer_slick').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: false,
        });
    }
    ////////////////////////////////////////////////////

    if (document.querySelector('.review_slick')) {
        $('.review_slick').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 1000,
            arrows: true,
            nextArrow: '<i class="fas fa-chevron-left bame"></i>',
            prevArrow: '<i class="fas fa-chevron-right dane"></i>',
            fadeOut: true,
        });
    }


    if (document.querySelector('.controls')) {
        var containerEl = document.querySelector('.controls');
        $(window).on('load',function(){
            var mixer = mixitup(containerEl);
        })
    }
});
