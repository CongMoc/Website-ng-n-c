;(function($) {
    "use strict"; 
    
    //* Navbar Fixed  
    function navbarFixed(){
        if ( $('.main-header.is-sticky-on').length ){ 
            $(window).on('scroll', function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= 295) {
                    $(".main-header.is-sticky-on").addClass("header-fixed");
                } else {
                    $(".main-header.is-sticky-on").removeClass("header-fixed");
                }
            });  
        };
    };    
    

	// *Home Slider
    var $owlHome = $('.slider-inner');
    $owlHome.owlCarousel({
        // rtl: $("html").attr("dir") == 'rtl' ? true : false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        margin: 0,
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,  
        smartSpeed:150,
        touchDrag: true,
        mouseDrag: false,
        autoHeight: true,
        responsive: {
            0: {
                nav: false
            },
            768: {
                nav: true
            },
            992: {
                nav: true
            }
        }
    });
    $owlHome.owlCarousel();
    $owlHome.on('translate.owl.carousel', function (event) {
        var data_anim = $("[data-animation]");
        data_anim.each(function() {
            var anim_name = $(this).data('animation');
            $(this).removeClass('animated ' + anim_name).css('opacity', '0');
        });
    }); 
    $owlHome.on('translated.owl.carousel', function() {
        var data_anim = $owlHome.find('.owl-item.active').find("[data-animation]");
        data_anim.each(function() {
            var anim_name = $(this).data('animation');
            $(this).addClass('animated wow ' + anim_name).css('opacity', '1'); 
        });
    });


    $('.navbar-nav').find( 'a' ).on( 'focus blur', function() {
        $( this ).parents( 'ul, li' ).toggleClass( 'focus' );
    });   
    
    // Scroll to top
    function scrollToTop() {
        if ($('.scroll-top').length) {  
            $(window).on('scroll', function () {
                if ($(this).scrollTop() > 200) {
                    $('.scroll-top').fadeIn();
                } else {
                    $('.scroll-top').fadeOut();
                }
            }); 
            //Click event to scroll to top
            $('.scroll-top').on('click', function () {
                $('html, body').animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        }
    }
   
    
    /*Function Calls*/ 
    new WOW().init();
    navbarFixed();   
    scrollToTop();

    $(document).ready(function() {
        $(".navbar-toggler").on("click", function(n) {
            if ($(this).attr('aria-expanded') == 'false' ) {
                $(".navbar-menubar").removeClass('active');
                $(".navbar-toggler:not(.navbar-toggler-close)").focus();
            } else {
                $(".navbar-menubar").addClass('active');
                $(".navbar-toggler.navbar-toggler-close").focus();
                n.preventDefault();
                var t, a, c, o = document.querySelector(".navbar-menu");
                let e = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])',
                    m = document.querySelector(".navbar-toggler-close"),
                    u = o.querySelectorAll(e),
                    r = u[u.length - 1];
                if (!o) return !1;
                for (a = 0, c = (t = o.getElementsByTagName("button")).length; a < c; a++) t[a].addEventListener("focus", l, !0), t[a].addEventListener("blur", l, !0);

                function l() {
                    for (var e = this; - 1 === e.className.indexOf("navbar-menu");) "li" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace("focus", "") : e.className += " focus"), e = e.parentElement
                }
                document.addEventListener("keydown", function(e) {
                    ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === m && (r.focus(), e.preventDefault()) : document.activeElement === r && (m.focus(), e.preventDefault()))
                })
            }
        });
        $(".top-header-toggler").on("click", function(n) {
            if ($(this).attr('aria-expanded') == 'false' ) {
                $(".top-header-wrap").removeClass('active');
                $(".top-header-toggler:not(.top-header-close)").focus();
            } else {
                $(".top-header-wrap").addClass('active');
                $(".navbar-toggler.navbar-toggler-close").focus();
                n.preventDefault();
                var t, a, c, o = document.querySelector(".top-header-wrap");
                let e = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])',
                    m = document.querySelector(".top-header-close"),
                    u = o.querySelectorAll(e),
                    r = u[u.length - 1];
                if (!o) return !1;
                for (a = 0, c = (t = o.getElementsByTagName("button")).length; a < c; a++) t[a].addEventListener("focus", l, !0), t[a].addEventListener("blur", l, !0);

                function l() {
                    for (var e = this; - 1 === e.className.indexOf("top-header-wrap");) "li" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace("focus", "") : e.className += " focus"), e = e.parentElement
                }
                document.addEventListener("keydown", function(e) {
                    ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === m && (r.focus(), e.preventDefault()) : document.activeElement === r && (m.focus(), e.preventDefault()))
                })
            }
        });
        $(".search-menu .nav-link").on("click", function(n) {
            if ($(this).attr('aria-expanded') == 'false' ) {
                $(".search-menu .nav-link").focus();
            } else {
                $(".searchinput-form input.form-control").focus();
                n.preventDefault();
                var t, a, c, o = document.querySelector(".searchinput-form");
                let e = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])',
                    m = document.querySelector(".form-control"),
                    u = o.querySelectorAll(e),
                    r = u[u.length - 1];
                if (!o) return !1;
                for (a = 0, c = (t = o.getElementsByTagName("button")).length; a < c; a++) t[a].addEventListener("focus", l, !0), t[a].addEventListener("blur", l, !0);

                function l() {
                    for (var e = this; - 1 === e.className.indexOf("searchinput-form");) "*" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace("focus", "") : e.className += " focus"), e = e.parentElement
                }
                document.addEventListener("keydown", function(e) {
                    ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === m && (r.focus(), e.preventDefault()) : document.activeElement === r && (m.focus(), e.preventDefault()))
                })
            }
        });
        var dropdownToggle = $('.navbar-nav.main-nav .dropdown > a.nav-link');
        dropdownToggle.after('<button type="button" class="dropdown-icon"></button>');
        dropdownToggle.removeAttr('data-bs-toggle').removeAttr('data-bs-target').removeAttr('aria-expanded').removeAttr('data-bs-name').removeAttr('aria-haspopup');
        $(document).on('click', '.navbar-nav.main-nav .dropdown > button.dropdown-icon', function() {
            $(this).parent(".menu-item").toggleClass("show");
            $(this).next(".sub-menu").slideToggle();
        });
        $(window).on('resize', desktopmenu);
        function desktopmenu() {
            if (window.matchMedia("(min-width: 992px)").matches) {
                $('.sub-menu.collapse').removeAttr('style');
            }
        }
        $(document).on('click', '.navbar-nav.main-nav .dropdown > a', function() {
            location.href = this.href;
        });
    });
})(jQuery);