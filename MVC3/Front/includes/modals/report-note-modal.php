<div class="modal fade" id="reportNoteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p class="add-review-heading">Report An Issue</p>
                <p class="report-note-title-heading">Note Title</p>
                <p class='note-title-in-report-modal'></p>

                <?php
                if (isset($_POST['submitNoteReport'])) {
                    $UserID = $_SESSION['UserID'];
                    $data_note_id = $_POST['submitNoteReport'];
                    $ReportNoteID = substr($data_note_id, 0, strpos($data_note_id, "-"));
                    $AgainstDownloadID = substr($data_note_id, strpos($data_note_id, '-') + 1);
                    $NoteRemarks = $_POST['NoteRemarks'];

                    // check if already reported
                    $check_reports = "SELECT * FROM seller_notes_reported_issues WHERE AgainstDownloadID = {$AgainstDownloadID} ";
                    $check_reports_query = mysqli_query($connection, $check_reports);
                    confirmQuery($check_reports_query);
                    $check_reports_count = mysqli_num_rows($check_reports_query);

                    if ($check_reports_count == 0) {
                        $add_note_report = "INSERT INTO seller_notes_reported_issues (NoteID, ReportedBy, AgainstDownloadID, Remarks, CreatedBy) ";
                        $add_note_report .= "VALUES ({$ReportNoteID}, {$UserID}, {$AgainstDownloadID}, '{$NoteRemarks}', {$UserID}) ";
                        $add_note_report_query = mysqli_query($connection, $add_note_report);
                        confirmQuery($add_note_report_query);
                    } else {
                        $update_note_report = "UPDATE seller_notes_reported_issues SET Remarks = '{$NoteRemarks}', ModifiedBy = {$UserID} WHERE AgainstDownloadID = {$AgainstDownloadID} ";
                        $update_note_report_query = mysqli_query($connection, $update_note_report);
                        confirmQuery($update_note_report_query);
                    }                   

                    // sending mail to admin that user has marked note as an inappropriate
                    // getting buyer deatils
                    $get_buyer = "SELECT * FROM users WHERE UserID = {$UserID} AND IsActive = 1 ";
                    $get_buyer_query = mysqli_query($connection, $get_buyer);
                    confirmQuery($get_buyer_query);
                    $get_buyer_row = mysqli_fetch_assoc($get_buyer_query);
                    $buyerFullName = $get_buyer_row['FirstName'] . " " . $get_buyer_row['LastName'];

                    // getting note title
                    $get_note_title = "SELECT * FROM seller_notes WHERE NoteID = {$ReportNoteID} AND IsActive = 1 ";
                    $get_note_title_query = mysqli_query($connection, $get_note_title);
                    confirmQuery($get_note_title_query);
                    $get_note_title_row = mysqli_fetch_assoc($get_note_title_query);
                    $NoteTitle = $get_note_title_row['Title'];
                    $NoteSellerId = $get_note_title_row['SellerID'];

                    // getting seller details
                    $get_seller = "SELECT * FROM users WHERE UserID = {$NoteSellerId} AND IsActive = 1 ";
                    $get_seller_query = mysqli_query($connection, $get_seller);
                    confirmQuery($get_seller_query);
                    $get_seller_row = mysqli_fetch_assoc($get_seller_query);
                    $sellerFullName = $get_seller_row['FirstName'] . " " . $get_seller_row['LastName'];
                    
                    $mailEmailID = 'notesmarketplace@gmail.com';
                    $Subject = $buyerFullName . " " . " Reported an issue for " . $NoteTitle;
                    $Body = "Hello Admins," . "<br><br>" . "We want to inform you that, " . $buyerFullName . " Reported an issue for " . $sellerFullName . "'s Note with title " . $NoteTitle . ". Please look at the notes and take required actions.<br><br>Regards,<br>Notes Marketplace" ;

                    include "../includes/mail.php";  

                    $_SESSION['NoteReported'] = '';
                }
                ?>

                <form action="" method="POST" id="note-report-form">
                    <div class="form-group">
                        <label class="info-label">Remarks *</label>
                        <textarea name="NoteRemarks" class="form-control input-box-style" placeholder="Remarks..."></textarea>
                    </div>

                    <div class="note-report-modal-btn-wrapper">
                        <div class="form-btn">
                            <button id="submitNoteReport" name="submitNoteReport" class="btn btn-general btn-purple" type="submit">Report</button>
                        </div>

                        <div class="form-btn">
                            <button id="cancleNoteReport" class="btn btn-general btn-purple" data-dismiss="modal" aria-label="Close">Cancel</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>