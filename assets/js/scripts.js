(function(){

  //-------------------------- Global variables 
  $body = $('body');

  
  //-------------------------- init

  // Scrollit nav
  $.scrollIt();


  // BxSlider
  $('#carousel').bxSlider({
    mode:'fade',
  });




  //-------------------------- Navigation
  $headerLogo = $('.main-header__logo');
  
  // Click logo and navigation shows
  $headerLogo.on('click', function(){
    $body.toggleClass("nav--open body-fixed");
  });

  // Click link and nav shuts
  $('.nav__wrap__links__link').on('click', function(){
    $body.removeClass('nav--open body-fixed');
  });

  // Close nav
  $('.main-header__close').on('click', function(){
    $body.removeClass('nav--open body-fixed');
  });



})(jQuery)