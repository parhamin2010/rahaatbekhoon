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

    <title><?= NAME; ?> | خطا 404</title>
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
    <link href="public/css/css_errorpage.css?v=W9Zha4MI1vBChZOtmEGTp21CQvDyoRYjpgwgdm7ErAQ1"
          rel="stylesheet"/>
</head>
<body class="wmax">

<?php require('app/views/include/login.php'); ?>
<!-- ========== NAVBAR ========== -->
<?php require('app/views/include/header.php'); ?>
<!-- ========== NAVBAR : END ========== -->

<div id="main">
    <div id='content' style="width:100%;text-align: center;">
        <section>
            <div class="error-page">

                <div id="ctl29_error404" class="error-page__message dk-box">

                    <img class="error-page__message--logo"
                         src="public/images/4xx_.png"
                         alt="digikala error page"/>

                    <h1 class="error-page__message--title">متاسفانه صفحه مورد نظر شما یافت نشد.</h1>


                    <p class="error-page__guide-text">می توانید از <span class="showme">اخبار زیر</span> دیدن
                        کنید یا به <a href="<?= URL; ?>" class="error-page__message--button dk-box inline">صفحه اصلی</a>
                        بروید.</p>

                </div>

                <div class="error-page__suggestion">

                    <div class="error-page__suggestion--title" style="text-align: right">
                        پیشنهاد می‌کنیم از اخبار زیر دیدن فرمایید :
                    </div>

                    <ul class="error-page__suggestion--items clearfix" style="margin-bottom: 30px;">

                        <?php
                        $news = $data['getsuggestNews'];
                        foreach ($news as $newsInfo) {

                            ?>
                            <li class="error-page__suggestion--item dk-box">
                                <a href="<?= URL; ?>blog/<?= $newsInfo['n_id']; ?>" class="image-placeholder">
                                    <img onload="this.nextElementSibling.remove()"
                                         class="error-page__suggestion--item-img"
                                         style="height: 80%;margin-right: -149px;"
                                         src="public/images/news/<?= $newsInfo['i_image']; ?>"
                                         alt="mobile"/>
                                    <img class="error-page__suggestion--item-img-holder"
                                         src="public/images/placeholder.png"
                                         alt="placeholder"/>
                                    <span class="error-page__suggestion--item-img-caption"><?= Model::summary($newsInfo['title'], 70); ?></span>
                                </a>
                            </li>

                            <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="clear"></div>

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

</body>
</html>
