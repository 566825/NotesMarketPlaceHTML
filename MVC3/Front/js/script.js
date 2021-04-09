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
  if (fileInput2.files.length > 1) {
    infoArea2.textContent = 'File name: ';
    for (let index = 0; index < fileInput2.files.length; index++) {
      var file_name = fileInput2.files[index].name;
      if (index == fileInput2.files.length - 1) {
        infoArea2.textContent += file_name;
      } else {
        infoArea2.textContent += file_name + ', ';
      }
    }
  } else {
    var fileName2 = fileInput2.files[0].name;  
    infoArea2.textContent = 'File name: ' + fileName2;
  }
  
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

// profile picture file input in profile page
var fileUploadInput4 = document.getElementById( 'file-upload-4' );
var infoArea4 = document.getElementById( 'file-upload-4-filename' );
if (infoArea4) {
  fileUploadInput4.addEventListener( 'change', showFileName4 );
}
function showFileName4( event ) {  
  var fileInput4 = event.srcElement;  
  var fileName4 = fileInput4.files[0].name;  
  infoArea4.textContent = 'File name: ' + fileName4;
}



$(document).ready(function () { 

  // var div_box = "<div id='load-screen'><div id='loading'></div></div>";
  // $("body").prepend(div_box);
  // $('#load-screen').delay(700).fadeOut(600, function () {
  //   $(this).remove();
  // });

  /* =========================================
              logout modal script
  ============================================ */

  $(".logout-link").on('click', function () {
    var logout_link = "../includes/logout.php";
    $(".modal-logout-btn").attr("href", logout_link);
    $("#logoutModal").modal('show');
  });

  /* =========================================
                download all notes link
  ============================================ */
  $(document).on('click', '.download-all-notes-link', function(e) {
    e.preventDefault();

    // getting id of link
    var linkClass = "." + $(this).attr("id");

    // counting total note links
    var totalLinks = $(linkClass).length;

    // for each link trigger click
    for (let i = 0; i < totalLinks; i++) {
      $(linkClass)[i].click();
    }

  });

  /* =========================================
            free Note download ButtonForm
  ============================================ */
  $('#free-note-download-form').on('submit', function () {
    var checkDownloads = $('#free-note-download-form').data('check-downloads');
    if (checkDownloads == 0) {
      var noteCount = $('#free-note-download-form').data('note-count');
      if (noteCount == 1) {
        document.getElementById('free-single-note-link').click();
      } else {
        $('.download-all-notes-link').click();
      }
    }
  });

  /* =========================================
              search notes
  ============================================ */
  loadFilteredNotes(1);

  // searching from search-bar
  $('#NoteSearchInput').on("keyup", function () {
    loadFilteredNotes(1);
  });
  // end

  $('.search-note-dropdown').on('change', function () {
    loadFilteredNotes(1);
  });
  
  // search by select input function
  function loadFilteredNotes(page) {
    let searched_keyword = $('#NoteSearchInput').val();
    let selected_type = $('#filterByNoteType').val();
    let selected_category = $('#filterByNoteCategory').val();
    let selected_university = $('#filterByNoteUniversity').val();
    let selected_course = $('#filterByNoteCourse').val();
    let selected_country = $('#filterByNoteCountry').val();
    let selected_rating = $('#filterByNoteRatings').val();

    $.ajax({
      url: "../includes/AJAX/filter-notes.php",
      type: "POST",
      data: {
        "page": page,
        "searched_keyword": searched_keyword,
        "selected_type": selected_type,
        "selected_category": selected_category,
        "selected_university": selected_university,
        "selected_course": selected_course,
        "selected_country": selected_country,
        "selected_rating": selected_rating,
      },
      success: function (data) {
        $("#filtered-notes-div").html(data);
      },
      error: function (e) {
        console.log(e);
      }
    });
  }

  // pagination
  $(document).on("click", "#notes-pagination a", function (e) {
    e.preventDefault();
    var page_id = $(this).attr("id");
    loadFilteredNotes(page_id);
  });
  // end
  // ////////////////////////////////////////////////////////////////////////////////////////////////////////////

});


































































// $(document).ready(function () {

//   loadNotes();

//   // initially load all notes script --
//   function loadNotes(page) {
//     $.ajax({
//       url: "../includes/filter-notes.php",
//       type: "POST",
//       data: {"page": page},
//       success: function(data) {
//         $("#filtered-notes-div").html(data);
//       },
//       error: function (e) {
//         console.log(e);
//       }
//     });
//   }    

//   // pagination ajax
//   $(document).on("click", "#notes-pagination a", function(e) {
//     e.preventDefault(); 
//     var page_id = $(this).attr("id");
//     loadNotes(page_id);
//   });
//   // ends --

//   // searchbar
//   $('#NoteSearchInput').on("keyup", function () {
//     var noteSearchKeyword = $(this).val();
//     $('#NoteSearchInput').on("keyup", function () {
//       var noteSearchKeyword = $(this).val();
//       $.ajax({
//         url: "../includes/filter-notes.php",
//         type: "POST",
//         data: {
//           "noteSearchKeyword": noteSearchKeyword
//         },
//         success: function (data) {
//           $("#filtered-notes-div").html(data);
//         },
//         error: function (e) {
//           console.log(e);
//         }
//       });
//     });
//   });

// });



