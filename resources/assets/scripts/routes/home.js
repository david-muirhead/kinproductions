export default {
  init() {
    // JavaScript to be fired on the home page

    $( document ).ready(function() {
      if (sessionStorage.getItem('pageloadcount')) { 
        $('#aoc').hide();
        $('#site-circle').hide();
        $('.invisible').removeClass('invisible');
    } 
      sessionStorage.setItem('pageloadcount', '1');
    });

    $('#aoc').on('click', function() {     
       
        $(this).fadeOut();
        $(this).fadeOut(2000, function() {
          $('.invisible').removeClass('invisible');
        });
        $('#site-circle').fadeOut();
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
