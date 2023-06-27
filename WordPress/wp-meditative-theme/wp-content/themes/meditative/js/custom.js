$(document).ready(function () {
    $(".slides").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $(".left-arrow"),
        nextArrow: $(".right-arrow"),
        // autoplay: true,
        // autoplaySpeed: 2000,
    });
});
$(document).ready(function () {
    $(".class-stories").slick({
        dots: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});

// ----------------------------------------------------- //

new WOW().init();


var mybutton = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$(document).ready(function ($) {
    $(".nav-menu").click(function () {
        $(".navigation-menu").slideToggle();
    });
});