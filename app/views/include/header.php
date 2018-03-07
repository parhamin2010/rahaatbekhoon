<?php
$userId = Model::sessionGet('userId');
$level = Model::sessionGet('level');
?>

<header id="dk-header"
        style="background: url('public/images/bgheader.png')no-repeat;background-size: cover;z-index: 1030">
    <div class="header" style="padding: 10px;margin-bottom: 20px">
        <div class="inner-wraper">
            <div class="runit left">
                <div class="topbar" style="margin-top: -10px;">
                    <ul class="tbar" style="margin-right: 80px;">
                        <span id="udpUserInfo">
                            <?php
                            if ($userId == false) {
                                ?>
                                <li style="background: #000;padding: 1px 7px;">
                                    <a style="color: #fff;direction: ltr;cursor: pointer" data-toggle="modal"
                                       data-target="#Google-Login-Modal" id='signin'>عضویت<span
                                                class='user-icon'></span></a>
                                </li>
                                <li id='welcometxt'>
                                    <a style="cursor: pointer;color: #fff" data-toggle="modal"
                                       data-target="#Google-Login-Modal" id='signin'>ورود</a>
                                </li>
                            <?php } else { ?>
                                <li id='welcometxt'>
                                    <a href="user/logout" style="color: #fff">خروج</a>
                                </li>
                                <li style="background: #000;padding: 1px 7px;">
                                    <a style="color: #fff;direction: ltr;" href='user/profile'>پنل کاربری<span
                                                class='user-icon'></span></a>
                                </li>
                            <?php } ?>
                        </span>
                    </ul>
                </div>
            </div>
            <?php require('app/views/include/heading.php'); ?>

        </div>
        <div class="logo-box right">
            <a href='<?= URL; ?>'>
                <img src='public/images/pixel-perfect-final-v02-01.png'
                     alt="<?= NAME; ?>"
                     title="<?= NAME; ?>"/>
            </a>
        </div>
    </div>
</header>

<nav class="navigation" role="navigation"><h2 class="offscreen">منوی کاربری</h2>
    <div class="mrg-auto">
        <div class="inner-wraper clearfix">
            <ul class="root">
                <li>
                    <a href="<?= URL ?>" title="صفحه اصلی">صفحه اصلی</a>
                </li>
                <li class="l_one">
                    <span title="اخبار و رویدادها">اخبار و رویدادها<span class="arr"></span></span>
                    <ul class="level sl">
                        <?php
                        $categories = $data['getCategory'];
                        foreach ($categories as $category) {
                            if($category['main_cat']==1) {
                                ?>
                                <li class="l_two">
                                    <a href="topic/category/<?= $category['id']; ?>/<?= str_replace(" ","_",$category['link']); ?>" title="<?= $category['name']; ?>">
                                        <?= $category['name']; ?>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </li>
                <li class="l_one"><span title="نشریات و مجلات">نشریات و مجلات<span class="arr"></span></span>
                    <ul class="level sl">
                        <?php
                        $categories = $data['getCategory'];
                        foreach ($categories as $category) {
                            if($category['main_cat']==2) {
                                ?>
                                <li class="l_two">
                                    <a href="mag/category/<?= $category['id']; ?>/<?= str_replace(" ","_",$category['link']); ?>" title="<?= $category['name']; ?>">
                                        <?= $category['name']; ?>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </li>
                <li>
                    <a href="about" title="درباره ما">درباره ما</a>
                </li>
                <li>
                    <a href="contact" title="ارتباط با ما">ارتباط با ما</a>
                </li>
            </ul>
            <div class="promotion-badge"><a href="raahatbekhar.com">فروشگاه اینترنتی راحت بخر</a></div>
        </div>
    </div>
</nav>