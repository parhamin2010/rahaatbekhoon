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

    <title><?= NAME; ?> | پنل کاربری</title>
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
    <div class='container' style="margin-bottom: -75px;margin-top: 18px;">
        <div class='row single-product outer-bottom-sm ' style="margin-bottom: 5px;">
            <div class="col-lg-12">
                <div class="main-content">
                    <div class="row main-wrapper">
                        <div class="col-lg-12" style="padding-left: 0 !important;">
                            <div class="main">

                                <section class="album-list-widget white user-profile mode-block"
                                         style="margin-top: -9px !important;">
                                    <h5 align="right">
                                        <div class="header-text">اطلاعات شما <i
                                                    style="color: lightslategrey;margin-left: 4px" class="fa fa-user"
                                                    aria-hidden="true"></i></div>
                                        <div class="mode-switch-wrap" dir="rtl">
                                            <a style="margin-top: -5px" href="user/edit"
                                               class="edit-profile btn btn-default btn-xs">ویرایش حساب
                                                کاربری</a>
                                        </div>
                                    </h5>
                                    <div class="profile-info main-holder" dir="rtl" style="margin: 10px;">

                                        <div class="name profile-item" style="padding:5px 5px 0 0">
                                            <span><img
                                                        onerror="this.src='public/images/user-default-image.jpg'"
                                                        src="<?= $data['infoUser']['0']['image']; ?>"
                                                        width="50px"
                                                        height="50px"
                                                        alt="" class="img-circle"></span>
                                            <?= $data['infoUser']['0']['name']; ?>
                                        </div>

                                        <div style="padding:5px 5px 10px 0;" class="email profile-item">
                                            <span><i style="color: #ffc000;margin-left: 4px" class="fa fa-envelope"
                                                     aria-hidden="true"></i>پست الکترونیک: </span><span
                                                    class="en"><?= $data['infoUser']['0']['email']; ?></span>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- /.row -->
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
</body>
</html>
