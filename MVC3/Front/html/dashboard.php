<?php $page_name = "Dashboard"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php include "../includes/modals/delete-note-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: login.php");
    die();
}
?>

<?php
if (isset($_GET['delete'])) {
    $get_note_id = $_GET['delete'];

    $delete = "DELETE FROM seller_notes WHERE NoteID = {$get_note_id}";
    $delete_query = mysqli_query($connection, $delete);
    confirmQuery($delete_query);

    // deleting folder of note
    $dirPath = "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id;
    deleteDirectory($dirPath);

    // delete success popup
    $_SESSION['noteDeleted'] = '';
    header("Location: dashboard.php");
}
?>

<body>

    <section id="dashboard">

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
                                <li class="active">
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
                                            <a class="dropdown-item" href="my-downloads.php">My Downloads</a>
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
                                <li class="active">
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
                                                    <a class="dropdown-item" href="my-downloads.php">My Downloads</a>
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

        <!-- Dashboard box -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-left">
                        <p class="dashboard-heading">Dashboard</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                        <button class="btn btn-general btn-purple add-note-btn" onclick="window.location.href='add-note.php'">Add Note</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row no-gutters">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row no-gutters my-earning-wrapper-left">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="my-earning-heading dashboard-single-box">
                                    <img src="../images/Dashboard/earning-icon.svg" alt="">
                                    <p class="box-heading">My Earning</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="my-sold-notes.php" style="text-decoration: none;">
                                    <div class="number-of-notes-sold dashboard-single-box">
                                        <?php
                                        $UserID = $_SESSION['UserID'];
                                        $sold_notes = "SELECT * FROM downloads WHERE IsSellerHasAllowedDownload = 1 AND Seller = $UserID ";
                                        $sold_notes_query = mysqli_query($connection, $sold_notes);
                                        confirmQuery($sold_notes_query);
                                        $sold_count = mysqli_num_rows($sold_notes_query);
                                        ?>
                                        <p class="dashboard-single-detail"><?php echo $sold_count; ?></p>
                                        <p class="dashboard-single-detail-inst">Number of Notes Sold</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="money-earned dashboard-single-box">
                                    <?php
                                    $earning = "SELECT SUM(PurchasedPrice) as PurchasedPrice FROM downloads WHERE IsSellerHasAllowedDownload = 1 AND Seller = $UserID ";
                                    $earning_query = mysqli_query($connection, $earning);
                                    confirmQuery($earning_query);
                                    $total_earning_row = mysqli_fetch_assoc($earning_query);
                                    $total_earning = empty($total_earning_row['PurchasedPrice']) ? 0 : $total_earning_row['PurchasedPrice'];
                                    ?>
                                    <p class="dashboard-single-detail"><?php echo "$" . $total_earning; ?></p>
                                    <p class="dashboard-single-detail-inst">Money Earned</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-earning-wrapper-right">

                        <div class="row no-gutters">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="my-downloads.php" style="text-decoration: none;">
                                    <div class="my-downloads dashboard-single-box">
                                        <?php
                                        $my_downloads = "SELECT * FROM downloads WHERE IsSellerHasAllowedDownload = 1 AND Downloader = $UserID ";
                                        $my_downloads_query = mysqli_query($connection, $my_downloads);
                                        confirmQuery($my_downloads_query);
                                        $my_downloads_count = mysqli_num_rows($my_downloads_query);
                                        ?>
                                        <p class="dashboard-single-detail"><?php echo $my_downloads_count; ?></p>
                                        <p class="dashboard-single-detail-inst">My Downloads</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="my-rejected-notes.php" style="text-decoration: none;">
                                    <div class="my-rejected-notes dashboard-single-box">
                                        <?php
                                        $rejected_notes = "SELECT * FROM seller_notes WHERE Status = 10 AND SellerID = $UserID";
                                        $rejected_notes_query = mysqli_query($connection, $rejected_notes);
                                        confirmQuery($rejected_notes_query);
                                        $rejected_notes_count = mysqli_num_rows($rejected_notes_query);
                                        ?>
                                        <p class="dashboard-single-detail"><?php echo $rejected_notes_count; ?></p>
                                        <p class="dashboard-single-detail-inst">My Rejected Notes</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="buyers-requests.php" style="text-decoration: none;">
                                    <div class="buyer-request dashboard-single-box">
                                        <?php
                                        $buyer_requests = "SELECT * FROM downloads WHERE IsSellerHasAllowedDownload = 0 AND Seller = $UserID ";
                                        $buyer_requests_query = mysqli_query($connection, $buyer_requests);
                                        confirmQuery($buyer_requests_query);
                                        $buyer_requests_count = mysqli_num_rows($buyer_requests_query);
                                        ?>
                                        <p class="dashboard-single-detail"><?php echo $buyer_requests_count; ?></p>
                                        <p class="dashboard-single-detail-inst">Buyer Requests</p>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- Dashboard box -->

        <!-- progress note table -->
        <div class="content-box-lg">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">In Progress Notes</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="in-progress-notes-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search notes here...">
                            </div>

                            <button id="in-progress-notes-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="in-progress-notes-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="in-progress-notes-table">
                            <thead>
                                <tr>
                                    <th scope="col">Added date</th>
                                    <th scope="col">title</th>
                                    <th scope="col">category</th>
                                    <th scope="col">status</th>
                                    <th scope="col" class="text-center" data-orderable="false">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $in_progressed_notes = "SELECT NoteID, Status, DATE_FORMAT(CreatedDate, '%d-%m-%Y') as CreatedDate, Title, Category FROM seller_notes WHERE SellerID = {$UserID} AND (Status = 6 OR Status = 7 OR Status = 8) AND IsActive = 1 ";
                                $in_progressed_notes_query = mysqli_query($connection, $in_progressed_notes);
                                confirmQuery($in_progressed_notes_query);
                                $in_progressed_notes_count = mysqli_num_rows($in_progressed_notes_query);

                                if ($in_progressed_notes_count != 0) {
                                    while ($row = mysqli_fetch_assoc($in_progressed_notes_query)) {
                                        $note_id = $row['NoteID'];
                                        $addedDate = $row['CreatedDate'];
                                        $addedDateStr = strtotime($addedDate);
                                        $title = $row['Title'];
                                        $NoteCategoryID = $row['Category'];
                                        $category = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Name FROM note_categories WHERE CategoryID = {$NoteCategoryID} "))['Name'];
                                        $status = $row['Status'];
                                        if ($status == 6) {
                                            $NoteStatus = 'Draft';
                                        }
                                        if ($status == 7) {
                                            $NoteStatus = 'Submitted';
                                        }
                                        if ($status == 8) {
                                            $NoteStatus = 'In Review';
                                        }
                                ?>
                                        <tr>
                                            <td data-sort="<?php echo $addedDateStr; ?>"><?php echo $addedDate; ?></td>
                                            <td><?php echo $title; ?></td>
                                            <td><?php echo $category; ?></td>                                            
                                            <td><?php echo $NoteStatus; ?></td>

                                            <?php
                                            if ($status == 6) { ?>
                                                <td class='text-center'>
                                                    <a href='add-note.php?note_id=<?php echo $note_id; ?>'><img class='edit-img-in-table' src='../images/Dashboard/edit.png' alt='edit'></a>
                                                    <a class='delete-note-link' href='' rel='<?php echo $note_id; ?>' data-toggle='modal' data-target='#deleteNoteModal'><img class='delete-img-in-table' src='../images/Dashboard/delete.png' alt='edit'></a>
                                                </td>
                                            <?php  } else { ?>
                                                <td class='text-center'><a href='note-detail.php?note_id=<?php echo $note_id; ?>'><img class='eye-img-in-table' src='../images/Dashboard/eye.png' alt='eye'></a></td>
                                            <?php } ?>
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

        <!-- published note table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Published Notes</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="published-notes-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search notes here...">
                            </div>

                            <button id="published-notes-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="published-notes-table general-table-responsive">
                    <div class="table-responsive-lg">

                        <table class="table table-bordered" id="published-notes-table">
                            <thead>
                                <tr>
                                    <th scope="col">Added date</th>
                                    <th scope="col">title</th>
                                    <th scope="col">category</th>
                                    <th scope="col">sell type</th>
                                    <th scope="col">price</th>
                                    <th scope="col" class="text-center" data-orderable="false">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $published_notes = "SELECT NoteID, DATE_FORMAT(PublishedDate, '%d-%m-%Y') as PublishedDate, Title, Category, IsPaid, SellingPrice FROM seller_notes WHERE SellerID = $UserID AND Status = 9 AND IsActive = 1 ";
                                $published_notes_query = mysqli_query($connection, $published_notes);
                                confirmQuery($published_notes_query);
                                $published_notes_count = mysqli_num_rows($published_notes_query);

                                if ($published_notes_count != 0) {
                                    while ($row = mysqli_fetch_assoc($published_notes_query)) {
                                        $p_note_id = $row['NoteID'];
                                        $publishedDate = $row['PublishedDate'];
                                        $publishedDateStr = strtotime($publishedDate);
                                        $title = $row['Title'];
                                        $NoteCategoryID = $row['Category'];
                                        $category = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Name FROM note_categories WHERE CategoryID = {$NoteCategoryID} "))['Name'];
                                        $sell_type = $row['IsPaid'];
                                        $selling_price = $row['SellingPrice'];

                                        echo "<tr>";                                        
                                        echo "<td data-sort='{$publishedDateStr}'>$publishedDate</td>";
                                        echo "<td>$title</td>";
                                        echo "<td>$category</td>";
                                        if ($sell_type == 0) {
                                            $st = "Free";
                                        } else {
                                            $st = "Paid";
                                        }
                                        echo "<td>" . $st . "</td>";
                                        if ($selling_price == null) {
                                            $selling_price = 0;
                                        }
                                        echo "<td>$" . $selling_price . "</td>";
                                        echo "<td class='text-center'><a href='note-detail.php?note_id={$p_note_id}'><img class='eye-img-in-table' src='../images/Dashboard/eye.png' alt='eye'></a></td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>
        <!-- published note table -->

        <!-- Footer  -->
        <?php include "../includes/footer.php"; ?>
        <!-- Footer Ends -->

    </section>

    <!-- Java-scripts -->

    <!-- JQuery -->
    <script src="../js/JQuery/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- datatables -->
    <script src="../js/datatables/jquery.dataTables.min.js"></script>
    <script src="../js/datatables/data-table.js"></script>

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <!-- note is edited alert -->
    <?php
    if (isset($_SESSION['noteEdited'])) { ?>

        <script>
            swal({
                text: 'Note Updated Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['noteEdited']);
    }
    ?>

    <!-- note is addeed alert -->
    <?php
    if (isset($_SESSION['noteAdded'])) { ?>

        <script>
            swal({
                text: 'Note Saved Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['noteAdded']);
    }
    ?>
    <!-- end -->

    <!-- note is deleted alert -->
    <?php
    if (isset($_SESSION['noteDeleted'])) { ?>

        <script>
            swal({
                text: 'Note Deleted Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        if (!isset($_GET['delete'])) {
            unset($_SESSION['noteDeleted']);
        }
    }
    ?>

    <!-- note is deleted alert -->
    <?php
    if (isset($_SESSION['notePublished'])) { ?>

        <script>
            swal({
                text: 'Note Published Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['notePublished']);
    }
    ?>

    <!-- delete modal script -->
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete-note-link', function() {
                var deleting_note_id = $(this).attr("rel");
                console.log(deleting_note_id);
                var deleting_note_link = "dashboard.php?delete=" + deleting_note_id + " ";
                $(".modal-delete-note-link").attr("href", deleting_note_link);
                // $("#deleteNoteModal").modal('show');
            });
        });
    </script>

    <!-- JQuery-Validation -->
    <script src="../js/JQuery-Validation/jquery.validate.js"></script>
    <script src="../js/form-validation/form-validation.js"></script>

    <!-- Java-scripts -->
</body>

</html>