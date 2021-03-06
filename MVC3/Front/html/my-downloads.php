<?php $page_name = "My downloads"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: login.php");
    die();
}
?>

<body>

    <section id="my-downloads">

        <!-- Header -->
        <div class="only-white-nav extra-style-nav">
            <header class="site-header">
                <div class="header-wrapper">

                    <!-- Mobile Menu Open Button -->
                    <span id="mobile-nav-open-btn">&#9776;</span>

                    <div class="logo-wrapper">
                        <a href="index.php" title="Site Logo">
                            <img src="../images/logo/dark-logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="navigation-wrapper">
                        <nav class="main-nav">
                            <ul class="menu-navigation">
                                <li>
                                    <a class="hover-bottom-border" href="search-notes.php">Search Notes</a>
                                </li>
                                <li>
                                    <a class="hover-bottom-border" href="dashboard.php">Sell Your Notes</a>
                                </li>
                                <li>
                                    <a class="hover-bottom-border" href="buyers-requests.php">Buyer Requests</a>
                                </li>
                                <li>
                                    <a class="hover-bottom-border" href="faq.php">FAQ</a>
                                </li>
                                <li>
                                    <a class="hover-bottom-border" href="contact-us.php">Contact Us</a>
                                </li>
                                <li class="logged-in-user-photo-li">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="logged-in-user-photo">
                                                <img src="<?php echo $user_dp_path; ?>" alt="User Photo" class="rounded-circle">
                                            </div>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="user-profile.php">My Profile</a>
                                            <a class="dropdown-item active" href="my-downloads.php">My Downloads</a>
                                            <a class="dropdown-item" href="my-sold-notes.php">My Sold Notes</a>
                                            <a class="dropdown-item" href="my-rejected-notes.php">My Rejected Notes</a>
                                            <a class="dropdown-item" href="change-password.php">Change Password</a>
                                            <a class="dropdown-item logout-btn-dropdown logout-link" href="javascript:void(0)">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple logout-link" href="javascript:void(0)" title="Download" role="button">Logout</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Mobile Menu -->
                    <div id="mobile-nav">
                        <img class="logo-in-mobile-menu" src="../images/logo/dark-logo.png" alt="Notes Logo">
                        <!-- Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>

                        <div id="mobile-nav-content">
                            <ul class="nav">
                                <li>
                                    <a href="search-notes.php">Search Notes</a>
                                </li>
                                <li>
                                    <a href="dashboard.php">Sell Your Notes</a>
                                </li>
                                <li>
                                    <a href="buyers-requests.php">Buyer Requests</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ</a>
                                </li>
                                <li>
                                    <a href="contact-us.php"">Contact Us</a>
                                </li>
                                <li class=" logged-in-user-photo-li">
                                        <div class="logged-in-user-photo">
                                            <div class="dropdown">
                                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="<?php echo $user_dp_path; ?>" alt="User Photo" class="rounded-circle">
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="user-profile.php">My Profile</a>
                                                    <a class="dropdown-item active" href="my-downloads.php">My Downloads</a>
                                                    <a class="dropdown-item" href="my-sold-notes.php">My Sold Notes</a>
                                                    <a class="dropdown-item" href="my-rejected-notes.php">My Rejected Notes</a>
                                                    <a class="dropdown-item" href="change-password.php">Change Password</a>
                                                    <a class="dropdown-item logout-btn-dropdown logout-link" href="javascript:void(0)">Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple logout-link" href="javascript:void(0)" title="Download" role="button">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- Header ends -->

        <?php include "../includes/modals/add-review-modal.php"; ?>
        <?php include "../includes/modals/report-note-modal.php"; ?>

        <!-- my downloads table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="my-downloads-heading">My Downloads</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="my-downloads-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search notes here...">
                            </div>

                            <button id="my-downloads-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

                <div class="my-downloads-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="my-downloads-notes-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" data-orderable="false">sr no.</th>
                                    <th scope="col">Note title</th>
                                    <th scope="col">category</th>
                                    <th scope="col">Buyer</th>
                                    <th scope="col">Sell type</th>
                                    <th scope="col">price</th>
                                    <th scope="col">downloaded time</th>
                                    <th class="text-center" data-orderable="false" scope="col" width="80px">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $UserID = $_SESSION['UserID'];
                                $select_my_downloads = "SELECT DownloadID, NoteID, IsPaid, PurchasedPrice, NoteTitle, NoteCategory, DATE_FORMAT(AttachmentDownloadedDate, '%d %b %Y, %T') as AttachmentDownloadedDate FROM downloads WHERE Downloader = {$UserID} AND IsSellerHasAllowedDownload = 1 ORDER BY AttachmentDownloadedDate DESC ";
                                $select_my_downloads_query = mysqli_query($connection, $select_my_downloads);
                                confirmQuery($select_my_downloads_query);
                                $select_my_downloads_count = mysqli_num_rows($select_my_downloads_query);

                                if ($select_my_downloads_count != 0) {
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($select_my_downloads_query)) {
                                        $note_id = $row['NoteID'];
                                        $download_id = $row['DownloadID'];

                                        // getting attachment path for downloading note pdf
                                        $get_attachments = "SELECT * FROM seller_notes_attachements WHERE NoteID = {$note_id} AND IsActive = 1 ";
                                        $get_attachments_query = mysqli_query($connection, $get_attachments);
                                        confirmQuery($get_attachments_query);
                                        $get_attachments_count = mysqli_num_rows($get_attachments_query);
                                        $get_attachments_row = mysqli_fetch_assoc($get_attachments_query);
                                        if ($get_attachments_count == 1) {
                                            $attachment_file_link = $get_attachments_row['FilePath'];
                                        } else {
                                            foreach ($get_attachments_query as $get_attachments_row) {
                                                $attachment_file_link = $get_attachments_row['FilePath'];
                                                echo "<a class='{$note_id}' href='{$attachment_file_link}' download></a>";
                                            }
                                        }

                                        $note_title = $row['NoteTitle'];
                                        $note_cat = $row['NoteCategory'];
                                        $note_is_paid = $row['IsPaid'];
                                        if ($note_is_paid == 0) {
                                            $note_sell_type = "Free";
                                        } else {
                                            $note_sell_type = "Paid";
                                        }
                                        $note_price = $row['PurchasedPrice'];
                                        if ($note_price == NULL) {
                                            $note_price = "$" . '0';
                                        } else {
                                            $note_price = "$" . $note_price;
                                        }
                                        $note_downloaded_date = $row['AttachmentDownloadedDate'];
                                        $noteDownloadedDateStr = strtotime($note_downloaded_date);
                                        $note_downloader_email = $_SESSION['EmailID'];
                                ?>

                                        <tr>
                                            <td class="text-center"></td>
                                            <?php $i++; ?>
                                            <td class="purple-td"><a href='note-detail.php?note_id=<?php echo $note_id; ?>'><?php echo $note_title; ?></a></td>
                                            <td><?php echo $note_cat; ?></td>
                                            <td><?php echo $note_downloader_email; ?></td>
                                            <td><?php echo $note_sell_type; ?></td>
                                            <td><?php echo $note_price; ?></td>
                                            <td data-sort='<?php echo $noteDownloadedDateStr; ?>'><?php echo $note_downloaded_date; ?></td>
                                            <td class="text-center visible-overflow-for-dropdown">
                                                <a href='note-detail.php?note_id=<?php echo $note_id; ?>'><img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit"></a>

                                                <div class="dropdown dropdown-dots-table">
                                                    <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                                    </a>

                                                    <div class="dropdown-menu">
                                                        <?php if ($get_attachments_count == 1) {
                                                            echo "<a class='dropdown-item' href='{$attachment_file_link}' download>Download Note</a>";
                                                        } else {
                                                            echo "<a id='{$note_id}' class='download-all-notes-link dropdown-item' href='#'>Download Note</a>";
                                                        } ?>
                                                        <a class="dropdown-item review-note-modal-link" rel="<?php echo $note_id ?>-<?php echo $download_id; ?>" href="#" data-toggle="modal" data-target="#addReviewModal">Add Reviews / Feedback</a>
                                                        <a class="dropdown-item report-note-modal-link" rel="<?php echo $note_id ?>-<?php echo $download_id; ?>" data-note-name="<?php echo $note_title; ?>" href="#" data-toggle="modal" data-target="#reportNoteModal">Report as Inappropriate</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php
                                    }
                                } 
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>
        <!-- progress note table -->

        <!-- Footer  -->
        <?php include "../includes/footer.php"; ?>
        <!-- Footer Ends -->

    </section>

    <!-- prevent form resubmission -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <!-- end -->

    <!-- Java-scripts -->

    <!-- JQuery -->
    <script src="../js/JQuery/jquery.js"></script>

    <!-- JQuery-Validation -->
    <script src="../js/JQuery-Validation/jquery.validate.js"></script>
    <script src="../js/form-validation/form-validation.js"></script>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- datatables -->
    <script src="../js/datatables/jquery.dataTables.min.js"></script>
    <script src="../js/datatables/data-table.js"></script>

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <!-- add review script -->
    <script>
        $(document).ready(function() {

            // note review
            $(".review-note-modal-link").on('click', function() {
                var review_note_id = $(this).attr("rel");
                $('#submitNoteReview').attr('value', review_note_id);
            }); 

            // note report
            $(".report-note-modal-link").on('click', function() {
                var reporting_note_name = $(this).data('note-name');
                var reporting_note_id = $(this).attr("rel");
                $('#submitNoteReport').attr('value', reporting_note_id);
                $(".note-title-in-report-modal").html(reporting_note_name);
            }); 

        });
    </script>

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <?php
    if (isset($_SESSION['NoteReviewAdded'])) { ?>

        <script>
            swal({
                text: 'Note Reviewed Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['NoteReviewAdded']);
    }
    ?>

    <?php
    if (isset($_SESSION['NoteReported'])) { ?>

        <script>
            swal({
                text: 'Note Reported Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['NoteReported']);
    }
    ?>

    <!-- Java-scripts -->
</body>

</html>