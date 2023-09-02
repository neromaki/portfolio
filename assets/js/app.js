$(document).ready(function() {

  $(window).scroll(function() {
    if( $(window).scrollTop() > 0 ) {
      $('header').addClass('header--scrolling');
    } else {
      $('header').removeClass('header--scrolling');
    }
  });
});
