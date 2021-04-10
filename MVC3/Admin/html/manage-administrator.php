<?php $page_name = "Manage Administrator"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}

if ($_SESSION['UserRole'] != 1) {
    header("Location: dashboard.php");
    die();
}

// deacticate admin
if (isset($_GET['admin_id'])) {
    $get_member_id = $_GET['admin_id'];
    $deactivate_member = mysqli_query($connection, "UPDATE users SET IsActive = 0 WHERE UserID = {$get_member_id} ");
    confirmQuery($deactivate_member);

    $_SESSION['adminDeactivated'] = '';
    header("Location: manage-administrator.php");
    die;
}
?>

<body>
    <section id="manage-administrator" class="admin-manage-page">

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
                                <li>
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
                                    </div>
                                </li>
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
                                <li>
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
                                    </div>
                                </li>
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

        <?php include "../includes/modals/deactivate-admin-modal.php"; ?>

        <!-- manage-administrator table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Manage Administrator</p>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                        <button onclick="window.location.href='add-administrator.php'" class="btn btn-general btn-purple add-administrator-btn">Add Administrator</button>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-7 col-12">

                        <div class="row no-gutters general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="manage-administrator-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search">
                            </div>

                            <button id="manage-administrator-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

                <div class="manage-administrator-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="manage-administrator-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" data-orderable="false">sr no.</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Phone no.</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col" class="text-center">Active</th>
                                    <th scope="col" class="text-center" data-orderable="false">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $admins = mysqli_query($connection, "SELECT * FROM users WHERE RoleID = 2 ");
                                confirmQuery($admins);

                                while ($row = mysqli_fetch_assoc($admins)) {
                                    $admin_id = $row['UserID'];
                                    $admin_fname = $row['FirstName'];
                                    $admin_lname = $row['LastName'];
                                    $admin_email = $row['EmailID'];
                                    $admin_profile = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM user_profile WHERE UserID = {$admin_id} "));
                                    $admin_pnumber = $admin_profile['PhoneNumber'];
                                    $admin_created_date = date("d-m-Y, h:i", strtotime($row['CreatedDate']));
                                    $admin_created_date_str = strtotime($admin_created_date);
                                    $admin_IsActive = $row['IsActive'];
                                    if ($admin_IsActive == 1) {
                                        $admin_is_active = 'Yes';
                                    } else {
                                        $admin_is_active = 'No';
                                    }
                                ?>

                                    <tr>
                                        <td class="text-center"></td>
                                        <td><?php echo $admin_fname; ?></td>
                                        <td><?php echo $admin_lname; ?></td>
                                        <td><?php echo $admin_email ?></td>
                                        <td><?php echo $admin_pnumber; ?></td>
                                        <td data-sort="<?php echo $admin_created_date_str; ?>"><?php echo $admin_created_date; ?></td>
                                        <td class="text-center"><?php echo $admin_is_active; ?></td>
                                        <td class="text-center">
                                            <a href="add-administrator.php?admin_id=<?php echo $admin_id; ?>">
                                                <img class="edit-img-in-table" src="../images/Dashboard/edit.png" alt="edit">
                                            </a>
                                            <a class="deactivate-admin-link" rel="<?php echo $admin_id; ?>" href="#" data-toggle="modal" data-target="#deactivateAdminModal">
                                                <img class="delete-img-in-table" src="../images/Dashboard/delete.png" alt="edit">
                                            </a>
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
            $(document).on('click', 'td .deactivate-admin-link', function() {
                var a_id = $(this).attr("rel");
                var deactivate_admin_link = "manage-administrator.php?admin_id=" + a_id + " ";
                $("#deactivate-admin-link-href").attr("href", deactivate_admin_link);
            });

            <?php
            if (isset($_SESSION['adminDeactivated'])) { ?>

                swal({
                    text: 'Administrator Deactivated',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['adminDeactivated']);
            }
            ?>

            <?php
            if (isset($_SESSION['adminAdded'])) { ?>

                swal({
                    text: 'Administrator Added',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['adminAdded']);
            }
            ?>

            <?php
            if (isset($_SESSION['adminUpdated'])) { ?>

                swal({
                    text: 'Administrator Updated',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['adminUpdated']);
            }
            ?>

        });
    </script>

    <!-- Java-scripts -->
</body>

</html>