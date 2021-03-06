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
                        <a href="index.php"><img class="img-fluid" src="../images/login/top-logo.png" alt="Notes MarketPlace Logo"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="change-box">
                        <p class="section-heading" class="text-center">Change Password</p>
                        <p class="user-instruction">Enter your email to reset your password</p>
                        <form>
                            <div class="form-group">
                                <label class="info-label" for="exampleInputPassword1">Old Password</label>                                
                                <input type="password" class="form-control input-box-style" id="exampleInputPassword4" placeholder="Enter old your password" autocomplete="on">
                                <div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>                                
                              </div>
                              <div class="form-group">
                                <label class="info-label" for="exampleInputPassword1">New Password</label>                                
                                <input type="password" class="form-control input-box-style" id="exampleInputPassword5" placeholder="Enter new your password" autocomplete="on">
                                <div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>                                
                              </div>
                              <div class="form-group">
                                <label class="info-label" for="exampleInputPassword1">Confirm Password</label>                                
                                <input type="password" class="form-control input-box-style" id="exampleInputPassword6" placeholder="Confirm your new password" autocomplete="on">
                                <div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>                                
                              </div>
                            <div class="form-btn">
                                <button type="submit" class="btn btn-general btn-purple">Submit</button>
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

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <!-- Java-scripts -->
</body>
</html>