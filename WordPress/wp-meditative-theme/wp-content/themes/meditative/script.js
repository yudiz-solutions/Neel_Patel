

// function delay(n) {
//     n = n || 2000;
//     return new Promise(done => {
//         setTimeout(() => {
//             done();
//         }, n);
//     })
// }


$(document).ready(function () {
    $(".class-img").on("click", function () {
        console.log("line 14")
        $(this).parent().addClass("take-this");
    })
})

// function animatethis() {
//     var tl = gsap.timeline();
//     tl.to(".class:not(.take-this), .take-this h2, .take-this p ", {
//         duration: 0.5, translateY: 10, opacity: 0, ease: "power4.out"
//     })

//     tl.to(".exc", {
//         duration: 1, scale: 1, ease: "power4.out"
//     })
//     tl.to(".take-this", {
//         duration: 2, position: "relative", left: "50%", top: "50%", translateX: "-50%", translateY: "-50%", ease: "power4.out"
//     })
//     tl.to(".class-img", { height: "1140px", width: "760px" })


// }

let percentTop;
let percentLeft;


$(document).on('click', function (e) {
    let y = e.pageY - $(window).scrollTop();
    let x = e.pageX;

    percentTop = y / $(window).height() * 100;
    percentLeft = x / $(window).width() * 100;
})


barba.init({
    transitions: [{

        preventRunning: true,
        enter(data) {
            updateCurrentClass();
            console.log(window.location.pathname);

            $(data.next.container).addClass("fixed");
            gsap.fromTo(data.next.container,
                {
                    clipPath: `circle(0% at ${percentLeft}% ${percentTop}%)`
                },
                {

                    clipPath: `circle(140% at ${percentLeft}% ${percentTop}%)`,
                    duration: 5,
                    ease: "power1.out",
                    onComplete: () => {
                        $(window).scrollTop(0);
                        $(data.next.container).removeClass("fixed");

                    }

                });

        },
        // enter(data) {
        //     updateCurrentClass();
        //     // console.log(window.location.pathname);

        //     // $(data.next.container).addClass("fixed");

        // }
    }]
});


function updateCurrentClass() {
    $(".w--current").removeClass("w--current");
    $(".navbar ul li a ").each(function (index) {
        if ($(this).attr("href") === window.location.pathname) {
            $(this).addClass("w--current");

        }

    })
}