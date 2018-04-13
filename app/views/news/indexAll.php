<?php
    Model::sessionInit();
    $news = $data['getNews'];
?>
<!doctype html>
<html dir="rtl" lang="fa-IR" prefix="og: http://ogp.me/ns#">
<head>
    <base href="<?= URL; ?>">
    <meta charset="UTF-8">
    <title><?= NAME; ?> | لیست اخبار</title>

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
                                <span class="bold" style="color: #fff;">لیست  </span><span
                                        style="color: #fff;">آخرین اخبار</span>
                            </div>
                            <div class="module-title__sep"></div>
                        </div>
                        <div class="topics">
                            <div class="topics__content">
                                <h2 class="disappear">آخرین عنوان‌ها</h2>
                                <section id="infinite-articles" class="masonry-gallery" style="margin-right: 23px;height: auto !important;">
    
                                    <?php
                                        foreach ($news as $newsInfo) {
                                            ?>
                                            <div class="masonry-gallery__item">
                                                <div class="image">
                                                    <span class="image__mask"></span>

                                                    <a href="news/<?= $newsInfo['n_id'] ?>"
                                                       title="<?= $newsInfo['title'] ?>" class="image__linker">
                                                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                             data-lazy-src="public/images/news/<?= $newsInfo['i_image'] ?>"
                                                             width="284" height="180" class="image__img wp-post-image"
                                                             alt="<?= $newsInfo['title'] ?>"> </a>


                                                    <a href="topic/category/<?= $newsInfo['cat_id'] ?>"
                                                       title="<?= $newsInfo['name'] ?>"
                                                       class="image__badge"><?= $newsInfo['name'] ?></a>
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

                                                <a href="news/<?= $newsInfo['n_id'] ?>"
                                                   title="<?= $newsInfo['title'] ?>"
                                                   style="padding: 20px 15px;font-size: 13px;text-align: right !important;"
                                                   class="masonry-gallery__item__title"><?= $newsInfo['title'] ?></a>

                                                <div class="masonry-gallery__item__detail" style="float: left">
                                        <span class="past-time"><?= $newsInfo['time'] ?>
                                            &nbsp;<?= $newsInfo['date_created'] ?></span>
                                                    <i class="icon-clock-icon" style="margin-right: 5px"></i>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                </section>
                            </div>
                        </div>

                        <div class="module-title">
                            <div class="module-title__sep"></div>
                            <a id="load_more_button"
                               class="module-title__btn">اخبار بیشتر</a>
                        </div>

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

<script type="text/javascript">
    $(document).ready(function () {

        var track_click = 0; //track user click on "load more" button, righ now it is 0 click

        var total_pages = <?= $data['getCountNewsPage']; ?>;
        $('#infinite-articles').load("news/GetItems", {'page': track_click}, function () {
            track_click++;
        }); //initial data to load

        $(".module-title__btn").click(function (e) { //user clicks on button

            $(this).hide(); //hide load more button on click

            if (track_click <= total_pages) //make sure user clicks are still less than total pages
            {
                //post page number and load returned data into result element
                $.post('news/GetItems', {'page': track_click}, function (data) {

                    $(".module-title__btn").show(); //bring back load more button

                    $("#infinite-articles").append(data); //append data received from server

                    //scroll page to button element
                    $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);

                    track_click++; //user click increment on load button
                    var el = document.getElementById("infinite-articles");
                    var height = el.offsetHeight;
                    var newHeight = height + 308.636;
                    el.style.height = newHeight + 'px';
                    
                }).fail(function (xhr, ajaxOptions, thrownError) {
                    alert("متاسفانه خطایی رخ داده است!لطفا مجددا تلاش نمایید.");
                    $(".module-title__btn").show();
                });


                if (track_click >= total_pages - 1) {
                    //reached end of the page yet? disable load button
                    $(".module-title__btn").attr("disabled", "disabled");
                    $(".module-title__btn").text("تمام شد!");
                }
            }

        });
    });
</script>

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