$(document).ready(function () {

    $(".landing").css("height", ($(".landing").height() - 100) + "px");


    current_load = "translateY(";
    current_load += $(".landing").height();
    current_load += "px)";


    $(".main").animate({
        transform: current_load
    }, {
        step: function () {
            $(this).css('-webkit-transform', current_load);
        },
        duration: 1
    }, 'ease');

});


$(window).resize(function () {

    $(".landing").css("height", $(".landing_img").height() + "px");

    current_load = "translateY(";
    current_load += $(window).scrollTop() + $(".landing").height();
    current_load += "px)";


    $(".main").animate({
        transform: current_load
    }, {
        step: function () {
            $(this).css('-webkit-transform', current_load);
        },
        duration: 1
    }, 'ease');


});



function runclick() {
    $('html, body').animate({
        scrollTop: "400"
    }, 1000);
    return false;
}
