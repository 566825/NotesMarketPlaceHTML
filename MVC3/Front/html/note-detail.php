<?php $page_name = "Note Details"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>

<body>

    <section id="note-detail">

        <?php if (isset($_SESSION['UserLoggedIn'])) { ?>
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
                                    <li class="active">
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
                                    <li class="active">
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
        <?php } else { ?>
            <!-- Header -->
            <div class="only-white-nav">
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
                                    <li class="active">
                                        <a class="hover-bottom-border" href="search-notes.php">Search Notes</a>
                                    </li>
                                    <li>
                                        <a class="hover-bottom-border" href="dashboard.php">Sell Your Notes</a>
                                    </li>
                                    <li>
                                        <a class="hover-bottom-border" href="faq.php">FAQ</a>
                                    </li>
                                    <li>
                                        <a class="hover-bottom-border" href="contact-us.php">Contact Us</a>
                                    </li>
                                    <li>
                                        <a class="btn btn-general btn-purple" href="login.php" title="Download" role="button">Login</a>
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
                                    <li class="active">
                                        <a href="search-notes.php">Search Notes</a>
                                    </li>
                                    <li>
                                        <a href="dashboard.php">Sell Your Notes</a>
                                    </li>
                                    <li>
                                        <a href="faq.php">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.php">Contact Us</a>
                                    </li>
                                    <li>
                                        <a class="btn btn-general btn-purple" href="login.php" title="Download" role="button">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <!-- Header ends -->
        <?php } ?>

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
                $NoteDP_path = str_replace("..", "../../Admin", $get_default_dp_path);
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
                $all_attachment_path = $get_attachments_row['FilePath'];
            } else {
                $all_attachment_path = '';
                foreach ($get_attachments_query as $get_attachments_row) {
                    $all_attachment_path .= $get_attachments_row['FilePath'] . ";";
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

                                    <?php
                                    // when user clicks download button
                                    // check if user has already downloaded the note
                                    if (isset($_SESSION['UserLoggedIn'])) {
                                        $check_downloads = "SELECT * FROM downloads WHERE NoteID = {$NoteID} AND Downloader = {$UserID} ";
                                        $check_downloads_query = mysqli_query($connection, $check_downloads);
                                        confirmQuery($check_downloads_query);
                                        $check_downloads_count = mysqli_num_rows($check_downloads_query);

                                        include "../includes/modals/note-already-downloaded-modal.php";
                                    }                                    

                                    // free note
                                    if (isset($_POST['FreeNoteButton'])) {
                                        if ($check_downloads_count == 0) {                                           

                                            $insert_download = "INSERT INTO downloads (NoteID, Seller, Downloader, IsSellerHasAllowedDownload, AttachmentPath, IsAttachmentDownloaded, AttachmentDownloadedDate, IsPaid, PurchasedPrice, NoteTitle, NoteCategory, CreatedBy) ";
                                            $insert_download .= "VALUES ({$NoteID}, {$NoteSellerID}, {$UserID}, 1, '{$all_attachment_path}', 1, now(), 0, 0, '{$NoteTitle}', '{$NoteCategory}', {$UserID}) ";
                                            $insert_download_query = mysqli_query($connection, $insert_download);
                                            confirmQuery($insert_download_query);
                                            $check_downloads_count = 1;
                                            $_SESSION['downloadedFreeNote'] = '';
                                        } else {
                                            $_SESSION['noteAlreadyDownloaded'] = '';
                                        }
                                    }

                                    // paid note
                                    if (isset($_POST['PaidNoteButton'])) {
                                        if ($check_downloads_count == 0) {
                                            $insert_download = "INSERT INTO downloads (NoteID, Seller, Downloader, IsSellerHasAllowedDownload, IsAttachmentDownloaded, AttachmentDownloadedDate, IsPaid, PurchasedPrice, NoteTitle, NoteCategory, CreatedBy) ";
                                            $insert_download .= "VALUES ({$NoteID}, {$NoteSellerID}, {$UserID}, 0, 0, now(), 1, {$NotePurchasedPrice}, '{$NoteTitle}', '{$NoteCategory}', {$UserID}) ";
                                            $insert_download_query = mysqli_query($connection, $insert_download);
                                            confirmQuery($insert_download_query);

                                            // buyer details
                                            $buyer_details = "SELECT * FROM users WHERE UserID = {$UserID} ";
                                            $buyer_details_query = mysqli_query($connection, $buyer_details);
                                            confirmQuery($buyer_details_query);
                                            $buyer_details_row = mysqli_fetch_assoc($buyer_details_query);
                                            $BuyerFullName = $buyer_details_row['FirstName'] . " " . $buyer_details_row['LastName'];

                                            // seller details
                                            $seller_details = "SELECT * FROM users WHERE UserID = {$NoteSellerID} ";
                                            $seller_details_query = mysqli_query($connection, $seller_details);
                                            confirmQuery($seller_details_query);
                                            $seller_details_row = mysqli_fetch_assoc($seller_details_query);
                                            $sellerFullName = $seller_details_row['FirstName'] . " " . $seller_details_row['LastName'];
                                            $sellerEmailID = $seller_details_row['EmailID'];

                                            // sending mail to buyer that user wants to download note
                                            $mailEmailID = $sellerEmailID;
                                            $Subject = $BuyerFullName . " wants to purchase your notes";
                                            $Body = "Hello " . $sellerFullName . "<br><br>" . "We would like to inform you that, " . $BuyerFullName . " wants to purchase your notes. Please see Buyer Requests tab and allow download access to Buyer if you have received the payment from him." . "<br><br>" . "Regards," . "<br>" . "Notes Marketplace";

                                            include "../includes/mail.php";
                                            $check_downloads_count = 1;
                                            $_SESSION['downloadPaidNoteRequest'] = '';
                                        } else {
                                            $_SESSION['noteAlreadyDownloaded'] = '';
                                        }
                                    }

                                    // creating a links of attachments
                                    if ($get_attachments_count == 1) { ?>
                                        <a id="free-single-note-link" href="<?php echo $attachment_file_link; ?>" download></a>
                                    <?php } else { ?>
                                        <a id="<?php echo $NoteID; ?>" href="" class="download-all-notes-link"></a>
                                        <?php }

                                    // if user click on download when logged in
                                    if (isset($_SESSION['UserLoggedIn'])) {
                                        if ($NoteIsPaid == 0) { ?>
                                            <form action="" method="POST" id="free-note-download-form" data-note-count="<?php echo $get_attachments_count; ?>" data-check-downloads="<?php echo $check_downloads_count; ?>"><button name="FreeNoteButton" type="submit" class="btn btn-general btn-purple">Download<?php echo $NoteSellingPrice; ?></button></form>
                                        <?php } else { ?>
                                            <form action="" method="POST" id="paid-note-download-form">
                                                <?php include "../includes/modals/confirm-paid-note-modal.php"; ?>
                                                <a href="" class="btn btn-general btn-purple" data-toggle='modal' <?php if($check_downloads_count == 0){echo "data-target='#confirmPaidNoteModal'";} else {echo "data-target='#noteAlreadyDownloadedModal'";} ?> >Download<?php echo $NoteSellingPrice; ?></a>
                                            </form>
                                            <a id="thanks-for-buying-modal-link" href="" data-toggle='modal' data-target="#thanksModal"></a>
                                        <?php }
                                    }

                                    // if user click on download when not logged in 
                                    if (!isset($_SESSION['UserLoggedIn'])) {
                                        include "../includes/modals/login-to-download-modal.php";
                                        ?>
                                        <a href="#" class="btn btn-general btn-purple" data-toggle="modal" data-target="#loginToDownloadModal">Download<?php echo $NoteSellingPrice; ?></a>
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
                        $select_inappropriate_notes = "SELECT * FROM seller_notes_reported_issues WHERE NoteID = $NoteID ";
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

                                        if (mysqli_num_rows($get_reviewer_dp_query) == 0) {
                                            $ReviewerDP_path = "../../Front/images/user-profile/default-profile-picture.png";
                                        } else {
                                            $get_reviewer_dp_row = mysqli_fetch_assoc($get_reviewer_dp_query);
                                            $ReviewerDP_path = $get_reviewer_dp_row['ProfilePicture'];
                                            if ($ReviewerDP_path == null) {
                                                $ReviewerDP_path = "../../Front/images/user-profile/default-profile-picture.png";
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

        <?php
        if (isset($_SESSION['UserLoggedIn'])) {
            $user_details = "SELECT * FROM users WHERE UserID = {$UserID} ";
            $user_details_query = mysqli_query($connection, $user_details);
            confirmQuery($user_details_query);
            $user_details_row = mysqli_fetch_assoc($user_details_query);
            $BuyerName = $user_details_row['FirstName'];

            $seller_details = "SELECT * FROM users WHERE UserID = {$NoteSellerID} ";
            $seller_details_query = mysqli_query($connection, $seller_details);
            confirmQuery($seller_details_query);
            $seller_details_row = mysqli_fetch_assoc($seller_details_query);
            $SellerFullName = $seller_details_row['FirstName'] . " " . $seller_details_row['LastName'];
            
            // contact no.
            $sys_config = mysqli_query($connection, "SELECT * FROM system_configuration c WHERE c.Key = 'SupportContactNumber' ");
            confirmQuery($sys_config);
            $contactNumber = mysqli_fetch_assoc($sys_config)['Value'];

            include "../includes/modals/thanks-for-buying-modal.php";
        }
        ?>

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

            // paid note 
            <?php             
            if (isset($_SESSION['downloadPaidNoteRequest'])) { ?>
                $('#thanksModal').modal('show');
            <?php }
            unset($_SESSION['downloadPaidNoteRequest']);
            ?>

            // note downloaded successfully
            <?php if (isset($_SESSION['downloadedFreeNote'])) { ?>
                swal({
                    text: 'Thanks For Downloading Note',
                    icon: 'success'                    
                });
            <?php }
            unset($_SESSION['downloadedFreeNote']);
            ?>

            // if note already downloaded
            <?php if (isset($_SESSION['noteAlreadyDownloaded'])) { ?>
                $('#noteAlreadyDownloadedModal').modal('show');
            <?php }
            unset($_SESSION['noteAlreadyDownloaded']);
            ?>
        });
    </script>
    
    <!-- Java-scripts -->
</body>

</html>