(function($) {
    jQuery(window).bind('load', function() {
        jQuery("#preloader").delay(100).fadeOut("slow");
        jQuery("#load").delay(100).fadeOut("slow");
        jQuery("#load_content").delay(100).fadeIn("slow");
    });

})(jQuery);