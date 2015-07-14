
function mouseOver1() {
    // $("#image-icon2 + .gear").addClass("spincc");
    // $("#image-icon3 + .gear").addClass("spinc");
    // $("#image-icon4 + .gear").addClass("spincc");
    // $("#image-icon5 + .gear").addClass("spincc");

    $(".gearcc").addClass("spincc");
    $(".gearc").addClass("spinc");
}

function mouseOut1() {
    // $("#image-icon2 + .gear").removeClass("spincc");
    // $("#image-icon3 + .gear").removeClass("spinc");
    // $("#image-icon4 + .gear").removeClass("spincc");
    // $("#image-icon5 + .gear").removeClass("spincc");

    $(".gearcc").removeClass("spincc");
    $(".gearc").removeClass("spinc");
}

function mouseOver2() {
    // $("#image-icon1 + .gear").addClass("spinc");
    // $("#image-icon3 + .gear").addClass("spinc");
    // $("#image-icon4 + .gear").addClass("spincc");
    // $("#image-icon5 + .gear").addClass("spincc");

    $(".gearcc").addClass("spincc");
    $(".gearc").addClass("spinc");
}

function mouseOut2() {
    // $("#image-icon1 + .gear").removeClass("spinc");
    // $("#image-icon3 + .gear").removeClass("spinc");
    // $("#image-icon4 + .gear").removeClass("spincc");
    // $("#image-icon5 + .gear").removeClass("spincc");

    $(".gearcc").removeClass("spincc");
    $(".gearc").removeClass("spinc");
}

function mouseOver3() {
    // $("#image-icon1 + .gear").addClass("spinc");
    // $("#image-icon2 + .gear").addClass("spincc");
    // $("#image-icon4 + .gear").addClass("spincc");
    // $("#image-icon5 + .gear").addClass("spincc");

    $(".gearcc").addClass("spincc");
    $(".gearc").addClass("spinc");
}

function mouseOut3() {
    // $("#image-icon1 + .gear").removeClass("spinc");
    // $("#image-icon2 + .gear").removeClass("spincc");
    // $("#image-icon4 + .gear").removeClass("spincc");
    // $("#image-icon5 + .gear").removeClass("spincc");

    $(".gearcc").removeClass("spincc");
    $(".gearc").removeClass("spinc");
}

function mouseOver4() {
    // $("#image-icon1 + .gear").addClass("spinc");
    // $("#image-icon2 + .gear").addClass("spincc");
    // $("#image-icon3 + .gear").addClass("spinc");
    // $("#image-icon5 + .gear").addClass("spincc");

    $(".gearcc").addClass("spincc");
    $(".gearc").addClass("spinc");
}

function mouseOut4() {
    // $("#image-icon1 + .gear").removeClass("spinc");
    // $("#image-icon2 + .gear").removeClass("spincc");
    // $("#image-icon3 + .gear").removeClass("spinc");
    // $("#image-icon5 + .gear").removeClass("spincc");

    $(".gearcc").removeClass("spincc");
    $(".gearc").removeClass("spinc");
}

function mouseOver5() {
    // $("#image-icon1 + .gear").addClass("spinc");
    // $("#image-icon2 + .gear").addClass("spincc");
    // $("#image-icon3 + .gear").addClass("spinc");
    // $("#image-icon4 + .gear").addClass("spincc");

    $(".gearcc").addClass("spincc");
    $(".gearc").addClass("spinc");
}

function mouseOut5() {
    // $("#image-icon1 + .gear").removeClass("spinc");
    // $("#image-icon2 + .gear").removeClass("spincc");
    // $("#image-icon3 + .gear").removeClass("spinc");
    // $("#image-icon4 + .gear").removeClass("spincc");

    $(".gearcc").removeClass("spincc");
    $(".gearc").removeClass("spinc");
}

$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    $('.services-offered').css({'opacity':(( 300-scroll )/300)});
});