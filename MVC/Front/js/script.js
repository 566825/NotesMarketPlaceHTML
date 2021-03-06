/* =========================================================================
                                preloading
============================================================================ */
// $(document).ready(function(){

//   var div_box = "<div id='preloader'><div id='status'></div></div>";
//   $("body").prepend(div_box);

//   $('#preloader').delay(700).fadeOut('fast', function () {
//     $(this).remove();
//   });

// });



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


/* =========================================
              IsPaid
============================================ */
$('input[type=radio][name="IsPaid"]').change(function() {
  $i = $(this).val();
  if ($i == 0) {
    document.getElementById('SellingPrice').readOnly = true;
    document.getElementById('SellingPrice').value = '';
    document.getElementById('SellingPrice').placeholder = '';
    document.getElementById('SellingPrice').required = false;
    document.getElementById('file-upload-3').required = false;
  } else {
    document.getElementById('SellingPrice').readOnly = false;
    document.getElementById('SellingPrice').placeholder = 'Enter your price';
    document.getElementById('SellingPrice').required = true;
    document.getElementById('file-upload-3').required = true;
  }
});



/* =========================================
              upload img to db
============================================ */
// showing uploaded filename under input type file
// 1st file input in addnote page
var fileUploadInput1 = document.getElementById( 'file-upload-1' );
var infoArea1 = document.getElementById( 'file-upload-1-filename' );
if (infoArea1) {
  fileUploadInput1.addEventListener( 'change', showFileName1 );
}
function showFileName1( event ) {  
  var fileInput1 = event.srcElement;  
  var fileName1 = fileInput1.files[0].name;  
  infoArea1.textContent = 'File name: ' + fileName1;
}

// 2nd file input in addnote page
var fileUploadInput2 = document.getElementById( 'file-upload-2' );
var infoArea2 = document.getElementById( 'file-upload-2-filename' );
if (infoArea2) {
  fileUploadInput2.addEventListener( 'change', showFileName2 );
}
function showFileName2( event ) {  
  var fileInput2 = event.srcElement;  
  var fileName2 = fileInput2.files[0].name;  
  infoArea2.textContent = 'File name: ' + fileName2;
}

// 3rd file input in addnote page
var fileUploadInput3 = document.getElementById( 'file-upload-3' );
var infoArea3 = document.getElementById( 'file-upload-3-filename' );
if (infoArea3) {
  fileUploadInput3.addEventListener( 'change', showFileName3 );
}
function showFileName3( event ) {  
  var fileInput3 = event.srcElement;  
  var fileName3 = fileInput3.files[0].name;  
  infoArea3.textContent = 'File name: ' + fileName3;
}

