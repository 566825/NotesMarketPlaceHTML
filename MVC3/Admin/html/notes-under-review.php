<?php $page_name = "Notes Under Review"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}
$UserID = $_SESSION['UserID'];

// note inreview process
if (isset($_GET['ir_id'])) {
    $ir_id = $_GET['ir_id'];
    $note_inreview = "UPDATE seller_notes SET Status = 8, ActionedBy = {$UserID}, ModifiedBy = {$UserID} WHERE NoteID = {$ir_id} ";
    $note_inreview_query = mysqli_query($connection, $note_inreview);
    confirmQuery($note_inreview_query);

    $_SESSION['noteInReview'] = '';
    header("Location: notes-under-review.php");
    die;
}

// note approve process
if (isset($_GET['a_id'])) {
    $a_id = $_GET['a_id'];
    $note_inreview = "UPDATE seller_notes SET Status = 9, PublishedDate = now(), ActionedBy = {$UserID}, ModifiedBy = {$UserID} WHERE NoteID = {$a_id} ";
    $note_inreview_query = mysqli_query($connection, $note_inreview);
    confirmQuery($note_inreview_query);

    $_SESSION['noteApproved'] = '';
    header("Location: notes-under-review.php");
    die;
}
?>

<body>
    <section id="notes-under-review" class="admin-manage-page">

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
                                            <a class="dropdown-item active" href="notes-under-review.php">Notes Under Review</a>
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
                                            <a class="dropdown-item active" href="notes-under-review.php">Notes Under Review</a>
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

        <?php include "../includes/modals/in-review-note-modal.php"; ?>
        <?php include "../includes/modals/reject-note-modal.php"; ?>
        <?php include "../includes/modals/approve-note-modal.php"; ?>

        <!-- manage-administrator table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Notes Under Review</p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-12 text-left">
                        <div class="form-group">
                            <label for="" class="info-label">Seller</label>
                            <select id="notes-under-review-search-by-seller" class="form-control input-box-style">
                                <option value="" selected>Select seller</option>

                                <?php
                                $sellers = "SELECT DISTINCT SellerID FROM seller_notes WHERE IsActive = 1 AND (Status = 7 OR Status = 8) ";
                                $sellers_query = mysqli_query($connection, $sellers);
                                confirmQuery($sellers_query);

                                if (isset($_GET['member_id'])) {
                                    $get_member_id = $_GET['member_id'];
                                    while ($sellers_row = mysqli_fetch_assoc($sellers_query)) {
                                        $seller_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$sellers_row['SellerID']} "));
                                        $SellerID = $seller_row['UserID'];
                                        $seller_name = $seller_row['FirstName'] . " " . $seller_row['LastName'];

                                        if ($SellerID == $get_member_id) {
                                            echo "<option value='{$seller_name}' selected>{$seller_name}</option>";
                                        } else {
                                            echo "<option value='{$seller_name}'>{$seller_name}</option>";
                                        }                             
                                    }
                                } else {
                                    while ($sellers_row = mysqli_fetch_assoc($sellers_query)) {
                                        $seller_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$sellers_row['SellerID']} "));
                                        $seller_name = $seller_row['FirstName'] . " " . $seller_row['LastName'];
                                        echo "<option value='{$seller_name}'>{$seller_name}</option>";
                                    }
                                }                                
                                ?>
                            </select>
                            <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/Dashboard/down-arrow.png" alt="eye"></div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9 col-12">

                        <div class="row no-gutters general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="notes-under-review-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search">
                            </div>

                            <button id="notes-under-review-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

                <div class="notes-under-review-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="notes-under-review-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" data-orderable="false">Sr no.</th>
                                    <th scope="col">Note title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Seller</th>
                                    <th scope="col" data-orderable="false"></th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col">status</th>
                                    <th scope="col" class="text-center" data-orderable="false">action</th>
                                    <th scope="col" data-orderable="false"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $notes_under_review = "SELECT * FROM seller_notes WHERE IsActive = 1 AND (Status = 7 OR Status = 8) ";                                

                                $notes_under_review_query = mysqli_query($connection, $notes_under_review);
                                confirmQuery($notes_under_review_query);

                                while ($row = mysqli_fetch_assoc($notes_under_review_query)) {
                                    $note_id = $row['NoteID'];
                                    $note_title = $row['Title'];
                                    $note_category = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Name FROM note_categories WHERE CategoryID = {$row['Category']} AND IsActive = 1 "))['Name'];
                                    $note_is_paid = $row['IsPaid'];
                                    if ($note_is_paid == 0) {
                                        $note_sell_type = 'Free';
                                    } else {
                                        $note_sell_type = 'Paid';
                                    }
                                    $note_price = $row['SellingPrice'];
                                    $note_publisher_id = $row['SellerID'];
                                    $note_publisher_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$note_publisher_id} AND IsActive = 1 "));
                                    $note_publisher_fullname = $note_publisher_row['FirstName'] . " " . $note_publisher_row['LastName'];
                                    $note_created_date = date("d-m-Y, h:i", strtotime($row['CreatedDate']));
                                    $note_created_date_str = strtotime($note_created_date);
                                    $note_status_id = $row['Status'];
                                    if ($note_status_id == 7) {
                                        $note_status = 'Submitted For Review';
                                    } else {
                                        $note_status = 'InReview';
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
                                ?>

                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="purple-td"><a href='note-details.php?note_id=<?php echo $note_id; ?>'><?php echo $note_title; ?></a></td>
                                        <td><?php echo $note_category; ?></td>
                                        <td><?php echo $note_publisher_fullname; ?></td>
                                        <td class="text-center">
                                            <a href="member-details.php?m_id=<?php echo $note_publisher_id; ?>"><img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit"></a>
                                        </td>
                                        <td data-sort="<?php echo $note_created_date_str; ?>"><?php echo $note_created_date; ?></td>
                                        <td><?php echo $note_status; ?></td>
                                        <td>
                                            <a href="" class="btn action-btn-in-table approve-btn" data-note-id="<?php echo $note_id; ?>" data-toggle="modal" data-target="#approveNoteModal">Approve</a>
                                            <a href="" class="btn action-btn-in-table reject-btn" rel="<?php echo $note_id; ?>" data-note-name="<?php echo $note_title; ?>" data-toggle="modal" data-target="#rejectNoteModal">Reject</a>
                                            <a href="" class="btn action-btn-in-table inreview-btn" data-note-id="<?php echo $note_id; ?>" data-toggle="modal" data-target="#inReviewNoteModal">InReview</a>
                                        </td>
                                        <td class="text-center visible-overflow-for-dropdown">
                                            <div class="dropdown dropdown-dots-table">
                                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="note-details.php?note_id=<?php echo $note_id; ?>">View More Details</a>
                                                    <?php if ($note_attachments_count == 1) {
                                                        echo "<a class='dropdown-item' href='{$note_attachment_filepath}' download>Download Note</a>";
                                                    } else {
                                                        echo "<a id='{$note_id}' class='download-all-notes-link dropdown-item' href='#'>Download Note</a>";
                                                    } ?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>

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

    <!-- JQuery-Validation -->
    <script src="../js/JQuery-Validation/jquery.validate.js"></script>
    <script src="../js/form-validation/form-validation.js"></script>

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <script>
        $(document).ready(function() {
            // inreview note
            $(document).on('click', 'td .inreview-btn', function() {
                var n_id = $(this).data('note-id');
                var note_inreview_link = "notes-under-review.php?ir_id=" + n_id + " ";
                $("#in-review-note-link-href").attr("href", note_inreview_link);
            });

            // approve note
            $(document).on('click', 'td .approve-btn', function() {
                var n_id = $(this).data('note-id');
                var approve_note_link = "notes-under-review.php?a_id=" + n_id + " ";
                $("#approve-note-link-href").attr("href", approve_note_link);
            });

            // reject note
            $(document).on('click', 'td .reject-btn', function() {
                var rejecting_note_name = $(this).data('note-name');
                var rejecting_note_id = $(this).attr("rel");
                $("#reject-note-btn").attr('value', rejecting_note_id);
                $(".note-name-reject-popup").html(rejecting_note_name);
            });

            <?php
            if (isset($_SESSION['noteInReview'])) { ?>

                swal({
                    text: 'Note In Review',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['noteInReview']);
            }
            ?>

            <?php
            if (isset($_SESSION['noteApproved'])) { ?>

                swal({
                    text: 'Note Approved.',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['noteApproved']);
            }
            ?>

            <?php
            if (isset($_SESSION['noteRejected'])) { ?>

                swal({
                    text: 'Note Rejected',
                    icon: 'success',
                    timer: 2500,
                    buttons: false,
                });

            <?php
                unset($_SESSION['noteRejected']);
            }
            ?>

        });
    </script>

    <!-- Java-scripts -->
</body>

</html>