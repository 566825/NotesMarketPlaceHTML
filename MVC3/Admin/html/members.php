<?php $page_name = "Members"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}

// deacticate user
if (isset($_GET['member_id'])) {
    $get_member_id = $_GET['member_id'];
    $deactivate_member = mysqli_query($connection, "UPDATE users SET IsActive = 0 WHERE UserID = {$get_member_id} ");
    confirmQuery($deactivate_member);

    // remove all notes of this member
    $remove_notes = mysqli_query($connection, "UPDATE seller_notes SET Status = 11 WHERE SellerID = {$get_member_id} ");
    confirmQuery($remove_notes);

    $_SESSION['memberDeactivated'] = '';
    header("Location: members.php");
    die;
}
?>

<body>
    <section id="members" class="admin-manage-page">

        <!-- Header -->
        <div class="only-white-nav extra-style-nav only-white-nav-with-mb">
            <header class="site-header">
                <div class="header-wrapper">
        
                    <!-- Mobile Menu Open Button -->
                    <span id="mobile-nav-open-btn">&#9776;</span>
        
                    <div class="logo-wrapper">
                        <a href="dashboard.php" title="Site Logo">
                            <img src="../images/logo/dark-logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="navigation-wrapper">
                        <nav class="main-nav">
                            <ul class="menu-navigation">
                                <li>
                                    <a class="hover-bottom-border" href="dashboard.php">Dashboard</a>
                                </li>
                                <li>                                    
                                    <div class="dropdown notes-btn-dropdown">
                                        <a class="hover-bottom-border" role="button" id="notes-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>
                                      
                                        <div class="dropdown-menu" aria-labelledby="notes-dropdown-lable">
                                          <a class="dropdown-item" href="notes-under-review.php">Notes Under Review</a>
                                          <a class="dropdown-item" href="published-notes.php">Published Notes</a>
                                          <a class="dropdown-item" href="downloaded-notes.php">Downloaded Notes</a>
                                          <a class="dropdown-item" href="rejected-notes.php">Rejected Notes</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="active">
                                    <a class="hover-bottom-border" href="members.php">Members</a>
                                </li>
                                <li>
                                    <div class="dropdown reports-btn-dropdown">
                                        <a class="hover-bottom-border" role="button" id="reports-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>
                                      
                                        <div class="dropdown-menu" aria-labelledby="reports-dropdown-lable">
                                          <a class="dropdown-item" href="spam-reports.php">Spam Reports</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown settings-btn-dropdown">
                                        <a class="hover-bottom-border" role="button" id="settings-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                                      
                                        <?php if ($_SESSION['UserRole'] == 1) { ?>
                                            <div class="dropdown-menu" aria-labelledby="settings-dropdown-lable">
                                                <a class="dropdown-item" href="manage-system-configuration.php">Manage System Configuration</a>
                                                <a class="dropdown-item" href="manage-administrator.php">Manage Administrator</a>
                                            <?php } else { ?>
                                                <div class="dropdown-menu adjust-settings-menu" aria-labelledby="settings-dropdown-lable">
                                                <?php } ?>
                                                <a class="dropdown-item" href="manage-category.php">Manage Category</a>
                                                <a class="dropdown-item" href="manage-type.php">Manage Type</a>
                                                <a class="dropdown-item" href="manage-country.php">Manage Countries</a>
                                                </div>
                                    </div>                                </li>
                                <li class="logged-in-user-photo-li">
                                    <div class="dropdown user-picture-dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="logged-in-user-photo">
                                                <img src="<?php echo $user_dp_path; ?>" alt="User Photo" class="rounded-circle">
                                            </div>
                                        </a>
                                      
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <a class="dropdown-item" href="my-profile.php">Update Profile</a>
                                          <a class="dropdown-item" href="../../Front/html/change-password.php">Change Password</a>
                                          <a class="dropdown-item logout-btn-dropdown logout-link" href="javascript:void(0)">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple logout-link" href="javascript:void(0)">Logout</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
        
                    <!-- Mobile Menu -->
                    <div id="mobile-nav">
                        <a href="dashboard.php" title="Site Logo">
                            <img class="logo-in-mobile-menu" src="../images/logo/dark-logo.png" alt="Logo">
                        </a>
                        <!-- Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>
        
                        <div id="mobile-nav-content">
                            <ul class="nav">
                                <li>
                                    <a href="dashboard.php">Dashboard</a>
                                </li>
                                <li>                                    
                                    <div class="dropdown notes-btn-dropdown">
                                        <a role="button" id="notes-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>
                                      
                                        <div class="dropdown-menu" aria-labelledby="notes-dropdown-lable">
                                          <a class="dropdown-item" href="notes-under-review.php">Notes Under Review</a>
                                          <a class="dropdown-item" href="published-notes.php">Published Notes</a>
                                          <a class="dropdown-item" href="downloaded-notes.php">Downloaded Notes</a>
                                          <a class="dropdown-item" href="rejected-notes.php">Rejected Notes</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="active">
                                    <a href="members.php">Members</a>
                                </li>
                                <li>
                                    <div class="dropdown reports-btn-dropdown">
                                        <a role="button" id="reports-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>
                                      
                                        <div class="dropdown-menu" aria-labelledby="reports-dropdown-lable">
                                          <a class="dropdown-item" href="spam-reports.php">Spam Reports</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown settings-btn-dropdown">
                                        <a role="button" id="settings-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                                      
                                        <?php if ($_SESSION['UserRole'] == 1) { ?>
                                            <div class="dropdown-menu" aria-labelledby="settings-dropdown-lable">
                                                <a class="dropdown-item" href="manage-system-configuration.php">Manage System Configuration</a>
                                                <a class="dropdown-item" href="manage-administrator.php">Manage Administrator</a>
                                            <?php } else { ?>
                                                <div class="dropdown-menu adjust-settings-menu" aria-labelledby="settings-dropdown-lable">
                                                <?php } ?>
                                                <a class="dropdown-item" href="manage-category.php">Manage Category</a>
                                                <a class="dropdown-item" href="manage-type.php">Manage Type</a>
                                                <a class="dropdown-item" href="manage-country.php">Manage Countries</a>
                                                </div>
                                    </div>                                </li>
                                <li class="logged-in-user-photo-li">
                                    <div class="logged-in-user-photo">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        
                                                <img src="<?php echo $user_dp_path; ?>" alt="User Photo" class="rounded-circle">                                        
                                            </a>
                                        
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="my-profile.php">Update Profile</a>
                                                <a class="dropdown-item" href="../../Front/html/change-password.php">Change Password</a>
                                                <a class="dropdown-item logout-btn-dropdown logout-link" href="javascript:void(0)">Logout</a>
                                        </div>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple logout-link" href="javascript:void(0)">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- Header ends -->          

        <?php include "../includes/modals/deactivate-user-modal.php"; ?>       

        <!-- manage-administrator table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-5 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Members</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 col-12">

                        <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="all-members-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search">
                            </div>
    
                            <button id="all-members-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                </div>
            </div>      
            
            <div class="container">

                <div class="members-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="all-members-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" data-orderable="false">sr no.</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Joining Date</th>
                                    <th scope="col" class="text-center">Under Review<br>notes</th>
                                    <th scope="col" class="text-center">Published<br>notes</th>
                                    <th scope="col" class="text-center">Downloaded<br>notes</th>
                                    <th scope="col" class="text-center">Total<br>Expenses</th>
                                    <th scope="col" class="text-center">Total<br>Earnings</th>
                                    <th scope="col" class="text-center" data-orderable="false"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $all_members = mysqli_query($connection, "SELECT * FROM users WHERE IsActive = 1 AND RoleID = 3 ");
                                confirmQuery($all_members);
                                while ($row = mysqli_fetch_assoc($all_members)) {
                                    $member_id = $row['UserID'];
                                    $fname = $row['FirstName'];
                                    $lname = $row['LastName'];
                                    $email = $row['EmailID'];
                                    $joining_date = date("d-m-Y, h:i", strtotime($row['CreatedDate']));
                                    $joining_date_str = strtotime($joining_date);

                                    // under review notes
                                    $under_review_notes_count = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM seller_notes WHERE IsActive = 1 AND SellerID = {$member_id} AND Status IN (7, 8) "));
                                    $published_notes_count = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM seller_notes WHERE IsActive = 1 AND SellerID = {$member_id} AND Status = 9 "));
                                    $downloaded_notes_count = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM downloads WHERE IsSellerHasAllowedDownload = 1 AND Downloader = {$member_id} "));
                                    $total_expense = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(PurchasedPrice) AS expense FROM downloads WHERE IsSellerHasAllowedDownload = 1 AND Downloader = {$member_id} "))['expense'];
                                    $total_earnings = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(PurchasedPrice) AS earnings FROM downloads WHERE IsSellerHasAllowedDownload = 1 AND Seller = {$member_id} "))['earnings'];
                                ?>

                                <tr>
                                    <td class="text-center"></td>
                                    <td><?php echo $fname; ?></td>
                                    <td><?php echo $lname; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td data-sort="<?php echo $joining_date_str; ?>"><?php echo $joining_date; ?></td>
                                    <td class="purple-td text-center"><a href="notes-under-review.php?member_id=<?php echo $member_id; ?>"><?php echo $under_review_notes_count; ?></a></td>
                                    <td class="purple-td text-center"><a href="published-notes.php?member_id=<?php echo $member_id; ?>"><?php echo $published_notes_count; ?></a></td>
                                    <td class="purple-td text-center"><a href="downloaded-notes.php?member_id=<?php echo $member_id; ?>"><?php echo $downloaded_notes_count; ?></a></td>
                                    <td class="purple-td text-center"><a href="downloaded-notes.php?member_id=<?php echo $member_id; ?>">$<?php echo empty($total_expense) ? 0 : $total_expense; ?></a></td>
                                    <td class="text-center">$<?php echo empty($total_earnings) ? 0 : $total_earnings; ?></td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                    
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="member-details.php?m_id=<?php echo $member_id; ?>">View More Details</a>
                                                <a class="dropdown-item deactivate-user-link" rel="<?php echo $member_id; ?>" href="#" data-toggle="modal" data-target="#deactivateUserModal">Deactivate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <?php } ?>

                            </tbody>
                          </table>
                        
                    </div>
                </div>

            </div>

        </div>
        <!-- published note table -->

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

    <!-- datatables -->
    <script src="../js/datatables/jquery.dataTables.min.js"></script>
    <script src="../js/datatables/data-table.js"></script>

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <script>
        $(document).ready(function() {

            // inreview note
            $(document).on('click', 'td .deactivate-user-link', function() {
                var m_id = $(this).attr("rel");
                var deactivate_user_link = "members.php?member_id=" + m_id + " ";
                $("#deactivate-user-link-href").attr("href", deactivate_user_link);
            });

            <?php
            if (isset($_SESSION['memberDeactivated'])) { ?>

                swal({
                    text: 'Member Deactivated',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['memberDeactivated']);
            }
            ?>

        });
    </script>

    <!-- Java-scripts -->
</body>

</html>