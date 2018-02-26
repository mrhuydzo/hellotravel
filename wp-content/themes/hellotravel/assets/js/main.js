/*Nav icon mobile*/

jQuery(document).ready(function($){
    //Toggle Navigation
    /*Nav icon mobile*/
    $('#navtop_icon').click(function(){
        $(this).toggleClass('open');
        $('.navtop_collapse').toggleClass('open');
        $('.overlay').toggleClass('open');
        $('html , body').toggleClass('open_menu');
    });

    /* When user clicks outside */
    $(".overlay").click(function() {
        $(this).toggleClass('open');
        $("#navtop_icon").toggleClass("open");
        $(".navtop_collapse").toggleClass("open");
        $('html , body').toggleClass('open_menu');
    });

    //WOW Library
    new WOW().init();

    //Smooth Scroll


    //Preloader
    var preloader = $('.preloader');
    $(window).load(function(){
        $('.preloader').fadeOut('slow');
    });

    //Customer Carousel
    $('.customer_carousels').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    //Tour Gallery img
    //Tour Gallery img
    $('.post_gallery_slide').slick({
        dots: true,
        infinite: false,
        speed: 300,
        arrows: false,
    });

    //Tour Toggle//
    $('.post_toggle_body').hide();
    $('.post_toggle_header').click(function () {
        console.log($(this).parent());
        var thisToggle = $(this).parent().find('.post_toggle_body');
        thisToggle.toggle('5000');
    });

    //Scroll to
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 500) {
            $(".post_scroll").addClass("darkHeader");
        } else {
            $(".post_scroll").removeClass("darkHeader");
        }
    });

    $('.post_scroll a').on('click', function(event) {
        $('.post_scroll a').removeClass('active');
        $(this).addClass('active');
        var target = $(this).attr('href');
        var new_position = $(target).offset();
        $('html, body').stop().animate({
                scrollTop: new_position.top
            },3000
        );
    });
});
