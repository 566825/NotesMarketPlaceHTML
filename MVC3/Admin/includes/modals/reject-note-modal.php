<div class="modal fade" id="rejectNoteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="../images/notes-detail/close.png" alt="">
                        </button>
                    </div>
                    <div class="modal-body">

                        <p class="note-name-reject-popup"></p>

                        <?php
                        if (isset($_POST['rejectNoteBtn'])) {
                            $reject_note_id = $_POST['rejectNoteBtn'];
                            $reject_note_remarks = $_POST['NoteRemarks'];
                            $reject_note = "UPDATE seller_notes SET Status = 10, ActionedBy = {$UserID}, AdminRemarks = '{$reject_note_remarks}', ModifiedBy = {$UserID} WHERE NoteID = {$reject_note_id} ";
                            $reject_note_query = mysqli_query($connection, $reject_note);
                            confirmQuery($reject_note_query);

                            $_SESSION['noteRejected'] = '';
                            header("Location: notes-under-review.php");
                            die;
                        }
                        ?>

                        <form action="" method="POST" id="reject-note-form">
                            <div class="form-group">
                                <label class="info-label" for="comment-questions">Remarks</label>
                                <textarea name="NoteRemarks" class="form-control input-box-style" placeholder="Write remarks"></textarea>
                            </div>

                            <div class="reject-popup-btns">
                                <div class="row no-gutters">
                                    <button type="submit" name="rejectNoteBtn" class="btn action-btn-in-table reject-btn" id="reject-note-btn">Reject</button>
                                    <button class="btn action-btn-in-table cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>