<?php $page_name = "Search Notes"; ?>
<?php include "../includes/head.php"; ?>

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
                            
                                <div class="form-group has-search-bar">
                                    <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                    <input type="text" class="form-control input-box-style search-notes-bar" id="example" placeholder="Search notes here...">
                                </div>

                            <div class="row">
                                <div class="col-md-2 col-sm-4 padding-right-0">
                                    <div class="form-group">
                                        <select class="form-control input-box-style" id="exampleFormControlSelect1">
                                            <option value="" disabled selected>Select type</option>
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img"
                                                src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>
                            
                                <div class="col-md-2 col-sm-4 padding-right-0">
                                    <div class="form-group">
                                        <select class="form-control input-box-style" id="exampleFormControlSelect1">
                                            <option value="" disabled selected>Select category</option>
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img"
                                                src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>
                            
                                <div class="col-md-2 col-sm-4 padding-right-0">
                                    <div class="form-group">
                                        <select class="form-control input-box-style" id="exampleFormControlSelect1">
                                            <option value="" disabled selected>Select university</option>
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img"
                                                src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>
                            
                                <div class="col-md-2 col-sm-4 padding-right-0">
                                    <div class="form-group">
                                        <select class="form-control input-box-style" id="exampleFormControlSelect1">
                                            <option value="" disabled selected>Select course</option>
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img"
                                                src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>
                            
                                <div class="col-md-2 col-sm-4 padding-right-0">
                                    <div class="form-group">
                                        <select class="form-control input-box-style" id="exampleFormControlSelect1">
                                            <option value="" disabled selected>Select country</option>
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img"
                                                src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>
                            
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control input-box-style" id="exampleFormControlSelect1">
                                            <option value="" disabled selected>Select rating</option>
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                        <div class="select-down-arrow"><img class="select-down-arrow-img"
                                                src="../images/user-profile/down-arrow.png" alt="eye"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- general-box -->

        <!-- general box -->
        <div class="general-box searched-notes-box">
            <div class="content-box-lg">

                <div class="container">
                    <div class="row">
                        <p class="box-heading">Total 18 Notes</p>               
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="note-details-box">
                                <a href="note-detail.php"><img src="../images/Search/1.jpg" alt=""></a>
                                <div class="note-details">
                                    <a href="note-detail.php" style="text-decoration: none; "><p class="note-name-title">Computer Operating System - Final Exam Book With Paper Solution</p></a>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/university.png" alt=""></span>University of California, US</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/pages.png" alt=""></span>204 Pages</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/date.png" alt=""></span>Thu, Nov 26 2020</p>    
                                    <p class="note-info-with-icon red-text"><span><img src="../images/Search/flag.png" alt=""></span>5 Users marked this note as  inappropriate</p>

                                    <div class="notes-rating">
                                        <div class="col-md-7 col-sm-8 col-8">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-4">
                                            <p class="review-count">100 reviews</p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="note-details-box">
                            <a href="note-detail.php"><img src="../images/Search/2.jpg" alt=""></a>
                                <div class="note-details">
                                    <a href="note-detail.php" style="text-decoration: none; "><p class="note-name-title">Computer Science - The complete reference</p></a>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/university.png" alt=""></span>University of California, US</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/pages.png" alt=""></span>204 Pages</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/date.png" alt=""></span>Thu, Nov 26 2020</p>    
                                    <p class="note-info-with-icon red-text"><span><img src="../images/Search/flag.png" alt=""></span>5 Users marked this note as  inappropriate</p>
                                    <div class="notes-rating">
                                        <div class="col-md-7 col-sm-8 col-8">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-4">
                                            <p class="review-count">100 reviews</p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="note-details-box">
                            <a href="note-detail.php"><img src="../images/Search/3.jpg" alt=""></a>
                                <div class="note-details">
                                    <a href="note-detail.php" style="text-decoration: none; "><p class="note-name-title">Basic Computer Engineering Tech India Publication Series</p></a>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/university.png" alt=""></span>University of California, US</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/pages.png" alt=""></span>204 Pages</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/date.png" alt=""></span>Thu, Nov 26 2020</p>    
                                    <p class="note-info-with-icon red-text"><span><img src="../images/Search/flag.png" alt=""></span>5 Users marked this note as  inappropriate</p>
                                    <div class="notes-rating">
                                        <div class="col-md-7 col-sm-8 col-8">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-4">
                                            <p class="review-count">100 reviews</p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="note-details-box">
                            <a href="note-detail.php"><img src="../images/Search/4.jpg" alt=""></a>
                                <div class="note-details">
                                    <a href="note-detail.php" style="text-decoration: none; "><p class="note-name-title">Computer Science - The complete reference - Seventh Edition</p></a>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/university.png" alt=""></span>University of California, US</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/pages.png" alt=""></span>204 Pages</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/date.png" alt=""></span>Thu, Nov 26 2020</p>    
                                    <p class="note-info-with-icon red-text"><span><img src="../images/Search/flag.png" alt=""></span>5 Users marked this note as  inappropriate</p>
                                    <div class="notes-rating">
                                        <div class="col-md-7 col-sm-8 col-8">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-4">
                                            <p class="review-count">100 reviews</p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="note-details-box">
                            <a href="note-detail.php"><img src="../images/Search/5.jpg" alt=""></a>
                                <div class="note-details">
                                    <a href="note-detail.php" style="text-decoration: none; "><p class="note-name-title">Computer Operating System - Final Exam Book With Paper Solution</p></a>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/university.png" alt=""></span>University of California, US</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/pages.png" alt=""></span>204 Pages</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/date.png" alt=""></span>Thu, Nov 26 2020</p>    
                                    <p class="note-info-with-icon red-text"><span><img src="../images/Search/flag.png" alt=""></span>5 Users marked this note as  inappropriate</p>
                                    <div class="notes-rating">
                                        <div class="col-md-7 col-sm-8 col-8">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-4">
                                            <p class="review-count">100 reviews</p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="note-details-box">
                            <a href="note-detail.php"><img src="../images/Search/6.jpg" alt=""></a>
                                <div class="note-details">
                                    <a href="note-detail.php" style="text-decoration: none; "><p class="note-name-title">Computer Science - The complete reference</p></a>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/university.png" alt=""></span>University of California, US</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/pages.png" alt=""></span>204 Pages</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/date.png" alt=""></span>Thu, Nov 26 2020</p>    
                                    <p class="note-info-with-icon red-text"><span><img src="../images/Search/flag.png" alt=""></span>5 Users marked this note as  inappropriate</p>
                                    <div class="notes-rating">
                                        <div class="col-md-7 col-sm-8 col-8">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-4">
                                            <p class="review-count">100 reviews</p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="note-details-box">
                            <a href="note-detail.php"><img src="../images/Search/1.jpg" alt=""></a>
                                <div class="note-details">
                                    <p class="note-name-title">Basic Computer Engineering Tech India Publication Series</p></a>
                                    <a href="note-detail.php" style="text-decoration: none; "><p class="note-info-with-icon"><span><img src="../images/Search/university.png" alt=""></span>University of California, US</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/pages.png" alt=""></span>204 Pages</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/date.png" alt=""></span>Thu, Nov 26 2020</p>    
                                    <p class="note-info-with-icon red-text"><span><img src="../images/Search/flag.png" alt=""></span>5 Users marked this note as  inappropriate</p>
                                    <div class="notes-rating">
                                        <div class="col-md-7 col-sm-8 col-8">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-4">
                                            <p class="review-count">100 reviews</p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="note-details-box">
                            <a href="note-detail.php"><img src="../images/Search/2.jpg" alt=""></a>
                                <div class="note-details">
                                    <a href="note-detail.php" style="text-decoration: none; "><p class="note-name-title">Computer Operating System - Final Exam Book With Paper Solution</p></a>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/university.png" alt=""></span>University of California, US</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/pages.png" alt=""></span>204 Pages</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/date.png" alt=""></span>Thu, Nov 26 2020</p>    
                                    <p class="note-info-with-icon red-text"><span><img src="../images/Search/flag.png" alt=""></span>5 Users marked this note as  inappropriate</p>
                                    <div class="notes-rating">
                                        <div class="col-md-7 col-sm-8 col-8">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-4">
                                            <p class="review-count">100 reviews</p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="note-details-box">
                            <a href="note-detail.php"><img src="../images/Search/3.jpg" alt=""></a>
                                <div class="note-details">
                                    <a href="note-detail.php" style="text-decoration: none; "><p class="note-name-title">Computer Operating System - Final Exam Book With Paper Solution</p></a>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/university.png" alt=""></span>University of California, US</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/pages.png" alt=""></span>204 Pages</p>
                                    <p class="note-info-with-icon"><span><img src="../images/Search/date.png" alt=""></span>Thu, Nov 26 2020</p>    
                                    <p class="note-info-with-icon red-text"><span><img src="../images/Search/flag.png" alt=""></span>5 Users marked this note as  inappropriate</p>
                                    <div class="notes-rating">
                                        <div class="col-md-7 col-sm-8 col-8">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-4">
                                            <p class="review-count">100 reviews</p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- general box -->

        <!-- pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="" aria-label="Previous">
                        <img src="../images/pagination/left-arrow.png" alt="">
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="" aria-label="Next">
                        <img style="color: white;" src="../images/pagination/right-arrow.png" alt="">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- pagination -->

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

    <!-- Java-scripts -->
</body>

</html>