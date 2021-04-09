<div class="modal fade" id="unpublishNoteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p class="add-review-heading">Unpublish Note</p>
                <p class="report-note-title-heading">Note Title</p>
                <p class='note-title-in-unpublish-modal'></p>

                <?php
                if (isset($_POST['unpublishNote'])) {
                    $UserID = $_SESSION['UserID'];
                    $data_note_id = $_POST['unpublishNote'];
                    $NoteRemarks = $_POST['NoteRemarks'];

                    // unpublish note
                    $unpublish_note = "UPDATE seller_notes SET Status = 11, ActionedBy = {$UserID}, AdminRemarks = '{$NoteRemarks}', ModifiedBy = {$UserID} WHERE NoteID = {$data_note_id} ";
                    $unpublish_note_query = mysqli_query($connection, $unpublish_note);
                    confirmQuery($unpublish_note_query);

                    // getting seller details
                    $note_details_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM seller_notes WHERE NoteID = {$data_note_id} "));
                    $note_title = $note_details_row['Title'];
                    $seller_id = $note_details_row['SellerID'];
                    $seller_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE UserID = {$seller_id} "));
                    $sellerFullName = $seller_row['FirstName'] . " " . $seller_row['LastName'];
                    $sellerEmailID = $seller_row['EmailID'];
                    
                    $mailEmailID = $sellerEmailID;
                    $Subject = "Sorry! We need to remove your notes from our portal.";
                    $Body = "Hello " . $sellerFullName . "," . "<br><br>" . "We want to inform you that, your note " . $note_title . " has been removed from the portal.<br>Please find our remarks as below -<br>" . $NoteRemarks . "<br><br>Regards,<br>Notes Marketplace" ;

                    include "../includes/mail.php";  

                    $_SESSION['NoteUnpublished'] = '';
                }
                ?>

                <form action="" method="POST" id="unpublish-note-form">
                    <div class="form-group">
                        <label class="info-label">Remarks *</label>
                        <textarea name="NoteRemarks" class="form-control input-box-style" placeholder="Remarks..."></textarea>
                    </div>

                    <div class="note-report-modal-btn-wrapper">
                        <div class="form-btn">
                            <button id="unpublishNoteBtn" name="unpublishNote" class="btn btn-general btn-purple" type="submit">Unpublish</button>
                        </div>

                        <div class="form-btn">
                            <button id="cancleUnpublishBtn" class="btn btn-general btn-purple" data-dismiss="modal" aria-label="Close">Cancel</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>