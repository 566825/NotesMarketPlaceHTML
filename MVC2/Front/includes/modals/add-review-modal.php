<div class="modal fade" id="addReviewModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="../images/notes-detail/close.png" alt="">
                </button>
            </div>
            <div class="modal-body">

                <p class="add-review-heading">Add Review</p>

                <?php
                if (isset($_POST['submitNoteReview'])) {
                    $UserID = $_SESSION['UserID'];
                    $data_note_id = $_POST['submitNoteReview'];
                    $ReviewNoteID = substr($data_note_id, 0, strpos($data_note_id, "-"));
                    $AgainstDownloadID = substr($data_note_id, strpos($data_note_id, '-') + 1);
                    $NoteRate = $_POST['NoteRate'];
                    $NoteComments = $_POST['Comments'];

                    $add_note_review = "INSERT INTO seller_notes_reviews (NoteID, ReviewedBy, AgainstDownloadID, Ratings, Comments, CreatedBy) ";
                    $add_note_review .= "VALUES ({$ReviewNoteID}, {$UserID}, {$AgainstDownloadID}, {$NoteRate}, '{$NoteComments}', {$UserID}) ";
                    $add_note_review_query = mysqli_query($connection, $add_note_review);
                    confirmQuery($add_note_review_query);
                    $_SESSION['NoteReviewAdded'] = '';
                }
                ?>

                <form action="" method="POST" id="note-review-form">

                    <div class="note-rating-star-div">
                        <input type="radio" id="star5" name="NoteRate" value="5" />
                        <label for="star5">5 stars</label>
                        <input type="radio" id="star4" name="NoteRate" value="4" />
                        <label for="star4">4 stars</label>
                        <input type="radio" id="star3" name="NoteRate" value="3" />
                        <label for="star3">3 stars</label>
                        <input type="radio" id="star2" name="NoteRate" value="2" />
                        <label for="star2">2 stars</label>
                        <input type="radio" id="star1" name="NoteRate" value="1" />
                        <label for="star1">1 star</label>
                    </div>

                    <div class="form-group">
                        <label class="info-label">Comments *</label>
                        <textarea name="Comments" class="form-control input-box-style" placeholder="Comments..."></textarea>
                    </div>

                    <div class="form-btn">
                        <button id="submitNoteReview" name="submitNoteReview" class="btn btn-general btn-purple" type="submit">Submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>