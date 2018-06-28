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


})(jQuery);