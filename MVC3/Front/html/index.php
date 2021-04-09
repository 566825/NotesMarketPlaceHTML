<?php $page_name = "Home"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>

<body>
    <!-- <div id="preloader">
        <div id="status">&nbsp;</div>
    </div> -->

    <section id="home-page">

        <?php if (isset($_SESSION['UserLoggedIn'])) { ?>
            <!-- Header -->
            <div class="extra-style-nav">
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
                                        <a class="btn btn-general btn-purple logout-link" href="javascript:void(0)" role="button">Logout</a>
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
            <header class="site-header">
                <div class="header-wrapper">

                    <!-- Mobile Menu Open Button -->
                    <span id="mobile-nav-open-btn">&#9776;</span>

                    <div class="logo-wrapper">
                        <a href="index.php" title="Site Logo">
                            <img src="../images/logo/white-logo.png" alt="Logo">
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
            <!-- Header ends -->
        <?php } ?>

        <!-- Home -->
        <section id="home">

            <!-- Background Image -->
            <img id="home-bg" src="../images/Homepage/banner-with-overlay.jpg" alt="Background">

            <!-- Home content -->
            <div id="home-content">
                <div id="home-heading" class="animated slideInLeft">
                    <h1>Download Free/Paid Notes or Sale your Book</h1>
                </div>
                <div id="home-text">
                    <p>Lorem ipsum has been the industry's standard text ever since the 1500s, when an unknown printer took
                        a galley of type.</p>
                </div>
                <a class="btn btn-general btn-home" href="#about" title="Learn More" role="button">LEARN MORE</a>
            </div>

        </section>

        <!-- About -->
        <section id="about">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <!-- left side -->
                        <div class="col-md-4 col-sm-12 col-12 wow animated fadeInLeftBig" data-wow-duration="2s">
                            <div id="about-left">
                                <p>About<br>NotesMarketPlace</p>
                            </div>
                        </div>

                        <!-- right-side -->
                        <div class="col-md-8 col-sm-12 col-12 wow animated fadeInRightBig" data-wow-duration="2s">
                            <div id="about-right">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis, debitis eaque
                                    placeat accusamus, libero quisquam ex maiores consectetur modi aliquam odit. Repellat
                                    vel eos voluptates? Quisquam Veritatis, debitis eaque placeat accusamus, libero quisquam
                                    ex maiores commodi cumque praesentium provident.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae impedit itaque placeat
                                    laudantium perferendis repudiandae, praesentium harum quasi possimus, et dolorem
                                    consequuntur obcaecati officia! Delectus ratione expedita maiores amet reiciendis!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About ends -->

        <!-- Work -->
        <section id="work">
            <div class="content-box-lg">
                <p class="section-heading wow animated fadeInDownBig" data-wow-duration="1s" class="text-center">How it Works</p>
                <div id="work-part">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow animated fadeInLeftBig">
                                <div class="text-center">
                                    <div id="download-logo"><img class="img-fluid" src="../images/Homepage/download.png" alt=""></div>
                                    <p id="download-title">Download Free/Paid Notes</p>
                                    <p id="download-des">Get Material for Your<br>Course etc.</p>
                                    <a class="btn btn-general btn-purple" href="search-notes.php" title="Download" role="button">Download</a>
                                </div>
                            </div>

                            <div class="col-md-6 wow animated fadeInRightBig">
                                <div class="text-center">
                                    <div id="sell-logo"><img class="img-fluid" src="../images/Homepage/seller.png" alt="">
                                    </div>
                                    <p id="sell-title">Sell Your Notes</p>
                                    <p id="sell-des">Upload and Download Course<br>and Materials etc.</p>
                                    <a class="btn btn-general btn-purple" href="dashboard.php" title="Sell Book" role="button">SELL
                                        BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work ends -->

        <!-- Testimonial -->
        <section id="testimonial">
            <div class="content-box-lg">
                <p class="section-heading wow animated fadeInDownBig" data-wow-duration="1s" class="text-center">What our Customers are Saying</p>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-6 wow animated fadeInLeftBig">
                            <div id="testimonial-tile-1" class="author">
                                <div class="row">
                                    <div class="col-md-3 col-sm-2 col-2 author-photo">
                                        <img src="../images/testimonial/customer-1.png" alt="client" class="rounded-circle">
                                    </div>
                                    <div class="col-md-9 col-sm-10 col-10">
                                        <div class="author-name-des">
                                            <p>Walter Meller</p>
                                            <p>Founder & CEO, Matrix Group</p>
                                        </div>
                                    </div>
                                </div>
                                <p id="testimonial-text">"Lorem ipsum dolor sit erys amet tryue consectetur adipisicing
                                    elit. Ratione, facere getif rice cumque officiis necessitatibus blanditiis. Culpa."</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow animated fadeInRightBig">
                            <div id="testimonial-tile-2" class="author">
                                <div class="row">
                                    <div class="col-md-3 col-sm-2  col-2 author-photo">
                                        <img src="../images/testimonial/customer-2.png" alt="client" class="rounded-circle">
                                    </div>
                                    <div class="col-md-9 col-sm-10  col-10">
                                        <div class="author-name-des">
                                            <p>Jonnie Riley</p>
                                            <p>Employee, Curious Snakes</p>
                                        </div>
                                    </div>
                                </div>
                                <p id="testimonial-text">"Lorem ipsum dolor sit erys amet tryue consectetur adipisicing
                                    elit. Ratione, facere getif rice cumque officiis necessitatibus blanditiis. Culpa."</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow animated fadeInLeftBig">
                            <div id="testimonial-tile-3" class="author">
                                <div class="row">
                                    <div class="col-md-3 col-sm-2  col-2 author-photo">
                                        <img src="../images/testimonial/customer-3.png" alt="client" class="rounded-circle">
                                    </div>
                                    <div class="col-md-9 col-sm-10  col-10">
                                        <div class="author-name-des">
                                            <p>Amilia Luna</p>
                                            <p>Teacher, Saint Joseph High School</p>
                                        </div>
                                    </div>
                                </div>
                                <p id="testimonial-text">"Lorem ipsum dolor sit erys amet tryue consectetur adipisicing
                                    elit. Ratione, facere getif rice cumque officiis necessitatibus blanditiis. Culpa."</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow animated fadeInRightBig">
                            <div id="testimonial-tile-4" class="author">
                                <div class="row">
                                    <div class="col-md-3 col-sm-2  col-2 author-photo">
                                        <img src="../images/testimonial/customer-4.png" alt="client" class="rounded-circle">
                                    </div>
                                    <div class="col-md-9 col-sm-10  col-10">
                                        <div class="author-name-des">
                                            <p>Daniel Cardos</p>
                                            <p>Softwere Engineer, Infitium Company</p>
                                        </div>
                                    </div>
                                </div>
                                <p id="testimonial-text">"Lorem ipsum dolor sit erys amet tryue consectetur adipisicing
                                    elit. Ratione, facere getif rice cumque officiis necessitatibus blanditiis. Culpa."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial ends -->

        <!-- Footer  -->
        <?php
        $sys_config = mysqli_query($connection, "SELECT * FROM system_configuration ");
        confirmQuery($sys_config);
        $values = array();
        $i = 1;
        while ($row = mysqli_fetch_assoc($sys_config)) {
            $values[$i] = $row['Value'];
            $i++;
        }
        ?>
        <footer>
            <div id="home-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-12 text-left">
                            <p>Copyright &copy; TatvaSoft All Rights Reserved.</p>
                        </div>
                        <div class="col-md-6 col-sm-4 col-12 text-right">
                            <ul class="social-list">
                                <li><a class="facebook-img" href="<?php echo $values[4]; ?>"><img src="../images/Homepage/facebook.png" alt=""></a>
                                </li>
                                <li><a class="twitter-img" href="<?php echo $values[5]; ?>"><img src="../images/Homepage/twitter.png" alt=""></a>
                                </li>
                                <li><a class="linkedin-img" href="<?php echo $values[6]; ?>"><img src="../images/Homepage/linkedin.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Ends -->

    </section>

    <!-- Java-scripts -->

    <!-- JQuery -->
    <script src="../js/JQuery/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- animation js -->
    <script src="../js/animation/animation.js"></script>

    <!-- wow js -->
    <script src="../js/wow/wow.min.js"></script>

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <!-- Java-scripts -->
</body>

</html>