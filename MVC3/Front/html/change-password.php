<?php $page_name = "Change Password"; ?>
<?php include "../includes/head.php"; ?>

<body>

    <!-- Background Image -->
    <img class="library-img" src="../images/login/banner-with-overlay.jpg" alt="Library">

    <!-- Change -->
    <section id="change">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="main-logo">
                        <a href="<?php if(isset($_SESSION['IsAdmin'])) {echo "../../Admin/html/dashboard.php";} else {echo "index.php";} ?>"><img class="img-fluid" src="../images/login/top-logo.png" alt="Notes MarketPlace Logo"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="change-box">
                        <p class="section-heading" class="text-center">Change Password</p>
                        <p class="user-instruction">Enter your email to reset your password</p>

                        <?php

                        $l = 0;
                        
                        if (isset($_POST['change_password'])) {
                            $get_user_id = $_SESSION['UserID'];

                            // checking old pass with databse
                            $get_user = "SELECT Password From users WHERE UserID = {$get_user_id} ";
                            $get_user_query = mysqli_query($connection, $get_user);
                            confirmQuery($get_user_query);
                            $get_user_row = mysqli_fetch_assoc($get_user_query);
                            $userPassword = $get_user_row['Password'];

                            $oldPassword = $_POST['old_password'];
                            $newPassword = $_POST['new_password'];

                            if ($oldPassword !== $userPassword) {
                                $l = 1;
                            } else {
                                $changePassword = "UPDATE users SET Password = '{$newPassword}' WHERE UserID = {$get_user_id} ";
                                $changePassword_query = mysqli_query($connection, $changePassword);
                                confirmQuery($changePassword_query);
                                $_SESSION['passwordChanged'] = '';
                                header("Location: ../includes/logout.php");                                                               
                            }
                        }

                        ?>

                        <form action="" method="POST" id="change-password-form">
                            <div class="form-group">
                                <label class="info-label">Old Password</label>
                                <input name="old_password" value="<?php if(isset($_POST['change_password'])) {echo $oldPassword;} ?>" type="password" class="form-control input-box-style" id="exampleInputPassword4" placeholder="Enter old your password">
                                <div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>
                                <?php
                                if ($l == 1) { ?>
                                    <div class="incorrect-password-label">
                                        <p>The password that you've entered is incorrect</p>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label class="info-label">New Password</label>
                                <input name="new_password" value="<?php if(isset($_POST['change_password'])) {echo $newPassword;} ?>" type="password" class="form-control input-box-style" id="exampleInputPassword5" placeholder="Enter new your password">
                                <div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>                                
                            </div>

                            <div class="form-group">
                                <label class="info-label">Confirm Password</label>
                                <input name="confirm_new_password" value="<?php if(isset($_POST['change_password'])) {echo $newPassword;} ?>" type="password" class="form-control input-box-style" id="exampleInputPassword6" placeholder="Confirm your new password">
                                <div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>
                            </div>

                            <div class="form-btn">
                                <button name="change_password" type="submit" class="btn btn-general btn-purple">Submit</button>
                            </div>
                        </form>
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

    <!-- Java-scripts -->
</body>

</html>