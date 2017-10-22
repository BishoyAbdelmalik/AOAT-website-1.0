var object;
var place;
$(".1").click(function () {
    object = new Array();
    place = 0;
    var src = $("#hockney_img").attr("src");
    $(".gallery_viewing").attr("src", src);
    $("#mygallery").modal();
    $("#mygallery").css("display", "flex");

    var item = document.getElementsByClassName("gallery_items")
    var items;
    var arrayLength = item.length;
    for (var i = 0; i <= arrayLength; i++) {
        items = item[i]
        object.push(items);

    }
    document.onkeydown = checkKey;

    function checkKey(e) {

        e = e || window.event;


        if (e.keyCode == '37') {

            back();
        } else if (e.keyCode == '39') {
            forward()

        }

    }


});


$(".gallery_items").click(function () {
    var src = $(this).attr("src");
    $(".gallery_viewing").attr("src", src);



});



function forward() {
    var src;
    place++;
    if (place === (object.length - 1)) {
        place = 0;
        src = object[place].src;
        $(".gallery_viewing").attr("src", src);
    } else {

        src = object[place].src;
        $(".gallery_viewing").attr("src", src);
    }
}

function back() {
    var src;
    place--;
    if (place === -1) {
        place = (object.length - 2);
        src = object[place].src;
        $(".gallery_viewing").attr("src", src);
    } else {

        src = object[place].src;
        $(".gallery_viewing").attr("src", src);
    }
}

$("#forward").click(function () {
    forward()
});
$("#back").click(function () {
    back()
});


$('#mygallery').on('hidden', function () {
    document.onkeydown = null

})
