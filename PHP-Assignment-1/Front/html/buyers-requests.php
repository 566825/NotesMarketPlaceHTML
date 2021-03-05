<?php $page_name = "Buyer Requests"; ?>
<?php include "../includes/head.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: index.php");
    die();
}
?>
<?php
if (isset($_GET['d_id'])) {
    $UserID = $_SESSION['UserID'];
    $get_download_id = $_GET['d_id'];

    // getting buyer's email
    $get_buyer = "SELECT d.NoteID, d.DownloadID, d.NoteTitle, d.NoteCategory, u.FirstName, u.EmailID, up.CountryCode, up.PhoneNumber, d.IsPaid, d.PurchasedPrice, DATE_FORMAT(d.AttachmentDownloadedDate, '%d %b %Y, %T') as Date FROM downloads d JOIN users u ON d.Downloader = u.UserID JOIN user_profile up ON u.UserID = up.UserID WHERE d.IsSellerHasAllowedDownload = 0 AND d.Seller = $UserID AND d.DownloadID = $get_download_id ";
    $get_buyer_query = mysqli_query($connection, $get_buyer);
    confirmQuery($get_buyer_query);
    $get_buyer_row = mysqli_fetch_assoc($get_buyer_query);
    $buyerEmail = $get_buyer_row['EmailID'];
    $buyerName = $get_buyer_row['FirstName'];
    
    // getting sellers deatils
    $get_seller = "SELECT * FROM users WHERE UserID = $UserID ";
    $get_seller_query = mysqli_query($connection, $get_seller);
    confirmQuery($get_seller_query);
    $get_seller_row = mysqli_fetch_assoc($get_seller_query);
    $sellerFullName = $get_seller_row['FirstName'];

    // sending mail to buyer that his note is now available for downalod
    $mailEmailID = $buyerEmail;
    $Subject = $sellerFullName . " " . " allows you to download a note";
    $Body = "Hello " . $buyerName . "<br><br>" . "We would like to inform you that, " . $sellerFullName . " " . "Allows you to download a note. Please login and see My Download tabs to download particular note." . "<br><br>" . "Regards," . "<br>" . "Notes Marketplace";

    include "../includes/mail.php";                    

    $update_downloads = "UPDATE downloads SET IsSellerHasAllowedDownload = 1 WHERE DownloadID = {$get_download_id}";
    $update_downloads_query = mysqli_query($connection, $update_downloads);
    confirmQuery($update_downloads_query);

    if (isset($_GET['page'])) {
        $current_page = $_GET['page'];
        $_SESSION['br_success'] = ''; 
        header("Location: buyers-requests.php?page=$current_page");
    } else {
        $_SESSION['br_success'] = ''; 
        header("Location: buyers-requests.php");
    }
}

?>

<body>
    <section id="buyers-requests">

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
                                <li class="active">
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
                                <li>
                                    <a href="search-notes.php">Search Notes</a>
                                </li>
                                <li>
                                    <a href="dashboard.php">Sell Your Notes</a>
                                </li>
                                <li class="active">
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

        <!-- my downloads table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="my-downloads-heading">Buyer Requests</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <form action="" method="POST" id="br-form">
                            <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                                <div class="form-group has-search-bar">
                                    <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                    <input name="br_keyword" type="text" class="form-control input-box-style search-notes-bar" id="example" placeholder="Search notes here...">
                                </div>
                                <button name="br_search" type="submit" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                            </div>
                        </form>
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
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('d.NoteTitle'); ?>">Note title</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('d.NoteCategory'); ?>">category</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('u.EmailID'); ?>">Buyer</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('up.PhoneNumber'); ?>">Phone no.</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('d.IsPaid'); ?>">Sell type</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('d.PurchasedPrice'); ?>">price</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('d.AttachmentDownloadedDate'); ?>">downloaded date/time</a></th>
                                    <th scope="col" width="80px">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $UserID = $_SESSION['UserID'];

                                $limit = 10;
                                if (isset($_GET['page'])) {
                                    $page  = $_GET['page'];
                                } else {
                                    $page = 1;
                                }
                                $start_from = ($page - 1) * $limit;                                

                                // searching    
                                if (isset($_POST['br_search'])) {
                                    $br_keyword = $_POST['br_keyword'];
                                    $buyer_requests_total = "SELECT d.NoteID, d.DownloadID, d.NoteTitle, d.NoteCategory, u.EmailID, up.CountryCode, up.PhoneNumber, d.IsPaid, d.PurchasedPrice, DATE_FORMAT(d.AttachmentDownloadedDate, '%d %b %Y, %T') as Date FROM downloads d JOIN users u ON d.Downloader = u.UserID JOIN user_profile up ON u.UserID = up.UserID WHERE d.IsSellerHasAllowedDownload = 0 AND d.Seller = $UserID AND (d.NoteTitle LIKE '%$br_keyword%' OR d.NoteCategory LIKE '%$br_keyword%' OR d.PurchasedPrice LIKE '%$br_keyword%') ORDER BY d.AttachmentDownloadedDate DESC ";
                                } else {
                                    $buyer_requests_total = "SELECT d.NoteID, d.DownloadID, d.NoteTitle, d.NoteCategory, u.EmailID, up.CountryCode, up.PhoneNumber, d.IsPaid, d.PurchasedPrice, DATE_FORMAT(d.AttachmentDownloadedDate, '%d %b %Y, %T') as Date FROM downloads d JOIN users u ON d.Downloader = u.UserID JOIN user_profile up ON u.UserID = up.UserID WHERE d.IsSellerHasAllowedDownload = 0 AND d.Seller = $UserID ORDER BY d.AttachmentDownloadedDate DESC ";
                                }

                                $buyer_requests_total_query = mysqli_query($connection, $buyer_requests_total);
                                confirmQuery($buyer_requests_total_query);
                                $buyer_requests_total_count = mysqli_num_rows($buyer_requests_total_query);
                                $total_pages = ceil($buyer_requests_total_count / $limit);

                                // when any columnname is clicked
                                $orderby = "ORDER BY d.AttachmentDownloadedDate DESC";
                                if (isset($_GET['order_by']) && isset($_GET['sort'])) {
                                    $orderby = ' order by ' . $_GET['order_by'] . ' ' . $_GET['sort'];
                                }

                                // searching
                                if (isset($_POST['br_search'])) {
                                    $br_keyword = $_POST['br_keyword'];
                                    $buyer_requests = "SELECT d.NoteID, d.DownloadID, d.NoteTitle, d.NoteCategory, u.EmailID, up.CountryCode, up.PhoneNumber, d.IsPaid, d.PurchasedPrice, DATE_FORMAT(d.AttachmentDownloadedDate, '%d %b %Y, %T') as Date FROM downloads d JOIN users u ON d.Downloader = u.UserID JOIN user_profile up ON u.UserID = up.UserID WHERE d.IsSellerHasAllowedDownload = 0 AND d.Seller = $UserID AND (d.NoteTitle LIKE '%$br_keyword%' OR d.NoteCategory LIKE '%$br_keyword%' OR d.PurchasedPrice LIKE '%$br_keyword%') " . $orderby . " LIMIT $start_from, $limit ";
                                } else {
                                    $buyer_requests = "SELECT d.NoteID, d.DownloadID, d.NoteTitle, d.NoteCategory, u.EmailID, up.CountryCode, up.PhoneNumber, d.IsPaid, d.PurchasedPrice, DATE_FORMAT(d.AttachmentDownloadedDate, '%d %b %Y, %T') as Date FROM downloads d JOIN users u ON d.Downloader = u.UserID JOIN user_profile up ON u.UserID = up.UserID WHERE d.IsSellerHasAllowedDownload = 0 AND d.Seller = $UserID " . $orderby . " LIMIT $start_from, $limit ";
                                }

                                $buyer_requests_query = mysqli_query($connection, $buyer_requests);
                                confirmQuery($buyer_requests_query);

                                $i = 1;
                                if ($buyer_requests_total_count != 0) {
                                    while ($row = mysqli_fetch_assoc($buyer_requests_query)) {
                                        $note_id = $row['NoteID'];
                                        $d_id = $row['DownloadID'];  //download_id                            
                                        $title = $row['NoteTitle'];
                                        $category = $row['NoteCategory'];
                                        $buyer_email = $row['EmailID'];
                                        $country_code = $row['CountryCode'];
                                        $buyer_phone = $row['PhoneNumber'];
                                        $sell_type = $row['IsPaid'];
                                        $price = $row['PurchasedPrice'];
                                        $download_date = $row['Date'];

                                        echo "<tr>";
                                        echo "<td class='text-center'>$i</td>";
                                        $i++;
                                        echo "<td>$title</td>";
                                        echo "<td>$category</td>";
                                        echo "<td>$buyer_email</td>";
                                        echo "<td>" . "+" . $country_code . " " . $buyer_phone . "</td>";
                                        if ($sell_type == 0) {
                                            $st = "Free";
                                        } else {
                                            $st = "Paid";
                                        }
                                        echo "<td>" . $st . "</td>";
                                        if ($price == null) {
                                            $price = 0;
                                        }
                                        echo "<td>" . "$" . $price . "</td>";
                                        echo "<td>$download_date</td>";
                                        // delete link to stay on same page after deleting note from in progressed note
                                        if (isset($_GET['page'])) {
                                            $allow_download_link = "buyers-requests.php?d_id=" . $d_id . "&page=" . $_GET['page'];
                                        } else {
                                            $allow_download_link = "buyers-requests.php?d_id=" . $d_id;
                                        }
                                        echo "<td class='text-center visible-overflow-for-dropdown'>
                                        <a href='note-detail.php?note_id={$note_id}'><img class='eye-img-in-table' src='../images/Dashboard/eye.png' alt='edit'></a>
                                        
                                        <div class='dropdown dropdown-dots-table'>
                                            <a href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                <img class='dots-in-table' src='../images/Dashboard/dots.png' alt='edit'>
                                            </a>
                                          
                                            <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                                              <a class='dropdown-item' href='$allow_download_link'>Allow Download</a>
                                            </div>
                                        </div>                                            
                                        </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<td colspan='9'>No record found</td>";
                                }

                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>
        <!-- progress note table -->

        <!-- pagination -->
        <?php
        if ($total_pages != 0) { ?>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <?php // go to previous page
                        if (isset($_GET['page'])) {
                            if ($_GET['page'] != 1) {
                                $pre_link = "buyers-requests.php?page=" . $page - 1;
                            } else {
                                $pre_link = "buyers-requests.php";
                            }
                        } else {
                            $pre_link = null;
                        }
                        ?>
                        <a class="page-link" href="<?php echo $pre_link; ?>" aria-label="Previous">
                            <img src="../images/pagination/left-arrow.png" alt="">
                        </a>
                    </li> <?php
                            $active_class = 'active';
                            for ($i = 1; $i <= $total_pages; $i++) {
                                if (isset($_GET['page'])) {
                                    if ($_GET['page'] == $i) {
                                        $active_class = 'active';
                                    } else {
                                        $active_class = '';
                                    }
                                } else {
                                    if ($i == 1) {
                                        $active_class = 'active';
                                    } else {
                                        $active_class = '';
                                    }
                                }
                                echo "<li class='page-item $active_class'><a class='page-link' href='buyers-requests.php?page=" . $i . "'>" . $i . "</a></li>";
                            }
                            ?>
                    <li class="page-item">
                        <?php
                        if (isset($_GET['page'])) {
                            if ($_GET['page'] != $total_pages) {
                                $next_link = "buyers-requests.php?page=" . $page + 1;
                            } else {
                                $next_link = "buyers-requests.php?page=" . $total_pages;
                            }
                        } else {
                            if ($total_pages == 1) {
                                $next_link = "buyers-requests.php?page=" . $total_pages;
                            } else {
                                $next_link = "buyers-requests.php?page=2";
                            }
                        }
                        ?>
                        <a class="page-link" href="<?php echo $next_link; ?>" aria-label="Next">
                            <img style="color: white;" src="../images/pagination/right-arrow.png" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
        <?php }

        ?>
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

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <?php
    if (isset($_SESSION['br_success'])) { ?>

        <script>
            swal({                
                icon: 'success',
                text: 'Allowed download',
                buttons: false,
            });
        </script>

    <?php
    if (!isset($_GET['d_id'])) {
        unset($_SESSION['br_success']);
    }        
    }
    ?> 

    <!-- JQuery-Validation -->
    <script src="../js/JQuery-Validation/jquery.validate.js"></script>
    <script src="../js/form-validation/form-validation.js"></script>

    <!-- Java-scripts -->
</body>

</html>