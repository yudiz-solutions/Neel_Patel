if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style');
    msViewportStyle.appendChild(
        document.createTextNode(
            '@-ms-viewport{width:auto!important}'
        )
    );
    document.querySelector('head').appendChild(msViewportStyle);
}


jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1) {
        jQuery('header').addClass("sticky-header");
    }
    else {
        jQuery('header').removeClass("sticky-header");
    }
});

jQuery(document).ready(function () {
    jQuery('.home-slider').slick({
        fade: true
        // arrows: false,
    });
});

jQuery(document).ready(function () {
    jQuery(".assessment-section").stick_in_parent();
});