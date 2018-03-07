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

    <title><?= NAME; ?> | خبری یافت نشد</title>
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
    <link rel='stylesheet' id='theme-style-css' href='public/css/theme.min.css?ver=2.0.5' type='text/css' media='all'/>

</head>
<body class="wmax">

<?php require('app/views/include/login.php'); ?>
<div class="container" style="padding: 0 !important;overflow-x: hidden">
    <main class="" style="background: rgb(43, 57, 63);">
        <div class="homepage">
<!-- ========== NAVBAR ========== -->
<?php require('app/views/include/header.php'); ?>
<!-- ========== NAVBAR : END ========== -->

<div id="main">
    <div class="inner-wraper">

        <div id='content' style="width:100%;text-align: center;">
            <section>


                <div class="error-page">

                    <div id="ctl29_error404" class="error-page__message dk-box">

                        <img class="error-page__message--logo"
                             src="public/images/search-not-found.png"
                             alt="digikala error page"/>

                        <h1 class="error-page__message--title">متاسفانه در این دسته بندی مطلبی یافت نشد.</h1>

                    </div>

                </div>
            </section>
        </div>
    </div>
    <div class="clear"></div>

</div>

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

</body>
</html>
