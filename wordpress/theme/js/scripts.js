(function ($) {
    var header = jQuery("header")
    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop()

        if (scroll >= 50) {
            header.addClass("scrolling")
        } else {
            header.removeClass("scrolling")
        }
    })
})(jQuery);