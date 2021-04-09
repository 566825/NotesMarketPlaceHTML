$(document).ready(function () {

    /* =========================================
        dashboard published notes datatable
    ============================================ */   

    var dashboardPublishedNotesTable = $('#dashboard-published-notes-table').DataTable({
        "order": [[8, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#dashboard-published-notes-search-btn', function () {
        var a = $('#dashboard-published-notes-search-bar').val();
        dashboardPublishedNotesTable.search(a).draw();
    });

    $(document).on('change', '#dashboard-published-notes-search-by-month', function () {
        loadPublishedNotesByMonth($(this).val());
    });

    function loadPublishedNotesByMonth(month) {
        let monthVal = month;
        dashboardPublishedNotesTable.column(7).search(monthVal).draw();
    }

    var currentMonth = $('#dashboard-published-notes-search-by-month').val();
    loadPublishedNotesByMonth(currentMonth);

    // unpublish note
    $(document).on('click', '.unpublish-note-modal-link', function() {
        var unpublish_note_name = $(this).data('note-name');
        var unpublish_note_id = $(this).attr("rel");
        $("#unpublishNoteBtn").attr('value', unpublish_note_id);
        $(".note-title-in-unpublish-modal").html(unpublish_note_name);
    });

    /* =========================================
            notes under review datatable
    ============================================ */   

    var notesUnderReviewTable = $('#notes-under-review-table').DataTable({
        "order": [[5, "asc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#notes-under-review-search-btn', function () {
        let a = $('#notes-under-review-search-bar').val();
        notesUnderReviewTable.search(a).draw();
    });

    $(document).on('change', '#notes-under-review-search-by-seller', function () {
        let b = $(this).val();
        notesUnderReviewTable.column(3).search(b).draw();
    });

    // if seller is already selected
    if ($('#notes-under-review-search-by-seller').val() != '') {
        let g = $('#notes-under-review-search-by-seller').val();
        notesUnderReviewTable.column(3).search(g).draw();
    }

    /* =========================================
            published notes datatable
    ============================================ */

    var publishedNotesTable = $('#published-notes-table').DataTable({
        "order": [[7, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#published-notes-search-btn', function () {
        let a = $('#published-notes-search-bar').val();
        publishedNotesTable.search(a).draw();
    });

    $(document).on('change', '#published-notes-search-by-seller', function () {
        let b = $(this).val();
        publishedNotesTable.column(5).search(b).draw();
    });

    // if seller is already selected
    if ($('#published-notes-search-by-seller').val() != '') {
        let g = $('#published-notes-search-by-seller').val();
        publishedNotesTable.column(5).search(g).draw();
    }

    /* =========================================
            downloaded notes datatable
    ============================================ */

    var downloadedNotesTable = $('#downloaded-notes-table').DataTable({
        "order": [[9, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#downloaded-notes-search-btn', function () {
        let a = $('#downloaded-notes-search-bar').val();
        downloadedNotesTable.search(a).draw();
    });

    // note title
    $(document).on('change', '#downloaded-notes-search-by-note-title', function () {
        let a = "^" + $(this).val() + "$";
        downloadedNotesTable.column(1).search(a, true, false).draw();
    });

    // if note is already selected
    if ($('#downloaded-notes-search-by-note-title').val() != '') {
        let g = "^" + $('#downloaded-notes-search-by-note-title').val() + "$";
        downloadedNotesTable.column(1).search(g, true, false).draw();
    }

    // seller
    $(document).on('change', '#downloaded-notes-search-by-seller', function () {
        let b = $(this).val();
        downloadedNotesTable.column(5).search(b).draw();
    });

    // buyer
    $(document).on('change', '#downloaded-notes-search-by-buyer', function () {
        let c = $(this).val();
        downloadedNotesTable.column(3).search(c).draw();
    });

    // if buyer is already selected
    if ($('#downloaded-notes-search-by-buyer').val() != '') {
        let g = $('#downloaded-notes-search-by-buyer').val();
        downloadedNotesTable.column(3).search(g).draw();
    }

    /* =========================================
            rejected notes datatable
    ============================================ */

    var rejectedNotesTable = $('#rejected-notes-table').DataTable({
        "order": [[5, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#rejected-notes-search-btn', function () {
        let a = $('#rejected-notes-search-bar').val();
        rejectedNotesTable.search(a).draw();
    });

    $(document).on('change', '#rejected-notes-search-by-seller', function () {
        let b = $(this).val();
        rejectedNotesTable.column(3).search(b).draw();
    });

    /* =========================================
            member notes datatable
    ============================================ */

    $('#member-notes-table').DataTable({
        "order": [[6, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    /* =========================================
               all members datatable
    ============================================ */

    var allMembersTable = $('#all-members-table').DataTable({
        "order": [[4, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#all-members-search-btn', function () {
        let a = $('#all-members-search-bar').val();
        allMembersTable.search(a).draw();
    });

    /* =========================================
               spam reports datatable
    ============================================ */

    var spamReportsTable = $('#spam-reports-table').DataTable({
        "order": [[4, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#spam-reports-search-btn', function () {
        let a = $('#spam-reports-search-bar').val();
        spamReportsTable.search(a).draw();
    });

    /* =========================================
               manage admins datatable
    ============================================ */

    var manageAdminsTable = $('#manage-administrator-table').DataTable({
        "order": [[5, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#manage-administrator-search-btn', function () {
        let a = $('#manage-administrator-search-bar').val();
        manageAdminsTable.search(a).draw();
    });

    /* =========================================
               manage category datatable
    ============================================ */

    var manageCategoryTable = $('#manage-category-table').DataTable({
        "order": [[3, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#manage-category-search-btn', function () {
        let a = $('#manage-category-search-bar').val();
        manageCategoryTable.search(a).draw();
    });

    /* =========================================
               manage type datatable
    ============================================ */

    var manageTypeTable = $('#manage-type-table').DataTable({
        "order": [[3, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#manage-type-search-btn', function () {
        let a = $('#manage-type-search-bar').val();
        manageTypeTable.search(a).draw();
    });

    /* =========================================
               manage country datatable
    ============================================ */

    var manageCountryTable = $('#manage-country-table').DataTable({
        "order": [[3, "desc"]],
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 5,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#manage-country-search-btn', function () {
        let a = $('#manage-country-search-bar').val();
        manageCountryTable.search(a).draw();
    });


});