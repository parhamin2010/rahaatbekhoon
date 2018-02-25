<?php
$activeMenu = 'category';
$activeSubMenu = 'categoriesManage';
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= NAME; ?> | ویرایش دسته بندی</title>
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
                <small>ویرایش دسته بندی</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= URL; ?>adminpanel/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= URL; ?>adminpanel/categories"><i class="fa fa-th-list"></i> Categories</a></li>
                <li class="active">Categories Edit</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <?php
                    $style = $data['style'];
                    ?>
                    <!-- general form elements disabled -->
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title" dir="rtl">اطلاعات زیر را در صورت نیاز ویرایش کنید:</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                                <div class="box-body">
                                    <div class='row'>
                                        <div class='col-md-4'>
                                            <div class="form-group" style="text-align:right">
                                                <label align="right" for="nameStyle">:نام دسته بندی</label>
                                                <input style="border-radius: 3px;text-align:right" type="text" value="<?= $style['0']['name']; ?>"
                                                       class="form-control" id="nameStyle" name="nameStyle" required>
                                            </div>
                                        </div>
                                        <div class='col-md-4'>
                                            <div class="form-group" style="text-align:right">
                                                <label for="iconStyle">: آیکون</label>
                                                <select id="iconStyle" name="iconStyle" class="form-control select2"
                                                        style="border-radius: 3px;width: 100%; font-family: 'fontawesome', 'Helvetica';direction: ltr"
                                                        required>
                                                    <optgroup label="Web Application Icons">
                                                        <option <?php if ($style['0']['icon']=="fa-adjust") { ?>selected="selected"<?php } ?> value="fa-adjust">&#xf042; icon-adjust</option>
                                                        <option <?php if ($style['0']['icon']=="fa-asterisk") { ?>selected="selected"<?php } ?> value="fa-asterisk">&#xf069; icon-asterisk</option>
                                                        <option <?php if ($style['0']['icon']=="fa-ban-circle") { ?>selected="selected"<?php } ?> value="fa-ban-circle">&#xf05e; icon-ban-circle</option>
                                                        <option <?php if ($style['0']['icon']=="fa-bar-chart") { ?>selected="selected"<?php } ?> value="fa-bar-chart">&#xf080; icon-bar-chart</option>
                                                        <option <?php if ($style['0']['icon']=="fa-barcode") { ?>selected="selected"<?php } ?> value="fa-barcode">&#xf02a; icon-barcode</option>
                                                        <option <?php if ($style['0']['icon']=="fa-beer") { ?>selected="selected"<?php } ?> value="fa-beer">&#xf0fc; icon-beer</option>
                                                        <option <?php if ($style['0']['icon']=="fa-bell") { ?>selected="selected"<?php } ?> value="fa-bell">&#xf0a2; icon-bell</option>
                                                        <option <?php if ($style['0']['icon']=="fa-bell-alt") { ?>selected="selected"<?php } ?> value="fa-bell-alt">&#xf0f3; icon-bell-alt</option>
                                                        <option <?php if ($style['0']['icon']=="fa-bolt") { ?>selected="selected"<?php } ?> value="fa-bolt">&#xf0e7; icon-bolt</option>
                                                        <option <?php if ($style['0']['icon']=="fa-book") { ?>selected="selected"<?php } ?> value="fa-book">&#xf02d; icon-book</option>
                                                        <option <?php if ($style['0']['icon']=="fa-bookmark") { ?>selected="selected"<?php } ?> value="fa-bookmark">&#xf02e; icon-bookmark</option>
                                                        <option <?php if ($style['0']['icon']=="fa-bookmark-empty") { ?>selected="selected"<?php } ?> value="fa-bookmark-empty">&#xf097; icon-bookmark-empty</option>
                                                        <option <?php if ($style['0']['icon']=="fa-briefcase") { ?>selected="selected"<?php } ?> value="fa-briefcase">&#xf0b1; icon-briefcase</option>
                                                        <option <?php if ($style['0']['icon']=="fa-bullhorn") { ?>selected="selected"<?php } ?> value="fa-bullhorn">&#xf0a1; icon-bullhorn</option>
                                                        <option <?php if ($style['0']['icon']=="fa-calendar") { ?>selected="selected"<?php } ?> value="fa-calendar">&#xf073; icon-calendar</option>
                                                        <option <?php if ($style['0']['icon']=="fa-camera") { ?>selected="selected"<?php } ?> value="fa-camera">&#xf030; icon-camera</option>
                                                        <option <?php if ($style['0']['icon']=="fa-camera-retro") { ?>selected="selected"<?php } ?> value="fa-camera-retro">&#xf083; icon-camera-retro</option>
                                                        <option <?php if ($style['0']['icon']=="fa-certificate") { ?>selected="selected"<?php } ?> value="fa-certificate">&#xf0a3; icon-certificate</option>
                                                        <option <?php if ($style['0']['icon']=="fa-check") { ?>selected="selected"<?php } ?> value="fa-check">&#xf046; icon-check</option>
                                                        <option <?php if ($style['0']['icon']=="fa-check-empty") { ?>selected="selected"<?php } ?> value="fa-check-empty">&#xf096; icon-check-empty</option>
                                                        <option <?php if ($style['0']['icon']=="fa-circle") { ?>selected="selected"<?php } ?> value="fa-circle">&#xf05c; icon-circle</option>
                                                        <option <?php if ($style['0']['icon']=="fa-circle-blank") { ?>selected="selected"<?php } ?> value="fa-circle-blank">&#xf10c; icon-circle-blank</option>
                                                        <option <?php if ($style['0']['icon']=="fa-cloud") { ?>selected="selected"<?php } ?> value="fa-cloud">&#xf0c2; icon-cloud</option>
                                                        <option <?php if ($style['0']['icon']=="fa-cloud-download") { ?>selected="selected"<?php } ?> value="fa-cloud-download">&#xf0ed; icon-cloud-download</option>
                                                        <option <?php if ($style['0']['icon']=="fa-cloud-upload") { ?>selected="selected"<?php } ?> value="fa-cloud-upload">&#xf0ee; icon-cloud-upload</option>
                                                        <option <?php if ($style['0']['icon']=="fa-coffee") { ?>selected="selected"<?php } ?> value="fa-coffee">&#xf0f4; icon-coffee</option>
                                                        <option <?php if ($style['0']['icon']=="fa-cog") { ?>selected="selected"<?php } ?> value="fa-cog">&#xf013; icon-cog</option>
                                                        <option <?php if ($style['0']['icon']=="fa-cogs") { ?>selected="selected"<?php } ?> value="fa-cogs">&#xf085; icon-cogs</option>
                                                        <option <?php if ($style['0']['icon']=="fa-frown") { ?>selected="selected"<?php } ?> value="fa-frown">&#xf119; icon-frown</option>
                                                        <option <?php if ($style['0']['icon']=="fa-comment") { ?>selected="selected"<?php } ?> value="fa-comment">&#xf075; icon-comment</option>
                                                        <option <?php if ($style['0']['icon']=="fa-comment-alt") { ?>selected="selected"<?php } ?> value="fa-comment-alt">&#xf0e5;icon-comment-alt</option>
                                                        <option <?php if ($style['0']['icon']=="fa-comments") { ?>selected="selected"<?php } ?> value="fa-comments">&#xf086; icon-comments</option>
                                                        <option <?php if ($style['0']['icon']=="fa-comments-alt") { ?>selected="selected"<?php } ?> value="fa-comments-alt">&#xf0e6; icon-comments-alt</option>
                                                        <option <?php if ($style['0']['icon']=="fa-credit-card") { ?>selected="selected"<?php } ?> value="fa-credit-card">&#xf09d; icon-credit-card</option>
                                                        <option <?php if ($style['0']['icon']=="fa-dashboard") { ?>selected="selected"<?php } ?> value="fa-dashboard">&#xf0e4; icon-dashboard</option>
                                                        <option <?php if ($style['0']['icon']=="fa-desktop") { ?>selected="selected"<?php } ?> value="fa-desktop">&#xf108; icon-desktop</option>
                                                        <option <?php if ($style['0']['icon']=="fa-download") { ?>selected="selected"<?php } ?> value="fa-download">&#xf01a; icon-download</option>
                                                        <option <?php if ($style['0']['icon']=="fa-download-alt") { ?>selected="selected"<?php } ?> value="fa-download-alt">&#xf019; icon-download-alt</option>
                                                        <option <?php if ($style['0']['icon']=="fa-edit") { ?>selected="selected"<?php } ?> value="fa-edit">&#xf044; icon-edit</option>
                                                        <option <?php if ($style['0']['icon']=="fa-envelope") { ?>selected="selected"<?php } ?> value="fa-envelope">&#xf0e0; icon-envelope</option>
                                                        <option <?php if ($style['0']['icon']=="fa-envelope-alt") { ?>selected="selected"<?php } ?> value="fa-envelope-alt">&#xf003; icon-envelope-alt</option>
                                                        <option <?php if ($style['0']['icon']=="fa-exchange") { ?>selected="selected"<?php } ?> value="fa-exchange">&#xf0ec; icon-exchange</option>
                                                        <option <?php if ($style['0']['icon']=="fa-exclamation-sign") { ?>selected="selected"<?php } ?> value="fa-exclamation-sign">&#xf06a; icon-exclamation-sign</option>
                                                        <option <?php if ($style['0']['icon']=="fa-external-link") { ?>selected="selected"<?php } ?> value="fa-external-link">&#xf08e; icon-external-link</option>
                                                        <option <?php if ($style['0']['icon']=="fa-eye-close") { ?>selected="selected"<?php } ?> value="fa-eye-close">&#xf070; icon-eye-close</option>
                                                        <option <?php if ($style['0']['icon']=="fa-eye-open") { ?>selected="selected"<?php } ?> value="fa-eye-open">&#xf06e; icon-eye-open</option>
                                                        <option <?php if ($style['0']['icon']=="fa-facetime-video") { ?>selected="selected"<?php } ?> value="fa-facetime-video">&#xf03d; icon-facetime-video</option>
                                                        <option <?php if ($style['0']['icon']=="fa-fighter-jet") { ?>selected="selected"<?php } ?> value="fa-fighter-jet">&#xf0fb; icon-fighter-jet</option>
                                                        <option <?php if ($style['0']['icon']=="fa-film") { ?>selected="selected"<?php } ?> value="fa-film">&#xf008; icon-film</option>
                                                        <option <?php if ($style['0']['icon']=="fa-filter") { ?>selected="selected"<?php } ?> value="fa-filter">&#xf0b0; icon-filter</option>
                                                        <option <?php if ($style['0']['icon']=="fa-fire") { ?>selected="selected"<?php } ?> value="fa-fire">&#xf06d; icon-fire</option>
                                                        <option <?php if ($style['0']['icon']=="fa-flag") { ?>selected="selected"<?php } ?> value="fa-flag">&#xf024; icon-flag</option>
                                                        <option <?php if ($style['0']['icon']=="fa-folder-close") { ?>selected="selected"<?php } ?> value="fa-folder-close">&#xf07b; icon-folder-close</option>
                                                        <option <?php if ($style['0']['icon']=="fa-folder-open") { ?>selected="selected"<?php } ?> value="fa-folder-open">&#xf07c; icon-folder-open</option>
                                                        <option <?php if ($style['0']['icon']=="fa-folder-close-alt") { ?>selected="selected"<?php } ?> value="fa-folder-close-alt">&#xf114; icon-folder-close-alt</option>
                                                        <option <?php if ($style['0']['icon']=="fa-folder-open-alt") { ?>selected="selected"<?php } ?> value="fa-folder-open-alt">&#xf115; icon-folder-open-alt</option>
                                                        <option <?php if ($style['0']['icon']=="fa-food") { ?>selected="selected"<?php } ?> value="fa-food">&#xf0f5; icon-food</option>
                                                        <option <?php if ($style['0']['icon']=="fa-gift") { ?>selected="selected"<?php } ?> value="fa-gift">&#xf06b; icon-gift</option>
                                                        <option <?php if ($style['0']['icon']=="fa-glass") { ?>selected="selected"<?php } ?> value="fa-glass">&#xf000; icon-glass</option>
                                                        <option <?php if ($style['0']['icon']=="fa-globe") { ?>selected="selected"<?php } ?> value="fa-globe">&#xf0ac; icon-globe</option>
                                                        <option <?php if ($style['0']['icon']=="fa-group") { ?>selected="selected"<?php } ?> value="fa-group">&#xf0c0; icon-group</option>
                                                        <option <?php if ($style['0']['icon']=="fa-hdd") { ?>selected="selected"<?php } ?> value="fa-hdd">&#xf0a0; icon-hdd</option>
                                                        <option <?php if ($style['0']['icon']=="fa-headphones") { ?>selected="selected"<?php } ?> value="fa-headphones">&#xf025; icon-headphones</option>
                                                        <option <?php if ($style['0']['icon']=="fa-heart") { ?>selected="selected"<?php } ?> value="fa-heart">&#xf004; icon-heart</option>
                                                        <option <?php if ($style['0']['icon']=="fa-heart-empty") { ?>selected="selected"<?php } ?> value="fa-heart-empty">&#xf08a; icon-heart-empty</option>
                                                        <option <?php if ($style['0']['icon']=="fa-home") { ?>selected="selected"<?php } ?> value="fa-home">&#xf015; icon-home</option>
                                                        <option <?php if ($style['0']['icon']=="fa-inbox") { ?>selected="selected"<?php } ?> value="fa-inbox">&#xf01c; icon-inbox</option>
                                                        <option <?php if ($style['0']['icon']=="fa-info-sign") { ?>selected="selected"<?php } ?> value="fa-info-sign">&#xf05a; icon-info-sign</option>
                                                        <option <?php if ($style['0']['icon']=="fa-key") { ?>selected="selected"<?php } ?> value="fa-key">&#xf084; icon-key</option>
                                                        <option <?php if ($style['0']['icon']=="fa-keyboard") { ?>selected="selected"<?php } ?> value="fa-keyboard">&#xf11c; icon-keyboard</option>
                                                        <option <?php if ($style['0']['icon']=="fa-leaf") { ?>selected="selected"<?php } ?> value="fa-leaf">&#xf06c; icon-leaf</option>
                                                        <option <?php if ($style['0']['icon']=="fa-laptop") { ?>selected="selected"<?php } ?> value="fa-laptop">&#xf109; icon-laptop</option>
                                                        <option <?php if ($style['0']['icon']=="fa-legal") { ?>selected="selected"<?php } ?> value="fa-legal">&#xf0e3; icon-legal</option>
                                                        <option <?php if ($style['0']['icon']=="fa-lemon") { ?>selected="selected"<?php } ?> value="fa-lemon">&#xf094; icon-lemon</option>
                                                        <option <?php if ($style['0']['icon']=="fa-lightbulb") { ?>selected="selected"<?php } ?> value="fa-lightbulb">&#xf0eb; icon-lightbulb</option>
                                                        <option <?php if ($style['0']['icon']=="fa-lock") { ?>selected="selected"<?php } ?> value="fa-lock">&#xf023; icon-lock</option>
                                                        <option <?php if ($style['0']['icon']=="fa-unlock") { ?>selected="selected"<?php } ?> value="fa-unlock">&#xf09c; icon-unlock</option>
                                                        <option <?php if ($style['0']['icon']=="fa-magic") { ?>selected="selected"<?php } ?> value="fa-magic">&#xf0d0; icon-magic</option>
                                                        <option <?php if ($style['0']['icon']=="fa-magnet") { ?>selected="selected"<?php } ?> value="fa-magnet">&#xf076; icon-magnet</option>
                                                        <option <?php if ($style['0']['icon']=="fa-map-marker") { ?>selected="selected"<?php } ?> value="fa-map-marker">&#xf041; icon-map-marker</option>
                                                        <option <?php if ($style['0']['icon']=="fa-microphone") { ?>selected="selected"<?php } ?> value="fa-microphone">&#xf130; fa-microphone</option>
                                                        <option <?php if ($style['0']['icon']=="fa-minus") { ?>selected="selected"<?php } ?> value="fa-minus">&#xf068; icon-minus</option>
                                                        <option <?php if ($style['0']['icon']=="fa-minus-sign") { ?>selected="selected"<?php } ?> value="fa-minus-sign">&#xf056; icon-minus-sign</option>
                                                        <option <?php if ($style['0']['icon']=="fa-mobile-phone") { ?>selected="selected"<?php } ?> value="fa-mobile-phone">&#xf10b; icon-mobile-phone</option>
                                                        <option <?php if ($style['0']['icon']=="fa-money") { ?>selected="selected"<?php } ?> value="fa-money">&#xf0d6; icon-money</option>
                                                        <option <?php if ($style['0']['icon']=="fa-move") { ?>selected="selected"<?php } ?> value="fa-move">&#xf047; icon-move</option>
                                                        <option <?php if ($style['0']['icon']=="fa-music") { ?>selected="selected"<?php } ?> value="fa-music">&#xf001; icon-music</option>
                                                        <option <?php if ($style['0']['icon']=="fa-off") { ?>selected="selected"<?php } ?> value="fa-off">&#xf011; icon-off</option>
                                                        <option <?php if ($style['0']['icon']=="fa-ok") { ?>selected="selected"<?php } ?> value="fa-ok">&#xf00c; icon-ok</option>
                                                        <option <?php if ($style['0']['icon']=="fa-ok-circle") { ?>selected="selected"<?php } ?> value="fa-ok-circle">&#xf05d; icon-ok-circle</option>
                                                        <option <?php if ($style['0']['icon']=="fa-ok-sign") { ?>selected="selected"<?php } ?> value="fa-ok-sign">&#xf058; icon-ok-sign</option>
                                                        <option <?php if ($style['0']['icon']=="fa-pencil") { ?>selected="selected"<?php } ?> value="fa-pencil">&#xf040; icon-pencil</option>
                                                        <option <?php if ($style['0']['icon']=="fa-picture") { ?>selected="selected"<?php } ?> value="fa-picture">&#xf03e; icon-picture</option>
                                                        <option <?php if ($style['0']['icon']=="fa-plane") { ?>selected="selected"<?php } ?> value="fa-plane">&#xf072; icon-plane</option>
                                                        <option <?php if ($style['0']['icon']=="fa-plus") { ?>selected="selected"<?php } ?> value="fa-plus">&#xf067; icon-plus</option>
                                                        <option <?php if ($style['0']['icon']=="fa-plus-sign") { ?>selected="selected"<?php } ?> value="fa-plus-sign">&#xf055; icon-plus-sign</option>
                                                        <option <?php if ($style['0']['icon']=="fa-print") { ?>selected="selected"<?php } ?> value="fa-print">&#xf02f; icon-print</option>
                                                        <option <?php if ($style['0']['icon']=="fa-pushpin") { ?>selected="selected"<?php } ?> value="fa-pushpin">&#xf08d; icon-pushpin</option>
                                                        <option <?php if ($style['0']['icon']=="fa-qrcode") { ?>selected="selected"<?php } ?> value="fa-qrcode">&#xf029; icon-qrcode</option>
                                                        <option <?php if ($style['0']['icon']=="fa-question-sign") { ?>selected="selected"<?php } ?> value="fa-question-sign">&#xf059; icon-question-sign</option>
                                                        <option <?php if ($style['0']['icon']=="fa-quote-left") { ?>selected="selected"<?php } ?> value="fa-quote-left">&#xf10d; icon-quote-left</option>
                                                        <option <?php if ($style['0']['icon']=="fa-quote-right") { ?>selected="selected"<?php } ?> value="fa-quote-right">&#xf10e; icon-quote-right</option>
                                                        <option <?php if ($style['0']['icon']=="fa-random") { ?>selected="selected"<?php } ?> value="fa-random">&#xf074; icon-random</option>
                                                        <option <?php if ($style['0']['icon']=="fa-refresh") { ?>selected="selected"<?php } ?> value="fa-refresh">&#xf021; icon-refresh</option>
                                                        <option <?php if ($style['0']['icon']=="fa-remove") { ?>selected="selected"<?php } ?> value="fa-remove">&#xf00d; icon-remove</option>
                                                        <option <?php if ($style['0']['icon']=="fa-remove-circle") { ?>selected="selected"<?php } ?> value="fa-remove-circle">&#xf05c; icon-remove-circle</option>
                                                        <option <?php if ($style['0']['icon']=="fa-remove-sign") { ?>selected="selected"<?php } ?> value="fa-remove-sign">&#xf057; icon-remove-sign</option>
                                                        <option <?php if ($style['0']['icon']=="fa-reorder") { ?>selected="selected"<?php } ?> value="fa-reorder">&#xf0c9; icon-reorder</option>
                                                        <option <?php if ($style['0']['icon']=="fa-reply") { ?>selected="selected"<?php } ?> value="fa-reply">&#xf112; icon-reply</option>
                                                        <option <?php if ($style['0']['icon']=="fa-resize-horizontal") { ?>selected="selected"<?php } ?> value="fa-resize-horizontal">&#xf07e; icon-resize-horizontal</option>
                                                        <option <?php if ($style['0']['icon']=="fa-resize-vertical") { ?>selected="selected"<?php } ?> value="fa-resize-vertical">&#xf07d; icon-resize-vertical</option>
                                                        <option <?php if ($style['0']['icon']=="fa-retweet") { ?>selected="selected"<?php } ?> value="fa-retweet">&#xf079; icon-retweet</option>
                                                        <option <?php if ($style['0']['icon']=="fa-road") { ?>selected="selected"<?php } ?> value="fa-road">&#xf018; icon-road</option>
                                                        <option <?php if ($style['0']['icon']=="fa-rss") { ?>selected="selected"<?php } ?> value="fa-rss">&#xf09e; icon-rss</option>
                                                        <option <?php if ($style['0']['icon']=="fa-screenshot") { ?>selected="selected"<?php } ?> value="fa-screenshot">&#xf05b; icon-screenshot</option>
                                                        <option <?php if ($style['0']['icon']=="fa-search") { ?>selected="selected"<?php } ?> value="fa-search">&#xf002; icon-search</option>
                                                        <option <?php if ($style['0']['icon']=="fa-share") { ?>selected="selected"<?php } ?> value="fa-share">&#xf045; icon-share</option>
                                                        <option <?php if ($style['0']['icon']=="fa-share-alt") { ?>selected="selected"<?php } ?> value="fa-share-alt">&#xf064; icon-share-alt</option>
                                                        <option <?php if ($style['0']['icon']=="fa-shopping-cart") { ?>selected="selected"<?php } ?> value="fa-shopping-cart">&#xf07a; icon-shopping-cart</option>
                                                        <option <?php if ($style['0']['icon']=="fa-signal") { ?>selected="selected"<?php } ?> value="fa-signal">&#xf012; icon-signal</option>
                                                        <option <?php if ($style['0']['icon']=="fa-signin") { ?>selected="selected"<?php } ?> value="fa-signin">&#xf090; icon-signin</option>
                                                        <option <?php if ($style['0']['icon']=="fa-signout") { ?>selected="selected"<?php } ?> value="fa-signout">&#xf08b; icon-signout</option>
                                                        <option <?php if ($style['0']['icon']=="fa-sitemap") { ?>selected="selected"<?php } ?> value="fa-sitemap">&#xf0e8; icon-sitemap</option>
                                                        <option <?php if ($style['0']['icon']=="fa-sort") { ?>selected="selected"<?php } ?> value="fa-sort">&#xf0dc; icon-sort</option>
                                                        <option <?php if ($style['0']['icon']=="fa-sort-down") { ?>selected="selected"<?php } ?> value="fa-sort-down">&#xf0dd; icon-sort-down</option>
                                                        <option <?php if ($style['0']['icon']=="fa-sort-up") { ?>selected="selected"<?php } ?> value="fa-sort-up">&#xf0de; icon-sort-up</option>
                                                        <option <?php if ($style['0']['icon']=="fa-spinner") { ?>selected="selected"<?php } ?> value="fa-spinner">&#xf110; icon-spinner</option>
                                                        <option <?php if ($style['0']['icon']=="fa-star") { ?>selected="selected"<?php } ?> value="fa-star">&#xf005; icon-star</option>
                                                        <option <?php if ($style['0']['icon']=="fa-star-empty") { ?>selected="selected"<?php } ?> value="fa-star-empty">&#xf006; icon-star-empty</option>
                                                        <option <?php if ($style['0']['icon']=="fa-star-half") { ?>selected="selected"<?php } ?> value="fa-star-half">&#xf089; icon-star-half</option>
                                                        <option <?php if ($style['0']['icon']=="fa-tablet") { ?>selected="selected"<?php } ?> value="fa-tablet">&#xf10a; icon-tablet</option>
                                                        <option <?php if ($style['0']['icon']=="fa-terminal") { ?>selected="selected"<?php } ?> value="fa-terminal">&#xf120; icon-terminal</option>
                                                        <option <?php if ($style['0']['icon']=="fa-tag") { ?>selected="selected"<?php } ?> value="fa-tag">&#xf02b; icon-tag</option>
                                                        <option <?php if ($style['0']['icon']=="fa-tags") { ?>selected="selected"<?php } ?> value="fa-tags">&#xf02c; icon-tags</option>
                                                        <option <?php if ($style['0']['icon']=="fa-tasks") { ?>selected="selected"<?php } ?> value="fa-tasks">&#xf0ae; icon-tasks</option>
                                                        <option <?php if ($style['0']['icon']=="fa-thumbs-down") { ?>selected="selected"<?php } ?> value="fa-thumbs-down">&#xf165; icon-thumbs-down</option>
                                                        <option <?php if ($style['0']['icon']=="fa-thumbs-up") { ?>selected="selected"<?php } ?> value="fa-thumbs-up">&#xf164; icon-thumbs-up</option>
                                                        <option <?php if ($style['0']['icon']=="fa-time") { ?>selected="selected"<?php } ?> value="fa-time">&#xf017; icon-time</option>
                                                        <option <?php if ($style['0']['icon']=="fa-tint") { ?>selected="selected"<?php } ?> value="fa-tint">&#xf043; icon-tint</option>
                                                        <option <?php if ($style['0']['icon']=="fa-trash") { ?>selected="selected"<?php } ?> value="fa-trash">&#xf014; icon-trash</option>
                                                        <option <?php if ($style['0']['icon']=="fa-trophy") { ?>selected="selected"<?php } ?> value="fa-trophy">&#xf091; icon-trophy</option>
                                                        <option <?php if ($style['0']['icon']=="fa-truck") { ?>selected="selected"<?php } ?> value="fa-truck">&#xf0d1; icon-truck</option>
                                                        <option <?php if ($style['0']['icon']=="fa-umbrella") { ?>selected="selected"<?php } ?> value="fa-umbrella">&#xf0e9; icon-umbrella</option>
                                                        <option <?php if ($style['0']['icon']=="fa-upload") { ?>selected="selected"<?php } ?> value="fa-upload">&#xf01b; icon-upload</option>
                                                        <option <?php if ($style['0']['icon']=="fa-upload-alt") { ?>selected="selected"<?php } ?> value="fa-upload-alt">&#xf093; icon-upload-alt</option>
                                                        <option <?php if ($style['0']['icon']=="fa-user") { ?>selected="selected"<?php } ?> value="fa-user">&#xf007; icon-user</option>
                                                        <option <?php if ($style['0']['icon']=="fa-user-md") { ?>selected="selected"<?php } ?> value="fa-user-md">&#xf0f0; icon-user-md</option>
                                                        <option <?php if ($style['0']['icon']=="fa-volume-off") { ?>selected="selected"<?php } ?> value="fa-volume-off">&#xf026; icon-volume-off</option>
                                                        <option <?php if ($style['0']['icon']=="fa-volume-down") { ?>selected="selected"<?php } ?> value="fa-volume-down">&#xf027; icon-volume-down</option>
                                                        <option <?php if ($style['0']['icon']=="fa-volume-up") { ?>selected="selected"<?php } ?> value="fa-volume-up">&#xf028; icon-volume-up</option>
                                                        <option <?php if ($style['0']['icon']=="fa-warning-sign") { ?>selected="selected"<?php } ?> value="fa-warning-sign">&#xf071; icon-warning-sign</option>
                                                        <option <?php if ($style['0']['icon']=="fa-wrench") { ?>selected="selected"<?php } ?> value="fa-wrench">&#xf0ad; icon-wrench</option>
                                                        <option <?php if ($style['0']['icon']=="fa-zoom-in") { ?>selected="selected"<?php } ?> value="fa-zoom-in">&#xf00e; icon-zoom-in</option>
                                                        <option <?php if ($style['0']['icon']=="fa-zoom-out") { ?>selected="selected"<?php } ?> value="fa-zoom-out">&#xf010; icon-zoom-out</option>
                                                        <optgroup label="Text Editor Icons">
                                                            <option <?php if ($style['0']['icon']=="fa-file") { ?>selected="selected"<?php } ?> value="fa-file">&#xf15b; icon-file</option>
                                                            <option <?php if ($style['0']['icon']=="fa-file-alt") { ?>selected="selected"<?php } ?> value="fa-file-alt">&#xf016; icon-file-alt</option>
                                                            <option <?php if ($style['0']['icon']=="fa-file-text-alt") { ?>selected="selected"<?php } ?> value="fa-file-text-alt">&#xf0f6; icon-file-text-alt</option>
                                                            <option <?php if ($style['0']['icon']=="fa-cut") { ?>selected="selected"<?php } ?> value="fa-cut">&#xf0c4; icon-cut</option>
                                                            <option <?php if ($style['0']['icon']=="fa-copy") { ?>selected="selected"<?php } ?> value="fa-copy">&#xf0c5; icon-copy</option>
                                                            <option <?php if ($style['0']['icon']=="fa-paste") { ?>selected="selected"<?php } ?> value="fa-paste">&#xf0ea; icon-paste</option>
                                                            <option <?php if ($style['0']['icon']=="fa-save") { ?>selected="selected"<?php } ?> value="fa-save">&#xf0c7; icon-save</option>
                                                            <option <?php if ($style['0']['icon']=="fa-undo") { ?>selected="selected"<?php } ?> value="fa-undo">&#xf0e2; icon-undo</option>
                                                            <option <?php if ($style['0']['icon']=="fa-repeat") { ?>selected="selected"<?php } ?> value="fa-repeat">&#xf01e; icon-repeat</option>
                                                            <option <?php if ($style['0']['icon']=="fa-text-height") { ?>selected="selected"<?php } ?> value="fa-text-height">&#xf034; icon-text-height</option>
                                                            <option <?php if ($style['0']['icon']=="fa-text-width") { ?>selected="selected"<?php } ?> value="fa-text-width">&#xf035; icon-text-width</option>
                                                            <option <?php if ($style['0']['icon']=="fa-align-left") { ?>selected="selected"<?php } ?> value="fa-align-left">&#xf036; icon-align-left</option>
                                                            <option <?php if ($style['0']['icon']=="fa-align-center") { ?>selected="selected"<?php } ?> value="fa-align-center">&#xf037; icon-align-center</option>
                                                            <option <?php if ($style['0']['icon']=="fa-align-right") { ?>selected="selected"<?php } ?> value="fa-align-right">&#xf038; icon-align-right</option>
                                                            <option <?php if ($style['0']['icon']=="fa-align-justify") { ?>selected="selected"<?php } ?> value="fa-align-justify">&#xf039; icon-align-justify</option>
                                                            <option <?php if ($style['0']['icon']=="fa-indent-left") { ?>selected="selected"<?php } ?> value="fa-indent-left">&#xf03b; icon-indent-left</option>
                                                            <option <?php if ($style['0']['icon']=="fa-indent-right") { ?>selected="selected"<?php } ?> value="fa-indent-right">&#xf03c; icon-indent-right</option>
                                                            <option <?php if ($style['0']['icon']=="fa-font") { ?>selected="selected"<?php } ?> value="fa-font">&#xf031; icon-font</option>
                                                            <option <?php if ($style['0']['icon']=="fa-bold") { ?>selected="selected"<?php } ?> value="fa-bold">&#xf032; icon-bold</option>
                                                            <option <?php if ($style['0']['icon']=="fa-italic") { ?>selected="selected"<?php } ?> value="fa-italic">&#xf033; icon-italic</option>
                                                            <option <?php if ($style['0']['icon']=="fa-strikethrough") { ?>selected="selected"<?php } ?> value="fa-strikethrough">&#xf0cc; icon-strikethrough</option>
                                                            <option <?php if ($style['0']['icon']=="fa-underline") { ?>selected="selected"<?php } ?> value="fa-underline">&#xf0cd; icon-underline</option>
                                                            <option <?php if ($style['0']['icon']=="fa-link") { ?>selected="selected"<?php } ?> value="fa-link">&#xf0c1; icon-link</option>
                                                            <option <?php if ($style['0']['icon']=="fa-paper-clip") { ?>selected="selected"<?php } ?> value="fa-paper-clip">&#xf0c6; icon-paper-clip</option>
                                                            <option <?php if ($style['0']['icon']=="fa-columns") { ?>selected="selected"<?php } ?> value="fa-columns">&#xf0db; icon-columns</option>
                                                            <option <?php if ($style['0']['icon']=="fa-table") { ?>selected="selected"<?php } ?> value="fa-table">&#xf0ce; icon-table</option>
                                                            <option <?php if ($style['0']['icon']=="fa-th-large") { ?>selected="selected"<?php } ?> value="fa-th-large">&#xf009; icon-th-large</option>
                                                            <option <?php if ($style['0']['icon']=="fa-th") { ?>selected="selected"<?php } ?> value="fa-th">&#xf00a; icon-th</option>
                                                            <option <?php if ($style['0']['icon']=="fa-th-list") { ?>selected="selected"<?php } ?> value="fa-th-list">&#xf00b; icon-th-list</option>
                                                            <option <?php if ($style['0']['icon']=="fa-list") { ?>selected="selected"<?php } ?> value="fa-list">&#xf03a; icon-list</option>
                                                            <option <?php if ($style['0']['icon']=="fa-list-ol") { ?>selected="selected"<?php } ?> value="fa-list-ol">&#xf0cb; icon-list-ol</option>
                                                            <option <?php if ($style['0']['icon']=="fa-list-ul") { ?>selected="selected"<?php } ?> value="fa-list-ul">&#xf0ca; icon-list-ul</option>
                                                            <option <?php if ($style['0']['icon']=="fa-list-alt") { ?>selected="selected"<?php } ?> value="fa-list-alt">&#xf022; icon-list-alt</option>
                                                            <optgroup label="Directional Icons">
                                                                <option <?php if ($style['0']['icon']=="fa-angle-left") { ?>selected="selected"<?php } ?> value="fa-angle-left">&#xf104; icon-angle-left</option>
                                                                <option <?php if ($style['0']['icon']=="fa-angle-right") { ?>selected="selected"<?php } ?> value="fa-angle-right">&#xf105; icon-angle-right</option>
                                                                <option <?php if ($style['0']['icon']=="fa-angle-up") { ?>selected="selected"<?php } ?> value="fa-angle-up">&#xf106; icon-angle-up</option>
                                                                <option <?php if ($style['0']['icon']=="fa-angle-down") { ?>selected="selected"<?php } ?> value="fa-angle-down">&#xf107; icon-angle-down</option>
                                                                <option <?php if ($style['0']['icon']=="fa-arrow-down") { ?>selected="selected"<?php } ?> value="fa-arrow-down">&#xf063; icon-arrow-down</option>
                                                                <option <?php if ($style['0']['icon']=="fa-arrow-left") { ?>selected="selected"<?php } ?> value="fa-arrow-left">&#xf060; icon-arrow-left</option>
                                                                <option <?php if ($style['0']['icon']=="fa-arrow-right") { ?>selected="selected"<?php } ?> value="fa-arrow-right">&#xf061; icon-arrow-right</option>
                                                                <option <?php if ($style['0']['icon']=="fa-arrow-up") { ?>selected="selected"<?php } ?> value="fa-arrow-up">&#xf062; icon-arrow-up</option>
                                                                <option <?php if ($style['0']['icon']=="fa-caret-down") { ?>selected="selected"<?php } ?> value="fa-caret-down">&#xf0d7; icon-caret-down</option>
                                                                <option <?php if ($style['0']['icon']=="fa-caret-left") { ?>selected="selected"<?php } ?> value="fa-caret-left">&#xf0d9; icon-caret-left</option>
                                                                <option <?php if ($style['0']['icon']=="fa-caret-right") { ?>selected="selected"<?php } ?> value="fa-caret-right">&#xf0da; icon-caret-right</option>
                                                                <option <?php if ($style['0']['icon']=="fa-caret-up") { ?>selected="selected"<?php } ?> value="fa-caret-up">&#xf0d8; icon-caret-up</option>
                                                                <option <?php if ($style['0']['icon']=="fa-chevron-down") { ?>selected="selected"<?php } ?> value="fa-chevron-down">&#xf053; icon-chevron-down</option>
                                                                <option <?php if ($style['0']['icon']=="fa-chevron-left") { ?>selected="selected"<?php } ?> value="fa-chevron-left">&#xf053; icon-chevron-left</option>
                                                                <option <?php if ($style['0']['icon']=="fa-chevron-right") { ?>selected="selected"<?php } ?> value="fa-chevron-right">&#xf054; icon-chevron-right</option>
                                                                <option <?php if ($style['0']['icon']=="fa-chevron-up") { ?>selected="selected"<?php } ?> value="fa-chevron-up">&#xf077; icon-chevron-up</option>
                                                                <option <?php if ($style['0']['icon']=="fa-circle-arrow-down") { ?>selected="selected"<?php } ?> value="fa-circle-arrow-down">&#xf0ab; icon-circle-arrow-down</option>
                                                                <option <?php if ($style['0']['icon']=="fa-circle-arrow-left") { ?>selected="selected"<?php } ?> value="fa-circle-arrow-left">&#xf0a8; icon-circle-arrow-left</option>
                                                                <option <?php if ($style['0']['icon']=="fa-circle-arrow-right") { ?>selected="selected"<?php } ?> value="fa-circle-arrow-right">&#xf0a9; icon-circle-arrow-right</option>
                                                                <option <?php if ($style['0']['icon']=="fa-circle-arrow-up") { ?>selected="selected"<?php } ?> value="fa-circle-arrow-up">&#xf0aa; icon-circle-arrow-up</option>
                                                                <option <?php if ($style['0']['icon']=="fa-double-angle-left") { ?>selected="selected"<?php } ?> value="fa-double-angle-left">&#xf100; icon-double-angle-left</option>
                                                                <option <?php if ($style['0']['icon']=="fa-double-angle-right") { ?>selected="selected"<?php } ?> value="fa-double-angle-right">&#xf101; icon-double-angle-right</option>
                                                                <option <?php if ($style['0']['icon']=="fa-double-angle-up") { ?>selected="selected"<?php } ?> value="fa-double-angle-up">&#xf102; icon-double-angle-up</option>
                                                                <option <?php if ($style['0']['icon']=="fa-double-angle-down") { ?>selected="selected"<?php } ?> value="fa-double-angle-down">&#xf103; icon-double-angle-down</option>
                                                                <option <?php if ($style['0']['icon']=="fa-hand-down") { ?>selected="selected"<?php } ?> value="fa-hand-down">&#xf0a7; icon-hand-down</option>
                                                                <option <?php if ($style['0']['icon']=="fa-hand-left") { ?>selected="selected"<?php } ?> value="fa-hand-left">&#xf0a5; icon-hand-left</option>
                                                                <option <?php if ($style['0']['icon']=="fa-hand-right") { ?>selected="selected"<?php } ?> value="fa-hand-right">&#xf0a4; icon-hand-right</option>
                                                                <option <?php if ($style['0']['icon']=="fa-hand-up") { ?>selected="selected"<?php } ?> value="fa-hand-up">&#xf0a6; icon-hand-up</option>
                                                                <option <?php if ($style['0']['icon']=="fa-circle") { ?>selected="selected"<?php } ?> value="fa-circle">&#xf111; icon-circle</option>
                                                                <option <?php if ($style['0']['icon']=="fa-circle-blank") { ?>selected="selected"<?php } ?> value="fa-circle-blank">&#xf10c; icon-circle-blank</option>
                                                                <optgroup label="Video Player Icons">
                                                                    <option <?php if ($style['0']['icon']=="fa-play-circle") { ?>selected="selected"<?php } ?> value="fa-play-circle">&#xf01d; icon-play-circle</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-play") { ?>selected="selected"<?php } ?> value="fa-play">&#xf04b; icon-play</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-pause") { ?>selected="selected"<?php } ?> value="fa-pause">&#xf04c; icon-pause</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-stop") { ?>selected="selected"<?php } ?> value="fa-stop">&#xf04d; icon-stop</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-step-backward") { ?>selected="selected"<?php } ?> value="fa-step-backward">&#xf048; icon-step-backward</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-fast-backward") { ?>selected="selected"<?php } ?> value="fa-fast-backward">&#xf049; icon-fast-backward</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-backward") { ?>selected="selected"<?php } ?> value="fa-backward">&#xf04a; icon-backward</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-forward") { ?>selected="selected"<?php } ?> value="fa-forward">&#xf04e; icon-forward</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-fast-forward") { ?>selected="selected"<?php } ?> value="fa-fast-forward">&#xf050; icon-fast-forward</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-step-forward") { ?>selected="selected"<?php } ?> value="fa-step-forward">&#xf051; icon-step-forward</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-eject") { ?>selected="selected"<?php } ?> value="fa-eject">&#xf052; icon-eject</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-fullscreen") { ?>selected="selected"<?php } ?> value="fa-fullscreen">&#xf0b2; icon-fullscreen</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-resize-full") { ?>selected="selected"<?php } ?> value="fa-resize-full">&#xf065; icon-resize-full</option>
                                                                    <option <?php if ($style['0']['icon']=="fa-resize-small") { ?>selected="selected"<?php } ?> value="fa-resize-small">&#xf066; icon-resize-small</option>
                                                                    <optgroup label="Social Icons">
                                                                        <option <?php if ($style['0']['icon']=="fa-phone") { ?>selected="selected"<?php } ?> value="fa-phone">&#xf095; icon-phone</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-phone-sign") { ?>selected="selected"<?php } ?> value="fa-phone-sign">&#xf098; icon-phone-sign</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-facebook") { ?>selected="selected"<?php } ?> value="fa-facebook">&#xf09a; icon-facebook</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-facebook-sign") { ?>selected="selected"<?php } ?> value="fa-facebook-sign">&#xf082; icon-facebook-sign</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-twitter") { ?>selected="selected"<?php } ?> value="fa-twitter">&#xf099; icon-twitter</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-twitter-sign") { ?>selected="selected"<?php } ?> value="fa-twitter-sign">&#xf081; icon-twitter-sign</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-github") { ?>selected="selected"<?php } ?> value="fa-github">&#xf09b; icon-github</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-github-alt") { ?>selected="selected"<?php } ?> value="fa-github-alt">&#xf113; icon-github-alt</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-github-sign") { ?>selected="selected"<?php } ?> value="fa-github-sign">&#xf092; icon-github-sign</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-linkedin") { ?>selected="selected"<?php } ?> value="fa-linkedin">&#xf0e1; icon-linkedin</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-linkedin-sign") { ?>selected="selected"<?php } ?> value="fa-linkedin-sign">&#xf08c; icon-linkedin-sign</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-pinterest") { ?>selected="selected"<?php } ?> value="fa-pinterest">&#xf0d2; icon-pinterest</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-pinterest-sign") { ?>selected="selected"<?php } ?> value="fa-pinterest-sign">&#xf0d3; icon-pinterest-sign</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-google-plus") { ?>selected="selected"<?php } ?> value="fa-google-plus">&#xf0d5; icon-google-plus</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-google-plus-sign") { ?>selected="selected"<?php } ?> value="fa-google-plus-sign">&#xf0d4; icon-google-plus-sign</option>
                                                                        <option <?php if ($style['0']['icon']=="fa-sign-blank") { ?>selected="selected"<?php } ?> value="fa-sign-blank">&#xf0c8; icon-sign-blank</option>
                                                                        <optgroup label="Medical Icons">
                                                                            <option <?php if ($style['0']['icon']=="fa-ambulance") { ?>selected="selected"<?php } ?> value="fa-ambulance">&#xf0f9; icon-ambulance</option>
                                                                            <option <?php if ($style['0']['icon']=="fa-beaker") { ?>selected="selected"<?php } ?> value="fa-beaker">&#xf0c3; icon-beaker</option>
                                                                            <option <?php if ($style['0']['icon']=="fa-h-sign") { ?>selected="selected"<?php } ?> value="fa-h-sign">&#xf0fd; icon-h-sign</option>
                                                                            <option <?php if ($style['0']['icon']=="fa-hospital") { ?>selected="selected"<?php } ?> value="fa-hospital">&#xf0f8; icon-hospital</option>
                                                                            <option <?php if ($style['0']['icon']=="fa-plus-sign-alt") { ?>selected="selected"<?php } ?> value="fa-medkit">&#xf0fa; icon-medkit</option>
                                                                            <option <?php if ($style['0']['icon']=="fa--plus-sign-alt") { ?>selected="selected"<?php } ?> value="fa-plus-sign-alt">&#xf0fe; icon-plus-sign-alt</option>
                                                                            <option <?php if ($style['0']['icon']=="fa-stethoscope") { ?>selected="selected"<?php } ?> value="fa-stethoscope">&#xf0f1; icon-stethoscope</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class='col-md-4'>
                                            <div class="form-group" style="text-align:right">
                                                <label for="statusStyle">: وضعیت</label>
                                                <select id="statusStyle" name="statusStyle" class="form-control select2"
                                                        style="border-radius: 3px;width: 100%;"
                                                        required>
                                                        <option <?php if ($style['0']['status']==1) { ?>selected="selected"<?php } ?> value="1"> فعال </option>
                                                        <option <?php if ($style['0']['status']==0) { ?>selected="selected"<?php } ?> value="0"> غیرفعال </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <input id="btnsubmit" class="btn btn-dropbox" value="ویرایش" type="submit">
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
        var status = document.getElementById("statusStyle").value;
        if (name == "") {
            generate('warning', '<div class="activity-item" style="text-align:right" dir="rtl">نام دسته بندی را وارد کنید.</div>');
        }
        else {
            $.post(
                "adminpanel/editcategory",
                {
                    'name': name,
                    'icon': icon,
                    'status': status,
                    'id':<?php echo $data['attrId']; ?>
                },
                function (data) {
                    if (data === "ok") {
                        generate('success', '<div class="activity-item" style="text-align:right" dir="rtl">دسته بندی مورد نظر با موفقیت ویرایش شد.</div>');
                        window.location.href = 'adminpanel/categories';
                    }
                    else {
                        generate('error', '<div class="activity-item" style="text-align:right" dir="rtl">متاسفانه خطایی رخ داده است.</div>');
                    }
                }
            );
        }
    });
</script>

</body>
</html>
