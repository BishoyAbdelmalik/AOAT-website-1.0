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
