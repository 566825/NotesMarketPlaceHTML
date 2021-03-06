<?php $page_name = "Forgot Password"; ?>
<?php include "../includes/head.php"; ?>

<body>
    <!-- Background Image -->
    <img class="library-img" src="../images/login/banner-with-overlay.jpg" alt="Library">

    <!-- Forgot -->
    <section id="forgot">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="main-logo">
                        <a href="index.php"><img class="img-fluid" src="../images/login/top-logo.png" alt="Notes MarketPlace Logo"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <?php

                    $i = 0; // whether user exists or not    
                    $j = 0; // login btn     

                    if (isset($_GET['j'])) {
                        $j = 1;
                    }

                    if (isset($_POST['forgot_password'])) {
                        $EmailID = $_POST['EmailID'];

                        $query = "SELECT * FROM users WHERE EmailID = '{$EmailID}' ";
                        $query_result = mysqli_query($connection, $query);

                        if (mysqli_num_rows($query_result) != 0) {

                            // generating random password
                            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
                            $randomPassword = substr(str_shuffle($chars), 0, 8);

                            $change_password = "UPDATE users SET Password = '{$randomPassword}' WHERE EmailID = '{$EmailID}' ";
                            $change_password_query = mysqli_query($connection, $change_password);

                            confirmQuery($change_password_query);

                            // sending random pass in mail                  
                            $mailEmailID = $EmailID;
                            $Subject = "New Temporary Password has been created for you";
                            $Body = "Hello," . "<br><br>" . "We have generated new password for you" . "<br>" . "Password: " . $randomPassword . "<br><br>" . "Regards," . "<br>" . "Notes Marketplace";

                            include "../includes/mail.php";
                            $_SESSION['newPasswordMail'] = '';
                            header("Location: login.php");                                                                                  

                        } else {
                            $i = 1; // user does not exists
                        }
                    }

                    ?>

                    <div id="forgot-box">
                        <p class="section-heading" class="text-center">Forgot Password?</p>
                        <p class="user-instruction">Enter your email to reset your password</p>
                        <div class="success-msg">

                            <?php if ($i == 1) { ?>
                                <p style="color: #3c3366 !important; font-weight: 600;">User Doesn't Exists!!</p> <?php } ?>

                        </div>
                        <form action="" method="POST" id="forgot-form">
                            <div class="form-group">
                                <label class="info-label" for="exampleInputEmail1">Email</label>
                                <input value="<?php if (isset($_POST['forgot_password'])) {
                                                    echo empty($_POST['EmailID']) ? "" : $_POST['EmailID'];
                                                } ?>" name="EmailID" type="email" class="form-control input-box-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" required>
                            </div>
                            <div class="form-btn">
                                <button name="forgot_password" type="submit" class="btn btn-general btn-purple">Submit</button>
                            </div>
                        </form>

                        <!-- <?php if ($j == 1) { ?>
                        <div class="success-msg extra-style">
                            <p style="color: #6255a5 !important; font-weight: 600;">Your password has been changed successfully and newly generated password is sent on your registered email address.</p>
                        </div>                      
                        <div class="toggle-btw-login-signup" class="text-center">
                            <p><span><a style="font-weight: 600; "href="login.php">Go to Login Page</a></span></p> <?php } ?>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Java-scripts -->

    <!-- JQuery -->
    <script src="../js/JQuery/jquery.js"></script>

    <!-- JQuery-Validation -->
    <script src="../js/JQuery-Validation/jquery.validate.js"></script>
    <script src="../js/form-validation/form-validation.js"></script>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <!-- sweet alert JS -->
    <script src="../js/sweet-alert/sweetalert.min.js"></script>

    <?php
    if (isset($_SESSION['mailError'])) { ?>

        <script>
            swal({
                text: 'Please Retry (Error occured)',
                icon: 'error',
            });
        </script>

    <?php
        unset($_SESSION['mailError']);
    }
    ?>    

    <!-- Java-scripts -->
</body>

</html>