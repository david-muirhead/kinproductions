export default {
  init() {
    // JavaScript to be fired on the about us page
    var $header = $('#contact');
    $(window).scroll(function () { 
      if ($header.offset().top - $(this).scrollTop() > 100) {
        $header.addClass('blabla');
      } else {
        $header.removeClass('blabla');
      }
    });
  },
};
