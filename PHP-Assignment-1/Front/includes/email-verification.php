<?php $page_name = "Email Verification"; ?>
<?php include "head.php"; ?>

<?php

if (isset($_GET['v_id'])) {
    $v_id = mysqli_escape_string($connection, $_GET['v_id']);
    $update_query = "UPDATE users set IsEmailVerified = 1 WHERE UserID = $v_id ";
    $result = mysqli_query($connection, $update_query);
    confirmQuery($result);
    $_SESSION['emailIsVerified'] = "";
    header("Location: ../html/login.php");
}

?>