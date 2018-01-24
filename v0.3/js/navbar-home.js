var current_load;


var x = 1;
var lastScrollTop;


$(window).scroll(function (event) {

    var scroll = $(window).scrollTop();
    if (scroll > 50) {
        $(".navbar").removeClass("transparent_nav");
    }
    if (scroll < 50) {
        $(".navbar").addClass("transparent_nav");
    }



});
$('.navbar-toggle').click(function () {

    var scroll = $(window).scrollTop();

    if (scroll < 200) {
        $(".navbar").toggleClass("transparent_nav");
    }

});
