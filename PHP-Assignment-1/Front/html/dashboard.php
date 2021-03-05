<?php $page_name = "Dashboard"; ?>
<?php include "../includes/head.php"; ?>
<?php
if (!isset($_SESSION['UserLoggedIn'])) {
    header("Location: login.php");
    die();
}
?>

<?php
if (isset($_GET['delete'])) {
    $get_note_id = $_GET['delete'];

    $delete = "DELETE FROM seller_notes WHERE NoteID = {$get_note_id}";
    $delete_query = mysqli_query($connection, $delete);
    confirmQuery($delete_query);

    // deleting folder of note
    $dirPath = "../../Members/" . $_SESSION['UserID'] . "/" . $get_note_id;
    // rmdir($delete_note_path);

    // delete success popup
    $_SESSION['noteDeleted'] = '';

    if (isset($_GET['page'])) {
        $current_page = $_GET['page'];
        header("Location: dashboard.php?page=$current_page");
    } else {
        header("Location: dashboard.php");
    }    
}
?>

<body>
    <section id="dashboard">

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
                                <li class="active">
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
                                                <img src="../images/testimonial/customer-1.png" alt="User Photo" class="rounded-circle">
                                            </div>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="user-profile.php">My Profile</a>
                                            <a class="dropdown-item" href="my-downloads.php">My Downloads</a>
                                            <a class="dropdown-item" href="my-sold-notes.php">My Sold Notes</a>
                                            <a class="dropdown-item" href="my-rejected-notes.php">My Rejected Notes</a>
                                            <a class="dropdown-item" href="change-password.php">Change Password</a>
                                            <a class="dropdown-item logout-btn-dropdown" href="../includes/logout.php">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple" href="../includes/logout.php" title="Download" role="button">Logout</a>
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
                                <li class="active">
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
                                                    <img src="../images/testimonial/customer-1.png" alt="User Photo" class="rounded-circle">
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="user-profile.php">My Profile</a>
                                                    <a class="dropdown-item" href="my-downloads.php">My Downloads</a>
                                                    <a class="dropdown-item" href="my-sold-notes.php">My Sold Notes</a>
                                                    <a class="dropdown-item" href="my-rejected-notes.php">My Rejected Notes</a>
                                                    <a class="dropdown-item" href="change-password.php">Change Password</a>
                                                    <a class="dropdown-item logout-btn-dropdown" href="../includes/logout.php">Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple" href="../includes/logout.php" title="Download" role="button">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- Header ends -->

        <!-- Dashboard box -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-left">
                        <p class="dashboard-heading">Dashboard</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                        <button class="btn btn-general btn-purple add-note-btn" onclick="window.location.href='add-note.php'">Add Note</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row no-gutters">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row no-gutters my-earning-wrapper-left">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="my-earning-heading dashboard-single-box">
                                    <img src="../images/Dashboard/earning-icon.svg" alt="">
                                    <p class="box-heading">My Earning</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="my-sold-notes.php" style="text-decoration: none;">
                                    <div class="number-of-notes-sold dashboard-single-box">
                                        <?php
                                        $UserID = $_SESSION['UserID'];
                                        $sold_notes = "SELECT * FROM downloads WHERE IsSellerHasAllowedDownload = 1 AND Seller = $UserID ";
                                        $sold_notes_query = mysqli_query($connection, $sold_notes);
                                        confirmQuery($sold_notes_query);
                                        $sold_count = mysqli_num_rows($sold_notes_query);
                                        ?>
                                        <p class="dashboard-single-detail"><?php echo $sold_count; ?></p>
                                        <p class="dashboard-single-detail-inst">Number of Notes Sold</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="money-earned dashboard-single-box">
                                    <?php
                                    $earning = "SELECT SUM(PurchasedPrice) as PurchasedPrice FROM downloads WHERE IsSellerHasAllowedDownload = 1 AND Seller = $UserID ";
                                    $earning_query = mysqli_query($connection, $earning);
                                    confirmQuery($earning_query);
                                    $total_earning_row = mysqli_fetch_assoc($earning_query);
                                    $total_earning = empty($total_earning_row['PurchasedPrice']) ? 0 : $total_earning_row['PurchasedPrice'];
                                    ?>
                                    <p class="dashboard-single-detail"><?php echo "$" . $total_earning; ?></p>
                                    <p class="dashboard-single-detail-inst">Money Earned</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-earning-wrapper-right">

                        <div class="row no-gutters">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="my-downloads.php" style="text-decoration: none;">
                                    <div class="my-downloads dashboard-single-box">
                                        <?php
                                        $my_downloads = "SELECT * FROM downloads WHERE IsSellerHasAllowedDownload = 1 AND Downloader = $UserID ";
                                        $my_downloads_query = mysqli_query($connection, $my_downloads);
                                        confirmQuery($my_downloads_query);
                                        $my_downloads_count = mysqli_num_rows($my_downloads_query);
                                        ?>
                                        <p class="dashboard-single-detail"><?php echo $my_downloads_count; ?></p>
                                        <p class="dashboard-single-detail-inst">My Downloads</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="my-rejected-notes.php" style="text-decoration: none;">
                                    <div class="my-rejected-notes dashboard-single-box">
                                        <?php
                                        $rejected_notes = "SELECT * FROM seller_notes WHERE Status = 10 AND SellerID = $UserID";
                                        $rejected_notes_query = mysqli_query($connection, $rejected_notes);
                                        confirmQuery($rejected_notes_query);
                                        $rejected_notes_count = mysqli_num_rows($rejected_notes_query);
                                        ?>
                                        <p class="dashboard-single-detail"><?php echo $rejected_notes_count; ?></p>
                                        <p class="dashboard-single-detail-inst">My Rejected Notes</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="buyers-requests.php" style="text-decoration: none;">
                                    <div class="buyer-request dashboard-single-box">
                                        <?php
                                        $buyer_requests = "SELECT * FROM downloads WHERE IsSellerHasAllowedDownload = 0 AND Seller = $UserID ";
                                        $buyer_requests_query = mysqli_query($connection, $buyer_requests);
                                        confirmQuery($buyer_requests_query);
                                        $buyer_requests_count = mysqli_num_rows($buyer_requests_query);
                                        ?>
                                        <p class="dashboard-single-detail"><?php echo $buyer_requests_count; ?></p>
                                        <p class="dashboard-single-detail-inst">Buyer Requests</p>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- Dashboard box -->

        <!-- progress note table -->
        <div class="content-box-lg">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">In Progress Notes</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">                        
                        <form action="" method="POST" id="ipn-form">
                            <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                                <div class="form-group has-search-bar">
                                    <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                    <input name="ipn_keyword" type="text" class="form-control input-box-style search-notes-bar" id="" placeholder="Search notes here...">
                                </div>
                                <button name="ipn_search" type="submit" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="in-progress-notes-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('sn.CreatedDate'); ?>">Added date</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('sn.Title'); ?>">title</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('nc.Name'); ?>">category</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('rd.Value'); ?>">status</a></th>
                                    <th scope="col" class="text-center">action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $limit = 5;
                                if (isset($_GET['page'])) {
                                    $page  = $_GET['page'];
                                } else {
                                    $page = 1;
                                }
                                $start_from = ($page - 1) * $limit;

                                // searching
                                if (isset($_POST['ipn_search'])) {
                                    $ipn_keyword = $_POST['ipn_keyword'];
                                    $in_progressed_total_notes = "SELECT sn.NoteID, DATE_FORMAT(sn.CreatedDate, '%d-%m-%Y') as CreatedDate, sn.Title, nc.Name, rd.Value FROM seller_notes sn JOIN reference_data rd ON sn.Status = rd.RefID JOIN note_categories nc ON nc.CategoryID = sn.Category WHERE sn.SellerID = $UserID AND (rd.Value = 'Draft' OR rd.Value = 'Submitted For Review' OR rd.Value = 'In Review') AND (rd.Value LIKE '%$ipn_keyword%' OR sn.Title LIKE '%$ipn_keyword%' OR nc.Name LIKE '%$ipn_keyword%') ORDER BY sn.CreatedDate DESC ";
                                } else {
                                    $in_progressed_total_notes = "SELECT sn.NoteID, DATE_FORMAT(sn.CreatedDate, '%d-%m-%Y') as CreatedDate, sn.Title, nc.Name, rd.Value FROM seller_notes sn JOIN reference_data rd ON sn.Status = rd.RefID JOIN note_categories nc ON nc.CategoryID = sn.Category WHERE sn.SellerID = $UserID AND (rd.Value = 'Draft' OR rd.Value = 'Submitted For Review' OR rd.Value = 'In Review') ORDER BY sn.CreatedDate DESC ";
                                }

                                $in_progressed_total_notes_query = mysqli_query($connection, $in_progressed_total_notes);
                                confirmQuery($in_progressed_total_notes_query);
                                $in_progressed_total_notes_count = mysqli_num_rows($in_progressed_total_notes_query);
                                $total_pages = ceil($in_progressed_total_notes_count / $limit);

                                // when any columnname is clicked
                                $orderby = "ORDER BY sn.CreatedDate DESC";
                                if (isset($_GET['order_by']) && isset($_GET['sort'])) {
                                    $orderby = ' order by ' . $_GET['order_by'] . ' ' . $_GET['sort'];
                                }

                                // searching
                                if (isset($_POST['ipn_search'])) {
                                    $ipn_keyword = $_POST['ipn_keyword'];
                                    $in_progressed_notes = "SELECT sn.NoteID, DATE_FORMAT(sn.CreatedDate, '%d-%m-%Y') as CreatedDate, sn.Title, nc.Name, rd.Value FROM seller_notes sn JOIN reference_data rd ON sn.Status = rd.RefID JOIN note_categories nc ON nc.CategoryID = sn.Category WHERE sn.SellerID = $UserID AND (rd.Value = 'Draft' OR rd.Value = 'Submitted For Review' OR rd.Value = 'In Review') AND (rd.Value LIKE '%$ipn_keyword%' OR sn.Title LIKE '%$ipn_keyword%' OR nc.Name LIKE '%$ipn_keyword%') " . $orderby . " LIMIT $start_from, $limit ";
                                } else {
                                    $in_progressed_notes = "SELECT sn.NoteID, DATE_FORMAT(sn.CreatedDate, '%d-%m-%Y') as CreatedDate, sn.Title, nc.Name, rd.Value FROM seller_notes sn JOIN reference_data rd ON sn.Status = rd.RefID JOIN note_categories nc ON nc.CategoryID = sn.Category WHERE sn.SellerID = $UserID AND (rd.Value = 'Draft' OR rd.Value = 'Submitted For Review' OR rd.Value = 'In Review') " . $orderby . " LIMIT $start_from, $limit ";
                                }

                                $in_progressed_notes_query = mysqli_query($connection, $in_progressed_notes);
                                confirmQuery($in_progressed_notes_query);

                                if ($in_progressed_total_notes_count != 0) {
                                    while ($row = mysqli_fetch_assoc($in_progressed_notes_query)) {
                                        $note_id = $row['NoteID'];
                                        $addedDate = $row['CreatedDate'];
                                        $title = $row['Title'];
                                        $category = $row['Name'];
                                        $status = $row['Value'];

                                        echo "<tr>";
                                        echo "<td>$addedDate</td>";
                                        echo "<td>$title</td>";
                                        echo "<td>$category</td>";
                                        echo "<td>$status</td>";
                                        // delete link to stay on same page after deleting note from in progressed note
                                        if (isset($_GET['page'])) {
                                            $delete_link = "dashboard.php?delete=" . $note_id . "&page=" . $_GET['page'];  
                                        }else {
                                            $delete_link = "dashboard.php?delete=" . $note_id;
                                        }
                                        if ($status == 'Draft') {
                                            echo "<td class='text-center'>
                                        <a href='add-note.php?note_id={$note_id}'><img class='edit-img-in-table' src='../images/Dashboard/edit.png' alt='edit'></a>
                                        <a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \" href='$delete_link'><img class='delete-img-in-table' src='../images/Dashboard/delete.png' alt='edit'></a>
                                        </td>";
                                        } else {
                                            echo "<td class='text-center'><a href='note-detail.php?note_id={$note_id}'><img class='eye-img-in-table' src='../images/Dashboard/eye.png' alt='eye'></a></td>";
                                        }
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<td colspan='5'>No record found</td>";
                                }

                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>
        <!-- progress note table -->

        <!-- pagination -->
        <?php
        if ($total_pages != 0) { ?>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <?php // go to previous page
                        if (isset($_GET['page'])) {
                            if ($_GET['page'] != 1) {
                                $pre_link = "dashboard.php?page=" . $page - 1;
                            } else {
                                $pre_link = "dashboard.php";
                            }
                        } else {
                            $pre_link = null;
                        }
                        ?>
                        <a class="page-link" href="<?php echo $pre_link; ?>" aria-label="Previous">
                            <img src="../images/pagination/left-arrow.png" alt="">
                        </a>
                    </li> <?php
                            $active_class = 'active';
                            for ($i = 1; $i <= $total_pages; $i++) {
                                if (isset($_GET['page'])) {
                                    if ($_GET['page'] == $i) {
                                        $active_class = 'active';
                                    } else {
                                        $active_class = '';
                                    }
                                } else {
                                    if ($i == 1) {
                                        $active_class = 'active';
                                    } else {
                                        $active_class = '';
                                    }
                                }
                                echo "<li class='page-item $active_class'><a class='page-link' href='dashboard.php?page=" . $i . "'>" . $i . "</a></li>";
                            }
                            ?>
                    <li class="page-item">
                        <?php
                        if (isset($_GET['page'])) {
                            if ($_GET['page'] != $total_pages) {
                                $next_link = "dashboard.php?page=" . $page + 1;
                            } else {
                                $next_link = "dashboard.php?page=" . $total_pages;
                            }
                        } else {
                            if ($total_pages == 1) {
                                $next_link = "dashboard.php?page=" . $total_pages;
                            } else {
                                $next_link = "dashboard.php?page=2";
                            }
                        }
                        ?>
                        <a class="page-link" href="<?php echo $next_link; ?>" aria-label="Next">
                            <img style="color: white;" src="../images/pagination/right-arrow.png" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
        <?php }

        ?>
        <!-- pagination -->

        <!-- published note table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Published Notes</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">                        
                        <form action="" method="POST" id="pn-form">
                            <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                                <div class="form-group has-search-bar">
                                    <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                    <input name="pn_keyword" type="text" class="form-control input-box-style search-notes-bar" id="" placeholder="Search notes here...">
                                </div>
                                <button name="pn_search" type="submit" class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="published-notes-table general-table-responsive">
                    <div class="table-responsive-lg">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('sn.CreatedDate'); ?>">Added date</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('sn.Title'); ?>">title</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('nc.Name'); ?>">category</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('sn.IsPaid'); ?>">sell type</a></th>
                                    <th scope="col"><a class="sort-column" href="<?php echo sortorder('sn.SellingPrice'); ?>">price</a></th>
                                    <th scope="col" class="text-center">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $p_limit = 5;
                                if (isset($_GET['p_page'])) {
                                    $p_page  = $_GET['p_page'];
                                } else {
                                    $p_page = 1;
                                }
                                $p_start_from = ($p_page - 1) * $p_limit;

                                // searching
                                if (isset($_POST['pn_search'])) {
                                    $pn_keyword = $_POST['pn_keyword'];                                    
                                    $published_total_notes = "SELECT sn.NoteID, DATE_FORMAT(sn.CreatedDate, '%d-%m-%Y') as CreatedDate, sn.Title, nc.Name, sn.IsPaid, sn.SellingPrice FROM seller_notes sn JOIN reference_data rd ON sn.Status = rd.RefID JOIN note_categories nc ON nc.CategoryID = sn.Category WHERE sn.SellerID = $UserID AND rd.Value = 'Published' AND (sn.Title LIKE '%$pn_keyword%' OR nc.Name LIKE '%$pn_keyword%' OR sn.IsPaid LIKE '%$pn_keyword%' OR sn.SellingPrice LIKE '%$pn_keyword%') ORDER BY sn.CreatedDate DESC ";
                                } else {
                                    $published_total_notes = "SELECT sn.NoteID, DATE_FORMAT(sn.CreatedDate, '%d-%m-%Y') as CreatedDate, sn.Title, nc.Name, sn.IsPaid, sn.SellingPrice FROM seller_notes sn JOIN reference_data rd ON sn.Status = rd.RefID JOIN note_categories nc ON nc.CategoryID = sn.Category WHERE sn.SellerID = $UserID AND rd.Value = 'Published' ORDER BY sn.CreatedDate DESC ";
                                }

                                $published_total_notes_query = mysqli_query($connection, $published_total_notes);
                                confirmQuery($published_total_notes_query);
                                $published_total_notes_count = mysqli_num_rows($published_total_notes_query);
                                $p_total_pages = ceil($published_total_notes_count / $p_limit);

                                // when any columnname is clicked
                                $porderby = "ORDER BY sn.CreatedDate DESC";
                                if (isset($_GET['order_by']) && isset($_GET['sort'])) {
                                    $porderby = ' order by ' . $_GET['order_by'] . ' ' . $_GET['sort'];
                                }

                                // searching
                                if (isset($_POST['pn_search'])) {
                                    $pn_keyword = $_POST['pn_keyword'];                                    
                                    $published_notes = "SELECT sn.NoteID, DATE_FORMAT(sn.CreatedDate, '%d-%m-%Y') as CreatedDate, sn.Title, nc.Name, sn.IsPaid, sn.SellingPrice FROM seller_notes sn JOIN reference_data rd ON sn.Status = rd.RefID JOIN note_categories nc ON nc.CategoryID = sn.Category WHERE sn.SellerID = $UserID AND rd.Value = 'Published' AND (sn.Title LIKE '%$pn_keyword%' OR nc.Name LIKE '%$pn_keyword%' OR sn.IsPaid LIKE '%$pn_keyword%' OR sn.SellingPrice LIKE '%$pn_keyword%') " . $porderby . " LIMIT $p_start_from, $p_limit ";
                                } else {
                                    $published_notes = "SELECT sn.NoteID, DATE_FORMAT(sn.CreatedDate, '%d-%m-%Y') as CreatedDate, sn.Title, nc.Name, sn.IsPaid, sn.SellingPrice FROM seller_notes sn JOIN reference_data rd ON sn.Status = rd.RefID JOIN note_categories nc ON nc.CategoryID = sn.Category WHERE sn.SellerID = $UserID AND rd.Value = 'Published' " . $porderby . " LIMIT $p_start_from, $p_limit ";
                                }

                                $published_notes_query = mysqli_query($connection, $published_notes);
                                confirmQuery($published_notes_query);

                                if ($published_total_notes_count != 0) {
                                    while ($row = mysqli_fetch_assoc($published_notes_query)) {
                                        $p_note_id = $row['NoteID'];
                                        $addedDate = $row['CreatedDate'];
                                        $title = $row['Title'];
                                        $category = $row['Name'];
                                        $sell_type = $row['IsPaid'];
                                        $selling_price = $row['SellingPrice'];

                                        echo "<tr>";
                                        echo "<td>$addedDate</td>";
                                        echo "<td>$title</td>";
                                        echo "<td>$category</td>";
                                        if ($sell_type == 0) {
                                            $st = "Free";
                                        } else {
                                            $st = "Paid";
                                        }
                                        echo "<td>" . $st . "</td>";
                                        if ($selling_price == null) {
                                            $selling_price = 0;
                                        }
                                        echo "<td>" . "$" . $selling_price . "</td>";
                                        echo "<td class='text-center'><a href='note-detail.php?note_id={$p_note_id}'><img class='eye-img-in-table' src='../images/Dashboard/eye.png' alt='eye'></a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<td colspan='6'>No record found</td>";
                                }

                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>
        <!-- published note table -->

        <!-- pagination -->
        <?php
        if ($p_total_pages != 0) { ?>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <?php // go to previous page
                        if (isset($_GET['p_page'])) {
                            if ($_GET['p_page'] != 1) {
                                $p_pre_link = "dashboard.php?p_page=" . $p_page - 1;
                            } else {
                                $p_pre_link = "dashboard.php";
                            }
                        } else {
                            $p_pre_link = null;
                        }
                        ?>
                        <a class="page-link" href="<?php echo $p_pre_link; ?>" aria-label="Previous">
                            <img src="../images/pagination/left-arrow.png" alt="">
                        </a>
                    </li>
                    <?php
                    $p_active_class = 'active';
                    for ($i = 1; $i <= $p_total_pages; $i++) {
                        if (isset($_GET['p_page'])) {
                            if ($_GET['p_page'] == $i) {
                                $p_active_class = 'active';
                            } else {
                                $p_active_class = '';
                            }
                        } else {
                            if ($i == 1) {
                                $p_active_class = 'active';
                            } else {
                                $p_active_class = '';
                            }
                        }
                        echo "<li class='page-item $p_active_class'><a class='page-link' href='dashboard.php?p_page=" . $i . "'>" . $i . "</a></li>";
                    }
                    ?>
                    <li class="page-item">
                        <?php
                        if (isset($_GET['p_page'])) {
                            if ($_GET['p_page'] != $p_total_pages) {
                                $p_next_link = "dashboard.php?p_page=" . $p_page + 1;
                            } else {
                                $p_next_link = "dashboard.php?p_page=" . $p_total_pages;
                            }
                        } else {
                            if ($p_total_pages == 1) {
                                $p_next_link = "dashboard.php?p_page=" . $p_total_pages;
                            } else {
                                $p_next_link = "dashboard.php?p_page=2";
                            }
                        }
                        ?>
                        <a class="page-link" href="<?php echo $p_next_link; ?>" aria-label="Next">
                            <img style="color: white;" src="../images/pagination/right-arrow.png" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
        <?php }

        ?>
        <!-- pagination -->

        <!-- Footer  -->
        <?php include "../includes/footer.php"; ?>
        <!-- Footer Ends -->

    </section>

    <!-- Java-scripts -->

    <!-- JQuery -->
    <script src="../js/JQuery/jquery.js"></script>

    <!-- Production version -->
    <!-- <script src="https://unpkg.com/@popperjs/core@2"></script> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <!-- note is edited alert -->
    <?php
    if (isset($_SESSION['noteEdited'])) { ?>

        <script>
            swal({
                text: 'Note Updated Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['noteEdited']);
    }
    ?>

    <!-- note is addeed alert -->
    <?php
    if (isset($_SESSION['noteAdded'])) { ?>

        <script>
            swal({
                text: 'Note Saved Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['noteAdded']);
    }
    ?>
    <!-- end -->

    <!-- note is deleted alert -->
    <?php
    if (isset($_SESSION['noteDeleted'])) { ?>

        <script>
            swal({
                text: 'Note Deleted Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        if (!isset($_GET['delete'])) {
            unset($_SESSION['noteDeleted']);
        }
    }
    ?>

    <!-- note is deleted alert -->
    <?php
    if (isset($_SESSION['notePublished'])) { ?>

        <script>
            swal({
                text: 'Note Published Successfully',
                icon: 'success',
                timer: 2500,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['notePublished']);
    }
    ?>

    <!-- JQuery-Validation -->
    <script src="../js/JQuery-Validation/jquery.validate.js"></script>
    <script src="../js/form-validation/form-validation.js"></script>

    <!-- Java-scripts -->
</body>

</html>