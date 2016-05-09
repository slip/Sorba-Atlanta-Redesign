jQuery(document).ready(function() {
    jQuery('#wps-simple-menu').sidr();
    jQuery("#wps-menu").sticky({
        topSpacing: 0
    });
    jQuery('#sidr').css("display", "block");
    window.setTimeout(function() {
        jQuery(".twitter-timeline").contents().find(".TweetAuthor-name").attr("style", "color: 'white' !important;");
    }, 1000);
});
