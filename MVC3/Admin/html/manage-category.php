<?php $page_name = "Manage Category"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}

// deacticate category
if (isset($_GET['cat_id'])) {
    $get_cat_id = $_GET['cat_id'];
    $deactivate_category = mysqli_query($connection, "UPDATE note_categories SET IsActive = 0 WHERE CategoryID = {$get_cat_id} ");
    confirmQuery($deactivate_category);

    $_SESSION['categoryDeactivated'] = '';
    header("Location: manage-category.php");
    die;
}
?>

<body>
    <section id="manage-category" class="admin-manage-page">

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

        <?php include "../includes/modals/deactivate-category-modal.php"; ?>

        <!-- manage-administrator table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Manage Category</p>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                        <button onclick="window.location.href='add-category.php'" class="btn btn-general btn-purple add-category-btn">Add Category</button>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-7 col-12">

                        <div class="row no-gutters general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="manage-category-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search">
                            </div>

                            <button id="manage-category-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

                <div class="manage-category-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="manage-category-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" data-orderable="false">sr no.</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col">Added By</th>
                                    <th scope="col" class="text-center">Active</th>
                                    <th scope="col" class="text-center" data-orderable="false">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $categories = mysqli_query($connection, "SELECT * FROM note_categories ");
                                confirmQuery($categories);

                                while ($row = mysqli_fetch_assoc($categories)) {
                                    $category_id = $row['CategoryID'];
                                    $category_name = $row['Name'];
                                    $category_desc = $row['Description'];
                                    $category_created_date = date("d-m-Y, h:i", strtotime($row['CreatedDate']));
                                    $category_created_date_str = strtotime($category_created_date);
                                    $category_created_by_id = $row['CreatedBy'];
                                    $category_created_by_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$category_created_by_id} "));
                                    $category_created_by_fullname = $category_created_by_row['FirstName'] . " " . $category_created_by_row['LastName'];

                                    $category_IsActive = $row['IsActive'];
                                    if ($category_IsActive == 1) {
                                        $category_is_active = 'Yes';
                                    } else {
                                        $category_is_active = 'No';
                                    }
                                ?>

                                    <tr>
                                        <td class="text-center"></td>
                                        <td><?php echo $category_name; ?></td>
                                        <td><?php echo $category_desc; ?></td>
                                        <td data-sort="<?php echo $category_created_date_str; ?>"><?php echo $category_created_date; ?></td>
                                        <td><?php echo $category_created_by_fullname; ?></td>
                                        <td class="text-center"><?php echo $category_is_active; ?></td>
                                        <td class="text-center">
                                            <a href="add-category.php?cat_id=<?php echo $category_id; ?>">
                                                <img class="edit-img-in-table" src="../images/Dashboard/edit.png" alt="edit">
                                            </a>
                                            <a class="deactivate-category-link" rel="manage-category.php?cat_id=<?php echo $category_id; ?>" href="#" data-toggle="modal" data-target="#deactivateCategoryModal">
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
            $(document).on('click', 'td .deactivate-category-link', function() {
                var deactivate_category_link = $(this).attr("rel");
                $("#deactivate-category-link-href").attr("href", deactivate_category_link);
            });

            <?php
            if (isset($_SESSION['categoryDeactivated'])) { ?>

                swal({
                    text: 'Category Deactivated',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['categoryDeactivated']);
            }
            ?>

            <?php
            if (isset($_SESSION['categoryUpdated'])) { ?>

                swal({
                    text: 'Category Updated',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['categoryUpdated']);
            }
            ?>

        <?php
            if (isset($_SESSION['categoryAdded'])) { ?>

                swal({
                    text: 'Category Added',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['categoryAdded']);
            }
            ?>

        });
    </script>

    <!-- Java-scripts -->
</body>

</html>