<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin | Kelurahan Gilangharjo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/Bantul.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="plugins/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="plugins/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="plugins/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="plugins/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="<?= base_url('/login'); ?>" method="post" id="login" class="login100-form validate-form login">
                    <?= csrf_field() ?>
                    <div class="logo text-center">
                        <a href="<?= base_url('') ?>"><img src="img/Bantul.png" alt="" style="width: 15%; padding:5px;"></a>
                        <a href="<?= base_url('') ?>"><img src="img/UAD-warna.png" alt="" style="width: 20%; padding:5px;"></a>
                        <span class="login100-form-title p-b-43" style="color:#b78a02">
                            Sign in
                        </span>
                    </div>

                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>



                    <input type="hidden" name="recaptcha" id="recaptchaResponse">

                    <div class="wrap-input100 validate-input" data-validate="username is required">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Username</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    <div class="container-login100-form-btn" onclick="onSubmit()">
                        <button class="login100-form-btn g-recaptcha" data-sitekey=<?= getenv('RECAPTCHA_SITE') ?> data-callback='onSubmit' data-action='login'>
                            Sign in
                        </button>
                    </div>

                    <a href="<?= base_url('/register'); ?>"> Buat akun disini!</a>
                </form>

                <div class="login100-more" style="background-image: url('img/gilangharjo2.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="plugins/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="plugins/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="plugins/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="plugins/daterangepicker/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="plugins/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdslF4lAAAAALW8jd53JryFoWpgapmfCTNmq-pI"></script> -->
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>