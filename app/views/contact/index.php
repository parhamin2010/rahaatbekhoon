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
</head>
<body class="wmax" style="background:#283036;">

<?php require('app/views/include/login.php'); ?>

<!-- ========== NAVBAR ========== -->
<?php require('app/views/include/header.php'); ?>
<!-- ========== NAVBAR : END ========== -->

<div class="container">
    <div class="row inner-bottom-sm">
        <div class="contact-page">

            <div class="col-lg-3 sign-in">
                <aside class="sidebar">
                    <div class="beep-side-widget what-is-beep white-bg contact-info" dir="rtl">
                        <h5>اطلاعات تماس</h5>
                        <div class="clearfix phone-no">
                                <span class="contact-i" style="float: right; margin-top: 10px; margin-left: 5px;"><i
                                            class="fa fa-phone"></i></span>
                            <span class="contact-span"
                                  style="padding-top: 10px;">051-33123313<br>051-33123314</span>
                        </div>
                        <div class="clearfix email">
                                <span class="contact-i"
                                      style="float: right; margin-bottom: 15px; margin-top: 10px; margin-left: 5px;"><i
                                            class="fa fa-envelope"></i></span>
                            <span class="contact-span" style="padding-top: 15px;"><a
                                        href="mailto:support@headphone.com">info@irandall.ir</a></span>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-lg-9">
                <div class="main">
                    <div class="voucher-wrap" dir="rtl">
                        <h5>فرم ارتباط با ما</h5>
                        <div class="row wrap" style="background-color: #fefefe;margin: -10px 0 0 0">
                            <div id="labelTest" class="google-signup-tip">سوالات،انتقادات و پیشنهادات خود را از طریق فرم زیر می
                                توانید برای ما ارسال کنید.
                            </div>
                            <hr>
                            <div class="col-md-12 col-sm-12 sign-in">
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
                </div>
            </div>
        </div><!-- /.contact-page -->
    </div><!-- /.row -->
</div><!-- /.container -->


<!-- ========================= FOOTER ========================= -->
<?php require('app/views/include/footer.php'); ?>
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


<script>
    $("#btn-submit").on('click', function () {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var title = document.getElementById("title").value;
        var text = document.getElementById("text").value;
        if (text == "") {
            generate('warning', '<div class="activity-item">لطفا ابتدا پیام خود را نوشته و سپس اقدام به ارسال کنید.</div>');
        }else if (email == "") {
            generate('warning', '<div class="activity-item">لطفا ایمیل خود را وارد کنید.</div>');
        }else if (title == "") {
            generate('warning', '<div class="activity-item">لطفا عنوان پیام خود را وارد کنید.</div>');
        }else if (name == "") {
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