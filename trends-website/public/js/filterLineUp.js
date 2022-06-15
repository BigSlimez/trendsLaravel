$("button").click(function () {
    var show = $(this).attr('class');
    $('.post').each(function () {
        $(this).show();
        var test = $(this).attr('class');
        if (test.indexOf(show) < 0) $(this).hide();
    });
});