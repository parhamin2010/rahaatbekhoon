<?php
$activeMenu = 'category';
$activeSubMenu = 'categoryAdd';
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= NAME; ?> | افزودن دسته بندی جدید</title>
    <!-- Favicon -->
    <?php require('app/views/include/favicon.php'); ?>

    <link href="public/css/pace-theme-flash.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/panel/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="public/panel/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="public/panel/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="public/panel/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/panel/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="public/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-default-indicator.css"/>
    <link rel="stylesheet" href="public/library/offlinealert/themes/offline-language-persian.css"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">

<div class="wrapper">

    <header class="main-header">
        <?php require('app/views/admin/include/header.php'); ?>
    </header>

    <aside class="main-sidebar direction">
        <?php require('app/views/admin/include/sidebar.php'); ?>
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>افزودن دسته بندی جدید</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= URL; ?>adminpanel/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= URL; ?>adminpanel/categories"><i class="fa fa-th-list"></i> Categories</a></li>
                <li class="active">Categories Add</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">ثبت برنامه جدید</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                                <div class="box-body">
                                    <div class='row'>
                                        <div class='col-md-6'>
                                            <div class="form-group" style="text-align:right">
                                                <label align="right" for="nameStyle">:نام دسته بندی</label>
                                                <input style="border-radius: 3px;text-align:right" type="text"
                                                       class="form-control" id="nameStyle" name="nameStyle" required>
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class="form-group" style="text-align:right">
                                                <label for="iconStyle">: آیکون</label>
                                                <select id="iconStyle" name="iconStyle" class="form-control select2"
                                                        style="border-radius: 3px;width: 100%; font-family: 'fontawesome', 'Helvetica';direction: ltr"
                                                        required>
                                                    <optgroup label="Web Application Icons">
                                                        <option value="fa-adjust">&#xf042; icon-adjust</option>
                                                        <option value="fa-asterisk">&#xf069; icon-asterisk</option>
                                                        <option value="fa-ban-circle">&#xf05e; icon-ban-circle</option>
                                                        <option value="fa-bar-chart">&#xf080; icon-bar-chart</option>
                                                        <option value="fa-barcode">&#xf02a; icon-barcode</option>
                                                        <option value="fa-beer">&#xf0fc; icon-beer</option>
                                                        <option value="fa-bell">&#xf0a2; icon-bell</option>
                                                        <option value="fa-bell-alt">&#xf0f3; icon-bell-alt</option>
                                                        <option value="fa-bolt">&#xf0e7; icon-bolt</option>
                                                        <option value="fa-book">&#xf02d; icon-book</option>
                                                        <option value="fa-bookmark">&#xf02e; icon-bookmark</option>
                                                        <option value="fa-bookmark-empty">&#xf097; icon-bookmark-empty
                                                        </option>
                                                        <option value="fa-briefcase">&#xf0b1; icon-briefcase</option>
                                                        <option value="fa-bullhorn">&#xf0a1; icon-bullhorn</option>
                                                        <option value="fa-calendar">&#xf073; icon-calendar</option>
                                                        <option value="fa-camera">&#xf030; icon-camera</option>
                                                        <option value="fa-camera-retro">&#xf083; icon-camera-retro
                                                        </option>
                                                        <option value="fa-certificate">&#xf0a3; icon-certificate
                                                        </option>
                                                        <option value="fa-check">&#xf046; icon-check</option>
                                                        <option value="fa-check-empty">&#xf096; icon-check-empty
                                                        </option>
                                                        <option value="fa-circle">&#xf05c; icon-circle</option>
                                                        <option value="fa-circle-blank">&#xf10c; icon-circle-blank
                                                        </option>
                                                        <option value="fa-cloud">&#xf0c2; icon-cloud</option>
                                                        <option value="fa-cloud-download">&#xf0ed; icon-cloud-download
                                                        </option>
                                                        <option value="fa-cloud-upload">&#xf0ee; icon-cloud-upload
                                                        </option>
                                                        <option value="fa-coffee">&#xf0f4; icon-coffee</option>
                                                        <option value="fa-cog">&#xf013; icon-cog</option>
                                                        <option value="fa-cogs">&#xf085; icon-cogs</option>
                                                        <option value="fa-frown">&#xf119; icon-frown</option>
                                                        <option value="fa-comment">&#xf075; icon-comment</option>
                                                        <option value="fa-comment-alt">&#xf0e5;icon-comment-alt</option>
                                                        <option value="fa-comments">&#xf086; icon-comments</option>
                                                        <option value="fa-comments-alt">&#xf0e6; icon-comments-alt
                                                        </option>
                                                        <option value="fa-credit-card">&#xf09d; icon-credit-card
                                                        </option>
                                                        <option value="fa-dashboard">&#xf0e4; icon-dashboard</option>
                                                        <option value="fa-desktop">&#xf108; icon-desktop</option>
                                                        <option value="fa-download">&#xf01a; icon-download</option>
                                                        <option value="fa-download-alt">&#xf019; icon-download-alt
                                                        </option>
                                                        <option value="fa-edit">&#xf044; icon-edit</option>
                                                        <option value="fa-envelope">&#xf0e0; icon-envelope</option>
                                                        <option value="fa-envelope-alt">&#xf003; icon-envelope-alt
                                                        </option>
                                                        <option value="fa-exchange">&#xf0ec; icon-exchange</option>
                                                        <option value="fa-exclamation-sign">&#xf06a;
                                                            icon-exclamation-sign
                                                        </option>
                                                        <option value="fa-external-link">&#xf08e; icon-external-link
                                                        </option>
                                                        <option value="fa-eye-close">&#xf070; icon-eye-close</option>
                                                        <option value="fa-eye-open">&#xf06e; icon-eye-open</option>
                                                        <option value="fa-facetime-video">&#xf03d; icon-facetime-video
                                                        </option>
                                                        <option value="fa-fighter-jet">&#xf0fb; icon-fighter-jet
                                                        </option>
                                                        <option value="fa-film">&#xf008; icon-film</option>
                                                        <option value="fa-filter">&#xf0b0; icon-filter</option>
                                                        <option value="fa-fire">&#xf06d; icon-fire</option>
                                                        <option value="fa-flag">&#xf024; icon-flag</option>
                                                        <option value="fa-folder-close">&#xf07b; icon-folder-close
                                                        </option>
                                                        <option value="fa-folder-open">&#xf07c; icon-folder-open
                                                        </option>
                                                        <option value="fa-folder-close-alt">&#xf114;
                                                            icon-folder-close-alt
                                                        </option>
                                                        <option value="fa-folder-open-alt">&#xf115;
                                                            icon-folder-open-alt
                                                        </option>
                                                        <option value="fa-food">&#xf0f5; icon-food</option>
                                                        <option value="fa-gift">&#xf06b; icon-gift</option>
                                                        <option value="fa-glass">&#xf000; icon-glass</option>
                                                        <option value="fa-globe">&#xf0ac; icon-globe</option>
                                                        <option value="fa-group">&#xf0c0; icon-group</option>
                                                        <option value="fa-hdd">&#xf0a0; icon-hdd</option>
                                                        <option value="fa-headphones">&#xf025; icon-headphones</option>
                                                        <option value="fa-heart">&#xf004; icon-heart</option>
                                                        <option value="fa-heart-empty">&#xf08a; icon-heart-empty
                                                        </option>
                                                        <option value="fa-home">&#xf015; icon-home</option>
                                                        <option value="fa-inbox">&#xf01c; icon-inbox</option>
                                                        <option value="fa-info-sign">&#xf05a; icon-info-sign</option>
                                                        <option value="fa-key">&#xf084; icon-key</option>
                                                        <option value="fa-keyboard">&#xf11c; icon-keyboard</option>
                                                        <option value="fa-leaf">&#xf06c; icon-leaf</option>
                                                        <option value="fa-laptop">&#xf109; icon-laptop</option>
                                                        <option value="fa-legal">&#xf0e3; icon-legal</option>
                                                        <option value="fa-lemon">&#xf094; icon-lemon</option>
                                                        <option value="fa-lightbulb">&#xf0eb; icon-lightbulb</option>
                                                        <option value="fa-lock">&#xf023; icon-lock</option>
                                                        <option value="fa-unlock">&#xf09c; icon-unlock</option>
                                                        <option value="fa-magic">&#xf0d0; icon-magic</option>
                                                        <option value="fa-magnet">&#xf076; icon-magnet</option>
                                                        <option value="fa-map-marker">&#xf041; icon-map-marker</option>
                                                        <option value="fa-minus">&#xf068; icon-minus</option>
                                                        <option value="fa-minus-sign">&#xf056; icon-minus-sign</option>
                                                        <option value="fa-mobile-phone">&#xf10b; icon-mobile-phone
                                                        </option>
                                                        <option value="fa-money">&#xf0d6; icon-money</option>
                                                        <option value="fa-move">&#xf047; icon-move</option>
                                                        <option value="fa-music">&#xf001; icon-music</option>
                                                        <option value="fa-off">&#xf011; icon-off</option>
                                                        <option value="fa-ok">&#xf00c; icon-ok</option>
                                                        <option value="fa-ok-circle">&#xf05d; icon-ok-circle</option>
                                                        <option value="fa-ok-sign">&#xf058; icon-ok-sign</option>
                                                        <option value="fa-pencil">&#xf040; icon-pencil</option>
                                                        <option value="fa-picture">&#xf03e; icon-picture</option>
                                                        <option value="fa-plane">&#xf072; icon-plane</option>
                                                        <option value="fa-plus">&#xf067; icon-plus</option>
                                                        <option value="fa-plus-sign">&#xf055; icon-plus-sign</option>
                                                        <option value="fa-print">&#xf02f; icon-print</option>
                                                        <option value="fa-pushpin">&#xf08d; icon-pushpin</option>
                                                        <option value="fa-qrcode">&#xf029; icon-qrcode</option>
                                                        <option value="fa-question-sign">&#xf059; icon-question-sign
                                                        </option>
                                                        <option value="fa-quote-left">&#xf10d; icon-quote-left</option>
                                                        <option value="fa-quote-right">&#xf10e; icon-quote-right
                                                        </option>
                                                        <option value="fa-random">&#xf074; icon-random</option>
                                                        <option value="fa-refresh">&#xf021; icon-refresh</option>
                                                        <option value="fa-remove">&#xf00d; icon-remove</option>
                                                        <option value="fa-remove-circle">&#xf05c; icon-remove-circle
                                                        </option>
                                                        <option value="fa-remove-sign">&#xf057; icon-remove-sign
                                                        </option>
                                                        <option value="fa-reorder">&#xf0c9; icon-reorder</option>
                                                        <option value="fa-reply">&#xf112; icon-reply</option>
                                                        <option value="fa-resize-horizontal">&#xf07e;
                                                            icon-resize-horizontal
                                                        </option>
                                                        <option value="fa-resize-vertical">&#xf07d;
                                                            icon-resize-vertical
                                                        </option>
                                                        <option value="fa-retweet">&#xf079; icon-retweet</option>
                                                        <option value="fa-road">&#xf018; icon-road</option>
                                                        <option value="fa-rss">&#xf09e; icon-rss</option>
                                                        <option value="fa-screenshot">&#xf05b; icon-screenshot</option>
                                                        <option value="fa-search">&#xf002; icon-search</option>
                                                        <option value="fa-share">&#xf045; icon-share</option>
                                                        <option value="fa-share-alt">&#xf064; icon-share-alt</option>
                                                        <option value="fa-shopping-cart">&#xf07a; icon-shopping-cart
                                                        </option>
                                                        <option value="fa-signal">&#xf012; icon-signal</option>
                                                        <option value="fa-signin">&#xf090; icon-signin</option>
                                                        <option value="fa-signout">&#xf08b; icon-signout</option>
                                                        <option value="fa-sitemap">&#xf0e8; icon-sitemap</option>
                                                        <option value="fa-sort">&#xf0dc; icon-sort</option>
                                                        <option value="fa-sort-down">&#xf0dd; icon-sort-down</option>
                                                        <option value="fa-sort-up">&#xf0de; icon-sort-up</option>
                                                        <option value="fa-spinner">&#xf110; icon-spinner</option>
                                                        <option value="fa-star">&#xf005; icon-star</option>
                                                        <option value="fa-star-empty">&#xf006; icon-star-empty</option>
                                                        <option value="fa-star-half">&#xf089; icon-star-half</option>
                                                        <option value="fa-tablet">&#xf10a; icon-tablet</option>
                                                        <option value="fa-terminal">&#xf120; icon-terminal</option>
                                                        <option value="fa-tag">&#xf02b; icon-tag</option>
                                                        <option value="fa-tags">&#xf02c; icon-tags</option>
                                                        <option value="fa-tasks">&#xf0ae; icon-tasks</option>
                                                        <option value="fa-thumbs-down">&#xf165; icon-thumbs-down
                                                        </option>
                                                        <option value="fa-thumbs-up">&#xf164; icon-thumbs-up</option>
                                                        <option value="fa-time">&#xf017; icon-time</option>
                                                        <option value="fa-tint">&#xf043; icon-tint</option>
                                                        <option value="fa-trash">&#xf014; icon-trash</option>
                                                        <option value="fa-trophy">&#xf091; icon-trophy</option>
                                                        <option value="fa-truck">&#xf0d1; icon-truck</option>
                                                        <option value="fa-umbrella">&#xf0e9; icon-umbrella</option>
                                                        <option value="fa-upload">&#xf01b; icon-upload</option>
                                                        <option value="fa-upload-alt">&#xf093; icon-upload-alt</option>
                                                        <option value="fa-user">&#xf007; icon-user</option>
                                                        <option value="fa-user-md">&#xf0f0; icon-user-md</option>
                                                        <option value="fa-volume-off">&#xf026; icon-volume-off</option>
                                                        <option value="fa-volume-down">&#xf027; icon-volume-down
                                                        </option>
                                                        <option value="fa-volume-up">&#xf028; icon-volume-up</option>
                                                        <option value="fa-warning-sign">&#xf071; icon-warning-sign
                                                        </option>
                                                        <option value="fa-wrench">&#xf0ad; icon-wrench</option>
                                                        <option value="fa-zoom-in">&#xf00e; icon-zoom-in</option>
                                                        <option value="fa-zoom-out">&#xf010; icon-zoom-out</option>
                                                        <optgroup label="Text Editor Icons">
                                                            <option value="fa-file">&#xf15b; icon-file</option>
                                                            <option value="fa-file-alt">&#xf016; icon-file-alt</option>
                                                            <option value="fa-file-text-alt">&#xf0f6;
                                                                icon-file-text-alt
                                                            </option>
                                                            <option value="fa-cut">&#xf0c4; icon-cut</option>
                                                            <option value="fa-copy">&#xf0c5; icon-copy</option>
                                                            <option value="fa-paste">&#xf0ea; icon-paste</option>
                                                            <option value="fa-save">&#xf0c7; icon-save</option>
                                                            <option value="fa-undo">&#xf0e2; icon-undo</option>
                                                            <option value="fa-repeat">&#xf01e; icon-repeat</option>
                                                            <option value="fa-text-height">&#xf034; icon-text-height
                                                            </option>
                                                            <option value="fa-text-width">&#xf035; icon-text-width
                                                            </option>
                                                            <option value="fa-align-left">&#xf036; icon-align-left
                                                            </option>
                                                            <option value="fa-align-center">&#xf037; icon-align-center
                                                            </option>
                                                            <option value="fa-align-right">&#xf038; icon-align-right
                                                            </option>
                                                            <option value="fa-align-justify">&#xf039;
                                                                icon-align-justify
                                                            </option>
                                                            <option value="fa-indent-left">&#xf03b; icon-indent-left
                                                            </option>
                                                            <option value="fa-indent-right">&#xf03c; icon-indent-right
                                                            </option>
                                                            <option value="fa-font">&#xf031; icon-font</option>
                                                            <option value="fa-bold">&#xf032; icon-bold</option>
                                                            <option value="fa-italic">&#xf033; icon-italic</option>
                                                            <option value="fa-strikethrough">&#xf0cc;
                                                                icon-strikethrough
                                                            </option>
                                                            <option value="fa-underline">&#xf0cd; icon-underline
                                                            </option>
                                                            <option value="fa-link">&#xf0c1; icon-link</option>
                                                            <option value="fa-paper-clip">&#xf0c6; icon-paper-clip
                                                            </option>
                                                            <option value="fa-columns">&#xf0db; icon-columns</option>
                                                            <option value="fa-table">&#xf0ce; icon-table</option>
                                                            <option value="fa-th-large">&#xf009; icon-th-large</option>
                                                            <option value="fa-th">&#xf00a; icon-th</option>
                                                            <option value="fa-th-list">&#xf00b; icon-th-list</option>
                                                            <option value="fa-list">&#xf03a; icon-list</option>
                                                            <option value="fa-list-ol">&#xf0cb; icon-list-ol</option>
                                                            <option value="fa-list-ul">&#xf0ca; icon-list-ul</option>
                                                            <option value="fa-list-alt">&#xf022; icon-list-alt</option>
                                                            <optgroup label="Directional Icons">
                                                                <option value="fa-angle-left">&#xf104; icon-angle-left
                                                                </option>
                                                                <option value="fa-angle-right">&#xf105;
                                                                    icon-angle-right
                                                                </option>
                                                                <option value="fa-angle-up">&#xf106; icon-angle-up
                                                                </option>
                                                                <option value="fa-angle-down">&#xf107; icon-angle-down
                                                                </option>
                                                                <option value="fa-arrow-down">&#xf063; icon-arrow-down
                                                                </option>
                                                                <option value="fa-arrow-left">&#xf060; icon-arrow-left
                                                                </option>
                                                                <option value="fa-arrow-right">&#xf061;
                                                                    icon-arrow-right
                                                                </option>
                                                                <option value="fa-arrow-up">&#xf062; icon-arrow-up
                                                                </option>
                                                                <option value="fa-caret-down">&#xf0d7; icon-caret-down
                                                                </option>
                                                                <option value="fa-caret-left">&#xf0d9; icon-caret-left
                                                                </option>
                                                                <option value="fa-caret-right">&#xf0da;
                                                                    icon-caret-right
                                                                </option>
                                                                <option value="fa-caret-up">&#xf0d8; icon-caret-up
                                                                </option>
                                                                <option value="fa-chevron-down">&#xf053;
                                                                    icon-chevron-down
                                                                </option>
                                                                <option value="fa-chevron-left">&#xf053;
                                                                    icon-chevron-left
                                                                </option>
                                                                <option value="fa-chevron-right">&#xf054;
                                                                    icon-chevron-right
                                                                </option>
                                                                <option value="fa-chevron-up">&#xf077; icon-chevron-up
                                                                </option>
                                                                <option value="fa-circle-arrow-down">&#xf0ab;
                                                                    icon-circle-arrow-down
                                                                </option>
                                                                <option value="fa-circle-arrow-left">&#xf0a8;
                                                                    icon-circle-arrow-left
                                                                </option>
                                                                <option value="fa-circle-arrow-right">&#xf0a9;
                                                                    icon-circle-arrow-right
                                                                </option>
                                                                <option value="fa-circle-arrow-up">&#xf0aa;
                                                                    icon-circle-arrow-up
                                                                </option>
                                                                <option value="fa-double-angle-left">&#xf100;
                                                                    icon-double-angle-left
                                                                </option>
                                                                <option value="fa-double-angle-right">&#xf101;
                                                                    icon-double-angle-right
                                                                </option>
                                                                <option value="fa-double-angle-up">&#xf102;
                                                                    icon-double-angle-up
                                                                </option>
                                                                <option value="fa-double-angle-down">&#xf103;
                                                                    icon-double-angle-down
                                                                </option>
                                                                <option value="fa-hand-down">&#xf0a7; icon-hand-down
                                                                </option>
                                                                <option value="fa-hand-left">&#xf0a5; icon-hand-left
                                                                </option>
                                                                <option value="fa-hand-right">&#xf0a4; icon-hand-right
                                                                </option>
                                                                <option value="fa-hand-up">&#xf0a6; icon-hand-up
                                                                </option>
                                                                <option value="fa-circle">&#xf111; icon-circle</option>
                                                                <option value="fa-circle-blank">&#xf10c;
                                                                    icon-circle-blank
                                                                </option>
                                                                <optgroup label="Video Player Icons">
                                                                    <option value="fa-play-circle">&#xf01d;
                                                                        icon-play-circle
                                                                    </option>
                                                                    <option value="fa-play">&#xf04b; icon-play</option>
                                                                    <option value="fa-pause">&#xf04c; icon-pause
                                                                    </option>
                                                                    <option value="fa-stop">&#xf04d; icon-stop</option>
                                                                    <option value="fa-step-backward">&#xf048;
                                                                        icon-step-backward
                                                                    </option>
                                                                    <option value="fa-fast-backward">&#xf049;
                                                                        icon-fast-backward
                                                                    </option>
                                                                    <option value="fa-backward">&#xf04a; icon-backward
                                                                    </option>
                                                                    <option value="fa-forward">&#xf04e; icon-forward
                                                                    </option>
                                                                    <option value="fa-fast-forward">&#xf050;
                                                                        icon-fast-forward
                                                                    </option>
                                                                    <option value="fa-step-forward">&#xf051;
                                                                        icon-step-forward
                                                                    </option>
                                                                    <option value="fa-eject">&#xf052; icon-eject
                                                                    </option>
                                                                    <option value="fa-fullscreen">&#xf0b2;
                                                                        icon-fullscreen
                                                                    </option>
                                                                    <option value="fa-resize-full">&#xf065;
                                                                        icon-resize-full
                                                                    </option>
                                                                    <option value="fa-resize-small">&#xf066;
                                                                        icon-resize-small
                                                                    </option>
                                                                    <optgroup label="Social Icons">
                                                                        <option value="fa-phone">&#xf095; icon-phone
                                                                        </option>
                                                                        <option value="fa-phone-sign">&#xf098;
                                                                            icon-phone-sign
                                                                        </option>
                                                                        <option value="fa-facebook">&#xf09a;
                                                                            icon-facebook
                                                                        </option>
                                                                        <option value="fa-facebook-sign">&#xf082;
                                                                            icon-facebook-sign
                                                                        </option>
                                                                        <option value="fa-twitter">&#xf099;
                                                                            icon-twitter
                                                                        </option>
                                                                        <option value="fa-twitter-sign">&#xf081;
                                                                            icon-twitter-sign
                                                                        </option>
                                                                        <option value="fa-github">&#xf09b; icon-github
                                                                        </option>
                                                                        <option value="fa-github-alt">&#xf113;
                                                                            icon-github-alt
                                                                        </option>
                                                                        <option value="fa-github-sign">&#xf092;
                                                                            icon-github-sign
                                                                        </option>
                                                                        <option value="fa-linkedin">&#xf0e1;
                                                                            icon-linkedin
                                                                        </option>
                                                                        <option value="fa-linkedin-sign">&#xf08c;
                                                                            icon-linkedin-sign
                                                                        </option>
                                                                        <option value="fa-pinterest">&#xf0d2;
                                                                            icon-pinterest
                                                                        </option>
                                                                        <option value="fa-pinterest-sign">&#xf0d3;
                                                                            icon-pinterest-sign
                                                                        </option>
                                                                        <option value="fa-google-plus">&#xf0d5;
                                                                            icon-google-plus
                                                                        </option>
                                                                        <option value="fa-google-plus-sign">&#xf0d4;
                                                                            icon-google-plus-sign
                                                                        </option>
                                                                        <option value="fa-sign-blank">&#xf0c8;
                                                                            icon-sign-blank
                                                                        </option>
                                                                        <optgroup label="Medical Icons">
                                                                            <option value="fa-ambulance">&#xf0f9;
                                                                                icon-ambulance
                                                                            </option>
                                                                            <option value="fa-beaker">&#xf0c3;
                                                                                icon-beaker
                                                                            </option>
                                                                            <option value="fa-h-sign">&#xf0fd;
                                                                                icon-h-sign
                                                                            </option>
                                                                            <option value="fa-hospital">&#xf0f8;
                                                                                icon-hospital
                                                                            </option>
                                                                            <option value="fa-medkit">&#xf0fa;
                                                                                icon-medkit
                                                                            </option>
                                                                            <option value="fa-plus-sign-alt">&#xf0fe;
                                                                                icon-plus-sign-alt
                                                                            </option>
                                                                            <option value="fa-stethoscope">&#xf0f1;
                                                                                icon-stethoscope
                                                                            </option>
                                                                            <option value="fa-user-md">&#xf0f0;
                                                                                icon-user-md
                                                                            </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <input id="btnsubmit" class="btn btn-dropbox" value="ثبت" type="submit">
                                    </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <?php require('app/views/admin/include/footer.php'); ?>
</footer>
</div>

<script src="public/panel/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/panel/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="public/panel/plugins/fastclick/fastclick.js"></script>
<script src="public/panel/dist/js/app.min.js"></script>
<script src="public/library/offlinealert/offline.min.js"></script>
<script src="public/js/pace.min.js"></script>


<script src="public/js/jquery.noty.packaged.js"></script>
<script src="public/js/countdown.js"></script>

<script type="text/javascript">
    $(document).ajaxStart(function () {
        Pace.restart();
    });
</script>

<script>
    $("#btnsubmit").on('click', function () {
        var name = document.getElementById("nameStyle").value;
        var icon = document.getElementById("iconStyle").value;
        if (name == "") {
            generate('warning', '<div class="activity-item" style="text-align:right" dir="rtl">نام دسته بندی را وارد کنید.</div>');
        }
        else {
            $.post(
                "adminpanel/addcategory",
                {
                    'name': name,
                    'icon': icon
                },
                function (data) {
                    if (data === "ok") {
                        generate('success', '<div class="activity-item" style="text-align:right" dir="rtl">دسته بندی جدید با موفقیت ثبت شد.</div>');
                        window.location.href = 'adminpanel/categories';
                    }
                    else {
                        generate('error', '<div class="activity-item" style="text-align:right" dir="rtl">این دسته بندی قبلا ثبت شده است.</div>');
                    }
                }
            );
        }
    });
</script>

</body>
</html>
