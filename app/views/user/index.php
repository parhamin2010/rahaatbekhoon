<?php
Model::sessionInit();
?>
<!doctype html>
<html dir="rtl" lang="fa-IR" prefix="og: http://ogp.me/ns#">
<head>
    <base href="<?= URL; ?>">
    <meta charset="UTF-8">
    <title><?= NAME; ?> | پنل کاربری</title>

    <meta name="description"
          content="<?= NAME; ?>"/>
    <meta name="robots" content="noodp"/>
    <link rel="canonical" href="<?= URL; ?>"/>
    <meta property="og:locale" content="fa_IR"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?= NAME; ?>"/>
    <meta property="og:description"
          content="<?= NAME; ?>"/>
    <meta property="og:url" content="<?= URL; ?>"/>
    <meta property="og:site_name" content="<?= NAME; ?>"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description"
          content="<?= NAME; ?>"/>
    <meta name="twitter:title" content="<?= NAME; ?>"/>
    <meta name="twitter:creator" content="<?= NAME; ?>"/>

    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- Customizable CSS -->
    <link href="public/css/pace-theme-flash.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-social.css">
    <link href="public/css/application.track.index.css" rel="stylesheet" type="text/css">

    <?php require('app/views/include/favicon.php'); ?>

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/owl.transitions.css">
    <link href="public/css/lightbox.css" rel="stylesheet">


    <link href="public/css/css_main.css?v=d34y6GouB8OIqYbVXfO54Dw2tDZG8gAwP5JRzPLXebU1"
          rel="stylesheet"/>

    <link rel='stylesheet' id='cptch_stylesheet-css' href='public/css/front_end_style.css?ver=2.0.5' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='dashicons-css' href='public/css/dashicons.min.css?ver=2.0.5' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='cptch_desktop_style-css' href='public/css/desktop_style.css?ver=2.0.5' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='theme-style-css' href='public/css/theme.min.css?ver=2.0.5' type='text/css' media='all'/>
</head>

<body class="rtl home page-template page-template-page-home page-template-page-home-php page page-id-123 wmax">
<div class="container" style="padding: 0 !important;overflow-x: hidden">
    <main class="home__page" style="background: rgb(43, 57, 63);">
        <div class="homepage">
            <!-- ========== NAVBAR ========== -->
            <?php require('app/views/include/header.php'); ?>
            <!-- ========== NAVBAR : END ========== -->

    <div class='container' style="margin-bottom: -75px;margin-top: 18px;">
        <div class='row single-product outer-bottom-sm ' style="margin-bottom: 5px;">
            <div class="col-lg-12">
                <div class="main-content">
                    <div class="row main-wrapper">
                        <div class="col-lg-12" style="padding-left: 0 !important;">
                            <div class="main">

                                <section class="album-list-widget white user-profile mode-block"
                                         style="margin-top: -9px !important;width: 100%">
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
        <br>
        <br>
        <br>
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
