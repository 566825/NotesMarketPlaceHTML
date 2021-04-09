<?php $page_name = "Spam Reports"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}

// delete report
if (isset($_GET['report_id'])) {
    $get_report_id = $_GET['report_id'];

    $delete_report = mysqli_query($connection, "DELETE FROM seller_notes_reported_issues WHERE ReportID = {$get_report_id} ");
    confirmQuery($delete_report);

    $_SESSION['spamDeleted'] = '';
    header("Location: spam-reports.php");
    die;
}
?>

<body>
    <section id="spam-reports" class="admin-manage-page">

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
                                            <a class="dropdown-item active" href="spam-reports.php">Spam Reports</a>
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
                                            <a class="dropdown-item active" href="spam-reports.php">Spam Reports</a>
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

        <?php include "../includes/modals/delete-spam-report-modal.php"; ?>

        <!-- manage-administrator table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-5 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Spam Reports</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 col-12">

                        <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="spam-reports-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search">
                            </div>

                            <button id="spam-reports-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

                <div class="spam-reports-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="spam-reports-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" data-orderable="false">sr no.</th>
                                    <th scope="col">Reported by</th>
                                    <th scope="col">Note title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Date Edited</th>
                                    <th scope="col">Remark</th>
                                    <th scope="col" class="text-center" data-orderable="false">Action</th>
                                    <th scope="col" data-orderable="false"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $spam_reports = mysqli_query($connection, "SELECT * FROM seller_notes_reported_issues ");
                                confirmQuery($spam_reports);

                                while ($row = mysqli_fetch_assoc($spam_reports)) {
                                    $report_id = $row['ReportID'];
                                    $reported_by_id = $row['ReportedBy'];
                                    $reported_by_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$reported_by_id} AND IsActive = 1 "));
                                    $reported_by = $reported_by_row['FirstName'] . " " . $reported_by_row['LastName'];
                                    $note_id = $row['NoteID'];
                                    $note_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM seller_notes WHERE IsActive = 1 AND NoteID = {$note_id} "));
                                    $note_title = $note_row['Title'];
                                    $note_category = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Name FROM note_categories WHERE CategoryID = {$note_row['Category']} AND IsActive = 1 "))['Name'];
                                    $report_created_date = date("d-m-Y, h:i", strtotime($row['CreatedDate']));
                                    $report_created_date_str = strtotime($report_created_date);
                                    $report_remarks = $row['Remarks'];

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
                                ?>

                                    <tr>
                                        <td class="text-center"></td>
                                        <td><?php echo $reported_by; ?></td>
                                        <td class="purple-td"><a href='note-details.php?note_id=<?php echo $note_id; ?>'><?php echo $note_title; ?></a></td>
                                        <td><?php echo $note_category; ?></td>
                                        <td data-sort="<?php echo $report_created_date_str; ?>"><?php echo $report_created_date; ?></td>
                                        <td><?php echo $report_remarks; ?></td>
                                        <td class="text-center">
                                            <a class="delete-spam-link" href="" rel="spam-reports.php?report_id=<?php echo $report_id; ?>" data-toggle="modal" data-target="#deleteSpamReportModal">
                                                <img class="delete-img-in-table" src="../images/Dashboard/delete.png" alt="edit">
                                            </a>
                                        </td>
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
                                                    <a class="dropdown-item" href="note-details.php?note_id=<?php echo $note_id; ?>">View More Details</a>
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
            $(document).on('click', 'td .delete-spam-link', function() {
                let delete_spam_link = $(this).attr('rel');
                $("#delete-spam-link-href").attr("href", delete_spam_link);
            });

            <?php
            if (isset($_SESSION['spamDeleted'])) { ?>

                swal({
                    text: 'Spam Report Deleted',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['spamDeleted']);
            }
            ?>

        });
    </script>

    <!-- Java-scripts -->
</body>

</html>