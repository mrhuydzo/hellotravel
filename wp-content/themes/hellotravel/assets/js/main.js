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


    //Preloader
    var preloader = $('.preloader');
    $(window).load(function(){
        $('.preloader').fadeOut('slow');
    });

    //Customer Carousel
    $('.customer_carousels').slick({
        dots: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                },
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
        prevArrow: '<span class="slick-prev slick-arrow travel_arrow_prev"><i class="fas fa-chevron-left"></i></span>',
        nextArrow: '<span class="slick-next slick-arrow travel_arrow_next"><i class="fas fa-chevron-right"></i></span>',
    });

    //Slide banner home
    $('.banner_slide_home').slick({
        dots: true,
        infinite: true,
        speed: 300,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<span class="slick-prev slick-arrow travel_arrow_prev"><i class="fas fa-chevron-left"></i></span>',
        nextArrow: '<span class="slick-next slick-arrow travel_arrow_next"><i class="fas fa-chevron-right"></i></span>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: false
                }
            },
        ]
    });

    //Tour Gallery img
    $('.post_gallery_slide').slick({
        dots: true,
        infinite: false,
        speed: 300,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    //Tour Toggle//
    $('.post_toggle_body').hide();
    $('.post_toggle_header').click(function () {
        console.log($(this).parent());
        var thisToggle = $(this).parent().find('.post_toggle_body');
        thisToggle.slideToggle('5000');
    });

    //Scroll to
    // Cache selectors
    var lastId,
        topMenu = $('.post_scroll'),
        topMenuHeight = topMenu.outerHeight() + 60 ,
        headerScroll = topMenu.offset();
    // All list items
    menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
        });


    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function(e){
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight;
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 300);
        e.preventDefault();
    });

    // Bind to scroll
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll >= headerScroll.top) {
            topMenu.addClass("fixed");
        } else {
            topMenu.removeClass("fixed");
        }

        // Get container scroll position
        var fromTop = $(this).scrollTop()+topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function(){
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length-1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href='#"+id+"']").parent().addClass("active");
        }
    });

    //Lazy
    $('.post_thumb_link img').Lazy();


});