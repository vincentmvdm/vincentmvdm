$(function () {
    $('a').fluidbox();

    $('body').fadeTo(800, 1);

    $('.fadeBetween').click(function(event) {
        event.preventDefault();
        var dest = this.href;
        $("body").fadeOut(400, "swing", function() {
            document.location.href = dest;
        });
    });

    $(document).scroll(function() {
        if ($('#contents').length) {
            var threshold = $('#contents').offset().top;
            var top = $(this).scrollTop();
            if (top >= threshold) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        }
    });
})
