/* =========================================================================
                                login.html
============================================================================ */

// Change type text to obscure text by clicking eye-image

$("#login div.eye .eye-img").click(function() {
  var input1 = $("#exampleInputPassword1").attr("type");

  if (input1 == "password") {
    $("#exampleInputPassword1").attr("type", "text");
  } else {
    $("#exampleInputPassword1").attr("type", "password");
  }
});

$("#signup form .form-group:nth-child(4) div.eye .eye-img").click(function() {
  var input1 = $("#exampleInputPassword2").attr("type");

  if (input1 == "password") {
    $("#exampleInputPassword2").attr("type", "text");
  } else {
    $("#exampleInputPassword2").attr("type", "password");
  }
});

$("#signup form .form-group:nth-child(5) div.eye .eye-img").click(function() {
  var input1 = $("#exampleInputPassword3").attr("type");

  if (input1 == "password") {
    $("#exampleInputPassword3").attr("type", "text");
  } else {
    $("#exampleInputPassword3").attr("type", "password");
  }
});

$("#change form .form-group:nth-child(1) div.eye .eye-img").click(function() {
  var input4 = $("#exampleInputPassword4").attr("type");

  if (input4 == "password") {
    $("#exampleInputPassword4").attr("type", "text");
  } else {
    $("#exampleInputPassword4").attr("type", "password");
  }
});

$("#change form .form-group:nth-child(2) div.eye .eye-img").click(function() {
  var input5 = $("#exampleInputPassword5").attr("type");

  if (input5 == "password") {
    $("#exampleInputPassword5").attr("type", "text");
  } else {
    $("#exampleInputPassword5").attr("type", "password");
  }
});

$("#change form .form-group:nth-child(3) div.eye .eye-img").click(function() {
  var input6 = $("#exampleInputPassword6").attr("type");

  if (input6 == "password") {
    $("#exampleInputPassword6").attr("type", "text");
  } else {
    $("#exampleInputPassword6").attr("type", "password");
  }
});



/* =========================================================================
                                navbar
============================================================================ */

function sticky_header() {
    var header_height = jQuery('.site-header').innerHeight() / 2;
    var scrollTop = jQuery(window).scrollTop();
    if (scrollTop > header_height) {
        jQuery('body').addClass('sticky-header');
        $("#home-page .logo-wrapper img").attr("src", "../images/logo/dark-logo.png");
    } else {
        jQuery('body').removeClass('sticky-header');
        $("#home-page .logo-wrapper img").attr("src", "../images/logo/white-logo.png");
    }
}

jQuery(document).ready(function () {
  sticky_header();
});

jQuery(window).scroll(function () {
  sticky_header();  
});
jQuery(window).resize(function () {
  sticky_header();
});


/* =========================================
              Mobile Menu
============================================ */
$(function () {

  // Show mobile nav
  $("#mobile-nav-open-btn").click(function () {
      $("#mobile-nav").css("height", "100%");
  });

  // Hide mobile nav
  $("#mobile-nav-close-btn").click(function () {
      $("#mobile-nav").css("height", "0%");
  });

});







