<?php
$userId = Model::sessionGet('userId');
$level = Model::sessionGet('level');
?>
<header id="dk-header" style="background: url('public/images/bgheader.png')no-repeat;background-size: cover">
    <div class="header" style="padding: 10px;margin-bottom: 20px">
        <div class="inner-wraper">
            <div class="runit left">
                <div class="topbar" style="margin-top: 15px">
                    <ul class="tbar" style="margin-right: 80px;">
                        <span id="udpUserInfo">
                            <?php
                            if ($userId == false) {
                                ?>
                                <li style="background: #000;padding: 1px 7px;">
                                    <a style="color: #eff0ef;direction: ltr;cursor: pointer" data-toggle="modal" data-target="#Google-Login-Modal" id='signin'>عضویت<span class='user-icon'></span></a>
                                </li>
                                <li id='welcometxt'>
                                    <a style="cursor: pointer" data-toggle="modal" data-target="#Google-Login-Modal" id='signin'>ورود</a>
                                </li>
                            <?php } else { ?>
                                <li id='welcometxt'>
                                    <a href="user/logout">خروج</a>
                                </li>
                                <li style="background: #000;padding: 1px 7px;">
                                    <a style="color: #eff0ef;direction: ltr;" href='user/profile'>پنل کاربری<span class='user-icon'></span></a>
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

<nav class='navigation' role='navigation' style="color">
    <div class='mrg-auto'>
        <div class='inner-wraper clearfix w-100' >
            <ul class='root w-100' style="margin-right:">
                <li class='l_one'>
                    <a href="<?= URL; ?>" title='صفحه اصلی'>صفحه اصلی</a>
                </li>
                <?php
                $categories = $data['getCategory'];
                foreach ($categories as $category) {
                    ?>
                    <li class='l_one'>
                        <a href="blogs/category/<?= $category['id']; ?>"
                           title='<?= $category['name']; ?>'><?= $category['name']; ?></a>
                    </li>
                    <?php
                }
                ?>
                <li class='l_one'>
                    <a href="about" title='راهکارهای ما'>راهکارهای ما</a>
                </li>
                <li class='l_one'>
                    <a href="contact" title='ارتباط با ما'>ارتباط با ما</a>
                </li>
            </ul>
        </div>
    </div>
</nav>