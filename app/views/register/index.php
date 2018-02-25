<?php
Model::sessionInit();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="<?= NAME; ?>">
    <meta name="robots" content="all">

    <title><?= NAME; ?> | عضویت</title>
    <meta http-equiv="content-language" content="fa"/>
    <meta charset="UTF-8"/>
    <meta name="author" content="<?= NAME; ?>"/>
    <meta name="language" content="fa"/>
    <meta name="document-type" content="Public"/>
    <meta name="document-rating" content="General"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="resource-type" content="document"/>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- Customizable CSS -->
    <link href="public/css/pace-theme-flash.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-social.css">
    <link href="public/css/application.track.index.css" rel="stylesheet" type="text/css">

    <?php require('app/views/include/favicon.php'); ?>
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/owl.transitions.css">
    <link href="public/css/lightbox.css" rel="stylesheet">

    <link href="public/css/css_main.css?v=d34y6GouB8OIqYbVXfO54Dw2tDZG8gAwP5JRzPLXebU1"
          rel="stylesheet"/>
    <link href="public/css/css_HomePage.css?v=xir1k7vh8U8EsdD9UJmw_kH1ptTEnN8lVeXlkL9SNQM1"
          rel="stylesheet"/>
</head>
<body class="wmax" style="background:#283036;">

<?php require('app/views/include/login.php'); ?>

<!-- ========== NAVBAR ========== -->
<?php require('app/views/include/header.php'); ?>
<!-- ========== NAVBAR : END ========== -->

<div id="main">
    <div class="container" style="margin-bottom: -50px;">
        <div class="sign-in-page inner-bottom-sm" style="margin-bottom: 0;padding-bottom: 0">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-12 col-sm-12 sign-in">
                    <h5 align="right" style="background-color: #92C647;padding: 10px;color: #fff;margin-bottom: 0">
                        ثبت‌نام در <?= NAME; ?></h5>
                    <div class="row wrap" style="background-color: #fefefe;margin: 0">
                        <div class="google-signup-tip">
                            اگر در وب سایت گوگل اکانت دارید پیشنهاد می کنیم که از طریق
                            <a href="<?= $data['getGoogleLoginLink'] ?>" class="login-with-google">این لینک</a>
                            در <?= NAME; ?> ثبت نام کنید.
                            <br>
                            در غیر این صورت فرم زیر را تکمیل نمایید:
                        </div>
                        <hr>
                        <div class="col-md-3 col-sm-0 sign-in"></div>
                        <div class="col-md-6 col-sm-12 sign-in">
                            <div class="register-form outer-top-xs">
                                <div class="form-group" align="right">
                                    <label class="info-title" for="email"><span style="color: red">*</span> پست الکترونیکی</label>
                                    <input type="email" class="form-control unicase-form-control text-input"
                                           id="email" name="email" oninput="setCustomValidity('')"
                                           onchange="checkEmail();"
                                           oninvalid="this.setCustomValidity('یک ایمیل معتبر وارد کنید')" required>
                                    <input type="hidden" id="emailstatus" name="emailstatus" value="false">
                                    <span dir="rtl" id="email_status"></span>
                                </div>
                                <div class="form-group" align="right">
                                    <label class="info-title" for="name"><span style="color: red">*</span> نام و نام خانوادگی</label>
                                    <input type="text" class="form-control unicase-form-control text-input"
                                           id="name" name="name" oninput="setCustomValidity('')"
                                           style="text-align: right;width: 100%"
                                           oninvalid="this.setCustomValidity('نام و نام خانوادگی خود را ترجیحا به فارسی وارد کنید.')"
                                           required>
                                </div>
                                <div class="form-group" align="right">
                                    <label class="info-title" for="password"><span style="color: red">*</span> کلمه عبور</label>
                                    <input type="password" class="form-control unicase-form-control text-input"
                                           id="password" name="password" oninput="setCustomValidity('')"
                                           oninvalid="this.setCustomValidity('کلمه عبور خود را وارد کنید')" required>
                                </div>
                                <div class="form-group" align="right">
                                    <label class="info-title" for="password-confirm"><span style="color: red">*</span> تایید کلمه
                                        عبور</label>
                                    <input type="password" class="form-control unicase-form-control text-input"
                                           id="password-confirm" name="password-confirm" oninput="setCustomValidity('')"
                                           oninvalid="this.setCustomValidity('کلمه عبور خود را مجددا وارد کنید')"
                                           required>
                                </div>
                                <div class="col-md-12 col-sm-12 sign-in" style="text-align: center">
                                    <input style="margin-top: 10px;margin-bottom: 30px;width: 200px;"
                                           dir="rtl" value="ثبت‌نام"
                                           class="btn-upper btn btn-primary checkout-page-button">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-0 sign-in"></div>
                    </div>
                </div>
                <!-- Sign-in -->
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
    </div><!-- /.container -->
</div>

<!-- ========================= FOOTER ========================= -->
<?php require('app/views/include/footer.php'); ?>
<!-- ========================= FOOTER : END========================= -->


<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="public/js/jquery-1.11.1.min.js"></script>
<script src="public/js/jquery.noty.packaged.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/bootstrap-hover-dropdown.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/echo.min.js"></script>
<script src="public/js/bootstrap-slider.min.js"></script>
<script src="public/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="public/js/lightbox.min.js"></script>
<script src="public/js/bootstrap-select.min.js"></script>
<script src="public/js/wow.min.js"></script>
<script src="public/js/scripts.js"></script>
<script src="public/js/pace.js"></script>
<script src="public/js/register.js"></script>
<script src="public/js/countdown.js"></script>
<script src="public/js/login.js"></script>
</body>
</html>
