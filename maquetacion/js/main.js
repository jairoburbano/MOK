(function ($) {
    // Tamaño de la pantalla
    var $window = $(window);

    windowSize = $window.width();
    //    $(window).scroll(function () {
    //        if ($(window).scrollTop() > 100) {
    //            alert('asdas');
    //        }
    //    });
    //MENU
    $('.content--bar').stop().click(function () {
        $(this).parents('.header').find('.header__menu--nav, .header__menu').slideToggle();
        $(this).parents('.header__mobile--icon-menu').find('.open, .close').fadeToggle();
        $(this).parents('.header__mobile--icon-menu').toggleClass('open-menu');
        $('html, body').stop().toggleClass('searchopen');
    });
    //Telefonos Mobile
    $('.phone-icon-svg').click(function () {
        $('.phone').find('.phone__selector').slideToggle();
    });
    //Dropdown menu
    if (windowSize > 1090) {
        var menuNav = $('.header__menu--nav .menu-item-has-children'),
            menuTop = $('.header__menu--top--left .menu-item-has-children');
        $('.menu-item-has-children').click(function () {
            $(this).find('ul').slideToggle();
            $(this).siblings().find('ul').slideUp();
        });
        menuNav.click(function () {
            menuTop.find('ul').slideUp();
        });
        menuTop.click(function () {
            menuNav.find('ul').slideUp();
        });
    }
    //menu mobile
    var menuHeight = function () {
        var windowHeight = $window.outerHeight() - 73;
        if (windowSize < 1090) {
            $('.header__menu').css('height', windowHeight);
        }
    }
    $(document).ready(menuHeight);
    $(window).resize(menuHeight);
    //Banner Flexsilder
    $('.banner').flexslider({
        animation: "slide",
        prevText: "",
        nextText: "",
        start: function(slider) {
            slider.removeClass('loading');
        } 
    });
    //Servicios Flexslider
    $('.servicios--slider').flexslider({
        animation: "slide",
        slideshow: false,
        manualControls: ".controls li",
        smoothHeight: true
    });
    //Shuffle
    //    $(document).ready(function () {
    //        var $grid = $('.novedades--content'),
    //            $filterOptions = $('.filters'),
    //            $sizer = $grid.find('.novedades--items');
    //
    //        $grid.shuffle({
    //            itemSelector: '.novedades--items',
    //            sizer: $sizer
    //        });
    //        setupFilters = function () {
    //            var $btns = $filterOptions.children();
    //            $btns.on('click', function () {
    //                var $this = $(this),
    //                    isActive = $this.hasClass('active'),
    //                    group = isActive ? 'all' : $this.data('group');
    //
    //                // Hide current label, show current label in title
    //                if (!isActive) {
    //                    $('.filters .active').removeClass('active');
    //                }
    //
    //                $this.toggleClass('active');
    //
    //                // Filter elements
    //                $grid.shuffle('shuffle', group);
    //            });
    //
    //            $btns = null;
    //        }
    //        setupFilters();
    //    });
    //Filtro nosotros mobile 
    if (windowSize < 740) {
        $('.selector-filtro').click(function () {
            $('.filters').stop().slideToggle();
            $('.filters-container').stop().toggleClass('active');
        });
    }
    //Filtros scroll horizontal
    var horizontalMenu = function() {
        if (windowSize > 740) {
            var listWidth = $('.filters').outerWidth(),
                contentListWidth = $('.filters-content').innerWidth(),
                ancho = $('.filters-container').innerWidth() -100;
            if(listWidth > contentListWidth) {
                $('.filters-container').addClass('withscroll');
                $('.more-items').click(function () {
                    $('.filters').css('margin-left', -ancho);
                    $(this).fadeOut();
                    $('.less-items').fadeIn();
                    $('.filters-container').addClass('lessscroll');
                });
                $('.less-items').click(function () {
                    $('.filters').css('margin-left', 0);
                    $(this).fadeOut();
                    $('.more-items').fadeIn();
                    $('.filters-container').removeClass('lessscroll');
                });
            } else {
                $('.more-items, .less-items').fadeOut();
                //centrar filtros si no hay scroll
                $('.filters').addClass('center-list');
            }
        }
    }
    $(document).ready(horizontalMenu);
    $(window).resize(horizontalMenu);

    /**
     * Desplegables de servicios
     */
    function serviceForm() {
        var trigger = $('.servicios--items--box'),
            items   = $('.servicios--items'),
            close   = $('.icon-slide-close'),
            slide   = $('.servicios--items--slide');

        trigger.on('click', function(){
            var $this   = $(this);

            items.stop(true, true).addClass('back-color');

            if ( $this.parent().hasClass('active') ) {
                $this.parent().siblings().removeClass('back-color');
                $this.parent().removeClass('back-color');
            }

            var target = $this.siblings('.servicios--items--slide');
            $this.parent().find('.servicios--items--slide').stop().slideToggle(300, function(){
                $('html, body').stop().animate({
                    'scrollTop': target.offset().top - 20
                }, 900, 'swing');
            });
            $this.parent().stop().toggleClass('active');
            $this.parent().siblings().find('.servicios--items--slide').slideUp(300);
            $this.parent().siblings().removeClass('active');


            // if ($('.servicios--items--box').length) {
            //     var scrollhere = $(this).parent().offset().top;
            //     console.log(scrollhere);
            //     $('html, body').animate({ scrollTop: scrollhere}, 300);
            // }

        });

        close.on('click', function(){
            slide.stop().slideUp();
            items.stop().removeClass('back-color');
        });
    }
    serviceForm();


    //altura contacto
    if (windowSize > 740) {
        var contactHeight = $('.contacto--datos').outerHeight() - 50;
        $('.contacto--form').css('min-height', contactHeight);
    }
    //Abrir buscador con click 
    $('.icon-search, .this-search').click(function () {
        $('.search').addClass('open');
        $('html, body').addClass('searchopen');
    });
    $('.icon-close').click(function () {
        $('.search').removeClass('open');
        $('html, body').removeClass('searchopen');
    });

    //novedades redes y filtros fixed
    var fixedThings = function() {
        if ($('.filters-container').length) {
            var filterHeight = $('.novedades').offset().top + 70;
            //Novedades filtros fixed
            if ($(window).scrollTop() > filterHeight) {
                $('.filters-container').css({
                    position: 'fixed',
                    top: 0
                });          
            } else if ($(window).scrollTop() < filterHeight) {
                $('.filters-container').css({
                    position: 'relative',
                    top: 0,
                    left: 0
                });
            }
        }
        if ($('.novedades--single--redes').length && $('.division-especial').length) {
            var rssHeight = $('.novedades--single--redes').offset().top -60,
                rssBotHeight = $('.division-especial').offset().top -302;
            if ($(window).scrollTop() > rssBotHeight) {
                $('.share').css({
                    position: 'absolute',
                    top:  'auto',
                    bottom: 0
                });
            } else if ($(window).scrollTop() < rssHeight) {
                $('.share').css({
                    position: 'absolute',
                    top: 0
                });
            } else {
                $('.share').css({
                    position: 'fixed',
                    top: 60,
                    bottom: 'auto'
                });
            }
        }
    }
    $(window).scroll(fixedThings);
    $(window).resize(fixedThings);
    //Focus input
    $('input, textarea').focus(function () {
        $(this).parent().addClass('focus');
    });
    $('input, textarea').blur(function () {
        $(this).parent().removeClass('focus');
    });
})(jQuery);