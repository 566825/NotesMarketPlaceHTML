$(document).ready(function () {

    /* =========================================
                  rejected notes datatable
      ============================================ */

    var rejectedNotesTable = $('#rejected-notes-table').DataTable({
        "order": [[ 4, "desc" ]],
        "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 10,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#rejected-note-search-btn', function () {
        var x = $('#rejected-note-search-bar').val();
        rejectedNotesTable.search(x).draw();
    });

    /* =========================================
                sold notes datatable
    ============================================ */

    var soldNotesTable = $('#sold-notes-table').DataTable({
        "order": [[ 6, "desc" ]],
        "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 10,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#sold-note-search-btn', function () {
        var y = $('#sold-note-search-bar').val();
        soldNotesTable.search(y).draw();
    });

    /* =========================================
                my downloads datatable
    ============================================ */
    var myDownloadsTable = $('#my-downloads-notes-table').DataTable({
        "order": [[ 6, "desc" ]],
        "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        },
        'sDom': '"top"i',
        "iDisplayLength": 10,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#my-downloads-search-btn', function () {
        var z = $('#my-downloads-search-bar').val();
        myDownloadsTable.search(z).draw();
    });

    /* =========================================
                in progressed note datatable
    ============================================ */
    var inProgressNotesTable = $('#in-progress-notes-table').DataTable({
        "order": [[ 0, "desc" ]],
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

    $(document).on('click', '#in-progress-notes-search-btn', function () {
        var a = $('#in-progress-notes-search-bar').val();
        inProgressNotesTable.search(a).draw();
    });

    /* =========================================
                published note datatable
    ============================================ */
    var publishedNotesTable = $('#published-notes-table').DataTable({
        "order": [[ 0, "desc" ]],
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
        var b = $('#published-notes-search-bar').val();
        publishedNotesTable.search(b).draw();
    });

    /* =========================================
                 buyer requests datatable
    ============================================ */
    var buyerRequestsTable = $('#buyer-requests-table').DataTable({
        'sDom': '"top"i',
        "iDisplayLength": 10,
        "bInfo": false,
        language: {
            "zeroRecords": "No record found",
            paginate: {
                next: "<img src='../images/pagination/right-arrow.png' alt=''>",
                previous: "<img src='../images/pagination/left-arrow.png' alt=''>"
            }
        }
    });

    $(document).on('click', '#buyer-requests-search-btn', function () {
        var c = $('#buyer-requests-search-bar').val();
        buyerRequestsTable.search(c).draw();
    });


});