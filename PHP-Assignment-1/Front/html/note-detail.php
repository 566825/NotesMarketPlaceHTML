<?php $page_name = "Note Details"; ?>
<?php include "../includes/head.php"; ?>

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
                                                <img src="../images/testimonial/customer-1.png" alt="User Photo" class="rounded-circle">
                                            </div>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="user-profile.php">My Profile</a>
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
                                                    <img src="../images/testimonial/customer-1.png" alt="User Photo" class="rounded-circle">
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="user-profile.php">My Profile</a>
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

        <!-- Thanks popup -->       
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="../images/notes-detail/close.png" alt="">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="thank-img text-center">
                            <img src="../images/notes-detail/SUCCESS.png" alt="">                            
                        </div>
                        <p class="thank-heading">Thank you for purchasing!</p>
                        <p class="dear-buyer-name">Dear Smith,</p>
                        <p>As this is paid notes - you need to pay to seller Rahil Shah offline. We will send him an email that you want to download this note. He may contact you further for payment process completion.</p>
                        <p>In case, you have urgency,<br>Please contact us on +919658745692.</p>
                        <p>Once he receives the payment and acknowledgde us - selected notes you can see over my downloads tab for download.</p>
                        <p>Have a good day.</p>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- Thanks popup -->

        <!-- Notes details -->
        <div class="container">
            <div class="content-box-lg with-bottom-border">
                <p class="box-heading">Notes Details</p>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 note-details-left">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12"><img class="note-img-full img-fluid" src="../images/notes-detail/1.jpg" alt=""></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="note-desc-box">
                                    <p class="note-name">Computer Science</p>
                                    <p class="note-type-genre">Sciences</p>
                                    <p class="note-desc">Lorem ipsum Rem et nihil maiores animi, consectetur facere assumenda necessitatibus eaque fugit explicabo quas sed vero. Consequatur minima provident voluptates.</p>
                                    <a href="<?php if(!isset($_SESSION['UserLoggedIn'])) {echo 'login.php';} ?>" class="btn btn-general btn-purple" <?php if(isset($_SESSION['UserLoggedIn'])) {echo 'data-toggle="modal" data-target="#exampleModal"';} ?> >Download / $15</a>
                                </div>
                            </div>                    
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 note-details-right">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="note-details-left-part">
                                    <p class="note-single-detail-tag">Institution:</p>
                                    <p class="note-single-detail-tag">Country:</p>
                                    <p class="note-single-detail-tag">Course Name:</p>
                                    <p class="note-single-detail-tag">Course Code:</p>
                                    <p class="note-single-detail-tag">Professor:</p>
                                    <p class="note-single-detail-tag">Number of Pages :</p>
                                    <p class="note-single-detail-tag">Approved Date:</p>
                                    <p class="note-single-detail-tag">Rating :</p>
                                </div>                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="note-details-right-part">
                                    <p class="note-single-detail">University of California</p>
                                    <p class="note-single-detail">United State</p>
                                    <p class="note-single-detail">Computer Engineering</p>
                                    <p class="note-single-detail">248705</p>
                                    <p class="note-single-detail">Mr.Richard Brown</p>
                                    <p class="note-single-detail">277</p>
                                    <p class="note-single-detail">November 25 2020</p>
                                    <p class="note-single-detail">
                                        <span>
                                            <img src="../images/notes-detail/star.png" alt="">
                                            <img src="../images/notes-detail/star.png" alt="">
                                            <img src="../images/notes-detail/star.png" alt="">
                                            <img src="../images/notes-detail/star.png" alt="">
                                            <img src="../images/notes-detail/star-white.png" alt="">
                                        </span>100 Reviews</p>
                                </div>
                            </div>
                            <p class="red-text">5 Users marked this note as inappropriate</p>
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
                        <iframe src="../images/notes-detail/sample.pdf"></iframe>
                        </div>                        
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="customer-review-box">
                            <p class="box-heading">Customer Reviews</p>

                            <div class="customer-review-tiles">

                                <div class="customer-review-tile">
                                    <div class="row no-gutters">
                                        <div class="col-lg-2 col-md-3 col-sm-2 col-12">
                                            <img class="reviewer-photo" src="../images/testimonial/customer-1.png" alt="">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-10 col-12">
                                            <p class="reviewer-name">Richard Brown</p>
                                            <p class="reviewer-rating">
                                                <span>
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star-white.png" alt="star">
                                                </span>
                                            </p>
                                            <p class="reviewer-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat harum deleniti asperiores!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="customer-review-tile-border-bottom"></div>

                                <div class="customer-review-tile">
                                    <div class="row no-gutters">
                                        <div class="col-lg-2 col-md-3 col-sm-2 col-12">
                                            <img class="reviewer-photo" src="../images/testimonial/customer-2.png" alt="">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-10 col-12">
                                            <p class="reviewer-name">Alice Ortiaz</p>
                                            <p class="reviewer-rating">
                                                <span>
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star-white.png" alt="star">
                                                </span>
                                            </p>
                                            <p class="reviewer-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat harum deleniti asperiores!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="customer-review-tile-border-bottom"></div>

                                <div class="customer-review-tile">
                                    <div class="row no-gutters">
                                        <div class="col-lg-2 col-md-3 col-sm-2 col-12">
                                            <img class="reviewer-photo" src="../images/testimonial/customer-3.png" alt="">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-10 col-12">
                                            <p class="reviewer-name">Sara Passmore</p>
                                            <p class="reviewer-rating">
                                                <span>
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star.png" alt="star">
                                                    <img src="../images/notes-detail/star-white.png" alt="star">
                                                </span>
                                            </p>
                                            <p class="reviewer-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat harum deleniti asperiores!</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <!-- preview and revies -->

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