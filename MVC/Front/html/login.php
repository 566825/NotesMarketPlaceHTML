<?php $page_name = "Login"; ?>
<?php include "../includes/head.php"; ?>

<body>
    <!-- Background Image -->
    <img class="library-img" src="../images/login/banner-with-overlay.jpg" alt="Library">

    <!-- Login Box -->
    <section id="login">
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

                    <?php // login code                          

                    $i = 0; // this is var for showing incorrect password div
                    $n = 0; // used for showing that user doesn't exists div                

                    if (isset($_POST['login_btn'])) {

                        $login_email = $_POST['login_email'];
                        $login_password = $_POST['login_password'];

                        $login_email = mysqli_real_escape_string($connection, $login_email);
                        $login_password = mysqli_real_escape_string($connection, $login_password);

                        $query = "SELECT * FROM users WHERE EmailID = '{$login_email}' ";
                        $select_user_query = mysqli_query($connection, $query);
                        confirmQuery($select_user_query);

                        if (mysqli_num_rows($select_user_query) != 0) {

                            while ($row = mysqli_fetch_assoc($select_user_query)) {
                                $db_user_id = $row['UserID'];
                                $db_role_id = $row['RoleID'];
                                $db_firstname = $row['FirstName'];
                                $db_lastname = $row['LastName'];
                                $db_email_id = $row['EmailID'];
                                $db_user_password = $row['Password'];
                                $IsEmailVerified = $row['IsEmailVerified'];
                            }

                            // $password = crypt($password, $db_user_password); // this will decrypt the password that is encrypted while register in databse

                            if ($login_email === $db_email_id && $login_password === $db_user_password) {

                                if ($IsEmailVerified == 1) {

                                    // remember me code
                                    if (isset($_POST['remember_me'])) {
                                        setcookie('cookieEmail', $login_email, time() + 60 * 60 * 30);
                                        setcookie('cookiePassword', $login_password, time() + 60 * 60 * 30);
                                    } else {
                                        setcookie('cookieEmail', '');
                                        setcookie('cookiePassword', '');
                                    }
                                    // end

                                    // setting sessions
                                    $_SESSION['UserLoggedIn'] = '';
                                    $_SESSION['UserID'] = $db_user_id;
                                    $_SESSION['RoleID'] = $db_role_id;
                                    $_SESSION['FirstName'] = $db_firstname;
                                    $_SESSION['LastName'] = $db_lastname;
                                    $_SESSION['EmailID'] = $db_email_id;
                                    $_SESSION['Password'] = $db_user_password;

                                    if ($db_role_id == 1 || $db_role_id == 2) {
                                        // if admin
                                        header("Location: ../../Admin/html/dashboard.html");
                                    } else {
                                        // if member
                                        $is_profile_complete_query = "SELECT * FROM users u JOIN user_profile up ON u.UserID = up.UserID WHERE u.UserID = $db_user_id ";
                                        $is_profile_complete_query_result = mysqli_query($connection, $is_profile_complete_query);
                                        confirmQuery($is_profile_complete_query_result);
                                        if (mysqli_num_rows($is_profile_complete_query_result) != 0) {                                            
                                            header("Location: search-notes.php");
                                        } else {
                                            header("Location: user-profile.php");
                                        }
                                        
                                    }
                                    
                                } else {
                                    $_SESSION['verifyEmail'] = ''; // please verify email                                    
                                }

                            } elseif ($login_email === $db_email_id && $login_password !== $db_user_password) {
                                $i = 1;
                            } else {
                                $n = 1;
                            }
                        } else {
                            $n = 1;
                        }
                    }

                    ?>

                    <div id="login-box">
                        <p class="section-heading" class="text-center">Login</p>
                        <p class="user-instruction">Enter your email address and password to login</p>
                        <div class="success-msg">

                            <?php if ($n == 1) { ?>
                                <p style="color: #3c3366 !important; font-weight: 600;">User Doesn't Exists!!</p> <?php } ?>
                        </div>

                        <form method="POST" action="" id="login-form">
                            <div class="form-group">
                                <label class="info-label" for="exampleInputEmail1">Email</label>
                                <input name="login_email" class="form-control input-box-style" value="<?php if (isset($_COOKIE['cookieEmail'])) {
                                                                                                            echo $_COOKIE['cookieEmail'];
                                                                                                        } else {
                                                                                                            if (isset($_POST['login_email'])) {
                                                                                                                echo $_POST['login_email'];
                                                                                                            }
                                                                                                        } ?>" type="email" placeholder="Enter your email" required>
                            </div>

                            <div class="form-group">
                                <label class="info-label" for="exampleInputPassword1">Password</label>
                                <div class="forgot-password-label-box">
                                    <label><a class="forgot-password-label" href="forgot.php">Forgot Password?</a></label>
                                </div>
                                <input name="login_password" class="form-control input-box-style" value="<?php if (isset($_COOKIE['cookiePassword'])) {
                                                                                                                echo $_COOKIE['cookiePassword'];
                                                                                                            } else {
                                                                                                                if (isset($_POST['login_password'])) {
                                                                                                                    echo $_POST['login_password'];
                                                                                                                }
                                                                                                            } ?>" placeholder="Enter your password" type="password" id="exampleInputPassword1" required>
                                <div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>

                                <?php
                                if ($i === 1) { ?>
                                    <div class="incorrect-password-label">
                                        <p>The password that you've entered is incorrect</p>
                                    </div>
                                <?php } ?>


                            </div>

                            <div class="form-group form-check">
                                <input name="remember_me" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label id="remember-me-label" class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>

                            <div class="form-btn">
                                <button type="submit" name="login_btn" class="btn btn-general btn-purple">Login</button>
                            </div>
                        </form>
                        <div class="toggle-btw-login-signup" class="text-center">
                            <p>Don't have an account? <span><a href="signup.php">Sign Up</a></span></p>
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

    <!-- after email is verified -->
    <?php
    if (isset($_SESSION['emailIsVerified'])) { ?>

        <script>
            swal({                
                text: 'Your email has been verified successfully',
                icon: 'success',
                timer: 2700,
                buttons: false,
            });
        </script>

    <?php
        unset($_SESSION['emailIsVerified']);
    }
    ?>

    <!-- user tries to login but email is not verified -->
    <?php
    if (isset($_SESSION['verifyEmail'])) { ?>

        <script>
            swal({                
                text: 'Please verify the email address via clicking on the link we sent you via email.',    
            });
        </script>

    <?php
        unset($_SESSION['verifyEmail']);
    }
    ?>

    <!-- after sending new password mail -->
    <?php
    if (isset($_SESSION['newPasswordMail'])) { ?>

        <script>
            swal({                
                text: 'Your password has been changed successfully and newly generated password is sent on your registered email address.',
                icon: 'success',
            });
        </script>

    <?php
        unset($_SESSION['newPasswordMail']);
    }
    ?>

    <!-- Java-scripts -->
</body>

</html>