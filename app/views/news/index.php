<?php
Model::sessionInit();
$news = $data['getNews'];
$UserID = Model::sessionGet('userId');
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR" prefix="og: http://ogp.me/ns#" style="transform: none;">
<head>
    <base href="<?= URL; ?>">
    <meta charset="UTF-8">
    <title><?= NAME; ?> | <?= $news[0]['title'] ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="description" content="<?= $news[0]['title'] ?>">
    <meta name="robots" content="noodp">
    <link rel="canonical" href="<?= URL ?>news/<?= $news[0]['n_id'] ?>">
    <meta property="og:locale" content="fa_IR">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= NAME; ?> | <?= $news[0]['title'] ?>">
    <meta property="og:description" content="<?= $news[0]['title'] ?>">
    <meta property="og:url" content="<?= URL ?>news/<?= $news[0]['n_id'] ?>">
    <meta property="og:site_name" content="<?= NAME; ?>">
    <meta property="article:tag" content="Flamethrower">
    <meta property="article:tag" content="<?= $news[0]['title'] ?>">
    <meta property="article:section" content="جدیدترین اخبار">
    <meta property="article:published_time" content="<?= $news[0]['date_created'] ?>">
    <meta property="article:modified_time" content="<?= $news[0]['date_created'] ?>">
    <meta property="og:updated_time" content="<?= $news[0]['date_created'] ?>">
    <meta property="og:image"
          content="<?= URL ?>public/images/news/<?= $news[0]['i_image'] ?>">
    <meta property="og:image:width" content="822">
    <meta property="og:image:height" content="522">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="<?= $news[0]['subtitle'] ?>">
    <meta name="twitter:title" content="<?= NAME; ?> | <?= $news[0]['title'] ?>">
    <meta name="twitter:image" content="<?= URL ?>public/images/news/<?= $news[0]['i_image'] ?>">


    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-social.css">
    <link href="public/css/application.track.index.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/owl.transitions.css">


    <link href="public/css/pace-theme-flash.css" rel="stylesheet"/>
    <link href="public/css/lightbox.css" rel="stylesheet">

    <link rel="stylesheet" id="cptch_stylesheet-css" href="public/DigiWeb_files/front_end_style.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="dashicons-css" href="public/DigiWeb_files/dashicons.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="cptch_desktop_style-css" href="public/DigiWeb_files/desktop_style.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="public/DigiWeb_files/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-rtl-css" href="public/DigiWeb_files/styles-rtl.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="responsive-lightbox-nivo-css" href="public/DigiWeb_files/nivo-lightbox.min.css"
          type="text/css" media="all">
    <link rel="stylesheet" id="responsive-lightbox-nivo-default-css" href="public/DigiWeb_files/default.css"
          type="text/css" media="all">
    <!--    <link rel="stylesheet" id="theme-style-css" href="public/DigiWeb_files/theme.min.css" type="text/css" media="all">-->
    <script type="text/javascript" src="public/DigiWeb_files/jquery.js"></script>
    <script type="text/javascript" src="public/DigiWeb_files/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="public/DigiWeb_files/nivo-lightbox.min.js"></script>

    <?php require('app/views/include/favicon.php'); ?>

    <link href="public/css/css_main.css?v=d34y6GouB8OIqYbVXfO54Dw2tDZG8gAwP5JRzPLXebU1"
          rel="stylesheet"/>

    <style id="theia-sticky-sidebar-stylesheet-TSS">.theiaStickySidebar:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>

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


    <!--    <link rel='stylesheet' id='theme-style-css' href='public/css/theme.min.css?ver=2.0.5' type='text/css' media='all'/>-->


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

<body class="rtl post-template-default single single-post postid-368348 single-format-standard wmax"
      style="transform: none;">

<?php require('app/views/include/login.php'); ?>

<div class="container" style="padding: 0 !important;overflow-x: hidden">
    <main class="" style="background: rgb(43, 57, 63);">
        <div class="homepage">
            <!-- ========== NAVBAR ========== -->
            <?php require('app/views/include/header.php'); ?>
            <!-- ========== NAVBAR : END ========== -->

            <div class="container" style="transform: none;padding-right: 0;padding-left: 0">
                <div class="main single__page" style="transform: none;">
                    <div class="main__content" style="transform: none;">
                        <div class="topics wrapper" style="transform: none;margin-bottom: 40px;">
                            <div class="topics__content">
                                <div class="post-module post-368348 post type-post status-publish format-standard has-post-thumbnail hentry category-74 category-94 category-87 category-89 tag-flamethrower tag-the-boring-company tag-46990 tag-518 tag-133"
                                     id="post-368348" style="padding: 0 30px;">
                                    <article>
                                        <div class="post-module__content">
                                            <figure class="post-attachment"
                                                    style="margin-bottom: 10px;float: left;position: relative;padding: 10px">
                                                <a href="public/images/news/<?= $news['all_images'][0]['i_image']; ?>"
                                                   data-lightbox="image-1"
                                                   data-title="<?= $news[0]['title']; ?>">
                                                    <img alt="<?= Model::summary($news[0]['title'], 100); ?>"
                                                         onerror="this.src='public/images/album-default.jpg'"
                                                         class="album-cover"
                                                         style="height: 300px;border-radius: 10px"
                                                         src="public/images/news/<?= $news['all_images'][0]['i_image']; ?>"/>
                                                    <div class="zoom-overlay"></div>
                                                </a>
                                                <figcaption class="hidden-seo">
                                                </figcaption>
                                            </figure>

                                            <p style="position: relative;text-align: justify;direction: rtl">
                                    <span style="text-align: right">
                                        <?= $news[0]['date_created'] ?>
                                    </span>
                                                &nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;
                                                <span style="text-align: left">
                                        <?= $news[0]['time'] ?>
                                    </span><br>
                                            <p style="font-weight: bold;font-size: 14pt">
                                                <?= $news[0]['title'] ?>
                                            </p>
                                            <p style="position: relative;text-align: justify;direction: rtl;margin-top: -20px">
                                                <?= $news[0]['subtitle'] ?>
                                            </p>
                                            <p style="position: relative;text-align: justify;direction: rtl;margin-top: -20px">
                                                <?= htmlspecialchars_decode($news[0]['description']) ?>
                                            </p>
                                        </div>
                                        <?php
                                        if ($news[0]['tag'] != '0') {
                                            ?>
                                            <div class="_sep"></div>
                                            <div class="post-module__tags ">
                                                <span class="post-module__tags--title">برچسب‌ها :</span>
                                                <?php
                                                $tags = explode(",", $news[0]['tag']);
                                                foreach ($tags as $tag) {
                                                    if ($tag != '') {
                                                        ?>
                                                        <a href="tag/<?= $tag; ?>" rel="tag"
                                                           class="post-tag post-module__tags--item item"><?= $tag; ?></a>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </article>
                                    <div class="col-md-12 col-sm-12 ">
                                        <div style="color: #9ba4ab;float: left;">
                                                <span class="social-networks">
                                                         <a class="icon-telegram" rel="nofollow"
                                                            href="https://telegram.me/share/url?url=<?= URL ?>news/<?= $news[0]['n_id'] ?>&amp;text=<?= $news[0]['title'] ?>"
                                                            target="_blank">
                                                         </a>

                                                         <a class="icon-g-plus" rel="nofollow"
                                                            href="https://plus.google.com/share?url=<?= URL ?>news/<?= $news[0]['n_id'] ?>"
                                                            target="_blank">
                                                         </a>

                                                         <a class="icon-twitter" rel="nofollow"
                                                            href="http://twitter.com/intent/tweet/?text=<?= $news[0]['title'] ?>&amp;url=<?= URL ?>news/<?= $news[0]['n_id'] ?>"
                                                            target="_blank">
                                                         </a>

                                                         <a class="icon-fb" rel="nofollow"
                                                            href="http://www.facebook.com/sharer/sharer.php?m2w&amp;s=100&amp;p[url]=<?= URL ?>news/<?= $news[0]['n_id'] ?>&amp;p[images][0]=<?= URL ?>public/images/news/<?= $news[0]['i_image'] ?>&amp;p[title]=<?= $news[0]['title'] ?>&amp;p[summary]=<?= $news[0]['subtitle'] ?>"
                                                            target="_blank">
                                                         </a>

                                                         <a class="icon-linkedin" rel="nofollow"
                                                            href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?= URL ?>news/<?= $news[0]['n_id'] ?>&amp;title=<?= $news[0]['title'] ?>&amp;source=<?= URL ?>"
                                                            target="_blank">
                                                         </a>
                                                   </span>
                                        </div>
                                    </div>
                                    <section>
                                        <hr>
                                        <div class="error-page">
                                            <div class="error-page__suggestion">
                                                <div class="error-page__suggestion--title"
                                                     style="color:#6b7074;text-align: right">اخبار مرتبط :
                                                </div>
                                                <ul class="error-page__suggestion--items clearfix"
                                                    style="margin-bottom: 30px;">
                                                    <?php
                                                    $news = $data['getsuggestNews'];
                                                    foreach ($news as $newsInfo) {
                                                        ?>
                                                        <li class="error-page__suggestion--item dk-box">
                                                            <a href="<?= URL; ?>news/<?= $newsInfo['n_id']; ?>"
                                                               class="image-placeholder">
                                                                <img onload="this.nextElementSibling.remove()"
                                                                     class="error-page__suggestion--item-img"
                                                                     style="height: 80%;"
                                                                     src="public/images/news/<?= $newsInfo['i_image']; ?>"
                                                                     alt="mobile"/>
                                                                <img class="error-page__suggestion--item-img-holder"
                                                                     src="public/images/placeholder.png"
                                                                     alt="placeholder"/>
                                                                <span class="error-page__suggestion--item-img-caption"
                                                                      style="font-size: 8pt"><?= Model::summary($newsInfo['title'], 70); ?></span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="comments-template">
                                        <div class="_sep"></div>
                                        <?php
                                        if ($UserID == false) {
                                            ?>
                                            <div id="respond" class="comment-respond">
                                                <label class="info-title" for="InputComments">برای ثبت نظر می بایست
                                                    ابتدا
                                                    <a style="cursor: pointer" data-toggle="modal"
                                                       data-target="#Google-Login-Modal"
                                                       id="signin">وارد</a> شوید.</label>
                                            </div><!-- #respond -->

                                        <?php } else { ?>
                                            <div id="respond" class="comment-respond">
                                                <strong id="reply-title" class="comment-reply-title">دیدگاه شما
                                                    <small><a rel="nofollow" id="cancel-comment-reply-link"
                                                              href="https://www.digikala.com/mag/%d8%a7%db%8c%d9%84%d8%a7%d9%86-%d9%85%d8%a7%d8%b3%da%a9-%d8%a2%d8%aa%d8%b4%e2%80%8c%d8%a7%d9%81%da%a9%d9%86-%d9%87%d9%85-%d9%85%db%8c%e2%80%8c%d9%81%d8%b1%d9%88%d8%b4%d8%af/#respond"
                                                              style="display:none;"><i class="icon-close"></i>انصراف</a>
                                                    </small>
                                                </strong>
                                                <form action="news/addComment" method="post"
                                                      id="commentform" class="comment-form">
                                                    <div class="comment-form_avatar"><i class="icon-user"></i></div>
                                                    <div class="comment-fields">

                                                        <p class="cptch_block"><span
                                                                    class="cptch_wrap cptch_math_actions">
				<label class="cptch_label" for="cptch_input_94"><span class="cptch_span">
                        <input id="cptch_input_94"
                               class="cptch_input cptch_wp_comments"
                               type="text"
                               autocomplete="off"
                               name="cptch_number"
                               value="" maxlength="2"
                               size="2"
                               aria-required="true"
                               required="required"
                               style="margin-bottom:0;display:inline;font-size: 12px;width: 40px;"></span>
					<span class="cptch_span">&nbsp;+&nbsp;</span>
					<span class="cptch_span">هفت</span>
					<span class="cptch_span">&nbsp;=&nbsp;</span>
					<span class="cptch_span">11</span>
					<input type="hidden" name="cptch_result" value="pYU="><input type="hidden" name="cptch_time"
                                                                                 value="1518106942">
					<input type="hidden" name="cptch_form" value="wp_comments">
				</label><span class="cptch_reload_button_wrap hide-if-no-js">
					<noscript>
						&lt;style type="text/css"&gt;
							.hide-if-no-js {
								display: none !important;
							}
						&lt;/style&gt;
					</noscript>
					<span class="cptch_reload_button dashicons dashicons-update"></span>
				</span></span></p>
                                                    </div>
                                                    <div class="comment-form-comment"><textarea id="comment"
                                                                                                name="comment"
                                                                                                style="border:0"
                                                                                                class="form-control"
                                                                                                cols="45"
                                                                                                rows="8"
                                                                                                aria-required="true"
                                                                                                placeholder="دیدگاه"></textarea>
                                                    </div>
                                                    <p class="form-submit"><input style="border:0" name="submit"
                                                                                  type="submit"
                                                                                  id="submit-comment"
                                                                                  class="comment-submit-btn"
                                                                                  value="ارسال دیدگاه">
                                                        <input style="border:0" type="hidden" name="comment_post_ID"
                                                               value="368348"
                                                               id="comment_post_ID">
                                                        <input style="border:0" type="hidden" name="comment_parent"
                                                               id="comment_parent"
                                                               value="0">
                                                    </p></form>
                                            </div><!-- #respond -->
                                        <?php } ?>

                                        <div id="comments">

                                            <div class="module-title">
                                                <div class="module-title__txt">
                                                    <strong class="bold heading">۲ دیدگاه</strong>
                                                </div>
                                                <div class="module-title__sep"></div>
                                            </div>

                                            <div id="commentlist-container">

                                                <ol class="post-module__comments commentlist">

                                                    <li class="comment even thread-even depth-1 single-comment _item _person"
                                                        id="li-comment-201416">
                                                        <div id="comment-201416" class="comment-body">

                                                            <div class="_item__user comment-meta ">
                                                                <img src="public/DigiWeb_files/Default_Profile_Picture1.jpg"
                                                                     width="35"
                                                                     height="35" alt="سعید"
                                                                     class="avatar avatar-35wp-user-avatar wp-user-avatar-35 alignnone photo avatar-default">
                                                                <span class="_item__user--name vcard">
                    <span class="fn">سعید</span>
                </span>
                                                                <span class="_item__user--date">
                    <i class="icon-clock-icon"></i>
                    <time datetime="۱۳۹۶-۱۱-۸ ۱۳:۵۹:۰۸ +۰۳:۳۰" class="_date">۸ بهمن ۱۳۹۶  |  ۱۳:۵۹</time>
                </span>
                                                                <?php
                                                                if ($UserID == true) {
                                                                    ?>
                                                                    <div class="_item__user--like-reply">
                                                        <span class="_btn">
                        <a rel="nofollow" class="comment-reply-link"
                           href="https://www.digikala.com/mag/%d8%a7%db%8c%d9%84%d8%a7%d9%86-%d9%85%d8%a7%d8%b3%da%a9-%d8%a2%d8%aa%d8%b4%e2%80%8c%d8%a7%d9%81%da%a9%d9%86-%d9%87%d9%85-%d9%85%db%8c%e2%80%8c%d9%81%d8%b1%d9%88%d8%b4%d8%af/?replytocom=201416#respond"
                           onclick="return addComment.moveForm( &quot;comment-201416&quot;, &quot;201416&quot;, &quot;respond&quot;, &quot;368348&quot; )"
                           aria-label="پاسخ به سعید"><i class="icon-reply-arrow"></i></a>
                                                        </span>

                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>

                                                            <div class="_item__comment">
                                                                <p>عجیبه که تعبیر شما از کلمه Boring در اسم این شرکت به
                                                                    صورت خسته
                                                                    بوده! در اینجا به معنی حفاری هست… چه ربطی به خسته
                                                                    داره
                                                                    آخه…؟!!</p>
                                                            </div>

                                                        </div>

                                                        <ol class="children _item__comment__reply">

                                                            <li class="comment byuser comment-author-amir-mirzaee bypostauthor odd alt depth-2 single-comment _item _person"
                                                                id="li-comment-201498">
                                                                <div id="comment-201498" class="comment-body">

                                                                    <div class="_item__user comment-meta post-author">
                                                                        <img src="public/DigiWeb_files/Default_Profile_Picture1.jpg"
                                                                             width="35" height="35"
                                                                             alt="امیرحسین میرزایی"
                                                                             class="avatar avatar-35 wp-user-avatar wp-user-avatar-35 alignnone photo">
                                                                        <span class="_item__user--name vcard">
                    <span class="fn">امیرحسین میرزایی</span>
                </span>
                                                                        <span class="_item__user--date">
                    <i class="icon-clock-icon"></i>
                    <time datetime="۱۳۹۶-۱۱-۹ ۱۲:۲۷:۵۰ +۰۳:۳۰" class="_date">۹ بهمن ۱۳۹۶  |  ۱۲:۲۷</time>
                </span>

                                                                        <?php
                                                                        if ($UserID == true) {
                                                                            ?>
                                                                            <div class="_item__user--like-reply">
                                                                <span class="_btn">
                        <a rel="nofollow" class="comment-reply-link"
                           href="news/6/?replytocom=201498#respond"
                           onclick="return addComment.moveForm( &quot;comment-201498&quot;, &quot;201498&quot;, &quot;respond&quot;, &quot;368348&quot; )"
                           aria-label="پاسخ به امیرحسین میرزایی"><i class="icon-reply-arrow"></i></a>                    </span>

                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                    <div class="_item__comment">
                                                                        <p>اسم اساسا نباید ترجمه بشه و ما هم The Boring
                                                                            Company رو
                                                                            ترجمه نکرده و به صورت اصلی در متن کار
                                                                            کرده‌ایم.<br>
                                                                            منظور از «شرکت خسته»، شوخی با ایلان ماسک و
                                                                            ایهام در
                                                                            نام‌گذاری شرکت اوست.</p>
                                                                    </div>

                                                                </div>

                                                            </li><!-- #comment-## -->
                                                        </ol><!-- .children -->
                                                    </li><!-- #comment-## -->
                                                    <li class="comment even thread-even depth-1 single-comment _item _person"
                                                        id="li-comment-201452">
                                                        <div id="comment-201452" class="comment-body">

                                                            <div class="_item__user comment-meta ">
                                                                <img src="public/DigiWeb_files/Default_Profile_Picture1.jpg"
                                                                     width="35"
                                                                     height="35" alt="سعید"
                                                                     class="avatar avatar-35wp-user-avatar wp-user-avatar-35 alignnone photo avatar-default">
                                                                <span class="_item__user--name vcard">
                    <span class="fn">سعید</span>
                </span>
                                                                <span class="_item__user--date">
                    <i class="icon-clock-icon"></i>
                    <time datetime="۱۳۹۶-۱۱-۸ ۱۳:۵۹:۰۸ +۰۳:۳۰" class="_date">۸ بهمن ۱۳۹۶  |  ۱۳:۵۹</time>
                </span>
                                                                <?php
                                                                if ($UserID == true) {
                                                                    ?>
                                                                    <div class="_item__user--like-reply">
                                                        <span class="_btn">
                        <a rel="nofollow" class="comment-reply-link"
                           href="https://www.digikala.com/mag/%d8%a7%db%8c%d9%84%d8%a7%d9%86-%d9%85%d8%a7%d8%b3%da%a9-%d8%a2%d8%aa%d8%b4%e2%80%8c%d8%a7%d9%81%da%a9%d9%86-%d9%87%d9%85-%d9%85%db%8c%e2%80%8c%d9%81%d8%b1%d9%88%d8%b4%d8%af/?replytocom=201452#respond"
                           onclick="return addComment.moveForm( &quot;comment-201452&quot;, &quot;201452&quot;, &quot;respond&quot;, &quot;368348&quot; )"
                           aria-label="پاسخ به سعید"><i class="icon-reply-arrow"></i></a>
                                                        </span>

                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>

                                                            <div class="_item__comment">
                                                                <p>عجیبه که تعبیر شما از کلمه Boring در اسم این شرکت به
                                                                    صورت خسته
                                                                    بوده! در اینجا به معنی حفاری هست… چه ربطی به خسته
                                                                    داره
                                                                    آخه…؟!!</p>
                                                            </div>

                                                        </div>
                                                    </li><!-- #comment-## -->
                                                </ol>

                                                <div class="module-title pagination-wrapper"></div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="topics__aside sticky-sidebar__simple"
                                 style="position: relative; overflow: visible; box-sizing: border-box; min-height: 2183px;float:left;margin-top: 25px">
                                <div class="theiaStickySidebar"
                                     style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(-9px); width: 305px; top: 0px; left: 34.5px;">
                                    <div class="post-nav">
                                        <div class="post-nav__body">
                                            <div class="_title" style="padding-left: 210px">
                                                <span class="bold" style="color: #6f0000">آرشیو خبر</span>
                                            </div>
                                            <ul class="related-posts">
                                                <?php
                                                $news = $data['sameNews'];
                                                foreach ($news as $newsInfo) {
                                                    ?>
                                                    <li class="related-posts__item">
                                                        <a href="news/<?= $newsInfo['n_id']; ?>"
                                                           title="<?= $newsInfo['title']; ?>"
                                                           class="image-wrapper">
                                                            <img src="public/images/news/<?= $newsInfo['i_image']; ?>"
                                                                 width="60"
                                                                 height="60" class="image-wrapper__img wp-post-image"
                                                                 style="border-radius:3px"
                                                                 alt="<?= $newsInfo['title']; ?>"
                                                                 data-lazy-loaded="true"> </a>
                                                        <div class="detail-wrapper">
                                                            <a href="news/<?= $newsInfo['n_id']; ?>"
                                                               title="<?= $newsInfo['title']; ?>"
                                                               class="detail-wrapper__title"><?= Model::summary($newsInfo['title'], 90); ?></a>
                                                            <div class="detail-wrapper__time" style="text-align: left">
                                                    <span class="detail-wrapper__time--detail"><?= $newsInfo['date_created']; ?>
                                                        &nbsp;<?= $newsInfo['time']; ?></span>
                                                                <i class="icon-clock-icon"
                                                                   style="margin-top: 5px;margin-right: 5px"></i>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="resize-sensor"
                                         style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                        <div class="resize-sensor-expand"
                                             style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div style="position: absolute; left: 0px; top: 0px; transition: 0s; width: 315px; height: 607px;"></div>
                                        </div>
                                        <div class="resize-sensor-shrink"
                                             style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" style="padding: 0px 100px 0px 50px ;overflow-x: hidden">
                    <main class="" style="background: rgb(43, 57, 63);">
                        <div class="homepage">


                        </div>
                    </main>
                </div>


                <!-- ========================= FOOTER ========================= -->
                <br><?php require('app/views/include/footer.php'); ?>
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

            <script type="text/javascript" src="public/DigiWeb_files/jquery.form.min.js"></script>

            <script type="text/javascript" src="public/DigiWeb_files/scripts.js"></script>

            <script type="text/javascript" src="public/DigiWeb_files/theme.min.js"></script>
            <script type="text/javascript" src="public/DigiWeb_files/ResizeSensor.min.js"></script>
            <script type="text/javascript" src="public/DigiWeb_files/flickity.pkgd.min.js"></script>
            <script type="text/javascript" src="public/DigiWeb_files/theia-sticky-sidebar.min.js"></script>
            <script type="text/javascript" src="public/DigiWeb_files/comment-reply.min.js"></script>
            <script type="text/javascript" src="public/DigiWeb_files/jquery.popupmanager.min.js"></script>
            <script type="text/javascript" src="public/DigiWeb_files/jquery.sonar.min.js"></script>
            <script type="text/javascript" src="public/DigiWeb_files/images-lazy-load.min.js"></script>
            <script type="text/javascript" src="public/DigiWeb_files/comments-numbered.min.js"></script>

            <script type="text/javascript" src="public/DigiWeb_files/front_end_script.js"></script>


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