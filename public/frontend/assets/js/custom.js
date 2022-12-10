/*-------------------------------------
Template Name: kiosk Bike
Author: ThemeClan
Description: eCommerce HTML Template
Version: 1.0.0
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready
-------------------------------------*/

/*-------------------------------------
  Table of Content
---------------------------------------
    # Preloader
    # Tilt.js
    # Scroll to top
    # Smooth Scroll
    # Fixed Menu
    # Mobile menu
    # Header Search
    # Select Dropdown
    # Mini Cart
    # Custom Modal
    # Easyzoom
    # Wow Animation
    # Product Quantity
    # Banner Slider
    # Product Slider
    # Image Slider
    # Partner Slider
    # Testimonial Slider
    # Product gallery
    # Counter
    # Lightcase
-------------------------------------*/

(function($) {
    'use strict'

    /*-------------------------
      # Preloader
    -------------------------*/
    $(window).on("load", function () {
        $(".ic-preloader").delay().fadeOut();
    });


    /*-------------------------
      # Tilt.js
    -------------------------*/
    $('.ic-tilt').tilt({
        maxTilt:        10,
        perspective:    2000,
        speed:          300,
        transition:     true,
    })


    /*-------------------------
      # Scroll to top
    -------------------------*/
    $(document).ready(function () {
        "use strict";

        var scrollTopPath = document.querySelector('.ic-scroll-top path');
        var pathLength = scrollTopPath.getTotalLength();

        scrollTopPath.style.transition = scrollTopPath.style.WebkitTransition = 'none';
        scrollTopPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        scrollTopPath.style.strokeDashoffset = pathLength;
        scrollTopPath.getBoundingClientRect();
        scrollTopPath.style.transition = scrollTopPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
        var updatePath = function () {
            var scroll = $(window).scrollTop();
            var height = $(document).height() - $(window).height();
            scrollTopPath.style.strokeDashoffset = pathLength - (scroll * pathLength / height);
        }
        updatePath();
        $(window).scroll(updatePath);
        var offset = 150;
        var duration = 550;
        $(window).on('scroll', function () {
            var windowSroll = $(this).scrollTop() + $(this).height();
            var windowFullHeight = $(document).height();

            if ($(this).scrollTop() > offset) {
                $('.ic-scroll-top').addClass('active');
            } else {
                $('.ic-scroll-top').removeClass('active');
            }

            if(windowSroll === windowFullHeight){
                $('.ic-scroll-top').addClass('full-height');
            } else {
                $('.ic-scroll-top').removeClass('full-height');
            }
        });
        $('.ic-scroll-top').on('click', function (event) {
            event.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, duration);
            return false;
        })

    });


    /*-------------------------
      # Smooth Scroll
    -------------------------*/
    $(".page-scroll").on('click', function (event) {

        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });


    /*-------------------------
      # Fixed Menu
    -------------------------*/
    var fixed_top = $(".ic-menu-wrapper");
    $(window).on('scroll', function(){
        if( $(this).scrollTop() > 100 ){
            fixed_top.addClass("animated fadeInDown menu-fixed");
        } else {
            fixed_top.removeClass("animated fadeInDown menu-fixed");
        }
    });


    /*-------------------------
      # Mobile menu
    -------------------------*/
    $(document).on('click', '.ic-menu-icon', function (e) {
        $(".ic-header").addClass('ic-nav-open');
    });
    $(document).on('click', '.ic-nav-close', function (e) {
        $(".ic-header").removeClass("ic-nav-open");
    });
    $('.ic-mobile-menu-list li a').on('click', function(e) {
        var element = $(this).parent('li');
        if (element.hasClass('open')) {
            element.removeClass('open');
            element.find('li').removeClass('open');
            element.find('ul').slideUp(500,"swing");
        }
        else {
            element.addClass('open');
            element.children('ul').slideDown(500,"swing");
            element.siblings('li').children('ul').slideUp(500,"swing");
            element.siblings('li').removeClass('open');
            element.siblings('li').find('li').removeClass('open');
            element.siblings('li').find('ul').slideUp(500,"swing");
        }
        if(element.hasClass('ic-has-dropdown')) {
            e.preventDefault();
        }
    });


    /*-------------------------
      # Header Search
    -------------------------*/
    $(document).on('click','.ic-header-search, .ic-search-close',function(){
        $(".ic-search-area").toggleClass("open");
    });


    /*-------------------------
      # Select Dropdown
    -------------------------*/
    
    
    $(document).on('click','.ic-select-dropdown',function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
    });
/*
    $(document).on('focusout','.ic-select-dropdown',function () {
        $(this).removeClass('active');
    });
    */
    
    $(document).on('click','.ic-select-dropdown .ic-select-dropdown-menu li',function () {
        $(this).parents('.ic-select-dropdown').find('span').text($(this).text());
        $(this).parents('.ic-select-dropdown').find('input').attr('value', $(this).attr('id'));
    });

  

    $(document).on('click','.ic-header-account-inner',function () {
        $(this).closest('.ic-header-account').toggleClass('open-dropdown');
    });
    $(document).on('click', function(event) {
        if (!$(event.target).closest(".ic-header-account,.ic-account-dropdown").length) {
            $("body").find(".ic-header-account").removeClass("open-dropdown");
        }
    });

    $.fn.ulSelect = function () {
        var ul = $(this);

        if (!ul.hasClass('ic-ul-select')) {
            ul.addClass('ic-ul-select');
        }

        $('li:first-of-type', this).addClass('active');

        $(document).on('click', '.ic-ul-select li', function (event) {

            var selected = $('.ic-ul-selected');

            if (selected.length) { selected.remove(); }

            ul.before('<div class="ic-ul-selected">');

            ul.toggleClass('active');
            ul.children().removeClass('active');
            $(this).toggleClass('active');

            var selectedText = $(this).text();
            if (ul.hasClass('active')) {
                selected.text(selectedText).addClass('active');
            } else {
                selected.text('').removeClass('active');
            }
        });

    }
    $('.ic-mobile-select-dropdown').ulSelect();

    $(document).on('click', function(event) {
        if (!$(event.target).closest(".ic-ul-select").length) {
            $("body").find(".ic-ul-select").removeClass("active");
        }
    });


    /*-------------------------
      # Mini Cart
    -------------------------*/
    $(document).on('click', '.ic-header-minicart-btn', function () {
        $('body').addClass('minicart-open');
    });
    $(document).on('click', '.ic-minicart-close', function () {
        $('body').removeClass('minicart-open');
    });
    $(document).on('click', function(event) {
        if (!$(event.target).closest(".ic-header-minicart-btn,.ic-minicart").length) {
            $('body').removeClass('minicart-open');
        }
    });


    /*-------------------------
      # Custom Modal
    -------------------------*/
    $(document).on('click', '.ic-modal-btn', function () {
        var dataTarget = $(this).attr('data-target');
        $(dataTarget).addClass('ic-modal-show');
        $('body').addClass('ic-modal-open');
    });
    $(document).on("click", '.ic-modal-close', function () {
        $('.ic-modal').removeClass('ic-modal-show');
        $('body').removeClass('ic-modal-open');
    });
    $(document).on('click', function(event) {
        if (!$(event.target).closest(".ic-modal-content,.ic-modal-btn").length) {
            $("body").removeClass("ic-modal-open");
            $(".ic-modal").removeClass("ic-modal-show");
        }
    });


    /*-------------------------
      # Easyzoom
    -------------------------*/
    var $easyzoom = $('.easyzoom').easyZoom();


    /*-------------------------
      # Wow Animation
    -------------------------*/
    var wow = new WOW({});

    //active wow
    wow.init();


    /*-------------------------
      # Product Quantity
    -------------------------*/
    jQuery('.ic-quantity').each(function () {

        var spinner = $(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.ic-quantity-up'),
            btnDown = spinner.find('.ic-quantity-down'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.click(function () {

            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");

        });

        btnDown.click(function () {

            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");

        });

    });


    $(document).ready(function () {
        /*-------------------------
          # Banner Slider
        -------------------------*/
        $('.ic-banner-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            nav: false,
            items: 1,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            onInitialized: startProgressBar,
            onTranslate: resetProgressBar,
            onTranslated: startProgressBar,
            dotsContainer: '.ic-carousel-custom-dots'
        });
        $(document).on('click', '.ic-owl-dot', function () {
            $('.ic-banner-slider').trigger('to.owl.carousel', [$(this).index(), 300]);
        });
        function startProgressBar() {
            $(".ic-banner-slider-progress").css({
                width: "100%",
                transition: "width 6000ms"
            });
        }
        function resetProgressBar() {
            $(".ic-banner-slider-progress").css({
                width: 0,
                transition: "width 0s"
            });
        }


        /*-------------------------
          # Product Slider
        -------------------------*/
        $('.ic-product-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause:true,
            nav: true,
            dots:false,
            items: 1,
            margin: 0,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                }
            }
        });
        $(document).on('click', '.ic-product-nav-right', function () {
            $('.ic-product-slider').trigger('next.owl.carousel');
        });

        $(document).on('click', '.ic-product-nav-left', function () {
            $('.ic-product-slider').trigger('prev.owl.carousel');
        });


        /*-------------------------
          # Image Slider
        -------------------------*/
        $('.ic-image-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            smartSpeed: 1000,
            nav: false,
            dots:false,
            items: 1,
            margin: 0,
        });
        $(document).on('click', '.ic-image-nav-right', function () {
            $('.ic-image-slider').trigger('next.owl.carousel');
        });

        $(document).on('click', '.ic-image-nav-left', function () {
            $('.ic-image-slider').trigger('prev.owl.carousel');
        });


        /*-------------------------
          # Partner Slider
        -------------------------*/
        $('.ic-partner-slider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 800,
            fade: false,
            cssEase: 'linear',
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }]
        });


        /*-------------------------
          # Testimonial Slider
        -------------------------*/
        $('.ic-testimonial-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: false,
            dots:false,
            items: 1,
            margin: 0,
        });
        $(document).on('click', '.ic-testimonial-nav-right', function () {
            $('.ic-testimonial-slider').trigger('next.owl.carousel');
        });

        $(document).on('click', '.ic-testimonial-nav-left', function () {
            $('.ic-testimonial-slider').trigger('prev.owl.carousel');
        });


        /*-------------------------
          # Product gallery
        -------------------------*/
        $('.ic-product-single-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            infinite: false,
            asNavFor: '.ic-product-thumbs-carousel',
        });
        $('.ic-product-thumbs-carousel').slick({
            slidesToScroll: 1,
            slidesToShow: 5,
            dots: false,
            arrows: false,
            focusOnSelect: true,
            loop: false,
            infinite: false,
            asNavFor: '.ic-product-single-carousel',
            centerPadding: 10,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3
                }
            }]
        });

    });


    /*-------------------------
      # Counter
    -------------------------*/
    if ($('counter')) {
        $('.counter').countUp({
            'time': 1000,
            'delay': 10,
        });
    }


    /*-------------------------
      # Lightcase
    -------------------------*/
    $('a[data-rel^=lightcase]').lightcase();


})(jQuery);

