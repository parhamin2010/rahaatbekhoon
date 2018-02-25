<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= NAME; ?> | ورود به ناحیه مدیریت</title>
    <!-- Favicon -->
    <?php require('app/views/include/favicon.php'); ?>

    <link href="public/css/pace-theme-flash.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/panel/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="public/panel/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="public/panel/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="public/panel/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="public/panel/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="public/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!--
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-default.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-default-indicator.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-dark.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-dark-indicator.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-slide.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-slide-indicator.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-chrome.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-chrome-indicator.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-hubspot.css" />
    -->
    <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-default-indicator.css"/>
    <link rel="stylesheet" href="public/library/offlinealert/themes/offline-language-persian.css"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page" style="background-image: url('public/images/backAdmin.jpg');background-repeat: no-repeat;
    background-attachment: fixed;background-size: cover;">
<div class="login-box" style="background:#fff;margin:5% auto 0% auto">

    <div class="login-logo" style="padding-top: 25px;">
        <img src="public/images/pixel-perfect-final-v02-01.png" alt="هدفون|دانلود قانونی موزیک" style="margin:0% 15%">
    </div>
    <hr/>
    <!-- /.login-logo -->
    <div class="login-box-body" style="padding-top:2px">
        <p class="login-box-msg"><strong>ورود به ناحیه مدیریت</strong></p>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="username" id="username" placeholder="ایمیل" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" id="password" placeholder="کلمه عبور"
                       required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="sk-wave" id="loading" name="loading" hidden>
                        <div class="sk-rect sk-rect1"></div>
                        <div class="sk-rect sk-rect2"></div>
                        <div class="sk-rect sk-rect3"></div>
                        <div class="sk-rect sk-rect4"></div>
                        <div class="sk-rect sk-rect5"></div>
                    </div>
                    <button style="margin-top:10px" type="submit" name="login" id="login"
                            class="btn btn-primary btn-block btn-small">
                        <div id="titr">ورود</div>
                    </button>
                </div>
                <!-- /.col -->
            </div>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="public/js/jquery-1.11.1.min.js"></script>
<script src="public/js/jquery-latest.js"></script>
<script src="public/js/jquery.noty.packaged.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/countdown.js"></script>
<script src="public/js/bootstrap-hover-dropdown.min.js"></script>
<script src="public/js/bootstrap-slider.min.js"></script>
<script src="public/js/lightbox.min.js"></script>
<script src="public/js/bootstrap-select.min.js"></script>
<script src="public/js/wow.min.js"></script>
<script src="public/js/scripts.js"></script>
<script src="public/js/pace.js"></script>
<script>
    $("#login").on('click', function () {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (password == "" && username == "") {
            generate('warning', '<div style="text-align: right !important;" class="activity-item">لطفا تمامی فیلدهای دارای * را به صورت دقیق تکمیل کنید</div>');
            window.location="adminpanel/dashboard";
        }
        else {
            $.post(
                "adminpanel/loginCheck",
                {
                    'username': username,
                    'password': password
                },
                function (data) {
                    if (data == "ok") {
                        generate('success', '<div style="text-align: right !important;" class="activity-item">.باموفقیت وارد شدید :)</div>');
                        window.location="adminpanel/dashboard";
                    }
                    else {
                        generate('error', '<div style="text-align: right !important;" class="activity-item">.اطلاعات وارد شده صحیح نمی باشد<br/>لطفا مجددا تلاش نمایید</div>');
                    }
                }
            );
        }
    });
</script>
</body>

</html>
