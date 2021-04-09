<?php $page_name = "Manage Country"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}

// deacticate country
if (isset($_GET['country_id'])) {
    $get_country_id = $_GET['country_id'];
    $deactivate_country = mysqli_query($connection, "UPDATE countries SET IsActive = 0 WHERE CountryID = {$get_country_id} ");
    confirmQuery($deactivate_country);

    $_SESSION['countryDeactivated'] = '';
    header("Location: manage-country.php");
    die;
}
?>

<body>
    <section id="manage-country" class="admin-manage-page">

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

        <?php include "../includes/modals/deactivate-country-modal.php"; ?>         

        <!-- manage-administrator table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Manage Country</p>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                        <button onclick="window.location.href='add-country.php'" class="btn btn-general btn-purple add-country-btn">Add Country</button>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-7 col-12">

                        <div class="row no-gutters general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="manage-country-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search">
                            </div>
    
                            <button id="manage-country-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                </div>
            </div>    
            
            <div class="container">

                <div class="manage-country-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="manage-country-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" data-orderable="false">sr no.</th>
                                    <th scope="col">Country Name</th>
                                    <th scope="col">Country Code</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col">Added By</th>
                                    <th scope="col" class="text-center">Active</th>
                                    <th scope="col" class="text-center" data-orderable="false">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                $countries = mysqli_query($connection, "SELECT * FROM countries ");
                                confirmQuery($countries);

                                while ($row = mysqli_fetch_assoc($countries)) {
                                    $country_id = $row['CountryID'];
                                    $country_name = $row['Name'];
                                    $country_code = $row['CountryCode'];
                                    $country_created_date = date("d-m-Y, h:i", strtotime($row['CreatedDate']));
                                    $country_created_date_str = strtotime($country_created_date);
                                    $country_created_by_id = $row['CreatedBy'];
                                    $country_created_by_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$country_created_by_id} "));
                                    $country_created_by_fullname = $country_created_by_row['FirstName'] . " " . $country_created_by_row['LastName'];

                                    $country_IsActive = $row['IsActive'];
                                    if ($country_IsActive == 1) {
                                        $country_is_active = 'Yes';
                                    } else {
                                        $country_is_active = 'No';
                                    }
                                ?>

                                    <tr>
                                        <td class="text-center"></td>
                                        <td><?php echo $country_name; ?></td>
                                        <td><?php echo $country_code; ?></td>
                                        <td data-sort="<?php echo $country_created_date_str; ?>"><?php echo $country_created_date; ?></td>
                                        <td><?php echo $country_created_by_fullname; ?></td>
                                        <td class="text-center"><?php echo $country_is_active; ?></td>
                                        <td class="text-center">
                                            <a href="add-country.php?country_id=<?php echo $country_id; ?>">
                                                <img class="edit-img-in-table" src="../images/Dashboard/edit.png" alt="edit">
                                            </a>
                                            <a class="deactivate-country-link" rel="manage-country.php?country_id=<?php echo $country_id; ?>" href="#" data-toggle="modal" data-target="#deactivateCountryModal">
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
            $(document).on('click', 'td .deactivate-country-link', function() {
                var deactivate_country_link = $(this).attr("rel");
                $("#deactivate-country-link-href").attr("href", deactivate_country_link);
            });

            <?php
            if (isset($_SESSION['countryDeactivated'])) { ?>

                swal({
                    text: 'Country Deactivated',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['countryDeactivated']);
            }
            ?>

            <?php
            if (isset($_SESSION['countryAdded'])) { ?>

                swal({
                    text: 'Country Added',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['countryAdded']);
            }
            ?>

            <?php
            if (isset($_SESSION['countryUpdated'])) { ?>

                swal({
                    text: 'Country Updated',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['countryUpdated']);
            }
            ?>

        });
    </script>

    <!-- Java-scripts -->
</body>

</html>