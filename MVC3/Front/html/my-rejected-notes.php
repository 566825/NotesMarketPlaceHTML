<?php $page_name = "My rejected notes"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: login.php");
    die();
}

if (isset($_GET['c_id'])) {
    $clone_id = $_GET['c_id'];
    $clone_note = "INSERT INTO seller_notes (SellerID, Status, Title, Category, DisplayPicture, NoteType, NumberOfPages, Description, UniversityName, Country, Course, CourseCode, Professor, IsPaid, SellingPrice, NotesPreview, CreatedBy) ";
    $clone_note .= "SELECT SellerID, Status, Title, Category, DisplayPicture, NoteType, NumberOfPages, Description, UniversityName, Country, Course, CourseCode, Professor, IsPaid, SellingPrice, NotesPreview, CreatedBy ";
    $clone_note .= "FROM seller_notes WHERE NoteID = {$clone_id} ";
    $clone_note_query = mysqli_query($connection, $clone_note);
    confirmQuery($clone_note_query);

    // editing cloned note
    $last_inserted_note_id = mysqli_insert_id($connection);
    $get_clone_note = "SELECT * FROM seller_notes WHERE NoteID = {$last_inserted_note_id}";
    $get_clone_note_query = mysqli_query($connection, $get_clone_note);
    confirmQuery($get_clone_note_query);
    $get_clone_note_row = mysqli_fetch_assoc($get_clone_note_query);

    if ($get_clone_note_row['DisplayPicture'] == null) {
        $note_dp_path = 'NULL';
    } else {
        $note_dp_path = "'" . str_replace($clone_id . '/DP', $last_inserted_note_id . '/DP', $get_clone_note_row['DisplayPicture']) . "'";
    }
    if ($get_clone_note_row['NotesPreview'] == null) {
        $note_preview_path = 'NULL';
    } else {
        $note_preview_path = "'" . str_replace($clone_id . '/Preview', $last_inserted_note_id . '/Preview', $get_clone_note_row['NotesPreview']) . "'";
    }   

    $edit_clone_note = "UPDATE seller_notes SET Status = 6, DisplayPicture = {$note_dp_path}, NotesPreview = {$note_preview_path}  WHERE NoteID = {$last_inserted_note_id} ";
    $edit_clone_note_query = mysqli_query($connection, $edit_clone_note);
    confirmQuery($edit_clone_note_query);

    // copying note folder
    $src = "../../Members/". $_SESSION['UserID'] . "/" . $clone_id;
    $dst = "../../Members/". $_SESSION['UserID'] . "/" . $last_inserted_note_id;
    clone_note_dir($src, $dst);
    
    // inserting attachment row
    $get_attachments = "SELECT * FROM seller_notes_attachements WHERE NoteID = {$clone_id} AND IsActive = 1 ";
    $get_attachments_query = mysqli_query($connection, $get_attachments);
    confirmQuery($get_attachments_query);
    $get_attachments_count = mysqli_num_rows($get_attachments_query);
    $get_attachments_row = mysqli_fetch_assoc($get_attachments_query);

    if ($get_attachments_count == 1) {
        $file_name = $get_attachments_row['FileName'];
        $file_path = str_replace($clone_id . '/Attachments', $last_inserted_note_id . '/Attachments', $get_attachments_row['FilePath']);
        $created_by = $get_attachments_row['CreatedBy'];
        $insert_attachment = "INSERT INTO seller_notes_attachements (NoteID, FileName, FilePath, CreatedBy) ";
        $insert_attachment .= "VALUES ({$last_inserted_note_id}, '{$file_name}', '{$file_path}', {$created_by}) ";
        $insert_attachment_query = mysqli_query($connection, $insert_attachment);
        confirmQuery($insert_attachment_query);
    } else {
        foreach ($get_attachments_query as $get_attachments_row) {
            $file_name = $get_attachments_row['FileName'];
            $file_path = str_replace($clone_id . '/Attachments', $last_inserted_note_id . '/Attachments', $get_attachments_row['FilePath']);
            $created_by = $get_attachments_row['CreatedBy'];
            $insert_attachment = "INSERT INTO seller_notes_attachements (NoteID, FileName, FilePath, CreatedBy) ";
            $insert_attachment .= "VALUES ({$last_inserted_note_id}, '{$file_name}', '{$file_path}', {$created_by}) ";
            $insert_attachment_query = mysqli_query($connection, $insert_attachment);
            confirmQuery($insert_attachment_query);
        }
    }
    
    $_SESSION['noteCloned'] = '';
    header("Location: my-rejected-notes.php");
    exit;
}
?>



<body>

    <section id="my-rejected-notes">

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
                                <li>
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
                                            <a class="dropdown-item active" href="my-rejected-notes.php">My Rejected Notes</a>
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
                                <li>
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
                                                    <a class="dropdown-item active" href="my-rejected-notes.php">My Rejected Notes</a>
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
                        <p class="my-downloads-heading">My Rejected Notes</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="rejected-note-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search notes here...">
                            </div>

                            <button id="rejected-note-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

                <div class="my-downloads-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="rejected-notes-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" data-orderable="false">sr no.</th>
                                    <th scope="col">Note title</th>
                                    <th scope="col">category</th>
                                    <th scope="col">Remarks</th>
                                    <th scope="col">Rejected Date</th>
                                    <th data-orderable="false" scope="col">Clone</th>
                                    <th data-orderable="false" scope="col" width="80px"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $UserID = $_SESSION['UserID'];
                                // initially show all records
                                $select_rejected_notes = "SELECT sn.NoteID, sn.Title, nc.Name, sn.AdminRemarks, DATE_FORMAT(sn.ModifiedDate, '%d-%m-%Y') as ModifiedDate FROM seller_notes sn JOIN note_categories nc ON sn.Category = nc.CategoryID WHERE sn.SellerID = {$UserID} AND sn.Status = 10 AND sn.IsActive = 1 ORDER BY sn.ModifiedDate DESC ";
                                $select_rejected_notes_query = mysqli_query($connection, $select_rejected_notes);
                                confirmQuery($select_rejected_notes_query);
                                $select_rejected_notes_count = mysqli_num_rows($select_rejected_notes_query);

                                if ($select_rejected_notes_count != 0) {
                                    $i = 1; 
                                    while ($row = mysqli_fetch_assoc($select_rejected_notes_query)) {
                                        $note_id = $row['NoteID'];

                                        // getting attachment path for downloading note pdf
                                        $get_attachments = "SELECT * FROM seller_notes_attachements WHERE NoteID = {$note_id} AND IsActive = 1 ";
                                        $get_attachments_query = mysqli_query($connection, $get_attachments);
                                        confirmQuery($get_attachments_query);
                                        $get_attachments_count = mysqli_num_rows($get_attachments_query);
                                        $get_attachments_row = mysqli_fetch_assoc($get_attachments_query);
                                        if ($get_attachments_count == 1) {
                                            $attachment_file_link = $get_attachments_row['FilePath'];
                                        } else {
                                            foreach ($get_attachments_query as $get_attachments_row) {
                                                $attachment_file_link = $get_attachments_row['FilePath'];
                                                echo "<a class='{$note_id}' href='{$attachment_file_link}' download></a>";
                                            }
                                        }

                                        $note_title = $row['Title'];
                                        $note_category = $row['Name'];
                                        $admin_remarks = $row['AdminRemarks'];
                                        $rejected_date = $row['ModifiedDate']; 
                                        $rejectedDateStr = strtotime($rejected_date);
                                        ?>

                                        <tr>
                                            <td class='text-center'></td>
                                            <?php $i++; ?>
                                            <td class='purple-td'><a href='note-detail.php?note_id=<?php echo $note_id; ?>'><?php echo $note_title; ?></a></td>
                                            <td><?php echo $note_category; ?></td>
                                            <td><?php echo $admin_remarks; ?></td>
                                            <td data-sort='<?php echo $rejectedDateStr; ?>'><?php echo $rejected_date; ?></td>
                                            <?php include "../includes/modals/clone-note-modal.php"; ?>
                                            <td class='purple-td'><a class="clone-note-link" href='' rel='<?php echo $note_id; ?>' data-toggle='modal' data-target='#cloneNoteModal'>Clone</a></td>
                                            <td class='text-center visible-overflow-for-dropdown'>
                                                <div class='dropdown dropdown-dots-table'>
                                                    <a href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                        <img class='dots-in-table' src='../images/Dashboard/dots.png' alt='edit'>
                                                    </a>
                                                    <div class='dropdown-menu'>
                                                        <?php if ($get_attachments_count == 1) {
                                                            echo "<a class='dropdown-item' href='{$attachment_file_link}' download>Download Note</a>";
                                                        } else {
                                                            echo "<a id='{$note_id}' class='download-all-notes-link dropdown-item' href='#'>Download Note</a>";
                                                        } ?>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php }
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

    <!-- clone modal script -->
    <script>
        $(document).ready(function() {
            $(document).on('click', '.clone-note-link', function() {
                var clone_note_id = $(this).attr("rel");
                console.log(clone_note_id);
                var clone_note_link = "my-rejected-notes.php?c_id=" + clone_note_id + " ";
                $(".modal-clone-note-link").attr("href", clone_note_link);
            });
        });
    </script>

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <!-- note is cloned alert -->
    <?php
    if (isset($_SESSION['noteCloned'])) { ?>
        <script>
            swal({
                text: 'Note Cloned Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>
    <?php
        unset($_SESSION['noteCloned']);
    }
    ?>

    <!-- Java-scripts -->
</body>

</html>