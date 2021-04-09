<?php $page_name = "Member Details"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}

if (!isset($_GET['m_id'])) {
    header("Location: dashboard.php");
    die();
}
?>

<body>
    <section id="member-details">

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

        <!-- member details box -->
        <div class="container">
            <div class="content-box-lg with-bottom-border">
                <p class="box-heading">Member Details</p>
                <div class="row no-gutters member-details-wrapper">

                    <?php
                    $member_id = $_GET['m_id'];
                    $member_details = mysqli_query($connection, "SELECT * FROM users u LEFT JOIN user_profile p ON u.UserID = p.UserID WHERE u.UserID = {$member_id} AND u.IsActive = 1 ");
                    confirmQuery($member_details);
                    $member_details_row = mysqli_fetch_assoc($member_details);

                    // member dp
                    $member_dp_path = empty($member_details_row['ProfilePicture']) ? '../../Front/images/user-profile/default-profile-picture.png' : $member_details_row['ProfilePicture'];

                    $member_fname = $member_details_row['FirstName'];
                    $member_lname = $member_details_row['LastName'];
                    $member_email = $member_details_row['EmailID'];
                    $member_dob = empty($member_details_row['DOB']) ? '-' : date("d-m-Y", strtotime($member_details_row['DOB']));
                    $member_pnumber = empty($member_details_row['PhoneNumber']) ? '-' : $member_details_row['PhoneNumber'];
                    $member_university = empty($member_details_row['University']) ? null : $member_details_row['University'];
                    $member_college = empty($member_details_row['College']) ? null : $member_details_row['College'];

                    if ($member_university == null && $member_college == null) {
                        $member_university_college = '-';
                    } elseif ($member_university != null && $member_college != null) {
                        $member_university_college = $member_college . " / " . $member_university;
                    } elseif ($member_university == null && $member_college != null) {
                        $member_university_college = $member_college;
                    } elseif ($member_university != null && $member_college == null) {
                        $member_university_college = $member_university;
                    }

                    $member_addressline1 = empty($member_details_row['AddressLine1']) ? '-' : $member_details_row['AddressLine1'];
                    $member_addressline2 = empty($member_details_row['AddressLine2']) ? '-' : $member_details_row['AddressLine2'];
                    $member_city = empty($member_details_row['City']) ? '-' : $member_details_row['City'];
                    $member_state = empty($member_details_row['State']) ? '-' : $member_details_row['State'];
                    $member_zipcode = empty($member_details_row['ZipCode']) ? '-' : $member_details_row['ZipCode'];
                    $member_country = empty($member_details_row['Country']) ? '-' : $member_details_row['Country'];
                    ?>

                    <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">
                        <div class="member-photo">
                            <img src="<?php echo $member_dp_path; ?>" alt="">
                        </div>
                    </div>

                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <div class="row no-gutters">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="member-personal-details-wrapper">
                                    <div class="row no-gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-left-wrapper">
                                                <p class="member-single-detail-left">First Name: </p>
                                                <p class="member-single-detail-left">Last Name:</p>
                                                <p class="member-single-detail-left">Email:</p>
                                                <p class="member-single-detail-left">DOB:</p>
                                                <p class="member-single-detail-left">Phone Number:</p>
                                                <p class="member-single-detail-left">College/University:</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-right-wrapper">
                                                <p class="member-single-detail-right"><?php echo $member_fname; ?></p>
                                                <p class="member-single-detail-right"><?php echo $member_lname; ?></p>
                                                <p class="member-single-detail-right"><?php echo $member_email; ?></p>
                                                <p class="member-single-detail-right"><?php echo $member_dob; ?></p>
                                                <p class="member-single-detail-right"><?php echo $member_pnumber; ?></p>
                                                <p class="member-single-detail-right"><?php echo $member_university_college; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="member-address-wrapper">
                                    <div class="row no-gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-left-wrapper">
                                                <p class="member-single-detail-left">Address 1:</p>
                                                <p class="member-single-detail-left">Address 2:</p>
                                                <p class="member-single-detail-left">City:</p>
                                                <p class="member-single-detail-left">State:</p>
                                                <p class="member-single-detail-left">Country:</p>
                                                <p class="member-single-detail-left">Zip Code:</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-right-wrapper">
                                                <p class="member-single-detail-right"><?php echo $member_addressline1; ?></p>
                                                <p class="member-single-detail-right"><?php echo $member_addressline2; ?></p>
                                                <p class="member-single-detail-right"><?php echo $member_city; ?></p>
                                                <p class="member-single-detail-right"><?php echo $member_state; ?></p>
                                                <p class="member-single-detail-right"><?php echo $member_zipcode; ?></p>
                                                <p class="member-single-detail-right"><?php echo $member_country; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- member details box -->

        <!-- manage-administrator table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                        <p class="box-heading">Notes</p>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="member-notes-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="member-notes-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" data-orderable="false">sr no.</th>
                                    <th scope="col">Note Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-center">Downloaded Notes</th>
                                    <th scope="col" class="text-center">Total Earnings</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col">Published Date</th>
                                    <th scope="col" data-orderable="false"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $member_all_notes = "SELECT * FROM seller_notes WHERE Status IN (7, 8, 9, 10, 11) AND IsActive = 1 AND SellerID = {$member_id} ";
                                $member_all_notes_query = mysqli_query($connection, $member_all_notes);
                                confirmQuery($member_all_notes_query);

                                while ($member_all_notes_row = mysqli_fetch_assoc($member_all_notes_query)) {
                                    $note_id = $member_all_notes_row['NoteID'];
                                    $note_title = $member_all_notes_row['Title'];
                                    $note_category = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Name FROM note_categories WHERE CategoryID = {$member_all_notes_row['Category']} AND IsActive = 1 "))['Name'];

                                    $note_price = $member_all_notes_row['SellingPrice'];
                                    $note_is_paid = $member_all_notes_row['IsPaid'];
                                    if ($note_is_paid == 0) {
                                        $note_sell_type = 'Free';
                                    } else {
                                        $note_sell_type = 'Paid';
                                    }


                                    $note_status_id = $member_all_notes_row['Status'];
                                    $note_status = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Value FROM reference_data WHERE RefID = {$note_status_id} "))['Value'];

                                    $note_created_date = date("d-m-Y, h:i", strtotime($member_all_notes_row['CreatedDate']));
                                    $note_created_date_str = strtotime($note_created_date);

                                    if ($member_all_notes_row['PublishedDate'] == NULL) {
                                        $note_published_date = '-';
                                        $note_published_date_str = '-';
                                    } else {
                                        $note_published_date = date("d-m-Y, h:i", strtotime($member_all_notes_row['PublishedDate']));
                                        $note_published_date_str = strtotime($note_published_date);
                                    }

                                    // getting attachment
                                    $note_attachment = "SELECT * FROM seller_notes_attachements WHERE NoteID = {$note_id} ";
                                    $note_attachment_query = mysqli_query($connection, $note_attachment);
                                    confirmQuery($note_attachment_query);
                                    $note_attachments_count = mysqli_num_rows($note_attachment_query);
                                    if ($note_attachments_count == 1) {
                                        $note_attachment_filepath = mysqli_fetch_assoc($note_attachment_query)['FilePath'];
                                    } else {
                                        $note_attachment_row = mysqli_fetch_assoc($note_attachment_query);
                                        foreach ($note_attachment_query as $note_attachment_row) {
                                            $attachment_file_link = $note_attachment_row['FilePath'];
                                            echo "<a class='{$note_id}' href='{$attachment_file_link}' download></a>";
                                        }
                                    }
                                    // end  

                                    // downloads
                                    $note_downloads = "SELECT * FROM downloads WHERE NoteID = {$note_id} AND IsSellerHasAllowedDownload = 1 ";
                                    $note_downloads_query = mysqli_query($connection, $note_downloads);
                                    confirmQuery($note_downloads_query);
                                    $note_downloads_count = mysqli_num_rows($note_downloads_query);
                                    // end   

                                    // note earnings
                                    if ($note_is_paid == 0) {
                                        $note_total_earnings = 0;
                                    } else {
                                        $note_total_earnings = $note_downloads_count * $note_price;
                                    }
                                ?>

                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="purple-td"><a href='note-details.php?note_id=<?php echo $note_id; ?>'><?php echo $note_title; ?></a></td>
                                        <td><?php echo $note_category; ?></td>
                                        <td><?php echo $note_status; ?></td>
                                        <td class="purple-td text-center">
                                            <a href='downloaded-notes.php?note_id=<?php echo $note_id; ?>'><?php echo $note_downloads_count; ?>
                                            </a>
                                        </td>
                                        <td class="text-center">$<?php echo $note_total_earnings; ?></td>
                                        <td data-sort="<?php echo $note_created_date_str; ?>"><?php echo $note_created_date; ?></td>
                                        <td data-sort="<?php echo $note_published_date_str; ?>"><?php echo $note_published_date; ?></td>
                                        <td class="text-center visible-overflow-for-dropdown">
                                            <div class="dropdown dropdown-dots-table">
                                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <?php if ($note_attachments_count == 1) {
                                                        echo "<a class='dropdown-item' href='{$note_attachment_filepath}' download>Download Note</a>";
                                                    } else {
                                                        echo "<a id='{$note_id}' class='download-all-notes-link dropdown-item' href='#'>Download Note</a>";
                                                    } ?>
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

    <!-- Java-scripts -->
</body>

</html>