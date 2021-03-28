<?php
ob_start();
session_start();
include "../functions.php";
include "../db.php";

$limit = 9;
if (isset($_POST['page'])) {
    $page = $_POST['page'];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $limit;

// filter notes by query
if (isset($_POST['searched_keyword'])) {   

    if ($_POST['searched_keyword'] != '') {
        $searchKeyword = "%" . $_POST['searched_keyword'] . "%";
        $checkSearchKeyword = empty($searchKeyword) ? ' ' : " AND Title LIKE '{$searchKeyword}'";
        $select_total_notes = "SELECT *  FROM seller_notes WHERE Status = 9 AND IsActive = 1"  . $checkSearchKeyword;
        $select_notes = "SELECT * FROM seller_notes WHERE Status = 9 AND IsActive = 1" . $checkSearchKeyword . "LIMIT $start_from, $limit";
    } else {
        $selected_key = null;
        $select_total_notes = "SELECT *  FROM seller_notes WHERE Status = 9 AND IsActive = 1";
        $select_notes = "SELECT * FROM seller_notes WHERE Status = 9 AND IsActive = 1 LIMIT $start_from, $limit";

        // type
        if ($_POST['selected_type'] != null) {
            $selected_key = " AND NoteType = {$_POST['selected_type']}";
        }

        // category
        if ($_POST['selected_category'] != null) {
            if ($selected_key != null) {
                $selected_key .= " AND Category = {$_POST['selected_category']}";
            } else {
                $selected_key = " AND Category = {$_POST['selected_category']}";
            }
        }

        // university
        if ($_POST['selected_university'] != null) {
            if ($selected_key != null) {
                $selected_key .= " AND UniversityName = '{$_POST['selected_university']}'";
            } else {
                $selected_key = " AND UniversityName = '{$_POST['selected_university']}'";
            }
        }

        // course
        if ($_POST['selected_course'] != null) {
            if ($selected_key != null) {
                $selected_key .= " AND Course = '{$_POST['selected_course']}'";
            } else {
                $selected_key = " AND Course = '{$_POST['selected_course']}'";
            }
        }

        // country
        if ($_POST['selected_country'] != null) {
            if ($selected_key != null) {
                $selected_key .= " AND Country = {$_POST['selected_country']}";
            } else {
                $selected_key = " AND Country = {$_POST['selected_country']}";
            }
        }

        $select_total_notes = "SELECT *  FROM seller_notes WHERE Status = 9 AND IsActive = 1" . $selected_key;
        $select_notes = "SELECT * FROM seller_notes WHERE Status = 9 AND IsActive = 1" . $selected_key . " LIMIT $start_from, $limit";

        if ($_POST['selected_rating'] != null) {
            if ($_POST['selected_rating'] != 5) {
                $ratings = "> " . $_POST['selected_rating'];
            } else {
                $ratings = "= " . $_POST['selected_rating'];
            }

            $select_total_notes = "SELECT n.* , AVG(Ratings) AS Ratings FROM seller_notes n JOIN seller_notes_reviews r ON n.NoteID = r.NoteID WHERE n.Status = 9 AND n.IsActive = 1" . $selected_key . " GROUP BY n.NoteID HAVING Ratings " . $ratings;
            $select_notes = "SELECT n.* , AVG(Ratings) AS Ratings FROM seller_notes n JOIN seller_notes_reviews r ON n.NoteID = r.NoteID WHERE n.Status = 9 AND n.IsActive = 1" . $selected_key . " GROUP BY n.NoteID HAVING Ratings " . $ratings . " LIMIT $start_from, $limit";            
        }
    }
    
    // echo $selected_key;
}

// counting total notes for pagination
$select_total_notes_query = mysqli_query($connection, $select_total_notes);
confirmQuery($select_total_notes_query);
$select_total_notes_count = mysqli_num_rows($select_total_notes_query);
$total_pages = ceil($select_total_notes_count / $limit);
// end

if ($select_total_notes_count == 0) {
    $output = '<div class="general-box searched-notes-box"><div class="content-box-lg"><div class="container"><div class="row"><p class="box-heading">No notes found</p></div></div><div class="container"><div class="row">';
} else {
    $output = '<div class="general-box searched-notes-box"><div class="content-box-lg"><div class="container"><div class="row"><p class="box-heading">Total ' . $select_total_notes_count . ' Notes</p></div></div><div class="container"><div class="row">';

    $select_notes_query = mysqli_query($connection, $select_notes);
    confirmQuery($select_notes_query);

    while ($row = mysqli_fetch_assoc($select_notes_query)) {
        $NoteSellerID = $row['SellerID'];
        $NoteID = $row['NoteID'];
        $NoteDP = $row['DisplayPicture'];
        if ($NoteDP != null) {
            $NoteDP_path = $NoteDP;
        } else {
            $NoteDP_path = "../images/notes-detail/defaultDP.png";
        }
        $NoteTitle = $row['Title'];
        $NoteUniversity = $row['UniversityName'];
        $NoteCountryID = $row['Country'];
        if ($NoteCountryID != null) {
            $NoteCountry = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Name FROM countries WHERE CountryID = {$NoteCountryID}"))['Name'];
        } else {
            $NoteCountry = null;
        }
        $NoteNOP = $row['NumberOfPages'];
        $NotePublishedDate = date("D, M d Y", strtotime($row['PublishedDate']));

        $output .= '<div class="col-lg-4 col-md-6 col-sm-6 note-details-box-div">
            <div class="note-details-box">
                <img class="note-dp" src="' . $NoteDP_path . '" alt="">
                <div class="note-details">
                    <a href="note-detail.php?note_id=' . $NoteID . '" style="text-decoration: none; ">
                        <p class="note-name-title">' . $NoteTitle . '</p>
                    </a>';

        if ($NoteUniversity != null && $NoteCountry != null) {
            $output .= '<p class="note-info-with-icon"><span><img src="../images/Search/university.png" alt=""></span>' . $NoteUniversity . ", " . $NoteCountry . '</p>';
        }
        if ($NoteNOP != null) {
            $output .= '<p class="note-info-with-icon"><span><img src="../images/Search/pages.png" alt=""></span>' . $NoteNOP . ' Pages</p>';
        }

        $output .= '<p class="note-info-with-icon"><span><img src="../images/Search/date.png" alt=""></span>' . $NotePublishedDate . '</p>';


        $select_inappropriate_notes = "SELECT * FROM seller_notes_reported_issues WHERE NoteID = $NoteID ";
        $select_inappropriate_notes_query = mysqli_query($connection, $select_inappropriate_notes);
        confirmQuery($select_inappropriate_notes_query);
        $inappropriate_notes_count = mysqli_num_rows($select_inappropriate_notes_query);
        if ($inappropriate_notes_count != 0) {
            $output .= '<p class="note-info-with-icon red-text"><span><img src="../images/Search/flag.png" alt=""></span>' . $inappropriate_notes_count . ' Users marked this note as inappropriate</p>';
        }

        // getting total note reviews count
        $get_note_review_count = "SELECT * FROM seller_notes_reviews WHERE NoteID = {$NoteID} AND IsActive = 1 ";
        $get_note_review_count_query = mysqli_query($connection, $get_note_review_count);
        confirmQuery($get_note_review_count_query);
        $total_note_reviews = mysqli_num_rows($get_note_review_count_query);
        // end

        // getting note rating stars
        $get_note_rating = "SELECT AVG(Ratings) as Ratings FROM seller_notes_reviews WHERE NoteID = {$NoteID} AND IsActive = 1 ";
        $get_note_rating_query = mysqli_query($connection, $get_note_rating);
        confirmQuery($get_note_rating_query);
        $get_note_rating_row = mysqli_fetch_assoc($get_note_rating_query);
        $note_ratings = ceil($get_note_rating_row['Ratings']);        

        $output .= '<div class="notes-review-rating-div">
                        <div class="col-md-7 col-sm-8 col-5">';
                        for ($i = 0; $i < $note_ratings; $i++) {
                            $output .= "<img src='../images/notes-detail/star.png'>";
                        }
                        for ($j = 0; $j < (5 - $note_ratings); $j++) {
                            $output .= "<img src='../images/notes-detail/star-white.png'>";
                        }
                        $output .= '</div>
                        <div class="col-md-5 col-sm-4 col-7">
                            <p class="review-count">' . $total_note_reviews . ' reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }

    $output .= '</div></div></div></div>';

    // pagination        
    if ($total_pages != 0) {
        $output .= '<nav aria-label="Page navigation"><ul id="notes-pagination" class="pagination justify-content-center">';
        $prev_page = ($page == 1) ? '1' : $page - 1;
        $output .= "<li class='page-item'><a id='{$prev_page}' class='page-link' href='' aria-label='Previous'><img src='../images/pagination/left-arrow.png' alt=''></a></li>";
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
                $active_class = 'active';
            } else {
                $active_class = '';
            }
            $output .= "<li class='page-item {$active_class}'><a id='" . $i . "' class='page-link' href=''>" . $i . "</a></li>";
        }
        $next_page = ($page == $total_pages) ? $total_pages : $page + 1;
        $output .= "<li class='page-item'><a id='{$next_page}' class='page-link' href='' aria-label='Previous'><img src='../images/pagination/right-arrow.png' alt=''></a></li>";
        $output .= '</ul></nav>';
    }
}

echo $output;
