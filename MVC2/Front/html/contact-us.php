<?php $page_name = "Contact Us"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>

<body>

    <section id="contact-us">

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
                                <li class="active">
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
                                <li>
                                    <a href="dashboard.php">Sell Your Notes</a>
                                </li>
                                <li>
                                    <a href="buyers-requests.php">Buyer Requests</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ</a>
                                </li>
                                <li class="active">
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
                                <li>
                                    <a class="hover-bottom-border" href="search-notes.php">Search Notes</a>
                                </li>
                                <li>
                                    <a class="hover-bottom-border" href="dashboard.php">Sell Your Notes</a>
                                </li>
                                <li>
                                    <a class="hover-bottom-border" href="faq.php">FAQ</a>
                                </li>
                                <li class="active">
                                    <a class="hover-bottom-border" href="contact-us.php">Contact Us</a>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple" href="login.php" title="Download"
                                        role="button">Login</a>
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
                                    <a href="faq.php">FAQ</a>
                                </li>
                                <li class="active">
                                    <a href="contact-us.php">Contact Us</a>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple" href="login.php" title="Download"
                                        role="button">Login</a>
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
            <p class="text-center">Contact Us</p>
        </div>
        <!-- background -->

        <!-- general box -->
        <div class="general-box">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="section-heading">Get in Touch</p>
                            <p class="user-instruction">Let us know how to get back to you</p>
                        </div>
                    </div>
                </div>

                <div class="container">

                    <?php

                    // if user is logged in
                    if (isset($_SESSION['UserID'])) {                        

                        $UserID = $_SESSION['UserID'];
                        $FirstName = $_SESSION['FirstName'];
                        $LastName = $_SESSION['LastName'];
                        $EmailID = $_SESSION['EmailID'];

                        $FullName = $FirstName . " " . $LastName;
                    }
                    // end                        

                    if (isset($_POST['contact_us'])) {

                        $FormFullName = $_POST['FullName'];
                        $FormEmailID = $_POST['EmailID'];
                        $FormSubject = $_POST['Subject'];
                        $FormComments = $_POST['Comments'];

                        include "../includes/contact_us_mail.php";
                    }
                    // end

                    ?>

                    <form action="" method="POST" id="contact-us-form">
                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="info-label" for="">Full Name *</label>
                                    <input value="<?php echo empty($FullName) ? "" : $FullName; ?>" name="FullName" type="text" class="form-control input-box-style" placeholder="Enter your full name" <?php if (isset($_SESSION['UserLoggedIn'])) {
                                                                                                                                                                                                            echo "readonly";
                                                                                                                                                                                                        } ?> required>
                                </div>

                                <div class="form-group">
                                    <label class="info-label" for="">Email Address *</label>
                                    <input value="<?php echo empty($EmailID) ? "" : $EmailID; ?>" name="EmailID" type="email" class="form-control input-box-style" placeholder="Enter your email address" <?php if (isset($_SESSION['UserLoggedIn'])) {
                                                                                                                                                                                                                echo "readonly";
                                                                                                                                                                                                            } ?> required>
                                </div>

                                <div class="form-group">
                                    <label class="info-label" for="">Subject *</label>
                                    <input name="Subject" type="text" class="form-control input-box-style" placeholder="Enter your subject" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="info-label" for="comment-questions">Comments / Questions *</label>
                                    <textarea name="Comments" class="form-control input-box-style" rows="12" id="comment-questions" placeholder="Comments..." required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-btn">
                                    <button type="submit" name="contact_us" class="btn btn-general btn-purple">Submit</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- general box -->

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

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <?php
    if (isset($_SESSION['contact_us_status'])) { ?>

        <script>
            swal({
                text: '<?php echo $_SESSION['contact_us_status']; ?>',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['contact_us_status']);
    }
    ?>

    <!-- Java-scripts -->
</body>

</html>