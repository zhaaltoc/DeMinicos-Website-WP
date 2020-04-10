$(document).ready(function() {
    $(".nav-item").on("click", function() {
        var element = $(this)
        $('html, body').animate({
            scrollTop: $("#section-" + element.attr('id')).offset().top
        }, 500);
    });
});

