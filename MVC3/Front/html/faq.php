<?php $page_name = "FAQ"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>

<body>

    <section id="faq">
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
                                    <li class="active">
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
                                    <li>
                                        <a href="dashboard.php">Sell Your Notes</a>
                                    </li>
                                    <li>
                                        <a href="buyers-requests.php">Buyer Requests</a>
                                    </li>
                                    <li class="active">
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
                                    <li>
                                        <a class="hover-bottom-border" href="search-notes.php">Search Notes</a>
                                    </li>
                                    <li>
                                        <a class="hover-bottom-border" href="dashboard.php">Sell Your Notes</a>
                                    </li>
                                    <li class="active">
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
                                    <li>
                                        <a href="search-notes.php">Search Notes</a>
                                    </li>
                                    <li>
                                        <a href="dashboard.php">Sell Your Notes</a>
                                    </li>
                                    <li class="active">
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
            <p class="text-center">Frequently Asked Questions</p>
        </div>
        <!-- background -->

        <!-- general-box -->
        <div class="general-box">
            <div class="content-box-lg">

                <div class="container">
                    <div class="row">
                        <p class="section-heading">General Questions</p>
                    </div>
                </div>

                <div class="container">

                    <div class="row">
                        <div class="accordion faq1" id="accordionExample1">
                            <div class="card">
                                <div class="card-header">
                                    <p>What is Notes Marketplace?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-1" aria-expanded="true" aria-controls="faq-1">
                                            <img src="../images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-1" aria-expanded="true" aria-controls="faq-1">
                                            <img src="../images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        Notes Marketplace is an online marketplace for university students to buy and sell their course notes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq2" id="accordionExample2">
                            <div class="card">
                                <div class="card-header">
                                    <p>What do the University say?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-2" aria-expanded="true" aria-controls="faq-2">
                                            <img src="../images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-2" aria-expanded="true" aria-controls="faq-2">
                                            <img src="../images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-2" class="collapse" data-parent="#accordionExample2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, corrupti doloremque deserunt odit quos quam nisi error numquam. Provident illum quibusdam praesentium doloribus. Sit quo necessitatibus repellat velit quibusdam unde?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq3" id="accordionExample3">
                            <div class="card">
                                <div class="card-header" id="headingOn">
                                    <p>Is this legal?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-3" aria-expanded="true" aria-controls="faq-3">
                                            <img src="../images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-3" aria-expanded="true" aria-controls="faq-3">
                                            <img src="../images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">
                                    <div class="card-body">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et itaque maiores reiciendis enim tempora, nostrum fuga! Sunt veniam unde, ipsa soluta consequatur maiores quibusdam illum eum quo ab. Nisi, fuga.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- General-box -->

        <!-- general-box -->
        <div class="general-box">
            <div class="content-box-lg">

                <div class="container">
                    <div class="row">
                        <p class="section-heading">Uploaders</p>
                    </div>
                </div>

                <div class="container">

                    <div class="row">
                        <div class="accordion faq4" id="accordionExample4">
                            <div class="card">
                                <div class="card-header">
                                    <p>What can't I sell?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-4" aria-expanded="true" aria-controls="faq-4">
                                            <img src="../images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-4" aria-expanded="true" aria-controls="faq-4">
                                            <img src="../images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample4">
                                    <div class="card-body">
                                        We won't approve materials that have been created by your university or another third party. We also do not accept assignments, essays, practical’s or take-home exams. We love notes though.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq5" id="accordionExample5">
                            <div class="card">
                                <div class="card-header">
                                    <p>What Notes can I sell?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-5" aria-expanded="true" aria-controls="faq-5">
                                            <img src="../images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-5" aria-expanded="true" aria-controls="faq-5">
                                            <img src="../images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample5">
                                    <div class="card-body">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo veniam cumque expedita sed corrupti, adipisci officiis eum nisi suscipit minus recusandae iure aperiam quibusdam exercitationem tenetur doloremque quasi provident at?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- General-box -->

        <!-- general-box -->
        <div class="general-box">
            <div class="content-box-lg">

                <div class="container">
                    <div class="row">
                        <p class="section-heading">Downloaders</p>
                    </div>
                </div>

                <div class="container">

                    <div class="row">
                        <div class="accordion faq6" id="accordionExample6">
                            <div class="card">
                                <div class="card-header">
                                    <p>How do I buy notes?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-6" aria-expanded="true" aria-controls="faq-6">
                                            <img src="../images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-6" aria-expanded="true" aria-controls="faq-6">
                                            <img src="../images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample6">
                                    <div class="card-body">
                                        Search for the notes you are after using the 'SEARCH NOTES' tab at the at the top right of every page. You can then filter results by university, category, course information etc. To purchase, go to detail page of note and click on download button. If notes are free to download – it will download over the browser and if notes are paid, Once Seller will allow download you can have notes at my downloads grid for actual download.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq7" id="accordionExample7">
                            <div class="card">
                                <div class="card-header">
                                    <p>Can I edit the notes I purchased?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-7" aria-expanded="true" aria-controls="faq-7">
                                            <img src="../images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-7" aria-expanded="true" aria-controls="faq-7">
                                            <img src="../images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-7" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample7">
                                    <div class="card-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, praesentium ratione voluptas hic eos mollitia alias, dolores dolor quibusdam voluptatibus ullam aspernatur doloribus commodi explicabo at earum porro? Incidunt, placeat!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- General-box -->

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

    <script>
        $(document).ready(function() {
            // 1
            $("#faq .faq1 .faq-plus")[0].addEventListener("click", function() {
                $("#faq .faq1 .faq-plus")[0].style.display = "none";
                $("#faq .faq1 .faq-minus")[0].style.display = "block";
            });

            $("#faq .faq1 .faq-minus")[0].addEventListener("click", function() {
                $("#faq .faq1 .faq-minus")[0].style.display = "none";
                $("#faq .faq1 .faq-plus")[0].style.display = "block";
            });

            // 2

            $("#faq .faq2 .faq-plus")[0].addEventListener("click", function() {
                $("#faq .faq2 .faq-plus")[0].style.display = "none";
                $("#faq .faq2 .faq-minus")[0].style.display = "block";
            });

            $("#faq .faq2 .faq-minus")[0].addEventListener("click", function() {
                $("#faq .faq2 .faq-minus")[0].style.display = "none";
                $("#faq .faq2 .faq-plus")[0].style.display = "block";
            });

            // 3

            $("#faq .faq3 .faq-plus")[0].addEventListener("click", function() {
                $("#faq .faq3 .faq-plus")[0].style.display = "none";
                $("#faq .faq3 .faq-minus")[0].style.display = "block";
            });

            $("#faq .faq3 .faq-minus")[0].addEventListener("click", function() {
                $("#faq .faq3 .faq-minus")[0].style.display = "none";
                $("#faq .faq3 .faq-plus")[0].style.display = "block";
            });

            // 4

            $("#faq .faq4 .faq-plus")[0].addEventListener("click", function() {
                $("#faq .faq4 .faq-plus")[0].style.display = "none";
                $("#faq .faq4 .faq-minus")[0].style.display = "block";
            });

            $("#faq .faq4 .faq-minus")[0].addEventListener("click", function() {
                $("#faq .faq4 .faq-minus")[0].style.display = "none";
                $("#faq .faq4 .faq-plus")[0].style.display = "block";
            });

            // 5

            $("#faq .faq5 .faq-plus")[0].addEventListener("click", function() {
                $("#faq .faq5 .faq-plus")[0].style.display = "none";
                $("#faq .faq5 .faq-minus")[0].style.display = "block";
            });

            $("#faq .faq5 .faq-minus")[0].addEventListener("click", function() {
                $("#faq .faq5 .faq-minus")[0].style.display = "none";
                $("#faq .faq5 .faq-plus")[0].style.display = "block";
            });

            // 6

            $("#faq .faq6 .faq-plus")[0].addEventListener("click", function() {
                $("#faq .faq6 .faq-plus")[0].style.display = "none";
                $("#faq .faq6 .faq-minus")[0].style.display = "block";
            });

            $("#faq .faq6 .faq-minus")[0].addEventListener("click", function() {
                $("#faq .faq6 .faq-minus")[0].style.display = "none";
                $("#faq .faq6 .faq-plus")[0].style.display = "block";
            });

            // 7

            $("#faq .faq7 .faq-plus")[0].addEventListener("click", function() {
                $("#faq .faq7 .faq-plus")[0].style.display = "none";
                $("#faq .faq7 .faq-minus")[0].style.display = "block";
            });

            $("#faq .faq7 .faq-minus")[0].addEventListener("click", function() {
                $("#faq .faq7 .faq-minus")[0].style.display = "none";
                $("#faq .faq7 .faq-plus")[0].style.display = "block";
            });
        });
    </script>

    <!-- Java-scripts -->
</body>

</html>