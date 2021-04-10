<?php $page_name = "Manage System Configuration"; ?>
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
?>

<body>
    <section id="manage-system-configuration" class="admin-add-page">

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

        <!-- details conatiner -->
        <div class="general-box">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <p class="section-heading">Manage System Configuration</p>
                    </div>
                </div>

                <?php
                $UserID = $_SESSION['UserID'];

                $sys_config = mysqli_query($connection, "SELECT * FROM system_configuration ");
                confirmQuery($sys_config);
                $values = array();
                $i = 1;
                while ($row = mysqli_fetch_assoc($sys_config)) {
                    $values[$i] = $row['Value'];
                    $i++;  
                }   
                
                if (isset($_POST['submit_sys_config'])) {
                    $SupportEmail = $_POST['SupportEmail'];
                    $SupportPhoneNumber = $_POST['SupportPhoneNumber'];
                    $EmailAddresses = $_POST['EmailAddresses'];
                    $FBURL = $_POST['FBURL'];
                    $TURL = $_POST['TURL'];
                    $LIURL = $_POST['LIURL'];
                    $DefaultNoteDP = $_FILES['DefaultNoteDP']['name'];
                    $DefaultNoteDP_temp = $_FILES['DefaultNoteDP']['tmp_name'];
                    $DefaultUserDP = $_FILES['DefaultUserDP']['name'];
                    $DefaultUserDP_temp = $_FILES['DefaultUserDP']['tmp_name'];

                    $key_1 = mysqli_query($connection, "UPDATE system_configuration c SET Value = '{$SupportEmail}', ModifiedBy = {$UserID} WHERE c.Key = 'SupportEmailAddress' ");
                    confirmQuery($key_1);
                    $key_2 = mysqli_query($connection, "UPDATE system_configuration c SET Value = '{$SupportPhoneNumber}', ModifiedBy = {$UserID} WHERE c.Key = 'SupportContactNumber' ");
                    confirmQuery($key_2);
                    $key_3 = mysqli_query($connection, "UPDATE system_configuration c SET Value = '{$EmailAddresses}', ModifiedBy = {$UserID} WHERE c.Key = 'EmailAddresssesForNotify' ");
                    confirmQuery($key_3);
                    $key_4 = mysqli_query($connection, "UPDATE system_configuration c SET Value = '{$FBURL}', ModifiedBy = {$UserID} WHERE c.Key = 'FBICON' ");
                    confirmQuery($key_4);
                    $key_5 = mysqli_query($connection, "UPDATE system_configuration c SET Value = '{$TURL}', ModifiedBy = {$UserID} WHERE c.Key = 'TWITTERICON' ");
                    confirmQuery($key_5);
                    $key_6 = mysqli_query($connection, "UPDATE system_configuration c SET Value = '{$LIURL}', ModifiedBy = {$UserID} WHERE c.Key = 'LNICON ' ");
                    confirmQuery($key_6);

                    if (!empty($DefaultNoteDP)) {
                        if ($values[7] != '') {
                            unlink($values[7]);
                        }

                        $DefaultNoteDP_filename = substr($DefaultNoteDP, 0, stripos($DefaultNoteDP, '.')); // get filename only(without ext) 
                        $DefaultNoteDP_ext = substr($DefaultNoteDP, stripos($DefaultNoteDP, '.')); // get file extension
                        $DefaultNoteDP_new_name = "DefaultNoteDP" . $DefaultNoteDP_ext;
                        $DefaultNoteDP_file_path = "../images/Default-DP/" . $DefaultNoteDP_new_name;

                        move_uploaded_file($DefaultNoteDP_temp, "../images/Default-DP/" . $DefaultNoteDP_new_name);

                        $key_7 = mysqli_query($connection, "UPDATE system_configuration c SET Value = '{$DefaultNoteDP_file_path}', ModifiedBy = {$UserID} WHERE c.Key = 'DefaultNoteDisplayPicture' ");
                        confirmQuery($key_7);
                    }

                    if (!empty($DefaultUserDP)) {
                        if ($values[8] != '') {
                            unlink($values[8]);
                        }

                        $DefaultUserDP_filename = substr($DefaultUserDP, 0, stripos($DefaultUserDP, '.')); // get filename only(without ext) 
                        $DefaultUserDP_ext = substr($DefaultUserDP, stripos($DefaultUserDP, '.')); // get file extension
                        $DefaultUserDP_new_name = "DefaultUserDP" . $DefaultUserDP_ext;
                        $DefaultUserDP_file_path = "../images/Default-DP/" . $DefaultUserDP_new_name;

                        move_uploaded_file($DefaultUserDP_temp, "../images/Default-DP/" . $DefaultUserDP_new_name);

                        $key_8 = mysqli_query($connection, "UPDATE system_configuration c SET Value = '{$DefaultUserDP_file_path}', ModifiedBy = {$UserID} WHERE c.Key = 'DefaultMemberDisplayPicture' ");
                        confirmQuery($key_8);
                    }

                    $_SESSION['sysConfigUpdated'] = '';
                    header("Location: manage-system-configuration.php");
                    die;
                }
                ?>
            
                <div class="container">
                    <div class="row">
                        <form action="" method="POST" enctype="multipart/form-data" id="system-config-form">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">

                                    <div class="form-group">
                                        <label class="info-label">Support email address *</label>
                                        <input name="SupportEmail" value="<?php echo $values[1]; ?>" type="email" class="form-control input-box-style" placeholder="Enter support email address">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Support phone number *</label>
                                        <input name="SupportPhoneNumber" value="<?php echo $values[2]; ?>" type="tel" class="form-control input-box-style" placeholder="Enter your first name">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Email Address(es) (for various events system will send notifications to these users) *</label>
                                        <input name="EmailAddresses" value="<?php echo $values[3]; ?>" type="email" class="form-control input-box-style" placeholder="Enter email address">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Facebook URL</label>
                                        <input name="FBURL" value="<?php echo $values[4]; ?>" type="text" class="form-control input-box-style" placeholder="Enter facebook url">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Twitter URL</label>
                                        <input name="TURL" value="<?php echo $values[5]; ?>" type="text" class="form-control input-box-style" placeholder="Enter twitter url">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label">Linkedin URL</label>
                                        <input name="LIURL" value="<?php echo $values[6]; ?>" type="text" class="form-control input-box-style" placeholder="Enter linkedin url">
                                    </div>                                                                  
                                    
                                    <div class="form-group">
                                        <label class="info-label">Default image for notes (if seller do not upload)</label>
                                        <div class="form-control input-box-style upload-input-box">
                                            <input name="DefaultNoteDP" id="file-upload-2" class="upload-file-input" type="file" accept="image/jpeg, image/jpg, image/png" <?php if ($values[7] == '') {echo 'required';} ?> />
                                            <label for="file-upload-2">
                                                <img src="../images/user-profile/upload.png" alt="Upload Profile Picture">
                                                <p>Upload a picture</p>
                                            </label>
                                        </div>
                                        <div id="file-upload-2-filename"></div>
                                    </div> 

                                    <div class="form-group">
                                        <label class="info-label">Default profile picture (if seller do not upload)</label>
                                        <div class="form-control input-box-style upload-input-box">
                                            <input name="DefaultUserDP" id="file-upload-3" class="upload-file-input" type="file" accept="image/jpeg, image/jpg, image/png" <?php if ($values[8] == '') {echo 'required';} ?> />
                                            <label for="file-upload-3">
                                                <img src="../images/user-profile/upload.png" alt="Upload Profile Picture">
                                                <p>Upload a picture</p>
                                            </label>
                                        </div>
                                        <div id="file-upload-3-filename"></div>
                                    </div>                                     

                                    <div class="form-btn">
                                        <button name="submit_sys_config" type="submit" class="btn btn-general btn-purple">Submit</button>
                                    </div>
                                    
                                </div>
            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- details container --> 

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

    <!-- JQuery-Validation -->
    <script src="../js/JQuery-Validation/jquery.validate.js"></script>
    <script src="../js/form-validation/form-validation.js"></script>

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <script>
        $(document).ready(function() {

            <?php
            if (isset($_SESSION['sysConfigUpdated'])) { ?>

                swal({
                    text: 'System Configuration Updated.',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['sysConfigUpdated']);
            }
            ?>
        });
    </script>

    <!-- Java-scripts -->
</body>

</html>