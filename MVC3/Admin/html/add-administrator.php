<?php $page_name = "Add Administrator"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}
?>

<body>
    <section id="add-administrator" class="admin-add-page">

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

        <!-- details conatiner -->
        <div class="general-box">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <p class="section-heading">Add Administrator</p>
                    </div>
                </div>

                <?php
                if (isset($_GET['admin_id'])) {
                    $admin_id = $_GET['admin_id'];

                    $get_admin = mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$admin_id} ");
                    confirmQuery($get_admin);
                    $get_admin_row = mysqli_fetch_assoc($get_admin);

                    $FirstName = $get_admin_row['FirstName'];
                    $LastName = $get_admin_row['LastName'];
                    $EmailID = $get_admin_row['EmailID'];

                    $get_admin_profile = mysqli_query($connection, "SELECT * FROM user_profile WHERE UserID = {$admin_id} ");
                    confirmQuery($get_admin_profile);
                    $get_admin_profile_count = mysqli_num_rows($get_admin_profile);

                    if ($get_admin_profile_count == 0) {
                        $CountryCode = null;
                        $PhoneNumber = null;
                    } else {
                        $get_admin_profile_row = mysqli_fetch_assoc($get_admin_profile);
                        $CountryCode = $get_admin_profile_row['CountryCode'];
                        $PhoneNumber = $get_admin_profile_row['PhoneNumber'];
                    }        
                } else {
                    $FirstName = null;
                    $LastName = null;
                    $EmailID = null;
                    $CountryCode = null;
                    $PhoneNumber = null;
                }

                $UserID = $_SESSION['UserID'];
                if (isset($_POST['add_admin'])) {
                    $fname = $_POST['FirstName'];
                    $lname = $_POST['LastName'];
                    $email = $_POST['EmailID'];
                    $country_code = $_POST['CountryCode'];
                    $phone_number = $_POST['PhoneNumber'];

                    if (isset($_GET['admin_id'])) {
                        $edit_admin = mysqli_query($connection, "UPDATE users SET FirstName = '{$fname}', LastName = '{$lname}', EmailID = '{$email}', ModifiedBy = {$UserID} WHERE UserID = {$admin_id} ");
                        confirmQuery($edit_admin);

                        $edit_admin_profile = mysqli_query($connection, "UPDATE user_profile SET CountryCode = '{$country_code}', PhoneNumber = '{$phone_number}', ModifiedBy = {$UserID} WHERE UserID = {$admin_id} ");
                        confirmQuery($edit_admin_profile);

                        $_SESSION['adminUpdated'] = '';
                        header("Location: manage-administrator.php");
                    } else {
                        $add_admin = mysqli_query($connection, "INSERT INTO users (RoleID, FirstName, LastName, EmailID, IsEmailVerified, CreatedBy) VALUES (2, '{$fname}', '{$lname}', '{$email}', 1, {$UserID}) ");
                        confirmQuery($add_admin);
                        $last_inserted_id = mysqli_insert_id($connection);
                        $add_admin_profile = mysqli_query($connection, "INSERT INTO user_profile (UserID, CountryCode, PhoneNumber, CreatedBy) VALUES ({$last_inserted_id}, '{$country_code}', '{$phone_number}', {$UserID}) ");
                        confirmQuery($add_admin_profile);

                        $_SESSION['adminAdded'] = '';
                        header("Location: manage-administrator.php");

                        if (!is_dir("../../Members/" . $last_inserted_id)) {
                            mkdir("../../Members/" . $last_inserted_id);
                        }
                    }
                }
                ?>

                <div class="container">
                    <div class="row">
                        <form action="" method="POST" id="add-admin-form">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">

                                    <div class="form-group">
                                        <label class="info-label">First Name *</label>
                                        <input name="FirstName" value="<?php echo $FirstName; ?>" type="text" class="form-control input-box-style" placeholder="Enter your first name">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Last Name *</label>
                                        <input name="LastName" value="<?php echo $LastName; ?>" type="text" class="form-control input-box-style" placeholder="Enter your last name">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Email *</label>
                                        <input name="EmailID" value="<?php echo $EmailID; ?>" type="email" class="form-control input-box-style" placeholder="Enter your email address">
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

                                                    if ($CountryCode != null) {
                                                        echo "<option disabled>Country Code</option>";
                                                        while ($row = mysqli_fetch_assoc($select_country_code_query)) {
                                                            $get_country_code = $row['CountryCode'];
                                                            if ($get_country_code == $CountryCode) {
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
                                                <input name="PhoneNumber" value="<?php echo $PhoneNumber; ?>" type="text" class="form-control input-box-style" placeholder="Enter your phone number">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-btn">
                                        <button name="add_admin" type="submit" class="btn btn-general btn-purple">Submit</button>
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