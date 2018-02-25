<?php
Model::sessionInit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title><?= NAME; ?> | جستجو</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">

    <!-- Customizable CSS -->

    <link href="public/css/pace-theme-flash.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/blue.css">
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/owl.transitions.css">
    <link href="public/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="public/css/Fr.star.css"/>
    <link rel="stylesheet" type="text/css" href="public/css/jquery.flipcountdown.css"/>
    <link rel="stylesheet" href="public/css/bootstrap-social.css">
    <link href="public/css/application.track.index.css" rel="stylesheet" type="text/css">
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">

    <!-- Favicon -->
    <?php require('app/views/include/favicon.php'); ?>

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <![endif]-->

</head>
<body class="cnt-home">


<!-- ========== HEADER ========== -->
<header class="header-style-1" dir="rtl">
    <!-- ========== NAVBAR ========== -->
    <?php require('app/views/include/header.php'); ?>
    <!-- ========== NAVBAR : END ========== -->
</header>
<!-- ========== HEADER : END ========== -->

<?php require('app/views/include/login.php'); ?>

<div class="body-content outer-top-xs" style="margin-top: 50px">

    <div class='container'>
        <div class='row single-product outer-bottom-sm '>
            <div class="col-lg-12">
                <div class="main-content">
                    <div class="row main-wrapper">
                        <div class="col-lg-9" style="padding-left: 0 !important;">
                            <div class="main">

                                <section id="sectionArtist" class="album-list-widget white user-profile mode-table"
                                         style="margin-top: -10px">
                                    <h5 align="right">
                                        <div class="header-text">هنرمندان <i
                                                    style="color: #941116;margin-left: 4px" class="fa fa-bookmark"
                                                    aria-hidden="true"></i></div>

                                    </h5>
                                    <div class="user-download-list main-holder" dir="rtl">
                                        <h5 align="right">
                                            <i class="title-header">نام هنرمند</i>
                                            <i class="icon"></i>
                                        </h5>
                                        <div class="download-albums-list">
                                            <?php
                                            $finds = $data['Find']['findArtist'];
                                            if (sizeof($finds) > 0) {
                                                foreach ($finds as $find) {
                                                    ?>
                                                    <div id="albumRow-<?= $find['s_id']; ?>"
                                                         class="album"
                                                         data-origin="Regular">
                                                        <div class="album-holder">

                                                            <a class="album-cover-wrap"
                                                               href="artist/<?= $find['s_id']; ?>"
                                                               data-cover="public/images/singers/<?= $find['s_img']; ?>">
                                                                <img class="album-cover"
                                                                     onerror="this.src='public/images/user-default-image.jpg'"
                                                                     src="public/images/singers/<?= $find['s_img']; ?>">
                                                            </a>

                                                            <div class="album-detail">
                                                                <div class="album-title">
                                                                    <a href="artist/<?= $find['s_id']; ?>"
                                                                       class="album-title-text"
                                                                       title="<?= $find['s_name']; ?>"><?= $find['s_name']; ?></a>
                                                                </div>
                                                                <div class="extra-album">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="track-wrap"></div>
                                                    </div>
                                                    <?php
                                                }
                                            } else {
                                                ?>


                                                <div class="text-center" style="padding-bottom: 10px !important;">
                                                    متاسفانه هنرمندی یافت نشد!
                                                </div>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </section>

                                <section id="sectionAlbum" class="album-list-widget white user-profile mode-table">
                                    <h5 align="right">
                                        <div class="header-text">آلبوم ها <i
                                                    style="color: #941116;margin-left: 4px" class="fa fa-bookmark"
                                                    aria-hidden="true"></i></div>
                                        <div class="mode-switch-wrap" dir="rtl">
                                            <div id="tableViewAlbum" onclick="tableViewAlbum()"
                                                 class="switch table-switch selected"
                                                 data-mode="mode-table"
                                                 title="نمایش به صورت لیست"></div>
                                            <div id="gridViewAlbum" onclick="gridViewAlbum()"
                                                 class="switch block-switch"
                                                 data-mode="mode-block"
                                                 title="نمایش به صورت گرید"></div>
                                        </div>
                                    </h5>
                                    <div class="user-download-list main-holder" dir="rtl">
                                        <h5 align="right">
                                            <i class="title-header">عنوان</i>
                                            <i class="owner hidden-xs hidden-sm">نام هنرمند</i>
                                            <i class="icon"></i>
                                        </h5>
                                        <div class="download-albums-list">
                                            <?php
                                            $finds = $data['Find']['findAlbum'];
                                            if (sizeof($finds) > 0) {
                                                foreach ($finds as $find) {
                                                    ?>
                                                    <div id="albumRow-<?= !isset($find['p_id']) ? $find['a_id'] : $find['p_id']; ?>"
                                                         class="album"
                                                         data-id="<?= !isset($find['p_id']) ? $find['a_id'] : $find['p_id']; ?>"
                                                         data-type="<?= !isset($find['p_id']) ? "album" : "track"; ?>"
                                                         data-origin="Regular">
                                                        <div class="album-holder">
                                                            <a class="album-cover-wrap"
                                                               href="album/<?= $find['a_id']; ?>"
                                                               data-cover="public/images/products/album/<?= $find['a_cover']; ?>">
                                                                <img class="album-cover"
                                                                     onerror="this.src='public/images/Album+Cover+icon2-01.png'"
                                                                     src="public/images/products/album/<?= $find['a_cover']; ?>">
                                                            </a>

                                                            <div class="album-detail">
                                                                <div class="album-title">
                                                                    <a href="album/<?= $find['a_id']; ?>">
                                                                        <?= $find['a_name']; ?>
                                                                    </a>
                                                                </div>
                                                                <div class="album-author hidden-xs hidden-sm">
                                                                    <a href="artist/<?= $find['s_id']; ?>"
                                                                       class="album-author-text"><?= $find['s_name']; ?></a>
                                                                </div>
                                                                <div class="extra-album">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="track-wrap"></div>
                                                    </div>
                                                    <?php
                                                }
                                            } else {
                                                ?>


                                                <div class="text-center" style="padding-bottom: 10px !important;">
                                                    متاسفانه آلبومی یافت نشد!
                                                </div>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </section>

                                <section id="sectionTrack" class="album-list-widget white user-profile mode-table"
                                         style="margin-bottom: 10px">
                                    <h5 align="right" class="filter-download-list">
                                        <div class="header-text">تک آهنگ ها</div>
                                        <div class="mode-switch-wrap" dir="rtl">
                                            <div id="tableViewTrack" onclick="tableViewTrack()"
                                                 class="switch table-switch selected"
                                                 data-mode="mode-table"
                                                 title="نمایش به صورت لیست"></div>
                                            <div id="gridViewTrack" onclick="gridViewTrack()"
                                                 class="switch block-switch"
                                                 data-mode="mode-block"
                                                 title="نمایش به صورت گرید"></div>
                                        </div>
                                    </h5>
                                    <div class="user-download-list main-holder" dir="rtl">
                                        <h5 align="right">
                                            <i class="title-header">عنوان</i>
                                            <i class="date-header hidden-xs hidden-sm">تاریخ انتشار</i>
                                            <i class="owner hidden-xs hidden-sm">نام هنرمند</i>
                                            <i class="icon"></i>
                                        </h5>
                                        <div class="download-albums-list">
                                            <?php
                                            $finds = $data['Find']['findProduct'];
                                            if (sizeof($finds) > 0) {
                                                $i = 1;
                                                foreach ($finds as $find) {
                                                    ?>
                                                    <div class="album" data-id="<?= $find['a_id']; ?>"
                                                         data-type="album"
                                                         data-origin="Regular">
                                                        <div class="album-holder">
                                                            <a class="album-cover-wrap"
                                                               href="track/<?= $find['a_id']; ?>"
                                                               data-cover="public/images/products/<?= $find['i_image']; ?>">
                                                                <img class="album-cover"
                                                                     onerror="this.src='public/images/album-default.jpg'"
                                                                     src="public/images/products/<?= $find['i_image']; ?>">
                                                            </a>

                                                            <div class="album-detail">
                                                                <div class="album-title"><?= $find['p_name']; ?></div>
                                                                <div class="album-author hidden-xs hidden-sm">
                                                                    <a href="artist/<?= $find['s_id']; ?>"
                                                                       class="album-author-text"><?= $find['s_name']; ?></a>
                                                                </div>
                                                                <div class="extra-album">
                                                                </div>
                                                            </div>
                                                            <div class="player-control" style="margin-left: 10px">
                                                                <div class="test" data-id="<?= ($i - 1); ?>"
                                                                     id="<?= ($i - 1); ?>">
                                                                    <audio id="yourAudio-<?= ($i - 1); ?>"
                                                                           preload='none'>
                                                                        <source src="product/music/<?= $find['p_link_demo']; ?>"
                                                                                type="audio/mpeg"/>
                                                                    </audio>
                                                                    <a id="audioControl-<?= ($i - 1); ?>"><i
                                                                                class="fa fa-play"
                                                                                style="color:#fff;margin: 7px 7px 0 0"
                                                                                aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                            <a href="track/<?= $find['p_id']; ?>"
                                                               class="download">مشاهده</a>

                                                            <div class="purchase-date hidden-xs hidden-sm"
                                                                 title="تاریخ انتشار"><?= $find['p_publication_date']; ?></div>
                                                        </div>
                                                        <div class="track-wrap"></div>
                                                    </div>
                                                    <?php
                                                    $i++;
                                                }
                                            } else {
                                                ?>

                                                <div class="text-center" style="padding-bottom: 10px !important;">
                                                    متاسفانه تک آهنگی یافت نشد!
                                                </div>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>

                        <aside class="col-lg-3" style="padding-right: 5px !important;">
                            <div class="sidebar hidden-xs hidden-sm">

                                <?php require('app/views/include/sidebar-best-selling-album.php'); ?>

                                <?php require('app/views/include/sidebar-new-single-track.php'); ?>

                            </div>
                        </aside>

                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.body-content -->

<?php require('app/views/include/player.php'); ?>

<!-- ========== FOOTER ========== -->
<?php require('app/views/include/footer.php'); ?>
<!-- ========== FOOTER : END========== -->


<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="public/js/jquery-1.11.1.min.js"></script>
<script src="public/js/jquery-latest.js"></script>
<script src="public/js/jquery.noty.packaged.js"></script>
<script src="public/js/countdown.js"></script>
<script src="public/js/trackFunction.js"></script>
<script src="public/js/star.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/bootstrap-hover-dropdown.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/echo.min.js"></script>
<script src="public/js/bootstrap-slider.min.js"></script>
<script src="public/js/lightbox.min.js"></script>
<script src="public/js/bootstrap-select.min.js"></script>
<script src="public/js/Track-player.js"></script>
<script src="public/js/wow.min.js"></script>
<script src="public/js/scripts.js"></script>
<script src="public/js/pace.js"></script>
<script src="public/js/login.js"></script>

<script>
    $(document).on('click', "[id*=albumRow-]", function () {
        var ProductID = $(this).data('id');
        var Type = $(this).data('type');

        $.post(
            "user/deletefind",
            {
                'product_id': ProductID,
                'type': Type
            },
            function (data) {
                if (data == "delete") {
                    generate('success', '<div class="activity-item">آهنگ مورد نظر باموفقیت از لیست موردعلاقه شما حذف شد.</div>');
                    $("#albumRow-" + ProductID).remove();
                }
                else {
                    generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا مجددا تلاش نمایید.</div>');
                }
            });
    });
</script>

<script>
    document.addEventListener('play', function (e) {
        var audios = document.getElementsByTagName('audio');

        for (var i = 0, len = audios.length; i < len; i++) {
            if (audios[i] != e.target) {
                audios[i].pause();
            }
        }
    }, true);
</script>

<script>
    $(document).on("click", ".test", function () {
        var id = $(this).data('id');
        var audioControl = document.getElementById('audioControl-' + id);
        var yourAudio = document.getElementById("yourAudio-" + id);
        var pause = audioControl.innerHTML === '<i class="fa fa-pause" style="color:#fff;margin: 7px 7px 0 0" aria-hidden="true"></i>';

        var divTest = document.getElementsByClassName('test');
        for (var i = 0; i < divTest.length; i++) {
            if (divTest[i].id != id) {
                $('#audioControl-' + divTest[i].id).innerHTML = !pause ? '<i class="fa fa-pause" style="color:#fff;margin: 7px 7px 0 0" aria-hidden="true"></i>' :
                    '<i class="fa fa-play" style="color:#fff;margin: 7px 7px 0 0" aria-hidden="true"></i>';
            }
        }

        // Update the Button
        audioControl.innerHTML = pause ? '<i class="fa fa-play" style="color:#fff;margin: 7px 7px 0 0" aria-hidden="true"></i>' :
            '<i class="fa fa-pause" style="color:#fff;margin: 7px 7px 0 0" aria-hidden="true"></i>';
        // Update the Audio
        var method = pause ? 'pause' : 'play';
        yourAudio[method]();
        // Prevent Default Action
        return false;
    });
</script>

</body>
</html>