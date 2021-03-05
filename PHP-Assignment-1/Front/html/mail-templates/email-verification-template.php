<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Email Verification - Notes MarketPlace</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">

    <style>
        .table td {
            padding: 0px !important;
        }

        p {
            margin-bottom: 0px !important;
        }

        button.btn a {
            transition: all ease-in .2s;
            text-decoration: none;
            color: white;
        }
        
        button.purple-btn:hover,
        button.purple-btn:focus {
            box-shadow: none;
            color: #6255a5 !important;
            background-color: #fff !important;
            border: 1px solid #6255a5;
        }

        button.btn:hover a,
        button.btn:focus a {
            color: #6255a5;
        }

        @media (max-width: 678px) {
            .wrapper {
                margin: 0px 30px auto 30px !important;
            }
        }

        @media (max-width: 479px) {

            .fs1 {
                font-size: 24px !important;
            }
            .fs2 {
                font-size: 16px !important;
            }
            .fs3 {
                font-size: 14px !important;
            }
            .fs4 {
                font-size: 14px !important;
            }

            button.btn {
                height: 45px !important;
            }

            button.btn a {
                font-size: 16px !important;
            }

            .wrapper {
                padding: 25px !important;
            }

            .main-logo {
                height: 36px;
                margin-bottom: 30px !important;
            }
        }
    </style>

</head>

<body style="font-family: 'Open Sans', sans-serif;">
    
    <div class="wrapper" style="background: white; margin: 0px auto auto auto; padding: 30px; table-layout: fixed;  max-width: 600px;">
    
        <table class="table table-borderless" style="margin-bottom: 0px !important;">
            <tbody>
                <tr>                    
                    <td><img class="main-logo" src="../../images/logo/dark-logo.png" alt="Notes MarketPlace Logo" style="margin-bottom: 40px;"></td>
                </tr> 
                
                <tr>
                    <td><p class="fs1" style="font-size: 26px; font-weight: 600; color: #6255a5; padding-bottom: 15px;">Email Verification</p></td>
                </tr>

                <tr>
                    <td><p class="fs2" style="font-size: 18px; font-weight: 600; color: #333333; padding-bottom: 7px;">Dear {Fname},</p></td>
                </tr>

                <tr>
                    <td><p class="fs3" style="font-size: 16px; font-weight: 400; color: #333333; padding-bottom: 7px;">Thanks for Signing Up!</p></td>
                </tr>

                <tr>
                    <td><p class="fs4" style="font-size: 16px; font-weight: 400; color: #333333; padding-bottom: 30px;">Simply click below for email verification.</p></td>
                </tr>

                <tr>
                    <td>
                        <button class="btn purple-btn" style="color: #fff; background: #6255a5; text-transform: uppercase; height: 50px; width: 100%; border-radius: 3px; font-size: 18px; font-weight: 600; transition: all ease-in .2s;"><a href="{Vlink}">Verify Email Address</a></button>                        
                    </td>
                </tr>
            </tbody>
        </table>
    
    </div>
    
    <!-- Java-scripts -->

    <!-- JQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="../../js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="../../js/script.js"></script>

    <!-- Java-scripts -->
</body>
</html>