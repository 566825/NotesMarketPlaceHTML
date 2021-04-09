<?php $page_name = "My Profile"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: login.php");
    die();
}
?>

<body>

    <section id="user-profile">
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
                                            <a class="dropdown-item active" href="user-profile.php">My Profile</a>
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
                                                    <a class="dropdown-item active" href="user-profile.php">My Profile</a>
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
            <p class="text-center">User Profile</p>
        </div>
        <!-- background -->

        <!-- details conatiner -->
        <div class="general-box">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <p class="section-heading">Basic Profile Details</p>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
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
                        $getDOB = empty($get_user_profile_row['DOB']) ? null : $get_user_profile_row['DOB'];
                        $getGender = empty($get_user_profile_row['Gender']) ? null : $get_user_profile_row['Gender'];
                        $getCountryCode = empty($get_user_profile_row['CountryCode']) ? null : $get_user_profile_row['CountryCode'];
                        $getPhoneNumber = empty($get_user_profile_row['PhoneNumber']) ? null : $get_user_profile_row['PhoneNumber'];
                        $getDP = empty($get_user_profile_row['ProfilePicture']) ? null : $get_user_profile_row['ProfilePicture'];
                        $getAddressLine1 = empty($get_user_profile_row['AddressLine1']) ? null : $get_user_profile_row['AddressLine1'];
                        $getAddressLine2 = empty($get_user_profile_row['AddressLine2']) ? null : $get_user_profile_row['AddressLine2'];
                        $getCity = empty($get_user_profile_row['City']) ? null : $get_user_profile_row['City'];
                        $getState = empty($get_user_profile_row['State']) ? null : $get_user_profile_row['State'];
                        $getZipCode = empty($get_user_profile_row['ZipCode']) ? null : $get_user_profile_row['ZipCode'];
                        $getCountry = empty($get_user_profile_row['Country']) ? null : $get_user_profile_row['Country'];
                        $getUniversity = empty($get_user_profile_row['University']) ? null : $get_user_profile_row['University'];
                        $getCollege = empty($get_user_profile_row['College']) ? null : $get_user_profile_row['College'];

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
                            $update_user = "UPDATE users SET FirstName = '{$form_fname}', LastName = '{$form_lname}' WHERE UserID = {$UserID} ";
                            $update_user_query = mysqli_query($connection, $update_user);
                            confirmQuery($update_user_query);

                            if (mysqli_num_rows($profile_query_result) == 0) {
                                $form_dob = empty($_POST['DOB']) ? "NULL" : "'" . $_POST['DOB'] . "'";
                                $form_gender = empty($_POST['Gender']) ? "NULL" : "'" . $_POST['Gender'] . "'";
                                $form_ccode = $_POST['CountryCode'];
                                $form_pnumber = $_POST['PhoneNumber'];
                                $form_dp = $_FILES['ProfilePicture']['name'];
                                $form_dp_temp = $_FILES['ProfilePicture']['tmp_name'];
                                $form_addline1 = $_POST['AddressLine1'];
                                $form_addline2 = $_POST['AddressLine2'];
                                $form_city = $_POST['City'];
                                $form_state = $_POST['State'];
                                $form_zipcode = $_POST['ZipCode'];
                                $form_country = $_POST['Country'];
                                $form_university = empty($_POST['University']) ? "NULL" : "'" . $_POST['University'] . "'";
                                $form_college = empty($_POST['College']) ? "NULL" : "'" . $_POST['College'] . "'";

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

                                $add_profile = "INSERT INTO user_profile ( UserID, DOB, Gender, CountryCode, PhoneNumber, ProfilePicture, AddressLine1, AddressLine2, City, State, ZipCode, Country, University, College, CreatedBy ) ";
                                $add_profile .= "VALUES ( {$UserID}, {$form_dob}, {$form_gender}, '{$form_ccode}', '{$form_pnumber}', {$form_dp_file_path}, '{$form_addline1}', '{$form_addline2}', '{$form_city}', '{$form_state}', '{$form_zipcode}', '{$form_country}', {$form_university}, {$form_college}, {$UserID} ) ";
                                $add_profile_query = mysqli_query($connection, $add_profile);
                                confirmQuery($add_profile_query);

                                // adding DP to user folder
                                move_uploaded_file($form_dp_temp, "../../Members/" . $_SESSION['UserID'] . "/" . trim($form_dp_new_name, "'"));
                            } else {
                                $form_dob = empty($_POST['DOB']) ? "NULL" : "'" . $_POST['DOB'] . "'";
                                $form_gender = empty($_POST['Gender']) ? "NULL" : "'" . $_POST['Gender'] . "'";
                                $form_ccode = $_POST['CountryCode'];
                                $form_pnumber = $_POST['PhoneNumber'];
                                $form_dp = $_FILES['ProfilePicture']['name'];
                                $form_dp_temp = $_FILES['ProfilePicture']['tmp_name'];
                                $form_addline1 = $_POST['AddressLine1'];
                                $form_addline2 = $_POST['AddressLine2'];
                                $form_city = $_POST['City'];
                                $form_state = $_POST['State'];
                                $form_zipcode = $_POST['ZipCode'];
                                $form_country = $_POST['Country'];
                                $form_university = empty($_POST['University']) ? "NULL" : "'" . $_POST['University'] . "'";
                                $form_college = empty($_POST['College']) ? "NULL" : "'" . $_POST['College'] . "'";

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
                                $update_profile .= "DOB = {$form_dob}, ";
                                $update_profile .= "Gender = {$form_gender}, ";
                                $update_profile .= "CountryCode = '{$form_ccode}', ";
                                $update_profile .= "PhoneNumber = '{$form_pnumber}', ";
                                if (!empty($form_dp)) {
                                    $update_profile .= "ProfilePicture = {$form_dp_file_path}, ";
                                }
                                $update_profile .= "AddressLine1 = '{$form_addline1}', ";
                                $update_profile .= "AddressLine2 = '{$form_addline2}', ";
                                $update_profile .= "City = '{$form_city}', ";
                                $update_profile .= "State = '{$form_state}', ";
                                $update_profile .= "ZipCode = '{$form_zipcode}', ";
                                $update_profile .= "Country = '{$form_country}', ";
                                $update_profile .= "University = {$form_university}, ";
                                $update_profile .= "College = {$form_college}, ";
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
                            header("Location: search-notes.php");
                        }
                        ?>

                        <form action="" method="POST" enctype="multipart/form-data" id="user-profile-form">
                            <div class="row">

                                <!-- fname -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">First Name *</label>
                                        <input type="text" name="FirstName" value="<?php echo $get_user_fname; ?>" class="form-control input-box-style" placeholder="Enter your first name">
                                    </div>
                                </div>

                                <!-- lname -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Last Name *</label>
                                        <input type="text" name="LastName" value="<?php echo $get_user_lname; ?>" class="form-control input-box-style" placeholder="Enter your last name">
                                    </div>
                                </div>

                                <!-- email -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Email *</label>
                                        <input type="email" name="EmailID" value="<?php echo $get_user_email; ?>" class="form-control input-box-style" placeholder="Enter your email address" readonly>
                                    </div>
                                </div>

                                <!-- dob -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Date Of Birth</label>
                                        <input type="date" name="DOB" value="<?php echo $getDOB; ?>" class="form-control input-box-style" placeholder="Enter your date of birth">
                                    </div>
                                </div>

                                <!-- gender -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Gender</label>
                                        <select name="Gender" class="form-control input-box-style">

                                            <?php if (!empty($getGender)) { ?>
                                                <option value="" disabled>Select Your Gender</option>
                                                <?php
                                                if ($getGender == 1) {
                                                    echo "<option value='1' selected>Male</option>";
                                                    echo "<option value='2'>Female</option>";
                                                } else {
                                                    echo "<option value='1'>Male</option>";
                                                    echo "<option value='2' selected>Female</option>";
                                                }
                                                ?>
                                            <?php } else { ?>
                                                <option value="" disabled selected>Select Your Gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            <?php } ?>

                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>

                                <!-- country-code -->
                                <div class="col-md-2 col-sm-2">
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

                                <!-- phone-number -->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label class="info-label">Phone Number</label>
                                        <input type="text" name="PhoneNumber" value="<?php echo $getPhoneNumber; ?>" class="form-control input-box-style" placeholder="Enter your phone number">
                                    </div>
                                </div>

                                <!-- profile picture -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Profile Picture</label>
                                        <div id="uploadProfilePicture" class="form-control input-box-style upload-input-box">
                                            <input name="ProfilePicture" id="file-upload-4" class="upload-file-input" type="file" accept="image/jpeg, image/jpg, image/png" />
                                            <label for="file-upload-4">
                                                <img src="../images/user-profile/upload.png" alt="Upload Profile Picture">
                                                <p>Upload a picture</p>
                                            </label>
                                        </div>
                                        <div id="file-upload-4-filename"></div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6"></div>

                                <!--  -->
                                <div class="col-md-12 col-sm-12">
                                    <p class="section-heading text-left mtop-section-heading">Address Details</p>
                                </div>

                                <!-- addressline1 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Address Line 1 *</label>
                                        <input type="text" name="AddressLine1" value="<?php echo $getAddressLine1; ?>" class="form-control input-box-style" placeholder="Enter your address">
                                    </div>
                                </div>

                                <!-- addressline2 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Address Line 2</label>
                                        <input type="text" name="AddressLine2" value="<?php echo $getAddressLine2; ?>" class="form-control input-box-style" placeholder="Enter your address">
                                    </div>
                                </div>

                                <!-- City -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">City *</label>
                                        <input type="text" name="City" value="<?php echo $getCity; ?>" class="form-control input-box-style" placeholder="Enter your city">
                                    </div>
                                </div>

                                <!-- State -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">State *</label>
                                        <input type="text" name="State" value="<?php echo $getState; ?>" class="form-control input-box-style" placeholder="Enter your state">
                                    </div>
                                </div>

                                <!-- ZipCode -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">ZipCode *</label>
                                        <input type="text" name="ZipCode" value="<?php echo $getZipCode; ?>" class="form-control input-box-style" placeholder="Enter your zipcode">
                                    </div>
                                </div>

                                <!-- Country -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">Country *</label>
                                        <select name="Country" class="form-control input-box-style">

                                            <?php
                                            $select_country = "SELECT * FROM countries ";
                                            $select_country_query = mysqli_query($connection, $select_country);
                                            confirmQuery($select_country_query);

                                            if ($getCountry != null) {
                                                echo "<option disabled>Select your country</option>";
                                                while ($row = mysqli_fetch_assoc($select_country_query)) {
                                                    $country_name = $row['Name'];
                                                    if ($country_name == $getCountry) {
                                                        echo "<option value='$country_name' selected>$country_name</option>";
                                                    } else {
                                                        echo "<option value='$country_name'>$country_name</option>";
                                                    }
                                                }
                                            } else {
                                                echo "<option disabled selected>Select your country</option>";
                                                while ($row = mysqli_fetch_assoc($select_country_query)) {
                                                    $country_name = $row['Name'];
                                                    echo "<option value='$country_name'>$country_name</option>";
                                                }
                                            }
                                            ?>

                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>

                                <!--  -->
                                <div class="col-md-12 col-sm-12">
                                    <p class="section-heading text-left mtop-section-heading">University and College Information</p>
                                </div>

                                <!-- University -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">University</label>
                                        <input type="text" name="University" value="<?php echo $getUniversity; ?>" class="form-control input-box-style" placeholder="Enter your university">
                                    </div>
                                </div>

                                <!-- College -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label">College</label>
                                        <input type="text" name="College" value="<?php echo $getCollege; ?>" class="form-control input-box-style" placeholder="Enter your college">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="form-btn">
                                        <button type="submit" name="submit_profile" class="btn btn-general btn-purple">Submit</button>
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