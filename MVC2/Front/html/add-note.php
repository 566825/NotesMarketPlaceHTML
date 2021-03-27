<?php $page_name = "Add Note"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: login.php");
    die();
}
?>

<body>

    <section id="add-note">

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

        <!-- background -->
        <div class="small-height-bg">
            <p class="text-center">Add Notes</p>
        </div>
        <!-- background -->

        <!-- details conatiner -->
        <div class="general-box">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <p class="section-heading">Basic Note Details</p>
                    </div>
                </div>

                <?php
                if (isset($_GET['note_id'])) {

                    $get_note_id = $_GET['note_id'];
                    // $get_note_detail = "SELECT sn.Title, sn.Category, nc.Name as CategoryName, sn.NoteType, nt.Name as TypeName, sn.NumberOfPages, sn.Description, sn.Country, c.Name as CountryName, sn.UniversityName, sn.Course, sn.CourseCode, sn.Professor, sn.IsPaid, sn.SellingPrice FROM seller_notes sn JOIN note_categories nc ON sn.Category = nc.CategoryID JOIN note_types nt ON sn.NoteType = nt.TypeID JOIN countries c ON sn.Country = c.CountryID WHERE NoteID = {$get_note_id} ";
                    $get_note_detail = "SELECT * FROM seller_notes WHERE NoteID = {$get_note_id} ";
                    $get_note_detail_query = mysqli_query($connection, $get_note_detail);
                    confirmQuery($get_note_detail_query);

                    $get_note_detail_row = mysqli_fetch_assoc($get_note_detail_query);
                    $getTitle = empty($get_note_detail_row['Title']) ? null : $get_note_detail_row['Title'];
                    $getCategoryID = empty($get_note_detail_row['Category']) ? null : $get_note_detail_row['Category'];
                    $getTypeID = empty($get_note_detail_row['NoteType']) ? null : $get_note_detail_row['NoteType'];
                    $getNumberOfPages = empty($get_note_detail_row['NumberOfPages']) ? null : $get_note_detail_row['NumberOfPages'];
                    $getDesc = empty($get_note_detail_row['Description']) ? null : $get_note_detail_row['Description'];
                    $getCountryID = empty($get_note_detail_row['Country']) ? null : $get_note_detail_row['Country'];
                    $getInstitute = empty($get_note_detail_row['UniversityName']) ? null : $get_note_detail_row['UniversityName'];
                    $getCourse = empty($get_note_detail_row['Course']) ? null : $get_note_detail_row['Course'];
                    $getCourseCode = empty($get_note_detail_row['CourseCode']) ? null : $get_note_detail_row['CourseCode'];
                    $getProfessor = empty($get_note_detail_row['Professor']) ? null : $get_note_detail_row['Professor'];
                    $getIsPaid = empty($get_note_detail_row['IsPaid']) ? null : $get_note_detail_row['IsPaid'];
                    $getSellingPrice = empty($get_note_detail_row['SellingPrice']) ? null : $get_note_detail_row['SellingPrice'];
                    $getDisplay = empty($get_note_detail_row['DisplayPicture']) ? null : $get_note_detail_row['DisplayPicture'];
                    $getPreview = empty($get_note_detail_row['NotesPreview']) ? null : $get_note_detail_row['NotesPreview'];
                }

                // to publish a note
                if (isset($_POST['publish_note'])) {
                    $UserID = $_SESSION['UserID'];
                    $get_note_id = $_GET['note_id'];

                    $Title = $_POST['Title'];
                    $Category = $_POST['Category'];
                    $DisplayPicture = $_FILES['DisplayPicture']['name'];
                    $DisplayPicture_temp = $_FILES['DisplayPicture']['tmp_name'];
                    $NoteAttachment = $_FILES['NoteAttachment']['name'];
                    $NoteAttachment_temp = $_FILES['NoteAttachment']['tmp_name'];
                    $NoteType = empty($_POST['NoteType']) ? "NULL" : $_POST['NoteType'];
                    $NumberOfPages = empty($_POST['NumberOfPages']) ? "NULL" : $_POST['NumberOfPages'];
                    $Description = $_POST['Description'];
                    $Country = empty($_POST['Country']) ? "NULL" : $_POST['Country'];
                    $UniversityName = empty($_POST['UniversityName']) ? "NULL" : "'" . $_POST['UniversityName'] . "'";
                    $Course = empty($_POST['Course']) ? "NULL" : "'" . $_POST['Course'] . "'";
                    $CourseCode = empty($_POST['CourseCode']) ? "NULL" : "'" . $_POST['CourseCode'] . "'";
                    $Professor = empty($_POST['Professor']) ? "NULL" : "'" . $_POST['Professor'] . "'";
                    $IsPaid = empty($_POST['IsPaid']) ? "0" : $_POST['IsPaid'];
                    $SellingPrice = empty($_POST['SellingPrice']) ? "0" : $_POST['SellingPrice'];
                    $NotesPreview = $_FILES['NotesPreview']['name'];
                    $NotesPreview_temp = $_FILES['NotesPreview']['tmp_name'];

                    // changing picture name as DP_timestamp.ext
                    if (!empty($DisplayPicture)) {
                        $DisplayPicture_filename = substr($DisplayPicture, 0, stripos($DisplayPicture, '.')); // get filename only(without ext) 
                        $DisplayPicture_ext = substr($DisplayPicture, stripos($DisplayPicture, '.')); // get file extension
                        $DisplayPicture_new_name = "DP_" . time() . $DisplayPicture_ext;
                        $DisplayPicture_file_path = "'" . "../../Members/" . $UserID . "/" . $get_note_id . "/" . $DisplayPicture_new_name . "'";
                    } else {
                        $DisplayPicture_file_path = 'NULL';
                    }
                    // end

                    // changing preview picture name as Preview_timestamp.ext
                    if (!empty($NotesPreview)) {
                        $NotesPreview_filename = substr($NotesPreview, 0, stripos($NotesPreview, '.')); // get filename only(without ext) 
                        $NotesPreview_ext = substr($NotesPreview, stripos($NotesPreview, '.')); // get file extension
                        $NotesPreview_new_name = "Preview_" . time() . $NotesPreview_ext;
                        $NotesPreview_file_path = "'" . "../../Members/" . $UserID . "/" . $get_note_id . "/" . $NotesPreview_new_name . "'";
                    } else {
                        $NotesPreview_file_path = 'NULL';
                    }
                    // end                        

                    // update note into database
                    $update_note = "UPDATE seller_notes SET ";
                    $update_note .= "Status = 9, ";
                    $update_note .= "PublishedDate = now(), ";
                    $update_note .= "Title = '{$Title}', ";
                    $update_note .= "Category = {$Category}, ";
                    if (!empty($DisplayPicture)) {
                        $update_note .= "DisplayPicture = {$DisplayPicture_file_path}, ";
                    }
                    $update_note .= "NoteType = {$NoteType}, ";
                    $update_note .= "NumberOfPages = {$NumberOfPages}, ";
                    $update_note .= "Description = '{$Description}', ";
                    $update_note .= "UniversityName = {$UniversityName}, ";
                    $update_note .= "Country = {$Country}, ";
                    $update_note .= "Course = {$Course}, ";
                    $update_note .= "CourseCode = {$CourseCode}, ";
                    $update_note .= "Professor = {$Professor}, ";
                    $update_note .= "IsPaid = {$IsPaid}, ";
                    $update_note .= "SellingPrice = {$SellingPrice}, ";
                    if (!empty($NotesPreview)) {
                        $update_note .= "NotesPreview = {$NotesPreview_file_path}, ";
                    }
                    $update_note .= "ModifiedBy = {$_SESSION['UserID']} ";
                    $update_note .= "WHERE NoteID = $get_note_id ";
                    $update_note_query = mysqli_query($connection, $update_note);
                    confirmQuery($update_note_query);

                    // sending mail for publishing note to admin-start
                    // getting sellers deatils
                    $get_seller = "SELECT * FROM users WHERE UserID = $UserID ";
                    $get_seller_query = mysqli_query($connection, $get_seller);
                    confirmQuery($get_seller_query);
                    $get_seller_row = mysqli_fetch_assoc($get_seller_query);
                    $sellerFullName = $get_seller_row['FirstName'];

                    // getting note title to send over mail
                    $get_note_title = "SELECT * FROM seller_notes WHERE NoteID = $get_note_id ";
                    $get_note_title_query = mysqli_query($connection, $get_note_title);
                    confirmQuery($get_note_title_query);
                    $get_note_title_row = mysqli_fetch_assoc($get_note_title_query);
                    $noteTitle = $get_note_title_row['Title'];

                    // send mail to admin when seller publish note
                    $mailEmailID = 'hpatel8164@gmail.com';
                    $Subject = $sellerFullName . " " . "sent his note for review";
                    $Body = "Hello Admins," . "<br><br>" . "We want to inform you that, " . $sellerFullName . " sent his note " . $noteTitle . " for review. Please look at the notes and take required actions." . "<br><br>" . "Regards," . "<br>" . "Notes Marketplace";
                    include "../includes/mail.php";
                    // end

                    if (!empty($DisplayPicture)) {
                        if ($getDisplay != null) {
                            unlink($getDisplay);
                        }
                        move_uploaded_file($DisplayPicture_temp, "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id . "/" . trim($DisplayPicture_new_name, "'"));
                    }
                    if (!empty($NotesPreview)) {
                        if ($getPreview != null) {
                            unlink($getPreview);
                        }
                        move_uploaded_file($NotesPreview_temp, "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id . "/" . trim($NotesPreview_new_name, "'"));
                    }
                    if (!empty(array_filter($_FILES['NoteAttachment']['name']))) {
                        // getting note attachment
                        $get_note_attachment = "SELECT * FROM seller_notes_attachements WHERE NoteID = $get_note_id ";
                        $get_note_attachment_query = mysqli_query($connection, $get_note_attachment);
                        confirmQuery($get_note_attachment_query);

                        // deleting all existing attachmnets
                        while ($get_note_attachment_row = mysqli_fetch_assoc($get_note_attachment_query)) {
                            $get_note_attachment_id = $get_note_attachment_row['AttachmentID'];
                            $get_note_attachment_name = $get_note_attachment_row['FileName'];

                            // delete note attachment record from db
                            $delete_attachment = "DELETE FROM seller_notes_attachements WHERE AttachmentID = {$get_note_attachment_id} ";
                            $delete_attachment_query = mysqli_query($connection, $delete_attachment);

                            // deleting existing attachment
                            $attachment_delete_path = "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id . "/" . "Attachments/" . $get_note_attachment_name;
                            unlink($attachment_delete_path);
                        }

                        $countfiles = count($_FILES['NoteAttachment']['name']);

                        for ($i = 0; $i < $countfiles; $i++) {
                            $get_new_attachment_id = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'notes_marketplace' AND TABLE_NAME = 'seller_notes_attachements' ";
                            $get_new_attachment_id_query = mysqli_query($connection, $get_new_attachment_id);
                            confirmQuery($get_new_attachment_id_query);
                            $get_new_attachment_id_query_row = mysqli_fetch_assoc($get_new_attachment_id_query);
                            $new_attachment_id = $get_new_attachment_id_query_row['AUTO_INCREMENT'];

                            // changing note attachment name as DP_timestamp.ext
                            $NoteAttachment_filename = substr($NoteAttachment[$i], 0, stripos($NoteAttachment[$i], '.')); // get filename only(without ext) 
                            $NoteAttachment_ext = substr($NoteAttachment[$i], stripos($NoteAttachment[$i], '.')); // get file extension
                            $NoteAttachment_new_name = $new_attachment_id . "_" . time() . $NoteAttachment_ext;
                            $NoteAttachment_FilePath = "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id . "/" . "Attachments/" . $NoteAttachment_new_name;
                            // end

                            // insert query for attachment
                            $attachment = "INSERT INTO seller_notes_attachements (NoteID ,FileName, FilePath, CreatedBy) ";
                            $attachment .= "VALUES ({$get_note_id} ,'{$NoteAttachment_new_name}', '{$NoteAttachment_FilePath}', {$_SESSION['UserID']}) ";
                            $attachment_query = mysqli_query($connection, $attachment);
                            confirmQuery($attachment_query);

                            move_uploaded_file($NoteAttachment_temp[$i], "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id . "/" . "Attachments/" . $NoteAttachment_new_name);
                        }
                    }

                    $_SESSION['notePublished'] = '';
                    header('Location:dashboard.php');
                }

                // for editing existing draft notes
                if (isset($_POST['edit_note'])) {
                    $get_note_id = $_GET['note_id'];
                    $Title = $_POST['Title'];
                    $Category = $_POST['Category'];
                    $DisplayPicture = $_FILES['DisplayPicture']['name'];
                    $DisplayPicture_temp = $_FILES['DisplayPicture']['tmp_name'];
                    $NoteAttachment = empty($_FILES['NoteAttachment']['name']) ? '' : $_FILES['NoteAttachment']['name'];
                    $NoteAttachment_temp = $_FILES['NoteAttachment']['tmp_name'];
                    $NoteType = empty($_POST['NoteType']) ? "NULL" : $_POST['NoteType'];
                    $NumberOfPages = empty($_POST['NumberOfPages']) ? "NULL" : $_POST['NumberOfPages'];
                    $Description = $_POST['Description'];
                    $Country = empty($_POST['Country']) ? "NULL" : $_POST['Country'];
                    $UniversityName = empty($_POST['UniversityName']) ? "NULL" : "'" . $_POST['UniversityName'] . "'";
                    $Course = empty($_POST['Course']) ? "NULL" : "'" . $_POST['Course'] . "'";
                    $CourseCode = empty($_POST['CourseCode']) ? "NULL" : "'" . $_POST['CourseCode'] . "'";
                    $Professor = empty($_POST['Professor']) ? "NULL" : "'" . $_POST['Professor'] . "'";
                    $IsPaid = empty($_POST['IsPaid']) ? "0" : $_POST['IsPaid'];
                    $SellingPrice = empty($_POST['SellingPrice']) ? "0" : $_POST['SellingPrice'];
                    $NotesPreview = $_FILES['NotesPreview']['name'];
                    $NotesPreview_temp = $_FILES['NotesPreview']['tmp_name'];

                    // changing picture name as DP_timestamp.ext
                    if (!empty($DisplayPicture)) {
                        $DisplayPicture_filename = substr($DisplayPicture, 0, stripos($DisplayPicture, '.')); // get filename only(without ext) 
                        $DisplayPicture_ext = substr($DisplayPicture, stripos($DisplayPicture, '.')); // get file extension
                        $DisplayPicture_new_name = "DP_" . time() . $DisplayPicture_ext;
                        $DisplayPicture_file_path = "'" . "../../Members/" . $UserID . "/" . $get_note_id . "/" . $DisplayPicture_new_name . "'";
                    } else {
                        $DisplayPicture_file_path = 'NULL';
                    }
                    // end

                    // changing preview picture name as Preview_timestamp.ext
                    if (!empty($NotesPreview)) {
                        $NotesPreview_filename = substr($NotesPreview, 0, stripos($NotesPreview, '.')); // get filename only(without ext) 
                        $NotesPreview_ext = substr($NotesPreview, stripos($NotesPreview, '.')); // get file extension
                        $NotesPreview_new_name = "Preview_" . time() . $NotesPreview_ext;
                        $NotesPreview_file_path = "'" . "../../Members/" . $UserID . "/" . $get_note_id . "/" . $NotesPreview_new_name . "'";
                    } else {
                        $NotesPreview_file_path = 'NULL';
                    }
                    // end                        

                    // insert note into database
                    $update_note = "UPDATE seller_notes SET ";
                    $update_note .= "Title = '{$Title}', ";
                    $update_note .= "Category = {$Category}, ";
                    if (!empty($DisplayPicture)) {
                        $update_note .= "DisplayPicture = {$DisplayPicture_file_path}, ";
                    }
                    $update_note .= "NoteType = {$NoteType}, ";
                    $update_note .= "NumberOfPages = {$NumberOfPages}, ";
                    $update_note .= "Description = '{$Description}', ";
                    $update_note .= "UniversityName = {$UniversityName}, ";
                    $update_note .= "Country = {$Country}, ";
                    $update_note .= "Course = {$Course}, ";
                    $update_note .= "CourseCode = {$CourseCode}, ";
                    $update_note .= "Professor = {$Professor}, ";
                    $update_note .= "IsPaid = {$IsPaid}, ";
                    $update_note .= "SellingPrice = {$SellingPrice}, ";
                    if (!empty($NotesPreview)) {
                        $update_note .= "NotesPreview = {$NotesPreview_file_path}, ";
                    }
                    $update_note .= "ModifiedBy = {$_SESSION['UserID']} ";
                    $update_note .= "WHERE NoteID = $get_note_id ";
                    $update_note_query = mysqli_query($connection, $update_note);
                    confirmQuery($update_note_query);

                    if (!empty($DisplayPicture)) {
                        if ($getDisplay != null) {
                            unlink($getDisplay);
                        }
                        move_uploaded_file($DisplayPicture_temp, "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id . "/" . trim($DisplayPicture_new_name, "'"));
                    }
                    if (!empty($NotesPreview)) {
                        if ($getPreview != null) {
                            unlink($getPreview);
                        }
                        move_uploaded_file($NotesPreview_temp, "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id . "/" . trim($NotesPreview_new_name, "'"));
                    }
                    if (!empty(array_filter($_FILES['NoteAttachment']['name']))) {
                        // getting note attachment
                        $get_note_attachment = "SELECT * FROM seller_notes_attachements WHERE NoteID = $get_note_id ";
                        $get_note_attachment_query = mysqli_query($connection, $get_note_attachment);
                        confirmQuery($get_note_attachment_query);

                        // deleting all existing attachmnets
                        while ($get_note_attachment_row = mysqli_fetch_assoc($get_note_attachment_query)) {
                            $get_note_attachment_id = $get_note_attachment_row['AttachmentID'];
                            $get_note_attachment_name = $get_note_attachment_row['FileName'];

                            // delete note attachment record from db
                            $delete_attachment = "DELETE FROM seller_notes_attachements WHERE AttachmentID = {$get_note_attachment_id} ";
                            $delete_attachment_query = mysqli_query($connection, $delete_attachment);

                            // deleting existing attachment
                            $attachment_delete_path = "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id . "/" . "Attachments/" . $get_note_attachment_name;
                            unlink($attachment_delete_path);
                        }

                        $countfiles = count($_FILES['NoteAttachment']['name']);

                        for ($i = 0; $i < $countfiles; $i++) {
                            $get_new_attachment_id = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'notes_marketplace' AND TABLE_NAME = 'seller_notes_attachements' ";
                            $get_new_attachment_id_query = mysqli_query($connection, $get_new_attachment_id);
                            confirmQuery($get_new_attachment_id_query);
                            $get_new_attachment_id_query_row = mysqli_fetch_assoc($get_new_attachment_id_query);
                            $new_attachment_id = $get_new_attachment_id_query_row['AUTO_INCREMENT'];

                            // changing note attachment name as DP_timestamp.ext
                            $NoteAttachment_filename = substr($NoteAttachment[$i], 0, stripos($NoteAttachment[$i], '.')); // get filename only(without ext) 
                            $NoteAttachment_ext = substr($NoteAttachment[$i], stripos($NoteAttachment[$i], '.')); // get file extension
                            $NoteAttachment_new_name = $new_attachment_id . "_" . time() . $NoteAttachment_ext;
                            $NoteAttachment_FilePath = "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id . "/" . "Attachments/" . $NoteAttachment_new_name;
                            // end

                            // insert query for attachment
                            $attachment = "INSERT INTO seller_notes_attachements (NoteID ,FileName, FilePath, CreatedBy) ";
                            $attachment .= "VALUES ({$get_note_id} ,'{$NoteAttachment_new_name}', '{$NoteAttachment_FilePath}', {$_SESSION['UserID']}) ";
                            $attachment_query = mysqli_query($connection, $attachment);
                            confirmQuery($attachment_query);

                            move_uploaded_file($NoteAttachment_temp[$i], "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id . "/" . "Attachments/" . $NoteAttachment_new_name);
                        }
                    }

                    // show popup that note is added
                    $_SESSION['noteEdited'] = "";
                    header("Location: dashboard.php");
                }

                // for adding new note
                if (isset($_POST['save_note'])) {
                    $Title = $_POST['Title'];
                    $Category = $_POST['Category'];
                    $DisplayPicture = $_FILES['DisplayPicture']['name'];
                    $DisplayPicture_temp = $_FILES['DisplayPicture']['tmp_name'];
                    $NoteAttachment = $_FILES['NoteAttachment']['name'];
                    $NoteAttachment_temp = $_FILES['NoteAttachment']['tmp_name'];
                    $NoteType = empty($_POST['NoteType']) ? "NULL" : $_POST['NoteType'];
                    $NumberOfPages = empty($_POST['NumberOfPages']) ? "NULL" : $_POST['NumberOfPages'];
                    $Description = $_POST['Description'];
                    $Country = empty($_POST['Country']) ? "NULL" : $_POST['Country'];
                    $UniversityName = empty($_POST['UniversityName']) ? "NULL" : "'" . $_POST['UniversityName'] . "'";
                    $Course = empty($_POST['Course']) ? "NULL" : "'" . $_POST['Course'] . "'";
                    $CourseCode = empty($_POST['CourseCode']) ? "NULL" : "'" . $_POST['CourseCode'] . "'";
                    $Professor = empty($_POST['Professor']) ? "NULL" : "'" . $_POST['Professor'] . "'";
                    $IsPaid = empty($_POST['IsPaid']) ? "0" : $_POST['IsPaid'];
                    $SellingPrice = empty($_POST['SellingPrice']) ? "0" : $_POST['SellingPrice'];
                    $NotesPreview = $_FILES['NotesPreview']['name'];
                    $NotesPreview_temp = $_FILES['NotesPreview']['tmp_name'];

                    // getting new note id
                    $get_new_note_id = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'notes_marketplace' AND TABLE_NAME = 'seller_notes' ";
                    $get_new_note_id_query = mysqli_query($connection, $get_new_note_id);
                    confirmQuery($get_new_note_id_query);
                    $get_new_note_id_query_row = mysqli_fetch_assoc($get_new_note_id_query);
                    $new_note_id = $get_new_note_id_query_row['AUTO_INCREMENT'];
                    // end

                    // changing picture name as DP_timestamp.ext
                    if (!empty($DisplayPicture)) {
                        $DisplayPicture_filename = substr($DisplayPicture, 0, stripos($DisplayPicture, '.')); // get filename only(without ext) 
                        $DisplayPicture_ext = substr($DisplayPicture, stripos($DisplayPicture, '.')); // get file extension
                        $DisplayPicture_new_name = "DP_" . time() . $DisplayPicture_ext;
                        $DisplayPicture_file_path = "'" . "../../Members/" . $UserID . "/" . $new_note_id . "/" . $DisplayPicture_new_name . "'";
                    } else {
                        $DisplayPicture_file_path = 'NULL';
                    }
                    // end                   

                    // changing preview picture name as Preview_timestamp.ext
                    if (!empty($NotesPreview)) {
                        $NotesPreview_filename = substr($NotesPreview, 0, stripos($NotesPreview, '.')); // get filename only(without ext) 
                        $NotesPreview_ext = substr($NotesPreview, stripos($NotesPreview, '.')); // get file extension
                        $NotesPreview_new_name = "Preview_" . time() . $NotesPreview_ext;
                        $NotesPreview_file_path = "'" . "../../Members/" . $UserID . "/" . $new_note_id . "/" . $NotesPreview_new_name . "'";
                    } else {
                        $NotesPreview_file_path = 'NULL';
                    }
                    // end                        

                    // insert note into database
                    $add_note = "INSERT INTO seller_notes (SellerID, Status, Title, Category, DisplayPicture, NoteType, NumberOfPages, Description, UniversityName, Country, Course, CourseCode, Professor, IsPaid, SellingPrice, NotesPreview, CreatedBy) ";
                    $add_note .= "VALUES ({$_SESSION['UserID']}, 6, '{$Title}', {$Category}, {$DisplayPicture_file_path}, {$NoteType}, {$NumberOfPages}, '{$Description}', {$UniversityName}, {$Country}, {$Course}, {$CourseCode}, {$Professor}, {$IsPaid}, {$SellingPrice}, {$NotesPreview_file_path}, {$_SESSION['UserID']} ) ";
                    $add_note_query = mysqli_query($connection, $add_note);
                    confirmQuery($add_note_query);

                    $last_note_id = mysqli_insert_id($connection);

                    if (!is_dir("../../Members/" . $_SESSION['UserID'] . "/" . $last_note_id)) {
                        mkdir("../../Members/" . $_SESSION['UserID'] . "/" . $last_note_id);
                    }

                    move_uploaded_file($DisplayPicture_temp, "../../Members/" . $_SESSION['UserID'] . "/" . $last_note_id . "/" . trim($DisplayPicture_new_name, "'"));
                    move_uploaded_file($NotesPreview_temp, "../../Members/" . $_SESSION['UserID'] . "/" . $last_note_id . "/" . trim($NotesPreview_new_name, "'"));



                    $countfiles = count($_FILES['NoteAttachment']['name']);

                    for ($i = 0; $i < $countfiles; $i++) {
                        $get_new_attachment_id = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'notes_marketplace' AND TABLE_NAME = 'seller_notes_attachements' ";
                        $get_new_attachment_id_query = mysqli_query($connection, $get_new_attachment_id);
                        confirmQuery($get_new_attachment_id_query);
                        $get_new_attachment_id_query_row = mysqli_fetch_assoc($get_new_attachment_id_query);
                        $new_attachment_id = $get_new_attachment_id_query_row['AUTO_INCREMENT'];

                        // changing note attachment name as DP_timestamp.ext
                        $NoteAttachment_filename = substr($NoteAttachment[$i], 0, stripos($NoteAttachment[$i], '.')); // get filename only(without ext) 
                        $NoteAttachment_ext = substr($NoteAttachment[$i], stripos($NoteAttachment[$i], '.')); // get file extension
                        $NoteAttachment_new_name = $new_attachment_id . "_" . time() . $NoteAttachment_ext;
                        $NoteAttachment_FilePath = "../../Members/" . $_SESSION['UserID'] . "/" . $last_note_id . "/" . "Attachments/" . $NoteAttachment_new_name;
                        // end

                        // insert query for attachment
                        $attachment = "INSERT INTO seller_notes_attachements (NoteID ,FileName, FilePath, CreatedBy) ";
                        $attachment .= "VALUES ({$last_note_id} ,'{$NoteAttachment_new_name}', '{$NoteAttachment_FilePath}', {$_SESSION['UserID']}) ";
                        $attachment_query = mysqli_query($connection, $attachment);
                        confirmQuery($attachment_query);

                        // creating attachment directory
                        if (!is_dir("../../Members/" . $_SESSION['UserID'] . "/" . $last_note_id . "/" . "Attachments")) {
                            mkdir("../../Members/" . $_SESSION['UserID'] . "/" . $last_note_id . "/" . "Attachments");
                        }
                        move_uploaded_file($NoteAttachment_temp[$i], "../../Members/" . $_SESSION['UserID'] . "/" . $last_note_id . "/" . "Attachments/" . $NoteAttachment_new_name);
                    }

                    // show popup that note is added
                    $_SESSION['noteAdded'] = "";
                    header("Location: dashboard.php");
                }
                ?>

                <div class="container">
                    <div class="row">
                        <form action="" method="POST" enctype="multipart/form-data" id="add-note-form">
                            <div class="row">

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Title *</label>
                                        <input name="Title" type="text" value="<?php if (isset($_GET['note_id'])) {
                                                                                    echo $getTitle;
                                                                                } ?>" class="form-control input-box-style" placeholder="Enter your note title">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Category *</label>
                                        <select name="Category" class="form-control input-box-style">

                                            <?php
                                            if (isset($_GET['note_id'])) {
                                                // getting category name with category id
                                                $get_category_name = "SELECT * FROM note_categories WHERE CategoryID = $getCategoryID ";
                                                $get_category_name_query = mysqli_query($connection, $get_category_name);
                                                confirmQuery($get_category_name_query);
                                                $get_category_name_row = mysqli_fetch_assoc($get_category_name_query);
                                                $getCategoryName = $get_category_name_row['Name'];

                                                $select_category = "SELECT * FROM note_categories ";
                                                $select_category_query = mysqli_query($connection, $select_category);
                                                confirmQuery($select_category_query);

                                                while ($row = mysqli_fetch_assoc($select_category_query)) {
                                                    $cat_id = $row['CategoryID'];
                                                    $cat_name = $row['Name'];

                                                    if ($cat_id == $getCategoryID) {
                                                        echo "<option value='$getCategoryID' selected>$getCategoryName</option>";
                                                    } else {
                                                        echo "<option value='$cat_id'>$cat_name</option>";
                                                    }
                                                }
                                            } else {
                                                echo "<option value='' selected disabled>Select note category</option>";
                                                $select_category = "SELECT * FROM note_categories ";
                                                $select_category_query = mysqli_query($connection, $select_category);
                                                confirmQuery($select_category_query);

                                                while ($row = mysqli_fetch_assoc($select_category_query)) {
                                                    $cat_id = $row['CategoryID'];
                                                    $cat_name = $row['Name'];

                                                    echo "<option value='$cat_id'>$cat_name</option>";
                                                }
                                            }
                                            ?>

                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Display Picture</label>
                                        <div id="uploadNoteDisplayPicture" class="form-control input-box-style upload-input-box">
                                            <input name="DisplayPicture" id="file-upload-1" class="upload-file-input" type="file" accept="image/jpeg, image/jpg, image/png" />
                                            <label for="file-upload-1">
                                                <img src="../images/user-profile/upload.png" alt="Upload Profile Picture">
                                                <p>Upload a picture</p>
                                            </label>
                                        </div>
                                        <div id="file-upload-1-filename"></div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Upload Notes *</label>
                                        <div id="uploadYourNotes" class="form-control input-box-style upload-input-box">
                                            <input type="file" name="NoteAttachment[]" class="upload-file-input" multiple <?php if (!isset($_GET['note_id'])) {
                                                                                                                                echo "required";
                                                                                                                            } ?> id="file-upload-2" accept="application/pdf" />
                                            <label for="file-upload-2">
                                                <img src="../images/add-note/upload-note.png" alt="Upload your notes">
                                                <p>Upload your notes</p>
                                            </label>
                                        </div>
                                        <div id="file-upload-2-filename"></div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Type</label>
                                        <select name="NoteType" class="form-control input-box-style">

                                            <?php
                                            if (isset($_GET['note_id']) && $getTypeID != null) {
                                                // getting type name with type id
                                                $get_type_name = "SELECT * FROM note_types WHERE TypeID = $getTypeID ";
                                                $get_type_name_query = mysqli_query($connection, $get_type_name);
                                                confirmQuery($get_type_name_query);
                                                $get_type_name_row = mysqli_fetch_assoc($get_type_name_query);
                                                $getTypeName = $get_type_name_row['Name'];

                                                $select_type = "SELECT * FROM note_types ";
                                                $select_type_query = mysqli_query($connection, $select_type);
                                                confirmQuery($select_type_query);

                                                while ($row = mysqli_fetch_assoc($select_type_query)) {
                                                    $type_id = $row['TypeID'];
                                                    $type_name = $row['Name'];

                                                    if ($type_id == $getTypeID) {
                                                        echo "<option value='$getTypeID' selected>$getTypeName</option>";
                                                    } else {
                                                        echo "<option value='$type_id'>$type_name</option>";
                                                    }
                                                }
                                            } else {
                                                echo "<option value='' selected disabled>Select your note type</option>";
                                                $select_type = "SELECT * FROM note_types ";
                                                $select_type_query = mysqli_query($connection, $select_type);
                                                confirmQuery($select_type_query);

                                                while ($row = mysqli_fetch_assoc($select_type_query)) {
                                                    $type_id = $row['TypeID'];
                                                    $type_name = $row['Name'];

                                                    echo "<option value='$type_id'>$type_name</option>";
                                                }
                                            }
                                            ?>

                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Number of Pages</label>
                                        <input name="NumberOfPages" value="<?php if (isset($_GET['note_id'])) {
                                                                                echo $getNumberOfPages;
                                                                            } ?>" type="text" class="form-control input-box-style" placeholder="Enter number of note pages">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="info-label" for="comment-questions">Description *</label>
                                        <textarea name="Description" class="form-control input-box-style" id="note-desc-textarea" placeholder="Enter note description..."><?php if (isset($_GET['note_id'])) {
                                                                                                                                                                                echo $getDesc;
                                                                                                                                                                            } ?></textarea>
                                    </div>
                                </div>

                                <!--  -->
                                <div class="col-md-12 col-sm-12">
                                    <p class="section-heading text-left mtop-section-heading">Institution Information</p>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Country *</label>
                                        <select name="Country" class="form-control input-box-style">

                                            <?php
                                            if (isset($_GET['note_id']) && $getCountryID != null) {
                                                // getting country name with country id
                                                $get_country_name = "SELECT * FROM countries WHERE CountryID = $getCountryID ";
                                                $get_country_name_query = mysqli_query($connection, $get_country_name);
                                                confirmQuery($get_country_name_query);
                                                $get_country_name_row = mysqli_fetch_assoc($get_country_name_query);
                                                $getCountryName = $get_country_name_row['Name'];

                                                $select_country = "SELECT * FROM countries ";
                                                $select_country_query = mysqli_query($connection, $select_country);
                                                confirmQuery($select_country_query);

                                                while ($row = mysqli_fetch_assoc($select_country_query)) {
                                                    $country_id = $row['CountryID'];
                                                    $country_name = $row['Name'];

                                                    if ($country_id == $getCountryID) {
                                                        echo "<option value='$getCountryID' selected>$getCountryName</option>";
                                                    } else {
                                                        echo "<option value='$country_id'>$country_name</option>";
                                                    }
                                                }
                                            } else {
                                                echo "<option disabled selected>Select your country</option>";
                                                $select_country = "SELECT * FROM countries ";
                                                $select_country_query = mysqli_query($connection, $select_country);
                                                confirmQuery($select_country_query);

                                                while ($row = mysqli_fetch_assoc($select_country_query)) {
                                                    $country_id = $row['CountryID'];
                                                    $country_name = $row['Name'];

                                                    echo "<option value='$country_id'>$country_name</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Institute Name</label>
                                        <input name="UniversityName" type="text" value="<?php if (isset($_GET['note_id'])) {
                                                                                            echo $getInstitute;
                                                                                        } ?>" class="form-control input-box-style" placeholder="Enter your institute name">
                                    </div>
                                </div>

                                <!--  -->
                                <div class="col-md-12 col-sm-12">
                                    <p class="section-heading text-left mtop-section-heading">Course Details</p>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Course Name</label>
                                        <input name="Course" type="text" value="<?php if (isset($_GET['note_id'])) {
                                                                                    echo $getCourse;
                                                                                } ?>" class="form-control input-box-style" placeholder="Enter your course name">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Course Code</label>
                                        <input name="CourseCode" type="text" value="<?php if (isset($_GET['note_id'])) {
                                                                                        echo $getCourseCode;
                                                                                    } ?>" class="form-control input-box-style" placeholder="Enter your course code">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Professor / Lecturer</label>
                                        <input name="Professor" type="text" value="<?php if (isset($_GET['note_id'])) {
                                                                                        echo $getProfessor;
                                                                                    } ?>" class="form-control input-box-style" placeholder="Enter your Professor name">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6"></div>

                                <!--  -->
                                <div class="col-md-12 col-sm-12">
                                    <p class="section-heading text-left mtop-section-heading">Selling Information</p>
                                </div>

                                <div class="col-md-6 col-sm-6">

                                    <div class="form-group">
                                        <label class="info-label">Sell For *</label>
                                        <div class="row no-gutters free-paid-radio-wrapper">

                                            <label class="purple-radio-input">
                                                <input type="radio" name="IsPaid" value="0" <?php if (isset($_GET['note_id'])) {
                                                                                                if ($getIsPaid == 0) {
                                                                                                    echo "checked";
                                                                                                }
                                                                                            } ?>>
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="info-label" for="">Free</label>

                                            <label class="purple-radio-input">
                                                <input type="radio" name="IsPaid" value="1" <?php if (isset($_GET['note_id'])) {
                                                                                                if ($getIsPaid == 1) {
                                                                                                    echo "checked";
                                                                                                }
                                                                                            } ?>>
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="info-label" for="">Paid</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Sell Price *</label>
                                        <input id="SellingPrice" name="SellingPrice" value="<?php if (isset($_GET['note_id'])) {
                                                                                                echo $getSellingPrice;
                                                                                            } ?>" type="text" class="form-control input-box-style" placeholder="Enter your price">
                                    </div>

                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Note Preview</label>
                                        <div id="uploadNotePreviewPicture" class="form-control input-box-style upload-input-box">
                                            <input name="NotesPreview" id="file-upload-3" class="upload-file-input" type="file" accept="application/pdf" />
                                            <label for="file-upload-3">
                                                <img src="../images/user-profile/upload.png" alt="Upload Profile Picture">
                                                <p>Upload a file</p>
                                            </label>
                                        </div>
                                        <div id="file-upload-3-filename"></div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="row no-gutters">
                                        <div class="form-btn">
                                            <button name="<?php if (isset($_GET['note_id'])) {
                                                                echo "edit_note";
                                                            } else {
                                                                echo "save_note";
                                                            } ?>" type="submit" class="btn btn-general btn-purple save-note-btn">Save</button>
                                        </div>
                                        <?php include "../includes/modals/publish-note-modal.php"; ?>
                                        <?php if (isset($_GET['note_id'])) { ?>
                                            <div class="form-btn">
                                                <button type="button" id="publish-note-confirmation" class="btn btn-general btn-purple publish-note-btn">Publish</button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- details container -->

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

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <!-- JQuery-Validation -->
    <script src="../js/JQuery-Validation/jquery.validate.js"></script>
    <script src="../js/form-validation/form-validation.js"></script>

    <script>
        $(document).ready(function() {
            $("#publish-note-confirmation").click(function() {
                $("#publishNoteModal").modal("show");
            });
        });
    </script>

    <!-- Java-scripts -->
</body>

</html>