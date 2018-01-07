$("input[name=first_name]").focus(function () {
    $("input[name=first_name]").addClass("active");
    $("#first_name").addClass("visable");
});
$("input[name=first_name]").focusout(function () {
    if (!hasValue("input[name=first_name]")) {
        $("input[name=first_name]").removeClass("active");
        $("#first_name").removeClass("visable");
    }

});
$("input[name=last_name]").focus(function () {
    $("input[name=last_name]").addClass("active");
    $("#last_name").addClass("visable");
});
$("input[name=last_name]").focusout(function () {

    $("input[name=last_name]").removeClass("active");

    if (!hasValue("input[name=last_name]")) {

        $("#last_name").removeClass("visable");
    }

});
$("input[name=email]").focus(function () {
    $("input[name=email]").addClass("active");

    $("#email").addClass("visable");
});
$("input[name=email]").focusout(function () {

    $("input[name=email]").removeClass("active");

    if (!hasValue("input[name=email]")) {
        $("#email").removeClass("visable");
    }

});
$("input[name=numb]").focus(function () {
    $("input[name=numb]").addClass("active");

    $("#numb").addClass("visable");
});
$("input[name=numb]").focusout(function () {

    $("input[name=numb]").removeClass("active");

    if (!hasValue("input[name=numb]")) {
        $("#numb").removeClass("visable");
    }

});

function hasValue(elem) {
    return $(elem).filter(function () {
        return $(this).val();
    }).length > 0;
}



$('input[type="checkbox"]').on('change', function () {
    if (hasValue("input[name=other]")) {
        $("input[name=other]").val('');

    }
    $('input[type="checkbox"]').not(this).prop('checked', false);
});
$("input[name=other]").focus(function () {
    $('input[type="checkbox"]').not(this).prop('checked', false);
});
