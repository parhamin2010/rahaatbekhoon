<?php
Model::sessionInit();
$UserEmail = Model::sessionGet('email');
$UserName = Model::sessionGet('name');
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

    <title><?= NAME; ?> | ارتباط با ما</title>
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


    <link rel='stylesheet' id='theme-style-css' href='public/css/theme.min.css?ver=2.0.5' type='text/css' media='all'/>


</head>
<body class="rtl home page-template page-template-page-home page-template-page-home-php page page-id-123 wmax">

<div class="container" style="padding: 0 !important;overflow-x: hidden">
    <main class="" style="background: rgb(43, 57, 63);">
        <div class="homepage">
            <?php require('app/views/include/login.php'); ?>

            <!-- ========== NAVBAR ========== -->
            <?php require('app/views/include/header.php'); ?>
            <!-- ========== NAVBAR : END ========== -->




            <div class="container" style="direction: rtl">
                <div class="row" >
                    <div class="col-md-12 col-sm-12" dir="rtl" style="margin: 10px">
                        <h5>فرم ارتباط با ما</h5>
                        <div class="row wrap" style="background-color: #fefefe;margin: -10px 0 0 0">
                            <div id="labelTest" class="google-signup-tip">سوالات،انتقادات و پیشنهادات خود را از طریق فرم
                                زیر می
                                توانید برای ما ارسال کنید.
                            </div>
                            <hr>
                            <div class="col-md-9 col-sm-9 sign-in">
                                <div class="register-form outer-top-xs">
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label class="info-title" for="name" id="nameLabel" dir="rtl"
                                                   style="float: right;">نام</label>
                                            <input type="email" class="form-control unicase-form-control text-input"
                                                   value="<?= $UserName; ?>"
                                                   id="name" placeholder="مثال: خسرو جعفری">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="info-title" for="email" id="emailLabel" dir="rtl"
                                                   style="float: right;">ایمیل<span>*</span></label>
                                            <input type="email" class="form-control unicase-form-control text-input"
                                                   value="<?= $UserEmail; ?>"
                                                   style="text-align:left;"
                                                   id="email" placeholder="mymail@mailserver.com">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="info-title" for="title" id="titleLabel" dir="rtl"
                                                   style="float: right;">عنوان</label>
                                            <input type="email" class="form-control unicase-form-control text-input"
                                                   id="title" placeholder="عنوان پیام">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="info-title" id="textLabel" for="text" dir="rtl"
                                                   style="float: right;">متن
                                                پیام<span>*</span></label>
                                            <textarea class="form-control unicase-form-control"
                                                      id="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 outer-bottom-small m-t-20">
                                        <button id="btn-submit" class="btn-upper btn btn-primary checkout-page-button"
                                                dir="rtl"
                                                style="float: right;">ارسال پیام
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-12 col-sm-12" style="margin: 10px;">
                        <aside class="col-md-3">
                            <div class="beep-side-widget what-is-beep white-bg contact-info" dir="rtl">
                                <h5>اطلاعات تماس</h5>
                                <div class="clearfix phone-no">
                                <span class="contact-i" style="float: right; margin: 10px; margin-left: 5px;"><i
                                        class="fa fa-phone"></i></span>
                                    <span class="contact-span"
                                          style="padding-top: 10px;">051-33123313<br>051-33123314</span>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <?php require('app/views/include/footer.php'); ?>
        </div><!-- /.contact-page -->
    </main><!-- /.row -->

</div><!-- /.container -->


<!-- ========================= FOOTER ========================= -->
<!-- ========================= FOOTER : END========================= -->


<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="public/js/jquery-1.11.1.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/scripts.js"></script>
<script src="public/js/login.js"></script>

<script src="public/js/jquery.noty.packaged.js"></script>
<script src="public/js/jquery-latest.js"></script>
<script src="public/js/jquery.noty.packaged.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/bootstrap-hover-dropdown.min.js"></script>
<script src="public/js/countdown.js"></script>
<script src="public/js/echo.min.js"></script>
<script src="public/js/bootstrap-slider.min.js"></script>
<script src="public/js/lightbox.min.js"></script>
<script src="public/js/bootstrap-select.min.js"></script>
<script src="public/js/Track-player.js"></script>
<script src="public/js/wow.min.js"></script>
<script src="public/js/pace.js"></script>
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


<script>
    $("#btn-submit").on('click', function () {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var title = document.getElementById("title").value;
        var text = document.getElementById("text").value;
        if (text == "") {
            generate('warning', '<div class="activity-item">لطفا ابتدا پیام خود را نوشته و سپس اقدام به ارسال کنید.</div>');
        } else if (email == "") {
            generate('warning', '<div class="activity-item">لطفا ایمیل خود را وارد کنید.</div>');
        } else if (title == "") {
            generate('warning', '<div class="activity-item">لطفا عنوان پیام خود را وارد کنید.</div>');
        } else if (name == "") {
            generate('warning', '<div class="activity-item">لطفا نام و نام خانوادگی خود را وارد کنید.</div>');
        }
        else {
            $.post(
                "contact/sendMessage",
                {
                    'name': name,
                    'email': email,
                    'title': title,
                    'text': text
                },
                function (data) {
                    if (data == "ok") {
                        generate('success', '<div class="activity-item">پیام شما باموفقیت ثبت شد.</div>');
                        document.getElementById('text').style.display = 'none';
                        document.getElementById('title').style.display = 'none';
                        document.getElementById('email').style.display = 'none';
                        document.getElementById('name').style.display = 'none';
                        document.getElementById('textLabel').style.display = 'none';
                        document.getElementById('titleLabel').style.display = 'none';
                        document.getElementById('emailLabel').style.display = 'none';
                        document.getElementById('nameLabel').style.display = 'none';
                        document.getElementById('btn-submit').style.display = 'none';
                        document.getElementById('labelTest').innerHTML = "پیام شما باموفقیت ثبت و در صورت نیاز به ایمیل شما پاسخ ارسال خواهد شد.";
                    }
                    else {
                        generate('warning', '<div class="activity-item">پیام شما قبلا ثبت شده است.</div>');
                    }
                }
            );
        }
    });
</script>
</body>
</html>