<?php include "../includes/head.php"; ?>

<body>
    <section id="my-rejected-notes">

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
                                          <a class="dropdown-item" href="user-profile.php">My Profile</a>
                                          <a class="dropdown-item" href="my-downloads.php">My Downloads</a>
                                          <a class="dropdown-item" href="my-sold-notes.php">My Sold Notes</a>
                                          <a class="dropdown-item active" href="my-rejected-notes.php">My Rejected Notes</a>
                                          <a class="dropdown-item" href="change-password.php">Change Password</a>
                                          <a class="dropdown-item logout-btn-dropdown" href="../includes/logout.php">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple" href="../includes/logout.php" title="Download"
                                        role="button">Logout</a>
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
                                <li class="logged-in-user-photo-li">
                                    <div class="logged-in-user-photo">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        
                                                <img src="../images/testimonial/customer-1.png" alt="User Photo" class="rounded-circle">                                        
                                            </a>
                                        
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="user-profile.php">My Profile</a>
                                                <a class="dropdown-item" href="my-downloads.php">My Downloads</a>
                                                <a class="dropdown-item" href="my-sold-notes.php">My Sold Notes</a>
                                                <a class="dropdown-item active" href="my-rejected-notes.php">My Rejected Notes</a>
                                                <a class="dropdown-item" href="change-password.php">Change Password</a>
                                                <a class="dropdown-item logout-btn-dropdown" href="../includes/logout.php">Logout</a>
                                            </div>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple" href="../includes/logout.php" title="Download"
                                        role="button">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- Header ends -->

        <!-- my downloads table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="my-downloads-heading">My Rejected Notes</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input type="text" class="form-control input-box-style search-notes-bar" id="example" placeholder="Search notes here...">
                            </div>
    
                            <button class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                </div>
            </div>    
            
            <div class="container">

                <div class="my-downloads-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">sr no.</th>
                                    <th scope="col">Note title</th>
                                    <th scope="col">category</th>
                                    <th scope="col">Remarks</th>
                                    <th scope="col">Clone</th>
                                    <th scope="col" width="80px"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="purple-td">Data Science</td>
                                    <td>Science</td>
                                    <td>Lorem ipsum is dummy text</td>
                                    <td class="purple-td">Clone</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                            <div class="dropdown dropdown-dots-table">
                                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                                </a>
                                              
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                  <a class="dropdown-item" href="#">Download Note</a>
                                                </div>
                                            </div>                                            
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="purple-td">Accounts</td>
                                    <td>Commerce</td>
                                    <td>Lorem ipsum is dummy text</td>
                                    <td class="purple-td">Clone</td>
                                    <td class="text-center visible-overflow-for-dropdown">                                     <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="purple-td">Social Study</td>
                                    <td>Social</td>
                                    <td>Lorem ipsum is dummy text</td>
                                    <td class="purple-td">Clone</td>
                                    <td class="text-center visible-overflow-for-dropdown">                                     <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="purple-td">AI</td>
                                    <td>IT</td>
                                    <td>Lorem ipsum is dummy text</td>
                                    <td class="purple-td">Clone</td>
                                    <td class="text-center visible-overflow-for-dropdown">                                     <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="purple-td">Lorem ipsum</td>
                                    <td>Lorem</td>
                                    <td>Lorem ipsum is dummy text</td>
                                    <td class="purple-td">Clone</td>
                                    <td class="text-center visible-overflow-for-dropdown">                                     <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">6</td>
                                    <td class="purple-td">Data Science</td>
                                    <td>Science</td>
                                    <td>Lorem ipsum is dummy text</td>
                                    <td class="purple-td">Clone</td>
                                    <td class="text-center visible-overflow-for-dropdown">                                     <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">7</td>
                                    <td class="purple-td">Accounts</td>
                                    <td>Commerce</td>
                                    <td>Lorem ipsum is dummy text</td>
                                    <td class="purple-td">Clone</td>
                                    <td class="text-center visible-overflow-for-dropdown">                                     <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">8</td>
                                    <td class="purple-td">Social Study</td>
                                    <td>Social</td>
                                    <td>Lorem ipsum is dummy text</td>
                                    <td class="purple-td">Clone</td>
                                    <td class="text-center visible-overflow-for-dropdown">                                     <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">9</td>
                                    <td class="purple-td">AI</td>
                                    <td>IT</td>
                                    <td>Lorem ipsum is dummy text</td>
                                    <td class="purple-td">Clone</td>
                                    <td class="text-center visible-overflow-for-dropdown">                                     <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">10</td>
                                    <td class="purple-td">Lorem ipsum</td>
                                    <td>Lorem</td>
                                    <td>Lorem ipsum is dummy text</td>
                                    <td class="purple-td">Clone</td>
                                    <td class="text-center visible-overflow-for-dropdown">  
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                            </tbody>
                          </table>
                        
                    </div>
                </div>

            </div>

        </div>
        <!-- progress note table -->

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

    <!-- Production version -->
    <!-- <script src="https://unpkg.com/@popperjs/core@2"></script> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    

    <!-- Java-scripts -->
</body>

</html>