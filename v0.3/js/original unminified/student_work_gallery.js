function forward() {
    var src;
    place++;
    if (place === (object.length)) {
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
        place = (object.length) - 1;
        src = object[place].src;
        $(".gallery_viewing").attr("src", src);
    } else {

        src = object[place].src;
        $(".gallery_viewing").attr("src", src);
    }
}



$('#mygallery').on('hidden.bs.modal', function () {
    $("#gallary").html("<img class='load' src='images/studentwork/load.gif'>");
    document.onkeydown = null
})
