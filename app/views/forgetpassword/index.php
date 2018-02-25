<?php
Model::sessionInit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title><?= NAME; ?> | بازیابی کلمه عبور</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link href="public/css/pace-theme-flash.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/blue.css">
    <link href="public/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/jquery.flipcountdown.css"/>
    <link rel="stylesheet" href="public/css/bootstrap-social.css">
    <link href="public/css/application.track.index.css" rel="stylesheet" type="text/css">
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <?php require('app/views/include/favicon.php'); ?>
    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <![endif]-->

</head>
<body class="cnt-home">


<!-- ========== HEADER ========== -->
<header class="header-style-1" dir="rtl">
    <!-- ========== NAVBAR ========== -->
    <?php require('app/views/include/header.php'); ?>
    <!-- ========== NAVBAR : END ========== -->
</header>

<?php require('app/views/include/login.php'); ?>

<!-- ========== HEADER : END ========== -->
<div class="body-content outer-top-bd">
    <div class="container">
        <div class="sign-in-page inner-bottom-sm">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-lg-3 sign-in">
                    <aside class="sidebar">
                        <div class="beep-side-widget what-is-beep white-bg">
                            <h5 align="right" style="background-color: #f7f7f7;padding: 10px">نحوه بازیابی رمز عبور</h5>
                            <div class="wrap soft-text">پس از ورود پست الکترونیک نامه ای حاوی لینک یک بار مصرفی
                                جهت
                                تغییر رمز عبور برای شما ارسال خواهد شد.
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-9 col-sm-12 sign-in">
                    <h5 align="right" style="background-color: #92C647;padding: 10px;color: #fff;margin-bottom: 0">بازیابی کلمه عبور</h5>
                    <div class="row wrap" style="background-color: #fefefe;margin: 0">
                        <div class="col-md-3 col-sm-0 sign-in"></div>
                        <div class="col-md-6 col-sm-12 sign-in">
                            <div class="register-form outer-top-xs">
                                <div class="form-group" align="right">
                                    <label class="info-title" for="email"><span style="color: red">*</span> پست
                                        الکترونیکی</label>
                                    <input type="email" class="form-control unicase-form-control text-input"
                                           id="email" name="email" oninput="setCustomValidity('')"
                                           onchange="ForgetAccountValidate();"
                                           oninvalid="this.setCustomValidity('یک ایمیل معتبر وارد کنید')" required>
                                    <input type="hidden" id="emailstatus" name="emailstatus" value="false">
                                    <span dir="rtl" id="email_status"></span>
                                </div>
                                <div class="col-md-12 col-sm-12 sign-in" style="text-align: center">
                                    <button style="margin-top: 10px;margin-bottom: 30px;width: 200px;"
                                           dir="rtl"
                                            class="btn-upper btn btn-primary send-button-email-forget">ارسال ایمیل</button>
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
</div><!-- /.body-content -->
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