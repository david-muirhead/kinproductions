export default {
  init() {
    // JavaScript to be fired on all pages
    window.onload = function () {
      $('body').fadeIn(2000);
      document.documentElement.classList.add('site-loaded');
      $('.site-loaded body').not('.home').find('.invisible').removeClass('invisible');
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
