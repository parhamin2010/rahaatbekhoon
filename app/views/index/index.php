<?php
Model::sessionInit();
$newsVip = $data['getNewsVip'];
print_r($data,true);
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
    <title><?= NAME; ?></title>
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
    <div class="inner-wraper" style="margin-right: 10px;">

        <div id='content'>

            <?php require('app/views/index/slider.php'); ?>
        </div>
        <div id='sidebar'>
            <aside style="background: #fff" id="dk-lastnews-container" class="dk-box mrg-bottom">
                <ul id="newsItems" class="lastnews-list">
                    <li class="clearfix" style="border-bottom: 1px solid #8e8e8e;">
                        <div class="item-thumb">
                            <img
                                    src="public/images/gold.png"
                                    alt="">
                        </div>
                        <div class="item-info">
                            <b class="title" style="">
                                <div style="margin: 0; padding: 0; border: 0;">هر گرم طلای 18 عیار
                                </div>
                            </b>
                            <span><?= $data['getPrice']['geram18']['p']; ?> ریال</span>
                        </div>
                    </li>
                    <li class="clearfix" style="border-bottom: 1px solid #8e8e8e;">
                        <div class="item-thumb">
                            <img
                                    src="public/images/coin.png"
                                    alt="">
                        </div>
                        <div class="item-info"><b class="title" style="">
                                <div style="margin: 0; padding: 0; border: 0;">سکه بهار آزادی
                                </div>
                            </b><span><?= $data['getPrice']['sekeb']['p']; ?> ریال</span></div>
                    </li>
                    <li class="clearfix" style="border-bottom: 1px solid #8e8e8e;">
                        <div class="item-thumb">
                            <img
                                    src="public/images/dollar.png"
                                    alt="">
                        </div>
                        <div class="item-info"><b class="title" style="">
                                <div style="margin: 0; padding: 0; border: 0;">دلار آمریکا
                                </div>
                            </b><span><?= $data['getPrice']['price_dollar_rl']['p']; ?> تومان</span></div>
                    </li>
                    <li class="clearfix">
                        <div class="item-thumb">
                            <img
                                    src="public/images/euro.png"
                                    alt="">
                        </div>
                        <div class="item-info"><b class="title" style="">
                                <div style="margin: 0; padding: 0; border: 0;">یورو</div>
                            </b><span><?= $data['getPrice']['price_eur']['p']; ?> تومان</span></div>
                    </li>
                </ul>
            </aside>

            <a href="about" style="height: 54px; ">
                <img src="public/images/about.jpg"
                     alt="راهکارهای ما"
                     title="راهکارهای ما"/>
            </a>
        </div>
    </div>
    <div class="inner-wraper">
        <?php
        if (sizeof($newsVip) > 0) {
            ?>
            <div class="homepage__main">
                <section class="carousel" style="height: 469px;">
                    <div class="module-title">
                        <h1 class="module-title__txt">
                            <span>اخبار </span><span class="bold">ویژه</span></h1>
                        <div class="module-title__sep"></div>
                    </div>
                    <div class="carousel__body load-failed">
                        <?php
                        foreach ($newsVip as $newsVipInfo) {
                            ?>
                            <a href="blog/<?= $newsVipInfo['n_id'] ?>"
                               class="carousel__body__item" title="<?= $newsVipInfo['title'] ?>">
                                <img src="public/images/news/<?= $newsVipInfo['i_image'] ?>"
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
        <div id='content'>

            <div id="dk-shortcuts-category" style="width: 135.5%">
                <ul class="shortcut-list" style=";float: right">
                    <?php
                    $news = $data['getNews'];
                    foreach ($news as $newsInfo) {
                        if ($newsInfo['model'] != '1') {
                            ?>
                            <li>
                                <a data-ads-placement-type="Shortcut_small" data-ads-placement-id="1070"
                                   title="<?= $newsInfo['title']; ?>"
                                   href="blog/<?= $newsInfo['n_id']; ?>">
                                    <p style="
    bottom: 135px;position: absolute;background: rgba(0,0,0,0.7);padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;color: #e6e7e8">
                                        <?= $newsInfo['name']; ?>
                                    </p>
                                    <img src="public/images/news/<?= $newsInfo['i_image']; ?>"
                                         style="height: 145px;width: 100%;">
                                    <span>
                                    <div style="width: 100%;color: #907878;padding: 10px;height: 145px">
                                        <p style="float: left;margin-top: 5px;margin-right:10px "><?= $newsInfo['date_created']; ?></p>
                                        <p style="float: left;margin-top: 5px;margin-right:10px "><?= $newsInfo['time']; ?></p>
                                    <p style="text-align: right;color: #00a65a;margin-right: 0;margin-top: 5px;font-size: 18pt;font-weight: bolder"><?= $newsInfo['title_no']; ?></p>
                                        <br>
                                    <p style="text-align: right;color: #000;margin-right:0;font-size: 11pt;font-weight: bold;direction: rtl;text-align: justify"><?= Model::summary($newsInfo['title'], 100); ?></p>
                                    </div>
                                </span>
                                </a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="largebox" style="direction: ltr">
                                <a class="row" data-ads-placement-type="Shortcut_big"
                                   data-ads-placement-id="1060" title="<?= $newsInfo['title']; ?>"
                                   href="blog/<?= $newsInfo['n_id']; ?>">
                                    <img src="public/images/news/<?= $newsInfo['i_image']; ?>"
                                         style="float: right;position: absolute;width: 50%;margin-left: 50%;height: 290px">
                                    <p style="
    bottom: -298px;position: absolute;background: rgba(0,0,0,0.7);margin-left: 50%;padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;color: #e6e7e8">
                                        <?= $newsInfo['name']; ?>
                                    </p>

                                    <span>
                                    <div style="right: 290px;float: left;position: absolute;width: 50%;color: #907878;padding: 15px">
                                        <p style="float: left;margin-right:10px "><?= $newsInfo['date_created']; ?></p>
                                        <p style="float: left;margin-right:10px "><?= $newsInfo['time']; ?></p>
                                    <p style="text-align: right;color: #00a65a;margin-right: 30px;font-size: 18pt;font-weight: bolder"><?= $newsInfo['title_no']; ?></p>
                                        <br>
                                    <p style="text-align: right;color: #000;margin-right: 30px;font-size: 11pt;font-weight: bold;direction: rtl;text-align: justify"><?= Model::summary($newsInfo['title'], 100); ?></p><br>
                                        <p style="text-align: right;color: #907878;margin-right: 30px;font-size: 10pt;direction: rtl;text-align: justify"><?= Model::summary($newsInfo['subtitle'], 500); ?></p>
                                    </div>
                                </span>
                                </a>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>

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
</body>
</html>
