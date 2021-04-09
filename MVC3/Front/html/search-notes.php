<?php $page_name = "Search Notes"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>

<body>

    <section id="search-notes">

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

        <!-- background -->
        <div class="small-height-bg">
            <p class="text-center">Search Notes</p>
        </div>
        <!-- background -->

        <!-- general box -->
        <div class="general-box">
            <div class="content-box-lg">

                <div class="container">
                    <div class="row">
                        <p class="box-heading">Search and Filter Notes</p>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="search-notes-input-box">
                            <form action="" method="POST">
                                <div class="form-group has-search-bar">
                                    <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                    <input id="NoteSearchInput" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search notes here...">
                                    <div id='searchedKeywords'></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-4 padding-right-0">
                                        <div class="form-group">
                                            <select id="filterByNoteType" class="form-control input-box-style search-note-dropdown">
                                                <option value='' selected>Select type</option>
                                                <?php
                                                $select_type = "SELECT * FROM note_types WHERE IsActive = 1 ";
                                                $select_type_query = mysqli_query($connection, $select_type);
                                                confirmQuery($select_type_query);

                                                while ($row = mysqli_fetch_assoc($select_type_query)) {
                                                    $type_id = $row['TypeID'];
                                                    $type_name = $row['Name'];

                                                    echo "<option value='$type_id'>$type_name</option>";
                                                }
                                                ?>
                                            </select>
                                            <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-sm-4 padding-right-0">
                                        <div class="form-group">
                                            <select id="filterByNoteCategory" class="form-control input-box-style search-note-dropdown">
                                                <option value="" selected>Select category</option>
                                                <?php
                                                $select_category = "SELECT * FROM note_categories WHERE IsActive = 1 ";
                                                $select_category_query = mysqli_query($connection, $select_category);
                                                confirmQuery($select_category_query);

                                                while ($row = mysqli_fetch_assoc($select_category_query)) {
                                                    $cat_id = $row['CategoryID'];
                                                    $cat_name = $row['Name'];

                                                    echo "<option value='$cat_id'>$cat_name</option>";
                                                }
                                                ?>
                                            </select>
                                            <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-sm-4 padding-right-0">
                                        <div class="form-group">
                                            <select id="filterByNoteUniversity" class="form-control input-box-style search-note-dropdown">
                                                <option value="" selected>Select university</option>
                                                <?php
                                                $select_university = "SELECT DISTINCT UniversityName FROM seller_notes WHERE UniversityName IS NOT NULL AND IsActive = 1 ";
                                                $select_university_query = mysqli_query($connection, $select_university);
                                                confirmQuery($select_university_query);

                                                while ($row = mysqli_fetch_assoc($select_university_query)) {
                                                    $university_name = $row['UniversityName'];

                                                    echo "<option value='$university_name'>$university_name</option>";
                                                }
                                                ?>
                                            </select>
                                            <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-sm-4 padding-right-0">
                                        <div class="form-group">
                                            <select id="filterByNoteCourse" class="form-control input-box-style search-note-dropdown">
                                                <option value="" selected>Select course</option>
                                                <?php
                                                $select_course = "SELECT DISTINCT Course FROM seller_notes WHERE Course IS NOT NULL AND IsActive = 1 ";
                                                $select_course_query = mysqli_query($connection, $select_course);
                                                confirmQuery($select_course_query);
                                                while ($row = mysqli_fetch_assoc($select_course_query)) {
                                                    $course_name = $row['Course'];
                                                    echo "<option value='$course_name'>$course_name</option>";
                                                }
                                                ?>
                                            </select>
                                            <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-sm-4 padding-right-0">
                                        <div class="form-group">
                                            <select id="filterByNoteCountry" class="form-control input-box-style search-note-dropdown">
                                                <option value="" selected>Select country</option>
                                                <?php
                                                $select_country = "SELECT * FROM countries WHERE IsActive = 1 ";
                                                $select_country_query = mysqli_query($connection, $select_country);
                                                confirmQuery($select_country_query);
                                                while ($row = mysqli_fetch_assoc($select_country_query)) {
                                                    $country_id = $row['CountryID'];
                                                    $country_name = $row['Name'];
                                                    echo "<option value='$country_id'>$country_name</option>";
                                                }
                                                ?>
                                            </select>
                                            <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <select id="filterByNoteRatings" class="form-control input-box-style search-note-dropdown">
                                                <option value="" selected>Select rating</option>
                                                <option value="1">1+</option>
                                                <option value="2">2+</option>
                                                <option value="3">3+</option>
                                                <option value="4">4+</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- general-box -->

        <div id="filtered-notes-div"></div>

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

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <?php
    if (isset($_SESSION['profileUpdated'])) { ?>

        <script>
            swal({
                text: 'Your profile Updated Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['profileUpdated']);
    }
    ?>
    
    <!-- Java-scripts -->
</body>

</html>