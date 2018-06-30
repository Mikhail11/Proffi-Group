(function($) {

    jQuery(window).load(function() {
        jQuery("#preloader").delay(100).fadeOut("slow");
        jQuery("#load").delay(100).fadeOut("slow");
    });

    $('.projects__preview').on('click', function(event){
        if($(event.target).hasClass('projects__preview-btn')) {
            $('body').addClass('cases_open');
            $('.cases').addClass('cases_opened');
            event.stopImmediatePropagation();
        }
    });

    $('.cases__back-button').on('click', function(event){
            $('body').removeClass('cases_open');
            $('.cases').removeClass('cases_opened');
            event.stopImmediatePropagation();
    });

    if(location.search == '?quiz') {
        $('body').addClass('quiz_open');
        $('.quiz').addClass('quiz_opened');
    }

    $('.list__item-link').on('click', function(event) {
        $('.list__item_active').removeClass('list__item_active');
        var $anchor = $(this);
        var parent = $anchor.parent();
        parent.addClass('list__item_active');
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

/* scroll menu items active */

    var menu_selector = ".list__item"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню.
    function onScroll(){
        var scroll_top = $(document).scrollTop();
        $(menu_selector + " a").each(function(){
            var hash = $(this).attr("href");
            var target = $(hash);
            if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
                $(menu_selector + ".list__item_active").removeClass("list__item_active");
                $(this).parent().addClass("list__item_active");
            } else {
                $(this).removeClass("list__item_active");
            }
        });
    }
    $(document).ready(function () {
        $(document).on("scroll", onScroll);
        $("a[href^=#]").click(function(e){
            e.preventDefault();
            $(document).off("scroll");
            $(menu_selector + ".list__item_active").removeClass("list__item_active");
            $(this).parent().addClass("list__item_active");
            var hash = $(this).attr("href");
            var target = $(hash);
            $("html, body").animate({
                scrollTop: target.offset().top
            }, 500, function(){
                window.location.hash = hash;
                $(document).on("scroll", onScroll);
            });
        });
    });






})(jQuery);