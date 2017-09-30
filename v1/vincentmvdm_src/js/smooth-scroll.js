$(document).ready(function() {
    $(".smooth-scroll").on('click', function(event) {

    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 400, function(){
            window.location.hash = hash;
      });
    }
  });
});