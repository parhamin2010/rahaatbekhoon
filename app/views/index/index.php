<?php
Model::sessionInit();
$news = $data['getNews'];
$newsVip = $data['getNewsVip'];
?>
<!doctype html>
<html dir="rtl" lang="fa-IR" prefix="og: http://ogp.me/ns#">
<head>


    <base href="<?= URL; ?>">
    <meta charset="UTF-8">
    <title><?= NAME; ?></title>

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

<body class="rtl home page-template page-template-page-home page-template-page-home-php page page-id-123 wmax" style="font-size: 12pt">

<!--   <a href="https://raahatbekhar.com"> <img class="animated pulsee infinite" src="public/images/raahatbekhar.png" style="width: 175px;-->
<!--    height: 109px;-->
<!--    position: fixed;-->
<!--    z-index: 200;-->
<!--    margin-right: 89.5%;-->
<!--    margin-top: 170px;-->
<!--    padding: 5px;-->
<!--    text-align: center;-->
<!--    border-top-right-radius: 10px;-->
<!--    border-bottom-right-radius: 10px;-->
<!--    padding: 0px;-->
<!--    box-shadow: 0px 0 10px 4px rgba(0,0,0,0.5);-->
<!--    "/>-->
<!--   </a>-->

<?php require('app/views/include/login.php'); ?>


<div class="container" style="padding: 0 !important;">
    <main class="home__page" style="background: rgb(43, 57, 63);">
        <div class="homepage">
            <!-- ========== NAVBAR ========== -->
            <?php require('app/views/include/header.php'); ?>
            <!-- ========== NAVBAR : END ========== -->
            <div class="W-100" style="z-index: 300;background: #4f0000;box-shadow: 0px 1px 10px #000">
                <?php require('app/views/index/slider.php'); ?>
            </div>
            <div class="homepage__header">
                <div class="homepage__header__content">
                    <!--                    --><?php
                    //                    if (sizeof($news) > 0) {
                    //                        ?>
                    <!--                        <div class="news-ticker" id="news-ticker" style="min-width: 1200px">-->
                    <!--                            <div class="news-ticker__head">-->
                    <!--                                <div class="news-ticker__head--loader">-->
                    <!--                                    <div class="radial-progress">-->
                    <!--                                        <svg height="26" width="26">-->
                    <!--                                            <circle cx="13" cy="13" r="12" stroke="#2899d5" stroke-width="2"-->
                    <!--                                                    fill="transparent"/>-->
                    <!--                                        </svg>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="news-ticker__head--txt">-->
                    <!--                                    <span>اخبار کوتاه</span>-->
                    <!--                                </div>-->
                    <!--                                <div class="news-ticker__head--sep"></div>-->
                    <!--                                <div class="news-ticker__head--nav">-->
                    <!--                                    <i class="icon-arrow-up down"></i>-->
                    <!--                                    <i class="icon-arrow-up up"></i>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!---->
                    <!--                            <div id="tick-text" style="background: rgba(76, 175, 80, 0.2);">-->
                    <!--                                <ul class="news-ticker__txt innerWrap news-items">-->
                    <!---->
                    <!--                                    --><?php
                    //                                    foreach ($news as $newsInfo) {
                    //                                        ?>
                    <!--                                        <li class="_item list">-->
                    <!--                                        <span class="_text">-->
                    <!--                                            <a href="news/--><? //= $newsInfo['n_id'] ?><!--"-->
                    <!--                                               title="--><? //= $newsInfo['title'] ?><!--">-->
                    <? //= $newsInfo['title'] ?><!--</a>-->
                    <!--                                        </span>-->
                    <!---->
                    <!--                                            <div class="news-ticker__time">-->
                    <!--                                                <div class="news-ticker__time--txt">-->
                    <!--                                                    <span>--><? //= $newsInfo['time'] ?>
                    <!--                                                        &nbsp;-->
                    <? //= $newsInfo['date_created'] ?><!--</span>-->
                    <!--                                                </div>-->
                    <!--                                                <i class="icon-clock-icon" style="margin-right: 5px"></i>-->
                    <!--                                            </div>-->
                    <!--                                        </li>-->
                    <!--                                        --><?php
                    //                                    }
                    //                                    ?>
                    <!---->
                    <!--                                </ul>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        --><?php
                    //                    }
                    //                    ?>

                </div>
            </div>
            <?php
            if (sizeof($newsVip) > 0) {
                ?>
                <div class="homepage__main">
                    <section class="carousel" style="height: 469px;">
                        <div class="module-title">
                            <h1 class="module-title__txt">
                                <span>آخرین </span><span class="bold">اخبار</span></h1>
                            <div class="module-title__sep"></div>
                        </div>
                        <div class="carousel__body load-failed">
                            <?php
                            foreach ($newsVip as $newsVipInfo) {
                                ?>
                                <a href="news/<?= $newsVipInfo['n_id'] ?>"
                                   class="carousel__body__item" title="<?= $newsVipInfo['title'] ?>">
                                    <img src="public/images/news/<?= $newsVipInfo['i_image'] ?>"
                                         onerror="this.src='public/images/default.png'"
                                         data-lazy-src="public/images/news/<?= $newsVipInfo['i_image'] ?>"
                                         width="284" height="180" class="image__img wp-post-image"
                                         alt="<?= $newsVipInfo['title'] ?>">
                                    <span class="item__txt">
                                    <span><?= $newsVipInfo['title'] ?></span>
                                </span>
                                    <span class="item__details">
                                <time datetime="<?= $newsVipInfo['time'] ?>&nbsp;<?= $newsVipInfo['date_created'] ?>"
                                      class="item__details--date"><?= $newsVipInfo['time'] ?>
                                    &nbsp;<?= $newsVipInfo['date_created'] ?></time>
                                <i class="icon-clock-icon" style="margin-right: 5px"></i>
                            </span>
                                </a>

                                <?php
                            }
                            ?>
                        </div>
                        <div class="carousel__btn--left">
                            <i class="icon-arrow-up"></i>
                        </div>
                        <div class="carousel__btn--right">
                            <i class="icon-arrow-up"></i>
                        </div>
                    </section>
                </div>
                <?php
            }
            ?>
        </div>

        <div class="main" style="background: #2b393f;">
            <div class="main__aside sticky-sidebar__distant">
                <div class="theiaStickySidebar">
                </div>
            </div>

            <?php
            $news = $data['getNews'];
            if (sizeof($news) > 0) {
                ?>
                <div class="main__content" style="margin-right: -2px;">
                    <div class="module-title">
                        <div class="module-title__txt">
                            <span class="bold" style="color: #fff;">آخرین  </span><span
                                    style="color: #fff;">نشریات</span>
                        </div>
                        <div class="module-title__sep"></div>
                    </div>
                    <div class="topics">
                        <div class="topics__content">
                            <section class="masonry-gallery" style="    margin-right: 23px;">
                                <h2 class="disappear">آخرین عنوان‌ها</h2>

                                <?php
                                foreach ($news as $newsInfo) {
                                    ?>
                                    <div class="masonry-gallery__item">
                                        <div class="image">
                                            <span class="image__mask"></span>

                                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                 onerror="this.src='public/images/default.png'"
                                                 data-lazy-src="public/images/news/<?= $newsInfo['i_image'] ?>"
                                                 width="284" height="180" class="image__img wp-post-image"
                                                 alt="<?= $newsInfo['title'] ?>">


                                            <a href="topic/category/<?= $newsInfo['cat_id'] ?>"
                                               title="<?= $newsInfo['name'] ?>"
                                               class="image__badge">
                                                <i class="fa fa-cloud-download"></i> دانلود
                                            </a>
                                            <span class="image__fav">
                                                <span class="popularity">
                                                      <span class="popularity__comments">
                                                        <i class="icon-comment"></i>
                                                        <span style="margin-top: -5px;margin-left: 5px;"
                                                              class="popularity__comments--num">۰</span>
                                                      </span>
                                                      <span class="popularity__likes">
                                                        <i class="icon-view"></i>
                                                        <span style="margin-top: -5px;margin-left: 5px;"
                                                              class="popularity__likes--num"><?= $newsInfo['view'] ?></span>
                                                      </span>
                                                </span>
                                        </span>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                            </section>
                        </div>
                    </div>
                    <!--                <div class="module-title">-->
                    <!--                    <div class="module-title__sep"></div>-->
                    <!--                    <a href="http://www.digikala.com/mag/%d8%a8%d8%a7%db%8c%da%af%d8%a7%d9%86%db%8c/"-->
                    <!--                       class="module-title__btn">مشاهده عناوین بیشتر</a>-->
                    <!--                </div>-->
                </div>
                <?php
            }
            ?>
        </div>
    </main>
    <?php require('app/views/include/login.php'); ?>
    <!-- ========================= FOOTER ========================= -->
    <?php require('app/views/include/footer.php'); ?>
    <!-- ========================= FOOTER : END========================= -->

</div>

<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="public/js/jquery-1.11.1.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/scripts.js"></script>
<script src="public/js/login.js"></script>
<script type="text/javascript" src="public/js/jquery.js"></script>

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