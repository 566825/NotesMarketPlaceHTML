<?php $page_name = "My Profile"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}
?>

<body>
    <section id="my-profile" class="admin-add-page">

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
                                            <a class="dropdown-item active" href="my-profile.php">Update Profile</a>
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
                        <a href="dashboard.php" title="Site Logo">
                            <img class="logo-in-mobile-menu" src="../images/logo/dark-logo.png" alt="Logo">
                        </a>
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
                                                <a class="dropdown-item active" href="my-profile.php">Update Profile</a>
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

        <!-- details conatiner -->
        <div class="general-box">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <p class="section-heading">My Profile</p>
                    </div>
                </div>

                <?php
                // checking if user hase done profile or note
                $UserID = $_SESSION['UserID'];
                $profile_query = "SELECT * FROM users u JOIN user_profile up ON u.UserID = up.UserID WHERE u.UserID = $UserID ";
                $profile_query_result = mysqli_query($connection, $profile_query);
                confirmQuery($profile_query_result);
                // end

                // populate fields if user has done profile
                $get_user_profile = "SELECT * FROM user_profile WHERE UserID = {$UserID} ";
                $get_user_profile_query = mysqli_query($connection, $get_user_profile);
                confirmQuery($get_user_profile_query);
                $get_user_profile_row = mysqli_fetch_assoc($get_user_profile_query);
                $getCountryCode = empty($get_user_profile_row['CountryCode']) ? null : $get_user_profile_row['CountryCode'];
                $getPhoneNumber = empty($get_user_profile_row['PhoneNumber']) ? null : $get_user_profile_row['PhoneNumber'];
                $getDP = empty($get_user_profile_row['ProfilePicture']) ? null : $get_user_profile_row['ProfilePicture'];
                $get_user_secondary_email = empty($get_user_profile_row['SecondaryEmail']) ? null : $get_user_profile_row['SecondaryEmail'];

                // getting users initial details
                $get_user_details = "SELECT * FROM users WHERE UserID = {$UserID} ";
                $get_user_details_query = mysqli_query($connection, $get_user_details);
                confirmQuery($get_user_details_query);
                $get_user_details_row = mysqli_fetch_assoc($get_user_details_query);
                $get_user_fname = $get_user_details_row['FirstName'];
                $get_user_lname = $get_user_details_row['LastName'];
                $get_user_email = $get_user_details_row['EmailID'];
                // end

                if (isset($_POST['submit_profile'])) {
                    $form_fname = $_POST['FirstName'];
                    $form_lname = $_POST['LastName'];

                    // updating fname and lname into users table
                    $update_user = "UPDATE users SET FirstName = '{$form_fname}', LastName = '{$form_lname}', ModifiedBy = {$UserID} WHERE UserID = {$UserID} ";
                    $update_user_query = mysqli_query($connection, $update_user);
                    confirmQuery($update_user_query);

                    if (mysqli_num_rows($profile_query_result) == 0) {
                        $form_ccode = empty($_POST['CountryCode']) ? 'NULL' : "'" . $_POST['CountryCode'] . "'";
                        $form_pnumber = empty($_POST['PhoneNumber']) ? 'NULL' : "'" . $_POST['PhoneNumber'] . "'";
                        $form_dp = $_FILES['ProfilePicture']['name'];
                        $form_dp_temp = $_FILES['ProfilePicture']['tmp_name'];
                        $form_secondary_email = empty($_POST['SecondaryEmailID']) ? 'NULL': "'" . $_POST['SecondaryEmailID'] . "'";

                        // changing picture name as DP_timestamp.ext
                        if (!empty($form_dp)) {
                            $form_dp_filename = substr($form_dp, 0, stripos($form_dp, '.')); // get filename only(without ext) 
                            $form_dp_ext = substr($form_dp, stripos($form_dp, '.')); // get file extension
                            $form_dp_new_name = "DP_" . time() . $form_dp_ext;
                            $form_dp_file_path = "'" . "../../Members/" . $UserID . "/" . $form_dp_new_name . "'";
                        } else {
                            $form_dp_file_path = 'NULL';
                        }
                        // end

                        $add_profile = "INSERT INTO user_profile ( UserID, ";
                        if ($form_ccode != 'NULL') {
                            $add_profile .= "CountryCode, ";
                        }
                        if ($form_pnumber != 'NULL') {
                            $add_profile .= "PhoneNumber, ";
                        }
                        $add_profile .= "ProfilePicture, SecondaryEmail, CreatedBy ) ";
                        $add_profile .= "VALUES ( {$UserID}, ";
                        if ($form_ccode != 'NULL') {
                            $add_profile .=  "{$form_ccode}, ";
                        }
                        if ($form_pnumber != 'NULL') {
                            $add_profile .=  "{$form_pnumber}, ";
                        }
                        $add_profile .= "{$form_dp_file_path}, {$form_secondary_email}, {$UserID} ) ";
                        $add_profile_query = mysqli_query($connection, $add_profile);
                        confirmQuery($add_profile_query);

                        // adding DP to user folder
                        move_uploaded_file($form_dp_temp, "../../Members/" . $_SESSION['UserID'] . "/" . trim($form_dp_new_name, "'"));
                    } else {
                        $form_ccode = empty($_POST['CountryCode']) ? 'NULL' : "'" . $_POST['CountryCode'] . "'";
                        $form_pnumber = empty($_POST['PhoneNumber']) ? 'NULL' : "'" . $_POST['PhoneNumber'] . "'";
                        $form_dp = $_FILES['ProfilePicture']['name'];
                        $form_dp_temp = $_FILES['ProfilePicture']['tmp_name'];
                        $form_secondary_email = empty($_POST['SecondaryEmailID']) ? 'NULL': "'" . $_POST['SecondaryEmailID'] . "'";

                        // changing picture name as DP_timestamp.ext
                        if (!empty($form_dp)) {
                            $form_dp_filename = substr($form_dp, 0, stripos($form_dp, '.')); // get filename only(without ext) 
                            $form_dp_ext = substr($form_dp, stripos($form_dp, '.')); // get file extension
                            $form_dp_new_name = "DP_" . time() . $form_dp_ext;
                            $form_dp_file_path = "'" . "../../Members/" . $UserID . "/" . $form_dp_new_name . "'";
                        } else {
                            $form_dp_file_path = 'NULL';
                        }
                        // end

                        $update_profile = "UPDATE user_profile SET ";
                        if ($form_ccode != 'NULL') {
                            $update_profile .= "CountryCode = {$form_ccode}, ";
                        }
                        if ($form_pnumber != 'NULL') {
                            $update_profile .= "PhoneNumber = {$form_pnumber}, ";
                        }
                        if (!empty($form_dp)) {
                            $update_profile .= "ProfilePicture = {$form_dp_file_path}, ";
                        }
                        $update_profile .= "SecondaryEmail = {$form_secondary_email}, ";
                        $update_profile .= "ModifiedBy = {$UserID} ";
                        $update_profile .= "WHERE UserID = {$UserID}";
                        $update_profile_query = mysqli_query($connection, $update_profile);
                        confirmQuery($update_profile_query);

                        if (!empty($form_dp)) {
                            if ($getDP != null) {
                                $dpFile = $getDP;
                                unlink($dpFile);
                            }
                            move_uploaded_file($form_dp_temp, "../../Members/" . $_SESSION['UserID'] . "/" . trim($form_dp_new_name, "'"));
                        }
                    }

                    $_SESSION['profileUpdated'] = "";
                    header("Location: dashboard.php");
                }
                ?>

                <div class="container">
                    <div class="row">
                        <form action="" method="POST" enctype="multipart/form-data" id="my-profile-form">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">

                                    <div class="form-group">
                                        <label class="info-label">First Name *</label>
                                        <input name="FirstName" value="<?php echo $get_user_fname; ?>" type="text" class="form-control input-box-style" placeholder="Enter your first name">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Last Name *</label>
                                        <input name="LastName" value="<?php echo $get_user_lname; ?>" type="text" class="form-control input-box-style" placeholder="Enter your last name">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Email *</label>
                                        <input name="EmailID" value="<?php echo $get_user_email; ?>" type="email" class="form-control input-box-style" placeholder="Enter your email address" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Secondary Email</label>
                                        <input name="SecondaryEmailID" value="<?php echo $get_user_secondary_email; ?>" type="email" class="form-control input-box-style" placeholder="Enter your email address">
                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label class="info-label">Code</label>
                                                <select name="CountryCode" class="form-control input-box-style">

                                                    <?php
                                                    $select_country_code = "SELECT * FROM countries ";
                                                    $select_country_code_query = mysqli_query($connection, $select_country_code);
                                                    confirmQuery($select_country_code_query);

                                                    if ($getCountryCode != null) {
                                                        echo "<option disabled>Country Code</option>";
                                                        while ($row = mysqli_fetch_assoc($select_country_code_query)) {
                                                            $get_country_code = $row['CountryCode'];
                                                            if ($get_country_code == $getCountryCode) {
                                                                echo "<option value='$get_country_code' selected>" . "+" . "$get_country_code</option>";
                                                            } else {
                                                                echo "<option value='$get_country_code'>" . "+" . "$get_country_code</option>";
                                                            }
                                                        }
                                                    } else {
                                                        echo "<option disabled selected>Country Code</option>";
                                                        while ($row = mysqli_fetch_assoc($select_country_code_query)) {
                                                            $get_country_code = $row['CountryCode'];
                                                            echo "<option value='$get_country_code'>" . "+" . "$get_country_code</option>";
                                                        }
                                                    }
                                                    ?>

                                                </select>
                                                <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                                            <div class="form-group">
                                                <label class="info-label">Phone Number</label>
                                                <input name="PhoneNumber" value="<?php echo $getPhoneNumber; ?>" type="text" class="form-control input-box-style" placeholder="Enter your phone number">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Profile Picture</label>
                                        <div id="uploadProfilePicture" class="form-control input-box-style upload-input-box">
                                            <input name="ProfilePicture" id="file-upload-1" class="upload-file-input" type="file" accept="image/jpeg, image/jpg, image/png" />
                                            <label for="file-upload-1">
                                                <img src="../images/user-profile/upload.png" alt="Upload Profile Picture">
                                                <p>Upload a picture</p>
                                            </label>
                                        </div>
                                        <div id="file-upload-1-filename"></div>
                                    </div>

                                    <div class="form-btn">
                                        <button name="submit_profile" type="submit" class="btn btn-general btn-purple">Submit</button>
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

    <!-- Java-scripts -->
</body>

</html>