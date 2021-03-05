<?php

use function Composer\Autoload\includeFile;

$page_name = "Sign Up"; ?>
<?php include "../includes/head.php"; ?>

<body>
    <!-- Background Image -->
    <img class="library-img" src="../images/login/banner-with-overlay.jpg" alt="Library">

    <!-- Signup Box -->
    <section id="signup">
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

                    $k = 0; // giving msg about email is sent 
                    $l = 0; // user exist already
                    $m = 0; // successful sign up

                    if (isset($_POST['sign_up'])) {

                        $FirstName = $_POST['sign_fname'];
                        $LastName = $_POST['sign_lname'];
                        $EmailID = $_POST['sign_email'];
                        $Password = $_POST['sign_password'];
                        $ConfirmPassword = $_POST['sign_confirm_password'];

                        $FirstName = mysqli_real_escape_string($connection, $FirstName);
                        $LastName = mysqli_real_escape_string($connection, $LastName);
                        $EmailID = mysqli_real_escape_string($connection, $EmailID);
                        $Password = mysqli_real_escape_string($connection, $Password);

                        // token for email verification
                        // $token = bin2hex(random_bytes(15));                        

                        // checking if user email already exists
                        $slquery = "SELECT EmailID FROM users WHERE EmailID = '$EmailID'";
                        $selectresult = mysqli_query($connection, $slquery);
                        confirmQuery($selectresult);

                        if (mysqli_num_rows($selectresult) > 0) {
                            // if user already exist                            
                            $l = 1;
                        } else {

                            $sign_up_user = "INSERT INTO users (RoleID, FirstName, LastName, EmailID, Password) ";
                            $sign_up_user .= "VALUES (3, '{$FirstName}', '{$LastName}', '{$EmailID}', '{$Password}') ";
                            $sign_up_user_query = mysqli_query($connection, $sign_up_user);
                            confirmQuery($sign_up_user_query);  
                            
                            // last created id and vid is UserID which is being veriofied
                            $v_id = mysqli_insert_id($connection);                            

                            // sending email for verification
                            $mailEmailID = $EmailID;
                            $Vlink = "http://localhost/Notes%20Marketplace/Front/includes/email-verification.php?v_id=$v_id";
                            $Subject = "Note Marketplace - Email Verification";

                            $swap_var = array(
                                "{Fname}" => $FirstName,
                                "{Vlink}" => $Vlink
                            );                            

                            $template = "mail-templates/email-verification-template.php";
                            $Fname = $FirstName;
                            $Body = file_get_contents($template);
                            foreach (array_keys($swap_var) as $key) {
                                $Body = str_replace($key, $swap_var[$key], $Body);
                            }

                            include "../includes/mail.php";
                            
                            $_SESSION['signedUp'] = '';

                            // show success msg
                            $m = 1;

                            // clear all form fields after successful signup
                            unset($_POST['sign_fname']);
                            unset($_POST['sign_lname']);
                            unset($_POST['sign_email']);
                            unset($_POST['sign_password']);
                            unset($_POST['sign_confirm_password']);    
                            
                            // creating directory with UserID                            
                            mkdir("../../Members/" . $v_id);
                            
                        }
                    }

                    ?>

                    <div id="signup-box">
                        <p class="section-heading" class="text-center">Create An Account</p>
                        <p class="user-instruction">Enter your details to signup</p>
                        <div class="success-msg">

                            <?php if ($m == 1) { ?>
                                <p><span><i class="fas fa-check-circle"></i></span> Your account has been successfully created.</p> <?php }
                                                                                                                                $m = 0; ?>

                            <?php if ($l == 1) { ?>
                                <p style="color: #3c3366 !important; font-weight: 600;">User Already Exists!!</p> <?php }
                                                                                                                $l = 0; ?>

                        </div>

                        <form action="" method="POST" id="signup-form">

                            <div class="form-group">
                                <label class="info-label" for="exampleInputEmail1">First Name *</label>
                                <input value="<?php if (isset($_POST['sign_up'])) {
                                                    echo empty($_POST['sign_fname']) ? "" : $_POST['sign_fname'];
                                                } ?>" name="sign_fname" type="text" class="form-control input-box-style" aria-describedby="emailHelp" placeholder="Enter your first name" required>
                            </div>
                            <div class="form-group">
                                <label class="info-label" for="exampleInputEmail1">Last Name *</label>
                                <input value="<?php if (isset($_POST['sign_up'])) {
                                                    echo empty($_POST['sign_lname']) ? "" : $_POST['sign_lname'];
                                                } ?>" name="sign_lname" type="text" class="form-control input-box-style" aria-describedby="emailHelp" placeholder="Enter your last name" required>
                            </div>
                            <div class="form-group">
                                <label class="info-label" for="exampleInputEmail1">Email *</label>
                                <input value="<?php if (isset($_POST['sign_up'])) {
                                                    echo empty($_POST['sign_email']) ? "" : $_POST['sign_email'];
                                                } ?>" name="sign_email" type="email" class="form-control input-box-style" aria-describedby="emailHelp" placeholder="Enter your email address" required>
                            </div>
                            <div class="form-group">
                                <label class="info-label" for="exampleInputPassword1">Password</label>
                                <input value="<?php if (isset($_POST['sign_up'])) {
                                                    echo empty($_POST['sign_password']) ? "" : $_POST['sign_password'];
                                                } ?>" name="sign_password" type="password" class="form-control input-box-style" id="exampleInputPassword2" placeholder="Enter your password" autocomplete="on" required>
                                <div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>
                            </div>
                            <div class="form-group">
                                <label class="info-label" for="exampleInputPassword1">Confirm Password</label>
                                <input value="<?php if (isset($_POST['sign_up'])) {
                                                    echo empty($_POST['sign_confirm_password']) ? "" : $_POST['sign_confirm_password'];
                                                } ?>" name="sign_confirm_password" type="password" class="form-control input-box-style" id="exampleInputPassword3" placeholder="Re-enter your password" autocomplete="on" required>
                                <div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>
                            </div>
                            <div class="form-btn">
                                <button type="submit" name="sign_up" class="btn btn-general btn-purple">Sign Up</button>
                            </div>
                        </form>
                        <div class="toggle-btw-login-signup" class="text-center">
                            <p>Already have an account? <span><a href="login.php">Login</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Box Ends -->

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
    if (isset($_SESSION['signedUp'])) { ?>

        <script>
            swal({ 
                title: 'Thank you for Sign-up',               
                text: 'Please verify the email address via clicking on the link we sent you via email',                      
            });
        </script>

    <?php
        unset($_SESSION['signedUp']);
    }
    ?>

    <!-- Java-scripts -->
</body>

</html>