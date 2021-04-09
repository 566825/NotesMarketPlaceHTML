<?php

// confirm query
function confirmQuery($result)
{   
    global $connection;
    if (!$result) {
        die("Query FAILED " . mysqli_error($connection));
    } 
}

// get filesize

function noteAttachmentSize($size)
{
    if ($size >= 1073741824) {
        $note_attachment_size = number_format($size / 1073741824, 2) . ' GB';
    } elseif ($size >= 1048576) {
        $note_attachment_size = number_format($size / 1048576, 2) . ' MB';
    } elseif ($size >= 1024) {
        $note_attachment_size = number_format($size / 1024, 2) . ' KB';
    } elseif ($size > 1) {
        $note_attachment_size = $size . ' bytes';
    } elseif ($size == 1) {
        $note_attachment_size = $size . ' byte';
    } else {
        $note_attachment_size = '0 bytes';
    } 

    return $note_attachment_size;
}

?>
