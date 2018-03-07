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

    <title><?= NAME; ?> | ویرایش حساب کاربری</title>
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
                    <h5 align="right" style="background-color: #92C647;padding: 10px;color: #fff;margin-bottom: 0">فرم
                        ویرایش حساب کاربری</h5>
                    <div class="row wrap" style="background-color: #fefefe;margin: 0">
                        <div class="google-signup-tip">
                            برای تغییر کلمه عبور می بایست فیلدهای
                            مربوط به کلمه عبور جدید را تکمیل نمایید:
                        </div>
                        <hr>
                        <div class="col-md-3 col-sm-0 sign-in"></div>
                        <div class="col-md-6 col-sm-12 sign-in">
                            <div class="register-form outer-top-xs">
                                <div class="form-group" align="right">
                                    <label class="info-title" for="email"><span style="color: red">*</span> پست
                                        الکترونیکی</label>
                                    <p class="form-control unicase-form-control text-input"
                                       style="text-align: left" id="email" readonly>
                                        <?= $data['infoUser']['0']['email']; ?>
                                    </p>
                                    <input type="hidden" id="emailstatus" name="emailstatus" value="false">
                                    <span dir="rtl" id="email_status"></span>
                                </div>
                                <div class="form-group" align="right">
                                    <label class="info-title" for="name"><span style="color: red">*</span> نام و نام
                                        خانوادگی</label>
                                    <input type="text" class="form-control unicase-form-control text-input"
                                           style="text-align: right;width: 100%"
                                           id="name" name="name" oninput="setCustomValidity('')"
                                           value="<?= $data['infoUser']['0']['name']; ?>"
                                           oninvalid="this.setCustomValidity('نام و نام خانوادگی خود را ترجیحا به فارسی وارد کنید.')"
                                           required>
                                </div>
                                <div class="form-group" align="right">
                                    <label class="info-title" for="password-confirm">کلمه عبور جدید</label>
                                    <input type="password" class="form-control unicase-form-control text-input"
                                           id="password-new" name="password-new" oninput="setCustomValidity('')"
                                           oninvalid="this.setCustomValidity('کلمه عبور خود را مجددا وارد کنید')"
                                           required>
                                </div>
                                <div class="form-group" align="right">
                                    <label class="info-title" for="password-confirm"> تایید کلمه
                                        عبور جدید</label>
                                    <input type="password" class="form-control unicase-form-control text-input"
                                           id="password-confirm" name="password-confirm"
                                           oninput="setCustomValidity('')"
                                           oninvalid="this.setCustomValidity('کلمه عبور خود را مجددا وارد کنید')"
                                           required>
                                </div>
                                <div class="col-md-12 col-sm-12 sign-in" style="text-align: center">
                                    <input type="submit" id="submitEdit"
                                           style="margin-top: 10px;margin-bottom: 30px;width: 200px;"
                                           dir="rtl" value="به روز رسانی"
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
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-52DB6Z');</script><!-- End Google Tag Manager -->
<script> var newSearchPopup = true </script>
<script src="public/js/js_jquery.js"></script>
<script type='text/javascript'>var iDkConfig = new DkConfig();
    iDkConfig.IsCrawler = false;
    iDkConfig.TemplateServerUrl = 'https://template.digi-kala.com/digikala/';
    iDkConfig.WebPushApiUrl = 'https://webpushapi.digikala.com/';
    iDkConfig.IsDKNet = false;
    iDkConfig.DigiKalaWebApiUrl = 'https://api.digikala.com/';
    iDkConfig.ServiceUrl = '';
    iDkConfig.SearchServiceUrl = 'https://search.digikala.com/';
    iDkConfig.FileServerUrl = 'https://file.digi-kala.com/digikala/';
    iDkConfig.TvFileServerUrl = 'https://tv.digikala.com/';
    iDkConfig.AccountSiteUrl = 'https://accounts.digikala.com/';
    iDkConfig.DigiKalaMagUrl = '';
    iDkConfig.IsLogin = 'False';
    iDkConfig.AutoCompleteUrl = 'https://search.digikala.com/api/AutoComplete/';
    var ServiceUrl = '';
    var ClientWebApiServiceUrl = 'https://api.digikala.com/';
    var SearchServiceUrl = 'https://search.digikala.com/';
    var FileServerUrl = 'https://file.digi-kala.com/digikala/';
    var TvFileServerUrl = 'https://tv.digikala.com/';
    var TemplateServerUrl = 'https://template.digi-kala.com/digikala/';
    var AccountSiteUrl = 'https://accounts.digikala.com/';</script>
<script src="public/js/js_public.js"></script>
<script src="public/js/js_xdomainrequest.js"></script>
<script src="public/js/js_main.js"></script>




<script type='text/javascript' src='public/js/jquery/jquery.js?ver=2.0.5'></script>
<script type='text/javascript'
        src='public/js/jquery/jquery-migrate.min.js?ver=2.0.5'></script>



<script type='text/javascript'
        src='public/js/theme.min.js?ver=2.0.5'></script>
<script type='text/javascript'
        src='public/js/ResizeSensor.min.js?ver=2.0.5'></script>
<script type='text/javascript'
        src='public/js/masonry.pkgd.min.js?ver=2.0.5'></script>
<script type='text/javascript'
        src='public/js/flickity.pkgd.min.js?ver=2.0.5'></script>
<script type='text/javascript'
        src='public/js/jquery.vertical.carousel.min.js?ver=2.0.5'></script>
<script type='text/javascript'
        src='public/js/theia-sticky-sidebar.min.js?ver=2.0.5'></script>
<script type='text/javascript'
        src='public/js/jquery.popupmanager.min.js?ver=2.0.5'></script>
<script type='text/javascript'
        src='public/js/jquery.sonar.min.js?ver=2.0.5'></script>
<script type='text/javascript'
        src='public/js/images-lazy-load.min.js?ver=2.0.5'></script>

<script type='text/javascript'
        src='public/js/search.min.js?ver=2.0.5'></script>
<script type='text/javascript'
        src='public/js/video-js-player.min.js?ver=2.0.5'></script>

<script type='text/javascript' src='public/js/media-player.min.js?ver=2.0.5'></script>


<script>

    $("#submitEdit").on('click', function () {
        var email = document.getElementById("email").value;
        var name = document.getElementById("name").value;
        var passwordNew = document.getElementById("password-new").value;
        var passwordConfirm = document.getElementById("password-confirm").value;

        if (email == "" || name == "") {
            generate('warning', '<div class="activity-item">لطفا تمامی فیلدهای دارای * را به صورت دقیق تکمیل کنید.</div>');
        }
        else {
            if (passwordNew != "" && passwordConfirm != "" && passwordNew == passwordConfirm) {
                $.post(
                    "user/submitEdit",
                    {
                        'password-new': passwordNew,
                        'name': name
                    },
                    function (data) {
                        if (!data.includes("ok")) {
                            generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا مجددا تلاش نمایید.</div>');
                        }
                        else {
                            generate('success', '<div class="activity-item">عملیات ویرایش با موفقیت انجام شد.</div>');
                            history.back();
                        }
                    }
                );
            }
            else if (passwordNew == "" && passwordConfirm == "") {
                $.post(
                    "user/submitEdit",
                    {
                        'name': name
                    },
                    function (data) {
                        if (!data.includes("ok")) {
                            generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا مجددا تلاش نمایید.</div>');
                        }
                        else {
                            generate('success', '<div class="activity-item">عملیات ویرایش با موفقیت انجام شد.</div>');
                            history.back();
                        }
                    }
                );
            }
            exit();
        }
    });
</script>
</body>
</html>
