<?php $page_name = "Buyer Requests"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: login.php");
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

        <!-- my downloads table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="my-downloads-heading">Buyer Requests</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="buyer-requests-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search notes here...">
                            </div>
                            <button id="buyer-requests-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="my-downloads-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="buyer-requests-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">sr no.</th>
                                    <th scope="col">Note title</th>
                                    <th scope="col">category</th>
                                    <th scope="col">Buyer</th>
                                    <th scope="col">Phone no.</th>
                                    <th scope="col">Sell type</th>
                                    <th scope="col">price</th>
                                    <th scope="col">downloaded date/time</th>
                                    <th scope="col" width="80px" data-orderable="false">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php                                
                                $buyer_requests = "SELECT Downloader, NoteID, DownloadID, NoteTitle, NoteCategory, IsPaid, PurchasedPrice, DATE_FORMAT(CreatedDate, '%d %b %Y, %T') as Date FROM downloads WHERE IsSellerHasAllowedDownload = 0 AND Seller = $UserID ORDER BY CreatedDate DESC ";
                                $buyer_requests_query = mysqli_query($connection, $buyer_requests);
                                confirmQuery($buyer_requests_query);
                                $buyer_requests_count = mysqli_num_rows($buyer_requests_query);

                                $i = 1;
                                if ($buyer_requests_count != 0) {
                                    while ($row = mysqli_fetch_assoc($buyer_requests_query)) {
                                        $note_id = $row['NoteID'];
                                        $d_id = $row['DownloadID'];                             
                                        $title = $row['NoteTitle'];
                                        $category = $row['NoteCategory'];  
                                        $downloader_id = $row['Downloader']; 
                                        $buyer_details = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM user_profile WHERE UserID = {$downloader_id} "));                                     
                                        $country_code = $buyer_details['CountryCode'];
                                        $buyer_email = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$downloader_id} "))['EmailID'];
                                        $buyer_phone = $buyer_details['PhoneNumber'];
                                        $sell_type = $row['IsPaid'];
                                        $price = $row['PurchasedPrice'];
                                        $download_date = $row['Date'];
                                        $downloadDateStr = strtotime($download_date);

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
                                        echo "<td data-sort='{$downloadDateStr}'>$download_date</td>";
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
                                              <a class='dropdown-item' href='{$allow_download_link}'>Allow Download</a>
                                            </div>
                                        </div>                                            
                                        </td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>
        <!-- progress note table -->

        <!-- Footer  -->
        <?php include "../includes/footer.php"; ?>
        <!-- Footer Ends -->

    </section>

    <!-- Java-scripts -->

    <!-- JQuery -->
    <script src="../js/JQuery/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- datatables -->
    <script src="../js/datatables/jquery.dataTables.min.js"></script>
    <script src="../js/datatables/data-table.js"></script>

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

    <!-- Java-scripts -->
</body>

</html>