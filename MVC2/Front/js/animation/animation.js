/* =========================================
                Animation
============================================ */
// animate on scroll
$(function () {
    new WOW().init();
  });
  
  // home animation on page load
  $(window).on('load', function () {
    $("#home-page .site-header").addClass("animated fadeInDown");
    $("#home-heading").addClass("animated fadeInDown");
    $("#home-text").addClass("animated fadeInLeft");
    $(".btn-home").addClass("animated zoomIn");
  });