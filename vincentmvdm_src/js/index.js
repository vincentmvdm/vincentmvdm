$(function () {
    $('a').fluidbox();
    
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
