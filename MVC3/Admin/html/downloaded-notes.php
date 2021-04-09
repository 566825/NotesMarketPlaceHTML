<?php $page_name = "Downloaded Notes"; ?>
<?php include "../includes/head.php"; ?>
<?php include "../includes/modals/logout-modal.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: ../../Front/html/login.php");
    die();
}
?>

<body>
    <section id="downloaded-notes" class="admin-manage-page">

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
                                            <a class="dropdown-item active" href="downloaded-notes.php">Downloaded Notes</a>
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
                                            <a class="dropdown-item active" href="downloaded-notes.php">Downloaded Notes</a>
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

        <!-- manage-administrator table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Downloaded Notes</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="form-group">
                                    <label class="info-label">Note</label>
                                    <select id="downloaded-notes-search-by-note-title" class="form-control input-box-style">
                                        <option value="" selected>Select note</option>

                                        <?php
                                        // $note_titles = mysqli_query($connection, "SELECT DISTINCT NoteID, NoteTitle FROM downloads WHERE IsSellerHasAllowedDownload = 1 ");
                                        $note_titles = mysqli_query($connection, "SELECT NoteID, Title FROM seller_notes WHERE IsActive = 1 ");
                                        confirmQuery($note_titles);                                        

                                        if (isset($_GET['note_id'])) {
                                            $get_note_id = $_GET['note_id'];
                                            while ($note_titles_row = mysqli_fetch_assoc($note_titles)) {
                                                $NoteID = $note_titles_row['NoteID'];
                                                $NoteTitle = $note_titles_row['Title'];
                                                if ($NoteID == $get_note_id) {
                                                    echo "<option value='{$NoteTitle}' selected>{$NoteTitle}</option>";
                                                } else {
                                                    echo "<option value='{$NoteTitle}'>{$NoteTitle}</option>";
                                                }                                            
                                            }
                                        } else {
                                            while ($note_titles_row = mysqli_fetch_assoc($note_titles)) {
                                                $NoteTitle = $note_titles_row['Title'];
                                                echo "<option value='{$NoteTitle}'>{$NoteTitle}</option>";
                                            }
                                        }                                        
                                        ?>

                                    </select>
                                    <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/Dashboard/down-arrow.png" alt="eye"></div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="form-group">
                                    <label class="info-label">Seller</label>
                                    <select id="downloaded-notes-search-by-seller" class="form-control input-box-style">
                                        <option value="" selected>Select seller</option>

                                        <?php
                                        $sellers = "SELECT DISTINCT Seller FROM downloads WHERE IsSellerHasAllowedDownload = 1 ";
                                        $sellers_query = mysqli_query($connection, $sellers);
                                        confirmQuery($sellers_query);

                                        while ($sellers_row = mysqli_fetch_assoc($sellers_query)) {
                                            $seller_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$sellers_row['Seller']} "));
                                            $seller_name = $seller_row['FirstName'] . " " . $seller_row['LastName'];
                                            echo "<option value='{$seller_name}'>{$seller_name}</option>";
                                        }
                                        ?>

                                    </select>
                                    <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/Dashboard/down-arrow.png" alt="eye"></div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="form-group">
                                    <label class="info-label">Buyer</label>
                                    <select id="downloaded-notes-search-by-buyer" class="form-control input-box-style">
                                        <option value="" selected>Select buyer</option>

                                        <?php
                                        $buyers = "SELECT DISTINCT Downloader FROM downloads WHERE IsSellerHasAllowedDownload = 1 ";
                                        $buyers_query = mysqli_query($connection, $buyers);
                                        confirmQuery($buyers_query);

                                        if (isset($_GET['member_id'])) {
                                            $get_member_id = $_GET['member_id'];
                                            while ($buyers_row = mysqli_fetch_assoc($buyers_query)) {
                                                $buyer_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$buyers_row['Downloader']} "));
                                                $BuyerID = $buyer_row['UserID'];
                                                $buyer_name = $buyer_row['FirstName'] . " " . $buyer_row['LastName'];
        
                                                if ($BuyerID == $get_member_id) {
                                                    echo "<option value='{$buyer_name}' selected>{$buyer_name}</option>";
                                                } else {
                                                    echo "<option value='{$buyer_name}'>{$buyer_name}</option>";
                                                }                             
                                            }
                                        } else {
                                            while ($buyers_row = mysqli_fetch_assoc($buyers_query)) {
                                                $buyer_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$buyers_row['Downloader']} "));
                                                $buyer_name = $buyer_row['FirstName'] . " " . $buyer_row['LastName'];
                                                echo "<option value='{$buyer_name}'>{$buyer_name}</option>";
                                            }
                                        }                                        
                                        ?>

                                    </select>
                                    <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/Dashboard/down-arrow.png" alt="eye"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="row no-gutters general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                <input id="downloaded-notes-search-bar" type="text" class="form-control input-box-style search-notes-bar" placeholder="Search">
                            </div>

                            <button id="downloaded-notes-search-btn" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

                <div class="downloaded-notes-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered" id="downloaded-notes-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" data-orderable="false">sr no.</th>
                                    <th scope="col">Note title</th>
                                    <th scope="col">category</th>
                                    <th scope="col">Buyer</th>
                                    <th scope="col" class="text-center" data-orderable="false"></th>
                                    <th scope="col">Seller</th>
                                    <th scope="col" data-orderable="false"></th>
                                    <th scope="col">Sell Type</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Downloaded<br>Date/Time</th>
                                    <th scope="col" class="text-center" data-orderable="false"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $downloaded_notes = "SELECT * FROM downloads WHERE IsSellerHasAllowedDownload = 1";
                                $downloaded_notes_query = mysqli_query($connection, $downloaded_notes);
                                confirmQuery($downloaded_notes_query);

                                while ($downloaded_notes_row = mysqli_fetch_assoc($downloaded_notes_query)) {
                                    $note_id = $downloaded_notes_row['NoteID'];
                                    $note_title = $downloaded_notes_row['NoteTitle'];
                                    $note_category = $downloaded_notes_row['NoteCategory'];
                                    $note_is_paid = $downloaded_notes_row['IsPaid'];
                                    if ($note_is_paid == 0) {
                                        $note_sell_type = 'Free';
                                    } else {
                                        $note_sell_type = 'Paid';
                                    }
                                    $note_price = $downloaded_notes_row['PurchasedPrice'];

                                    $note_seller_id = $downloaded_notes_row['Seller'];
                                    $note_seller_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$note_seller_id} AND IsActive = 1 "));
                                    $note_seller_fullname = $note_seller_row['FirstName'] . " " . $note_seller_row['LastName'];

                                    $note_buyer_id = $downloaded_notes_row['Downloader'];
                                    $note_buyer_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$note_buyer_id} AND IsActive = 1 "));
                                    $note_buyer_fullname = $note_buyer_row['FirstName'] . " " . $note_buyer_row['LastName'];

                                    $note_downloaded_date = date("d-m-Y, h:i", strtotime($downloaded_notes_row['AttachmentDownloadedDate']));
                                    $note_downloaded_date_str = strtotime($note_downloaded_date);

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
                                        <td><?php echo $note_buyer_fullname; ?></td>
                                        <td class="text-center">
                                            <a href="member-details.php?m_id=<?php echo $note_buyer_id; ?>"><img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit"></a>
                                        </td>
                                        <td><?php echo $note_seller_fullname; ?></td>
                                        <td class="text-center">
                                            <a href="member-details.php?m_id=<?php echo $note_seller_id; ?>"><img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit"></a>
                                        </td>
                                        <td class="text-center"><?php echo $note_sell_type; ?></td>
                                        <td>$<?php echo $note_price; ?></td>
                                        <td data-sort="<?php echo $note_downloaded_date_str; ?>"><?php echo $note_downloaded_date; ?></td>
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

    <!-- Java-scripts -->
</body>

</html>