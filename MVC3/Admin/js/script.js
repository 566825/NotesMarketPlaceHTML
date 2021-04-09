/* =========================================
              Mobile Menu
============================================ */
$(function () {
  // Show mobile nav
  $("#mobile-nav-open-btn").click(function () {
    $("#mobile-nav").css("height", "100%");
  });

  // Hide mobile nav
  // $("#mobile-nav-close-btn, #mobile-nav a").click(function () {
  //     $("#mobile-nav").css("height", "0%");
  // });
  $("#mobile-nav-close-btn").click(function () {
    $("#mobile-nav").css("height", "0%");
  });

});

$(document).ready(function () {

  /* =========================================
                logout modal script
    ============================================ */

  $(".logout-link").on('click', function () {
    var logout_link = "../../Front/includes/logout.php";
    $(".modal-logout-btn").attr("href", logout_link);
    $("#logoutModal").modal('show');
  });

  /* =========================================
                download all notes link
  ============================================ */
  $(document).on('click', '.download-all-notes-link', function (e) {
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
              upload img to db
  ============================================ */

  // 1st file input in my profile page
  var fileUploadInput1 = document.getElementById('file-upload-1');
  var infoArea1 = document.getElementById('file-upload-1-filename');
  if (infoArea1) {
    fileUploadInput1.addEventListener('change', showFileName1);
  }
  function showFileName1(event) {
    var fileInput1 = event.srcElement;
    var fileName1 = fileInput1.files[0].name;
    infoArea1.textContent = 'File name: ' + fileName1;
  }

  // 1st file input in sysconfig page
  var fileUploadInput2 = document.getElementById('file-upload-2');
  var infoArea2 = document.getElementById('file-upload-2-filename');
  if (infoArea2) {
    fileUploadInput2.addEventListener('change', showFileName2);
  }
  function showFileName2(event) {
    var fileInput2 = event.srcElement;
    var fileName2 = fileInput2.files[0].name;
    infoArea2.textContent = 'File name: ' + fileName2;
  }

  // 2nd file input in sysconfig page
  var fileUploadInput3 = document.getElementById('file-upload-3');
  var infoArea3 = document.getElementById('file-upload-3-filename');
  if (infoArea3) {
    fileUploadInput3.addEventListener('change', showFileName3);
  }
  function showFileName3(event) {
    var fileInput3 = event.srcElement;
    var fileName3 = fileInput3.files[0].name;
    infoArea3.textContent = 'File name: ' + fileName3;
  }

});




