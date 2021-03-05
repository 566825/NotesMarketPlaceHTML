<?php $page_name = "My Profile"; ?>
<?php include "../includes/head.php"; ?>

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
                                                <img src="../images/testimonial/customer-1.png" alt="User Photo" class="rounded-circle">
                                            </div>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item active" href="user-profile.php">My Profile</a>
                                            <a class="dropdown-item" href="my-downloads.php">My Downloads</a>
                                            <a class="dropdown-item" href="my-sold-notes.php">My Sold Notes</a>
                                            <a class="dropdown-item" href="my-rejected-notes.php">My Rejected Notes</a>
                                            <a class="dropdown-item" href="change-password.php">Change Password</a>
                                            <a class="dropdown-item logout-btn-dropdown" href="../includes/logout.php">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple" href="../includes/logout.php" title="Download" role="button">Logout</a>
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
                                                    <img src="../images/testimonial/customer-1.png" alt="User Photo" class="rounded-circle">
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item active" href="user-profile.php">My Profile</a>
                                                    <a class="dropdown-item" href="my-downloads.php">My Downloads</a>
                                                    <a class="dropdown-item" href="my-sold-notes.php">My Sold Notes</a>
                                                    <a class="dropdown-item" href="my-rejected-notes.php">My Rejected Notes</a>
                                                    <a class="dropdown-item" href="change-password.php">Change Password</a>
                                                    <a class="dropdown-item logout-btn-dropdown" href="../includes/logout.php">Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple" href="../includes/logout.php" title="Download" role="button">Logout</a>
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

                        if (isset($_SESSION['UserID'])) {
                            $UserID = $_SESSION['UserID'];

                            $profile_query = "SELECT * FROM users u JOIN user_profile up ON u.UserID = up.UserID WHERE u.UserID = $UserID ";
                            $profile_query_result = mysqli_query($connection, $profile_query);
                            confirmQuery($profile_query_result);

                            if (mysqli_num_rows($profile_query_result) != 0) {
                                // echo "Update";

                                // if query above has rows then this will execute
                                while ($row = mysqli_fetch_assoc($profile_query_result)) {

                                    $ProfileID = $row['ProfileID'];
                                    $FirstName = $row['FirstName'];
                                    $LastName = $row['LastName'];
                                    $EmailID = $row['EmailID'];
                                    $DOB = $row['DOB'];
                                    $Gender = $row['Gender'];
                                    $CountryCode = $row['CountryCode'];
                                    $PhoneNumber = $row['PhoneNumber'];
                                    $AddressLine1 = $row['AddressLine1'];
                                    $AddressLine2 = $row['AddressLine2'];
                                    $City = $row['City'];
                                    $State = $row['State'];
                                    $ZipCode = $row['ZipCode'];
                                    $Country = $row['Country'];
                                    $University = $row['University'];
                                    $College = $row['College'];
                                }

                                if (isset($_POST['submit_profile'])) {

                                    $FirstName = $_POST['FirstName'];
                                    $LastName = $_POST['LastName'];
                                    $EmailID = $_POST['EmailID'];
                                    $DOB = $_POST['DOB'];
                                    $Gender = $_POST['Gender'];
                                    $CountryCode = $_POST['CountryCode'];
                                    $PhoneNumber = $_POST['PhoneNumber'];
                                    // $ProfilePicture = $_FILES['ProfilePicture']['name'];
                                    // $ProfilePicture_temp = $_FILES['ProfilePicture']['tmp_name'];
                                    $AddressLine1 = $_POST['AddressLine1'];
                                    $AddressLine2 = $_POST['AddressLine2'];
                                    $City = $_POST['City'];
                                    $State = $_POST['State'];
                                    $ZipCode = $_POST['ZipCode'];
                                    $Country = $_POST['Country'];
                                    $University = $_POST['University'];
                                    $College = $_POST['College'];

                                    // move_uploaded_file($ProfilePicture_temp, "../Members/$ProfilePicture"); // this function uploads a picutre at given path                                  

                                    $query = "UPDATE user_profile SET ";
                                    $query .= "DOB = '{$DOB}', ";
                                    $query .= "Gender = $Gender, ";
                                    $query .= "CountryCode = '{$CountryCode}', ";
                                    $query .= "PhoneNumber = '{$PhoneNumber}', ";
                                    $query .= "AddressLine1 = '{$AddressLine1}', ";
                                    $query .= "AddressLine2 = '{$AddressLine2}', ";
                                    $query .= "City = '{$City}', ";
                                    $query .= "State = '{$State}', ";
                                    $query .= "ZipCode = '{$ZipCode}', ";
                                    $query .= "Country = '{$Country}', ";
                                    $query .= "University = '{$University}', ";
                                    $query .= "College = '{$College}', ";
                                    $query .= "ModifiedBy = $UserID ";
                                    $query .= "WHERE ProfileID = {$ProfileID} ";

                                    $update_profile_query = mysqli_query($connection, $query);
                                    confirmQuery($update_profile_query);
                                }

                            } else {

                                // echo "Create";
                                // if join query above has no result or rows then this will execute

                                if (isset($_SESSION['UserID'])) {
                                    $UserID = $_SESSION['UserID'];
                                }

                                // to prepopulate fname lname email from users table
                                $users_table_query = "SELECT * FROM users WHERE UserID = $UserID ";
                                $users_table_query_result = mysqli_query($connection, $users_table_query);
                                confirmQuery($users_table_query_result);

                                $users_row = mysqli_fetch_assoc($users_table_query_result);
                                $FirstName = $users_row['FirstName'];
                                $LastName = $users_row['LastName'];
                                $EmailID = $users_row['EmailID'];


                                if (isset($_POST['submit_profile'])) {

                                    $FirstName = $_POST['FirstName'];
                                    $LastName = $_POST['LastName'];
                                    $EmailID = $_POST['EmailID'];
                                    $DOB = $_POST['DOB'];
                                    $Gender = $_POST['Gender'];
                                    $CountryCode = $_POST['CountryCode'];
                                    $PhoneNumber = $_POST['PhoneNumber'];
                                    $ProfilePicture = $_FILES['ProfilePicture']['name'];
                                    $ProfilePicture_temp = $_FILES['ProfilePicture']['tmp_name'];
                                    $AddressLine1 = $_POST['AddressLine1'];
                                    $AddressLine2 = $_POST['AddressLine2'];
                                    $City = $_POST['City'];
                                    $State = $_POST['State'];
                                    $ZipCode = $_POST['ZipCode'];
                                    $Country = $_POST['Country'];
                                    $University = $_POST['University'];
                                    $College = $_POST['College'];
                                    move_uploaded_file($ProfilePicture_temp, "../Members/$ProfilePicture"); // this function uploads a picutre at given path

                                    // if (($_FILES['ProfilePicture']['type']) == "image/jpg" || ($_FILES['ProfilePicture']['type']) == "image/jpeg") {                                    
                                    // } else {
                                    //     die();
                                    //     $j = 1;
                                    // }

                                    $query = "INSERT INTO user_profile (UserID, DOB, Gender, CountryCode, PhoneNumber, ProfilePicture, AddressLine1, AddressLine2, City, State, ZipCode, Country, University, College, CreatedBy) ";
                                    $query .= "VALUES ($UserID, '{$DOB}', $Gender, '{$CountryCode}', '{$PhoneNumber}', '{$ProfilePicture}', '{$AddressLine1}', '{$AddressLine2}', '{$City}', '{$State}', '{$ZipCode}', '{$Country}', '{$University}', '{$College}', $UserID) ";

                                    $create_profile_query = mysqli_query($connection, $query);
                                    confirmQuery($create_profile_query);                                    
                                }
                            }
                        }



                        ?>

                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label" for="exampleInputEmail1">First Name *</label>
                                        <input value="<?php echo empty($FirstName) ? "" : $FirstName; ?>" type="text" name="FirstName" class="form-control input-box-style" aria-describedby="emailHelp" placeholder="Enter your first name" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label" for="exampleInputEmail1">Last Name *</label>
                                        <input value="<?php echo empty($LastName) ? "" : $LastName; ?>" type="text" name="LastName" class="form-control input-box-style" aria-describedby="emailHelp" placeholder="Enter your last name" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label" for="exampleInputEmail1">Email *</label>
                                        <input value="<?php echo empty($EmailID) ? "" : $EmailID; ?>" type="email" name="EmailID" class="form-control input-box-style" aria-describedby="emailHelp" placeholder="Enter your email address" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label" for="exampleInputEmail1">Date Of Birth</label>
                                        <input value="<?php echo empty($DOB) ? "" : $DOB; ?>" type="text" name="DOB" class="form-control input-box-style" aria-describedby="emailHelp" placeholder="Enter your date of birth">
                                        <div class="calendar"><img class="calendar-img" src="../images/user-profile/calendar.png" alt="eye"></div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label" for="exampleFormControlSelect1">Gender</label>
                                        <select name="Gender" class="form-control input-box-style">

                                            <?php if (!empty($Gender)) { ?>
                                                <option value="" disabled>Select Your Gender</option>
                                                <?php
                                                if ($Gender == 1) {
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

                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group">
                                        <label class="info-label" for="exampleFormControlSelect1">Code</label>
                                        <select name="CountryCode" class="form-control input-box-style" id="exampleFormControlSelect1">

                                            <?php if ($CountryCode != "") { ?>
                                                <option value="" disabled>Country Code</option>
                                                <option value="<?php echo $CountryCode ?>" selected>+<?php echo $CountryCode ?></option>
                                            <?php } else { ?>
                                                <option value="" disabled selected>Country Code</option>
                                            <?php } ?>

                                            <?php
                                            $countrieCodes = ['91', '92', '53', '34', '123', '67'];
                                            for ($i = 0; $i < 6; $i++) {
                                                if ($countrieCodes[$i] != $CountryCode) {
                                                    echo "<option value='$countrieCodes[$i]'>+$countrieCodes[$i]</option>";
                                                }
                                            }
                                            ?>

                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label class="info-label" for="exampleInputEmail1">Phone Number</label>
                                        <input value="<?php echo empty($PhoneNumber) ? "" : $PhoneNumber; ?>" type="text" name="PhoneNumber" class="form-control input-box-style" aria-describedby="emailHelp" placeholder="Enter your phone number">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="info-label" for="exampleInputEmail1">Profile Picture</label>
                                        <div id="uploadProfilePicture" class="form-control input-box-style upload-input-box">
                                            <input id="file-input-1" class="upload-file-input" name="ProfilePicture" type="file" />
                                            <a id="file-input-link-1" href="" class="upload-file-link">
                                                <img src="../images/user-profile/upload.png" alt="Upload Profile Picture">
                                                <p>Upload a picture</p>
                                            </a>                                            
                                        </div>
                                    </div>
                                </div>

                            </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- details container -->


        <!-- details conatiner -->
        <div class="general-box">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <p class="section-heading">Address Details</p>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="info-label" for="exampleInputEmail1">Address Line 1 *</label>
                                    <input value="<?php echo empty($AddressLine1) ? "" : $AddressLine1; ?>" type="text" name="AddressLine1" class="form-control input-box-style" placeholder="Enter your address" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="info-label" for="exampleInputEmail1">Address Line 2</label>
                                    <input value="<?php echo empty($AddressLine2) ? "" : $AddressLine2; ?>" type="text" name="AddressLine2" class="form-control input-box-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your address">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="info-label" for="exampleInputEmail1">City *</label>
                                    <input value="<?php echo empty($City) ? "" : $City; ?>" type="text" name="City" class="form-control input-box-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your city" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="info-label" for="exampleInputEmail1">State *</label>
                                    <input value="<?php echo empty($State) ? "" : $State; ?>" type="text" name="State" class="form-control input-box-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your state" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="info-label" for="exampleFormControlSelect1">ZipCode *</label>
                                    <input value="<?php echo empty($ZipCode) ? "" : $ZipCode; ?>" type="text" name="ZipCode" class="form-control input-box-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your zipcode" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="info-label" for="exampleFormControlSelect1">Country *</label>
                                    <select name="Country" class="form-control input-box-style" id="exampleFormControlSelect1" required>

                                        <?php if ($Country != "") { ?>
                                            <option value="" disabled>Select your country</option>
                                            <option value="<?php echo $Country ?>" selected><?php echo $Country ?></option>
                                        <?php } else { ?>
                                            <option value="" disabled selected>Select your country</option>
                                        <?php } ?>

                                        <?php
                                        $countries = ['India', 'America', 'Canada', 'China', 'Peru', 'Polland'];
                                        for ($i = 0; $i < 6; $i++) {
                                            if ($countries[$i] != $Country) {
                                                echo "<option value='$countries[$i]'>$countries[$i]</option>";
                                            }
                                        }
                                        ?>

                                    </select>
                                    <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- details container -->


        <!-- details conatiner -->
        <div class="general-box">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <p class="section-heading">University and College Information</p>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="info-label" for="exampleInputEmail1">University</label>
                                    <input value="<?php echo empty($University) ? "" : $University; ?>" type="text" name="University" class="form-control input-box-style" placeholder="Enter your university">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="info-label" for="exampleInputEmail1">College</label>
                                    <input value="<?php echo empty($College) ? "" : $College; ?>" type="text" name="College" class="form-control input-box-style" id="exampleInputEmail1" placeholder="Enter your college">
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

    <!-- Java-scripts -->

    <!-- JQuery -->
    <script src="../js/JQuery/jquery.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <!-- Java-scripts -->
</body>

</html>