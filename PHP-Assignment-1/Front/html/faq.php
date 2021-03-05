<?php $page_name = "FAQ"; ?>
<?php include "../includes/head.php"; ?>

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
                                <li class="active">
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
                                <div class="card-header" >
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
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptatem officiis perferendis omnis perspiciatis pariatur. Delectus voluptatum dolorem qui aut, magnam, eveniet, unde possimus reprehenderit laudantium nisi tempora! Id, neque.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq2" id="accordionExample2">
                            <div class="card">
                                <div class="card-header" >
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

                                <div id="faq-3" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample3">
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
                                <div class="card-header" >
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

                                <div id="faq-4" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample4">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae labore delectus molestiae dicta necessitatibus itaque debitis consequuntur mollitia ut quibusdam accusantium consectetur laboriosam officiis molestias voluptatum ipsum, possimus accusamus sed.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq5" id="accordionExample5">
                            <div class="card">
                                <div class="card-header" >
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

                                <div id="faq-5" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample5">
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
                                <div class="card-header" >
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

                                <div id="faq-6" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample6">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia deleniti, possimus numquam reprehenderit recusandae, nihil odit aspernatur et excepturi, nesciunt hic quaerat ad ipsa culpa facere ut veritatis itaque sapiente!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq7" id="accordionExample7">
                            <div class="card">
                                <div class="card-header" >
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

                                <div id="faq-7" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample7">
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
    <script src="../js/faq.js"></script>

    <!-- Java-scripts -->
</body>

</html>