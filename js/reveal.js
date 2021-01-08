document.addEventListener("DOMContentLoaded", function () {
    jQuery(document).ready(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 1200) {
                jQuery('header').css({
                    "opacity": "1"
                })

            } else {
                jQuery('header').css({
                    "opacity": "0"
                })
            }
        })
    })
});