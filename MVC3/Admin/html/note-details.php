<?php $page_name = "Note Details"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}

// delete Review
if (isset($_GET['r_id'])) {
    $review_id = substr($_GET['r_id'], 0, strpos($_GET['r_id'], "-"));
    $note_id = substr($_GET['r_id'], strpos($_GET['r_id'], '-') + 1);

    // delete review
    $delete_review = mysqli_query($connection, "UPDATE seller_notes_reviews SET IsActive = 0 WHERE ReviewID = {$review_id} ");
    confirmQuery($delete_review);

    $_SESSION['reviewDeleted'] = '';
    header("Location: note-details.php?note_id=" . $note_id);
    die;
}
?>

<body>

    <section id="note-detail">

        <!-- Header -->
        <div class="only-white-nav extra-style-nav only-white-nav-with-mb">
            <header class="site-header">
                <div class="header-wrapper">

                    <!-- Mobile Menu Open Button -->
                    <span id="mobile-nav-open-btn">&#9776;</span>

                    <div class="logo-wrapper">
                        <a href="dashboard.php" title="Site Logo">
                            <img src="../images/logo/dark-logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="navigation-wrapper">
                        <nav class="main-nav">
                            <ul class="menu-navigation">
                                <li>
                                    <a class="hover-bottom-border" href="dashboard.php">Dashboard</a>
                                </li>
                                <li>
                                    <div class="dropdown notes-btn-dropdown">
                                        <a class="hover-bottom-border" role="button" id="notes-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>

                                        <div class="dropdown-menu" aria-labelledby="notes-dropdown-lable">
                                            <a class="dropdown-item" href="notes-under-review.php">Notes Under Review</a>
                                            <a class="dropdown-item" href="published-notes.php">Published Notes</a>
                                            <a class="dropdown-item" href="downloaded-notes.php">Downloaded Notes</a>
                                            <a class="dropdown-item" href="rejected-notes.php">Rejected Notes</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="hover-bottom-border" href="members.php">Members</a>
                                </li>
                                <li>
                                    <div class="dropdown reports-btn-dropdown">
                                        <a class="hover-bottom-border" role="button" id="reports-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>

                                        <div class="dropdown-menu" aria-labelledby="reports-dropdown-lable">
                                            <a class="dropdown-item" href="spam-reports.php">Spam Reports</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown settings-btn-dropdown">
                                        <a class="hover-bottom-border" role="button" id="settings-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>

                                        <?php if ($_SESSION['UserRole'] == 1) { ?>
                                            <div class="dropdown-menu" aria-labelledby="settings-dropdown-lable">
                                                <a class="dropdown-item" href="manage-system-configuration.php">Manage System Configuration</a>
                                                <a class="dropdown-item" href="manage-administrator.php">Manage Administrator</a>
                                            <?php } else { ?>
                                                <div class="dropdown-menu adjust-settings-menu" aria-labelledby="settings-dropdown-lable">
                                                <?php } ?>
                                                <a class="dropdown-item" href="manage-category.php">Manage Category</a>
                                                <a class="dropdown-item" href="manage-type.php">Manage Type</a>
                                                <a class="dropdown-item" href="manage-country.php">Manage Countries</a>
                                                </div>
                                    </div>
                                </li>
                                <li class="logged-in-user-photo-li">
                                    <div class="dropdown user-picture-dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="logged-in-user-photo">
                                                <img src="<?php echo $user_dp_path; ?>" alt="User Photo" class="rounded-circle">
                                            </div>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="my-profile.php">Update Profile</a>
                                            <a class="dropdown-item" href="../../Front/html/change-password.php">Change Password</a>
                                            <a class="dropdown-item logout-btn-dropdown logout-link" href="javascript:void(0)">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple logout-link" href="javascript:void(0)">Logout</a>
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
                                    <a href="dashboard.php">Dashboard</a>
                                </li>
                                <li>
                                    <div class="dropdown notes-btn-dropdown">
                                        <a role="button" id="notes-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>

                                        <div class="dropdown-menu" aria-labelledby="notes-dropdown-lable">
                                            <a class="dropdown-item" href="notes-under-review.php">Notes Under Review</a>
                                            <a class="dropdown-item" href="published-notes.php">Published Notes</a>
                                            <a class="dropdown-item" href="downloaded-notes.php">Downloaded Notes</a>
                                            <a class="dropdown-item" href="rejected-notes.php">Rejected Notes</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="members.php">Members</a>
                                </li>
                                <li>
                                    <div class="dropdown reports-btn-dropdown">
                                        <a role="button" id="reports-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>

                                        <div class="dropdown-menu" aria-labelledby="reports-dropdown-lable">
                                            <a class="dropdown-item" href="spam-reports.php">Spam Reports</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown settings-btn-dropdown">
                                        <a role="button" id="settings-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>

                                        <?php if ($_SESSION['UserRole'] == 1) { ?>
                                            <div class="dropdown-menu" aria-labelledby="settings-dropdown-lable">
                                                <a class="dropdown-item" href="manage-system-configuration.php">Manage System Configuration</a>
                                                <a class="dropdown-item" href="manage-administrator.php">Manage Administrator</a>
                                            <?php } else { ?>
                                                <div class="dropdown-menu adjust-settings-menu" aria-labelledby="settings-dropdown-lable">
                                                <?php } ?>
                                                <a class="dropdown-item" href="manage-category.php">Manage Category</a>
                                                <a class="dropdown-item" href="manage-type.php">Manage Type</a>
                                                <a class="dropdown-item" href="manage-country.php">Manage Countries</a>
                                                </div>
                                    </div>
                                </li>
                                <li class="logged-in-user-photo-li">
                                    <div class="logged-in-user-photo">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="<?php echo $user_dp_path; ?>" alt="User Photo" class="rounded-circle">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="my-profile.php">Update Profile</a>
                                                <a class="dropdown-item" href="../../Front/html/change-password.php">Change Password</a>
                                                <a class="dropdown-item logout-btn-dropdown logout-link" href="javascript:void(0)">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple logout-link" href="javascript:void(0)">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- Header ends -->

        <?php include "../includes/modals/delete-note-review-modal.php"; ?>

        <?php
        if (isset($_SESSION['UserID'])) {
            $UserID = $_SESSION['UserID'];
        }
        if (isset($_GET['note_id'])) {
            $NoteID = $_GET['note_id'];
            $get_note_details = "SELECT SellerID, DATE_FORMAT(PublishedDate, '%M %e, %Y') as PublishedDate, Title, Category, DisplayPicture, NoteType, NumberOfPages, Description, UniversityName, Country, Course, CourseCode, Professor, IsPaid, SellingPrice, NotesPreview FROM seller_notes WHERE NoteID = {$NoteID} ";
            $get_note_details_query = mysqli_query($connection, $get_note_details);
            confirmQuery($get_note_details_query);
            $note_details_row = mysqli_fetch_assoc($get_note_details_query);

            $NoteSellerID = $note_details_row['SellerID'];
            $NoteDP = $note_details_row['DisplayPicture'];
            if ($NoteDP != null) {
                $NoteDP_path = $NoteDP;
            } else {
                // get default dp
                $get_default_dp = mysqli_query($connection, "SELECT * FROM system_configuration c WHERE c.Key = 'DefaultNoteDisplayPicture' ");
                confirmQuery($get_default_dp);
                $get_default_dp_path = mysqli_fetch_assoc($get_default_dp)['Value'];
                $NoteDP_path = $get_default_dp_path;
            }
            $NoteTitle = $note_details_row['Title'];
            $NoteCategoryID = $note_details_row['Category'];
            $NoteCategory = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Name From note_categories WHERE CategoryID = {$NoteCategoryID}"))['Name'];
            $NoteDesc = $note_details_row['Description'];
            $NoteIsPaid = $note_details_row['IsPaid'];
            if ($NoteIsPaid == 0) {
                $NoteSellingPrice = '';
            } else {
                $NoteSellingPrice = " / $" . $note_details_row['SellingPrice'];
            }
            $NotePurchasedPrice = $note_details_row['SellingPrice'];
            $NoteInstitute = $note_details_row['UniversityName'];
            $NoteCountryID = $note_details_row['Country'];
            if ($NoteCountryID != null) {
                $NoteCountry = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Name From countries WHERE CountryID = {$NoteCountryID}"))['Name'];
            } else {
                $NoteCountry = null;
            }
            $NoteCourse = $note_details_row['Course'];
            $NoteCourseCode = $note_details_row['CourseCode'];
            $NoteProfessor = $note_details_row['Professor'];
            $NoteNOP = $note_details_row['NumberOfPages'];
            $NoteApprovedDate = $note_details_row['PublishedDate'];
            $NotePreviewPath = $note_details_row['NotesPreview'];

            // get attachment links
            $get_attachments = "SELECT * FROM seller_notes_attachements WHERE NoteID = {$NoteID} AND IsActive = 1 ";
            $get_attachments_query = mysqli_query($connection, $get_attachments);
            confirmQuery($get_attachments_query);
            $get_attachments_count = mysqli_num_rows($get_attachments_query);
            $get_attachments_row = mysqli_fetch_assoc($get_attachments_query);

            if ($get_attachments_count == 1) {
                $attachment_file_link = $get_attachments_row['FilePath'];
            } else {
                foreach ($get_attachments_query as $get_attachments_row) {
                    $attachment_file_link = $get_attachments_row['FilePath'];
                    echo "<a class='{$NoteID}' href='{$attachment_file_link}' download></a>";
                }
            }
            // ends

            // getting total note reviews count
            $get_note_review_count = "SELECT * FROM seller_notes_reviews WHERE NoteID = {$NoteID} AND IsActive = 1 ";
            $get_note_review_count_query = mysqli_query($connection, $get_note_review_count);
            confirmQuery($get_note_review_count_query);
            $total_note_reviews = mysqli_num_rows($get_note_review_count_query);
            // end

            // getting note rating stars
            $get_note_rating = "SELECT AVG(Ratings) as Ratings FROM seller_notes_reviews WHERE NoteID = {$NoteID} AND IsActive = 1 ";
            $get_note_rating_query = mysqli_query($connection, $get_note_rating);
            confirmQuery($get_note_rating_query);
            $get_note_rating_row = mysqli_fetch_assoc($get_note_rating_query);
            $note_ratings = ceil($get_note_rating_row['Ratings']);
            // end
        }
        ?>

        <!-- Notes details -->
        <div class="container">
            <div class="content-box-lg with-bottom-border">
                <p class="box-heading">Notes Details</p>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 note-details-left">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12"><img class="note-img-full img-fluid" src="<?php echo $NoteDP_path; ?>" alt=""></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="note-desc-box">
                                    <p class="note-name"><?php echo $NoteTitle; ?></p>
                                    <p class="note-type-genre"><?php echo $NoteCategory; ?></p>
                                    <p class="note-desc"><?php echo $NoteDesc; ?></p>

                                    <?php if ($get_attachments_count == 1) { ?>
                                        <a href="<?php echo $attachment_file_link; ?>" class="btn btn-general btn-purple" download>Download<?php echo $NoteSellingPrice; ?></a>
                                    <?php } else { ?>
                                        <a id='<?php echo $NoteID; ?>' href="" class="download-all-notes-link btn btn-general btn-purple">Download<?php echo $NoteSellingPrice; ?></a>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 note-details-right">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="note-details-left-part">
                                    <?php
                                    if ($NoteInstitute != null) {
                                        echo '<p class="note-single-detail-tag">Institution:</p>';
                                    }
                                    if ($NoteCountry != null) {
                                        echo '<p class="note-single-detail-tag">Country:</p>';
                                    }
                                    if ($NoteCourse != null) {
                                        echo '<p class="note-single-detail-tag">Course Name:</p>';
                                    }
                                    if ($NoteCourseCode != null) {
                                        echo '<p class="note-single-detail-tag">Course Code:</p>';
                                    }
                                    if ($NoteProfessor != null) {
                                        echo '<p class="note-single-detail-tag">Professor:</p>';
                                    }
                                    if ($NoteNOP != null) {
                                        echo '<p class="note-single-detail-tag">Number of Pages:</p>';
                                    }
                                    ?>
                                    <p class="note-single-detail-tag">Approved Date:</p>
                                    <p class="note-single-detail-tag">Rating :</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="note-details-right-part">
                                    <?php
                                    if ($NoteInstitute != null) {
                                        echo "<p class='note-single-detail'>{$NoteInstitute}</p>";
                                    }
                                    if ($NoteCountry != null) {
                                        echo "<p class='note-single-detail'>{$NoteCountry}</p>";
                                    }
                                    if ($NoteCourse != null) {
                                        echo "<p class='note-single-detail'>{$NoteCourse}</p>";
                                    }
                                    if ($NoteCourseCode != null) {
                                        echo "<p class='note-single-detail'>{$NoteCourseCode}</p>";
                                    }
                                    if ($NoteProfessor != null) {
                                        echo "<p class='note-single-detail'>{$NoteProfessor}</p>";
                                    }
                                    if ($NoteNOP != null) {
                                        echo "<p class='note-single-detail'>{$NoteNOP}</p>";
                                    }
                                    ?>
                                    <p class="note-single-detail"><?php echo $NoteApprovedDate; ?></p>
                                    <p class="note-single-detail" id="note-single-detail-with-rating">
                                        <span>
                                            <?php
                                            for ($i = 0; $i < $note_ratings; $i++) {
                                                echo "<img src='../images/notes-detail/star.png'>";
                                            }
                                            for ($j = 0; $j < (5 - $note_ratings); $j++) {
                                                echo "<img src='../images/notes-detail/star-white.png'>";
                                            }
                                            ?>
                                        </span><?php echo $total_note_reviews; ?> Reviews
                                    </p>
                                </div>
                            </div>
                        </div>

                        <?php
                        $select_inappropriate_notes = "SELECT * FROM seller_notes_reported_issues WHERE NoteID = {$NoteID} ";
                        $select_inappropriate_notes_query = mysqli_query($connection, $select_inappropriate_notes);
                        confirmQuery($select_inappropriate_notes_query);
                        $inappropriate_notes_count = mysqli_num_rows($select_inappropriate_notes_query);
                        if ($inappropriate_notes_count != 0) {
                            echo "<p class=red-text>{$inappropriate_notes_count} Users marked this note as inappropriate</p>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Notes details -->

        <!-- preview and revies -->
        <div class="container">
            <div class="content-box-lg">
                <div class="row no-gutters">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="notes-preview-box">
                            <p class="box-heading">Notes Preview</p>
                            <?php
                            if ($NotePreviewPath != null) {
                                echo "<iframe src='{$NotePreviewPath}'></iframe>";
                            } else {
                                echo "<p>No preview available</p>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="customer-review-box">
                            <p class="box-heading">Customer Reviews</p>

                            <?php
                            $get_reviews = "SELECT * FROM seller_notes_reviews WHERE NoteID = {$NoteID} AND IsActive = 1 ORDER BY Ratings DESC ";
                            $get_reviews_query = mysqli_query($connection, $get_reviews);
                            confirmQuery($get_reviews_query);
                            $total_reviews_count = mysqli_num_rows($get_reviews_query);

                            if ($total_reviews_count != 0) {
                            ?>

                                <div class="customer-reviews-div">

                                    <?php
                                    while ($get_reviews_row = mysqli_fetch_assoc($get_reviews_query)) {
                                        $ReviewID = $get_reviews_row['ReviewID'];
                                        $ReviewerRatings = $get_reviews_row['Ratings'];
                                        $ReviewerComments = $get_reviews_row['Comments'];

                                        // getting reviewer name
                                        $ReviewerID = $get_reviews_row['ReviewedBy'];
                                        $get_reviewer = "SELECT * FROM users WHERE UserID = {$ReviewerID} ";
                                        $get_reviewer_query = mysqli_query($connection, $get_reviewer);
                                        confirmQuery($get_reviewer_query);
                                        $get_reviewer_row = mysqli_fetch_assoc($get_reviewer_query);
                                        $ReviewerFullName = $get_reviewer_row['FirstName'] . " " . $get_reviewer_row['LastName'];

                                        // getting reviewr dp
                                        $get_reviewer_dp = "SELECT * FROM user_profile WHERE UserID = {$ReviewerID} ";
                                        $get_reviewer_dp_query = mysqli_query($connection, $get_reviewer_dp);
                                        confirmQuery($get_reviewer_dp_query); 
                                        
                                        // get default dp
                                        $get_default_dp = mysqli_query($connection, "SELECT * FROM system_configuration c WHERE c.Key = 'DefaultMemberDisplayPicture' ");
                                        confirmQuery($get_default_dp);
                                        $get_default_dp_path = mysqli_fetch_assoc($get_default_dp)['Value'];

                                        if (mysqli_num_rows($get_reviewer_dp_query) == 0) {
                                            $ReviewerDP_path = $get_default_dp_path;
                                        } else {
                                            $get_reviewer_dp_row = mysqli_fetch_assoc($get_reviewer_dp_query);
                                            $ReviewerDP_path = $get_reviewer_dp_row['ProfilePicture'];
                                            if ($ReviewerDP_path == null) {                                                
                                                $ReviewerDP_path = $get_default_dp_path;
                                            }
                                        }
                                        
                                    ?>

                                        <div class="customer-review-tile">
                                            <div class="row no-gutters">
                                                <div class="col-lg-2 col-md-3 col-sm-2 col-12">
                                                    <img class="reviewer-photo" src="<?php echo $ReviewerDP_path; ?>" alt="">
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-sm-10 col-12">
                                                    <p class="reviewer-name"><?php echo $ReviewerFullName; ?></p>
                                                    <p class="reviewer-rating">
                                                        <span>
                                                            <?php
                                                            for ($i = 0; $i < $ReviewerRatings; $i++) {
                                                                echo "<img src='../images/notes-detail/star.png'>";
                                                            }
                                                            for ($j = 0; $j < (5 - $ReviewerRatings); $j++) {
                                                                echo "<img src='../images/notes-detail/star-white.png'>";
                                                            }
                                                            ?>
                                                        </span>
                                                        <a class="delete-review-link" href="" rel="note-details.php?r_id=<?php echo $ReviewID; ?>-<?php echo $NoteID; ?>" data-toggle="modal" data-target="#deleteNoteReviewModal">
                                                            <img class="delete-review-img" src="../images/Dashboard/delete.png" style="float: right;">
                                                        </a>
                                                    </p>
                                                    <p class="reviewer-text"><?php echo $ReviewerComments; ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="customer-review-tile-border-bottom"></div>

                                    <?php } ?>

                                </div>

                            <?php } else {
                                echo "<p>No reviews.</p>";
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preview and revies -->

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

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <script>
        $(document).ready(function() {

            // remove review
            $(document).on('click', '.delete-review-link', function() {
                let delete_review_link = $(this).attr("rel");
                $("#delete-review-link-href").attr("href", delete_review_link);
            });

            <?php
            if (isset($_SESSION['reviewDeleted'])) { ?>

                swal({
                    text: 'Review Deleted Successfully.',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['reviewDeleted']);
            }
            ?>
        });
    </script>

    <!-- Java-scripts -->
</body>

</html>