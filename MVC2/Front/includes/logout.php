<?php 

session_start();
// session_destroy(); 

// deleting cookies of remember me
setcookie('cookieEmail', '');
setcookie('cookiePassword', '');

unset($_SESSION['UserLoggedIn']);                             
unset($_SESSION['UserID']);
unset($_SESSION['RoleID']);
unset($_SESSION['FirstName']);
unset($_SESSION['LastName']);
unset($_SESSION['EmailID']);

header("Location: ../html/login.php");
die(); // optional

?>