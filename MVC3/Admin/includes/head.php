<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php include "user-dp.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $page_name; ?> - Notes MarketPlace</title>

    <!-- Website Logo -->
    <link rel="shortcut icon" href="../images/logo/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">    

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

    <!-- datatables -->
    <link rel="stylesheet" href="../css/datatables/jquery.dataTables.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="../css/responsive.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="../css/font-awesome/css/fontawesome.min.css">

    <!-- FontAwesome kit -->
    <script src="../css/font-awesome/js/font-awesome-kit.js" crossorigin="anonymous"></script>

    <!-- poper js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>  

</head>
