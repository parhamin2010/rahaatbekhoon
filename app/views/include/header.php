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
                <li class="l_one"><span title="اخبار و رویدادها">اخبار و رویدادها<span class="arr"></span></span>
                    <ul class="level sl">
                        <li class="l_two"><a href="/Main/Electronic-Devices/Mobile/" title="موبایل" data-title="mobile"
                                             data-override="موبایل">موبایل</a>
                            <div class="submenu mobile">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/main/electronic-devices/mobile"
                                                                             title="انواع گوشی موبایل">گوشی موبایل</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=10"
                                                                title="گوشی های موبایل Apple">Apple</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=18"
                                                                title="گوشی های موبایل Samsung">Samsung</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=22"
                                                                title="گوشی های موبایل LG">LG</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=82"
                                                                title="گوشی های موبایل Huawei">Huawei</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=26"
                                                                title="گوشی های موبایل HTC">HTC</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=1"
                                                                title="گوشی های موبایل Sony">Sony</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=51"
                                                                title="گوشی های موبایل Microsoft">Microsoft</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=20"
                                                                title="گوشی های موبایل Nokia">Nokia</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=4"
                                                                title="گوشی های موبایل ASUS">ASUS</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=94"
                                                                title="گوشی های موبایل Lenovo">Lenovo</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=23"
                                                                title="گوشی های موبایل Motorola">Motorola</a></li>
                                                        <li class="item"><a href="/search/category-mobile-phone"
                                                                            title="مشاهده انواع گوشی موبایل">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/mobile/mobile-phone"
                                                                title="انواع گوشی">انواع گوشی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A136][0]=197"
                                                                title="گوشی های موبایل دو سیم کارت">گوشی دو سیم کارت</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A136][0]=196"
                                                                title="گوشی های موبایل تک سیم کارت">گوشی تک سیم کارت</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A18186][0]=21340"
                                                                title="گوشی های موبایل 4G">گوشی های 4G</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=24917"
                                                                title="گوشی های موبایل کلاسیک">گوشی های کلاسیک</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=21003"
                                                                title="گوشی های موبایل فبلت">فبلت</a></li>
                                                        <li class="title"><a href="/search/category-mobile-phone"
                                                                             title="گوشی های موبایل بر اساس سیستم عامل">بر
                                                                اساس سیستم عامل</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?type[0]=201"
                                                                title="گوشی های موبایل اندروید">اندروید</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?type[0]=202"
                                                                title="گوشی های موبایل iOS">iOS</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?type[0]=1314"
                                                                title="گوشی های موبایل ویندوز فون">ویندوز فون</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?type[0]=1315"
                                                                title="گوشی های موبایل با سیستم عامل های متفرقه">سایر
                                                                سیستم عامل ها</a></li>
                                                        <li class="title"><a
                                                                href="/search/category-headphone?type[0]=127"
                                                                title="انواع هدفون توگوشی">هدفون توگوشی</a></li>
                                                        <li class="title"><a href="/search/category-headphone"
                                                                             title="انواع هدفون">هدفون</a></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/mobile/mobile-accessories"
                                                                title="لوازم جانبی گوشی موبایل">لوازم جانبی گوشی
                                                                موبایل</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-cell-phone-screen-guard"
                                                                title="محافظ صفحه نمایش گوشی موبایل">محافظ صفحه
                                                                نمایش</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-cell-phone-pouch-cover"
                                                                title="کیف و کاور گوشی گوشی موبایل">کیف و کاور گوشی</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-handsfree"
                                                                            title="هندزفری گوشی موبایل">هندزفری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-memory-cards?type[0]=6522"
                                                                title="کارت حافظه microSD گوشی موبایل">کارت حافظه
                                                                microSD</a></li>
                                                        <li class="item"><a href="/search/category-power-bank"
                                                                            title="پاوربانک گوشی موبایل">پاوربانک</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-cell-phone-holder"
                                                                            title="مونوپاد و پایه نگهدارنده گوشی موبایل">مونوپاد
                                                                و پایه نگهدارنده</a></li>
                                                        <li class="item"><a href="/search/category-car-charger"
                                                                            title="شارژر موبایل">شارژر موبایل</a></li>
                                                        <li class="item"><a href="/search/category-cell-phone-battery"
                                                                            title="باتری گوشی گوشی موبایل">باتری
                                                                گوشی</a></li>
                                                        <li class="item"><a href="/search/category-stylus"
                                                                            title="قلم لمسی (Stylus) مخصوص گوشی موبایل">قلم
                                                                لمسی (Stylus)</a></li>
                                                        <li class="item"><a
                                                                href="/main/electronic-devices/mobile/mobile-accessories"
                                                                title="مشاهده انواع لوازم جانبی موبایل">مشاهده موارد
                                                                بیشتر</a></li>
                                                        <li class="title"><a href="/search/category-cell-phone-kits"
                                                                             title="انواع گجت های موبایل">گجت های
                                                                موبایل</a></li>
                                                    </ul>
                                                </td>
                                                <td class="last alternate">
                                                    <ul>
                                                        <li class="title"><a href="/search/category-mobile-phone"
                                                                             title="انواع گوشی موبایل بر اساس رده کاربری">رده
                                                                ی کاربری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=22806"
                                                                title="گوشی های موبایل مناسب بازی">مناسب بازی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=13404"
                                                                title="گوشی های موبایل مناسب عکاسی">مناسب عکاسی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=22802"
                                                                title="گوشی های موبایل مناسب عکاسی سلفی">مناسب عکاسی
                                                                سلفی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=13400"
                                                                title="گوشی های موبایل مقاوم در برابر آب">مقاوم در برابر
                                                                آب</a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="lastrow"></div>
                                </div>
                            </div>

                            <div class="submenu mobile">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/main/electronic-devices/mobile"
                                                                             title="انواع گوشی موبایل">گوشی موبایل</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=10"
                                                                title="گوشی های موبایل Apple">Apple</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=18"
                                                                title="گوشی های موبایل Samsung">Samsung</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=22"
                                                                title="گوشی های موبایل LG">LG</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=82"
                                                                title="گوشی های موبایل Huawei">Huawei</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=26"
                                                                title="گوشی های موبایل HTC">HTC</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=1"
                                                                title="گوشی های موبایل Sony">Sony</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=51"
                                                                title="گوشی های موبایل Microsoft">Microsoft</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=20"
                                                                title="گوشی های موبایل Nokia">Nokia</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=4"
                                                                title="گوشی های موبایل ASUS">ASUS</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=94"
                                                                title="گوشی های موبایل Lenovo">Lenovo</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?brand[0]=23"
                                                                title="گوشی های موبایل Motorola">Motorola</a></li>
                                                        <li class="item"><a href="/search/category-mobile-phone"
                                                                            title="مشاهده انواع گوشی موبایل">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/mobile/mobile-phone"
                                                                title="انواع گوشی">انواع گوشی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A136][0]=197"
                                                                title="گوشی های موبایل دو سیم کارت">گوشی دو سیم کارت</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A136][0]=196"
                                                                title="گوشی های موبایل تک سیم کارت">گوشی تک سیم کارت</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A18186][0]=21340"
                                                                title="گوشی های موبایل 4G">گوشی های 4G</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=24917"
                                                                title="گوشی های موبایل کلاسیک">گوشی های کلاسیک</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=21003"
                                                                title="گوشی های موبایل فبلت">فبلت</a></li>
                                                        <li class="title"><a href="/search/category-mobile-phone"
                                                                             title="گوشی های موبایل بر اساس سیستم عامل">بر
                                                                اساس سیستم عامل</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?type[0]=201"
                                                                title="گوشی های موبایل اندروید">اندروید</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?type[0]=202"
                                                                title="گوشی های موبایل iOS">iOS</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?type[0]=1314"
                                                                title="گوشی های موبایل ویندوز فون">ویندوز فون</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?type[0]=1315"
                                                                title="گوشی های موبایل با سیستم عامل های متفرقه">سایر
                                                                سیستم عامل ها</a></li>
                                                        <li class="title"><a
                                                                href="/search/category-headphone?type[0]=127"
                                                                title="انواع هدفون توگوشی">هدفون توگوشی</a></li>
                                                        <li class="title"><a href="/search/category-headphone"
                                                                             title="انواع هدفون">هدفون</a></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/mobile/mobile-accessories"
                                                                title="لوازم جانبی گوشی موبایل">لوازم جانبی گوشی
                                                                موبایل</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-cell-phone-screen-guard"
                                                                title="محافظ صفحه نمایش گوشی موبایل">محافظ صفحه
                                                                نمایش</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-cell-phone-pouch-cover"
                                                                title="کیف و کاور گوشی گوشی موبایل">کیف و کاور گوشی</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-handsfree"
                                                                            title="هندزفری گوشی موبایل">هندزفری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-memory-cards?type[0]=6522"
                                                                title="کارت حافظه microSD گوشی موبایل">کارت حافظه
                                                                microSD</a></li>
                                                        <li class="item"><a href="/search/category-power-bank"
                                                                            title="پاوربانک گوشی موبایل">پاوربانک</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-cell-phone-holder"
                                                                            title="مونوپاد و پایه نگهدارنده گوشی موبایل">مونوپاد
                                                                و پایه نگهدارنده</a></li>
                                                        <li class="item"><a href="/search/category-car-charger"
                                                                            title="شارژر موبایل">شارژر موبایل</a></li>
                                                        <li class="item"><a href="/search/category-cell-phone-battery"
                                                                            title="باتری گوشی گوشی موبایل">باتری
                                                                گوشی</a></li>
                                                        <li class="item"><a href="/search/category-stylus"
                                                                            title="قلم لمسی (Stylus) مخصوص گوشی موبایل">قلم
                                                                لمسی (Stylus)</a></li>
                                                        <li class="item"><a
                                                                href="/main/electronic-devices/mobile/mobile-accessories"
                                                                title="مشاهده انواع لوازم جانبی موبایل">مشاهده موارد
                                                                بیشتر</a></li>
                                                        <li class="title"><a href="/search/category-cell-phone-kits"
                                                                             title="انواع گجت های موبایل">گجت های
                                                                موبایل</a></li>
                                                    </ul>
                                                </td>
                                                <td class="last alternate">
                                                    <ul>
                                                        <li class="title"><a href="/search/category-mobile-phone"
                                                                             title="انواع گوشی موبایل بر اساس رده کاربری">رده
                                                                ی کاربری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=22806"
                                                                title="گوشی های موبایل مناسب بازی">مناسب بازی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=13404"
                                                                title="گوشی های موبایل مناسب عکاسی">مناسب عکاسی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=22802"
                                                                title="گوشی های موبایل مناسب عکاسی سلفی">مناسب عکاسی
                                                                سلفی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-mobile-phone?attribute[A13366][0]=13400"
                                                                title="گوشی های موبایل مقاوم در برابر آب">مقاوم در برابر
                                                                آب</a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="lastrow"></div>
                                </div>
                            </div>

                        </li>
                        <li class="l_two"><a href="/Main/Electronic-Devices/Tablet-EBook-Reader/"
                                             title=" تبلت و کتابخوان" data-title="tablet-ebook-reader"> تبلت و
                                کتابخوان</a>
                            <div class="submenu tablet-ebook-reader">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/tablet-ebook-reader/tablet">تبلت</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=10">Apple</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=18">Samsung</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=51">Microsoft</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=4">Asus</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=94">Lenovo</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=82">Huawei</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=106">Amazon</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=3">Acer</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=2">Dell</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=22">LG</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tablet?brand[0]=992">iLife</a>
                                                        </li>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/tablet-ebook-reader/tablet">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/search/category-tablet/">براساس
                                                                سایز</a></li>
                                                        <li class="item"><a href="/search/category-tablet?type[0]=213">کوچک&zwnj;تر
                                                                از 8 اینچ (کوچک)</a></li>
                                                        <li class="item"><a href="/search/category-tablet?type[0]=212">بین
                                                                8 تا 10 اینچ (متوسط)</a></li>
                                                        <li class="item"><a href="/search/category-tablet?type[0]=211">بزرگ&zwnj;تر
                                                                از 10 اینچ (بزرگ)</a></li>
                                                        <li class="title"><a href="/search/category-tablet/">براساس
                                                                سیستم عامل</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet?attribute[A20378][0]=25460">اندروید</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet?attribute[A20378][0]=25461">iOS</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet?attribute[A20378][0]=25462">ویندوز</a>
                                                        </li>
                                                        <li class="title"><a href="/search/category-tablet/">شبکه
                                                                ارتباطی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet?attribute[A20366][0]=25417">3G</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet?attribute[A20366][0]=25418">4G</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-ebook-reader">کتاب
                                                                خوان</a></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/tablet-ebook-reader/tablet-accessories">لوازم
                                                                جانبی تبلت</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet-bag-and-cover">کیف، کاور و
                                                                قاب محافظ تبلت </a></li>
                                                        <li class="item"><a href="/search/category-tablet-screen-guard">محافظ
                                                                صفحه نمایش تبلت</a></li>
                                                        <li class="item"><a href="/search/category-headphone">هدفون</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-handsfree">هندزفری </a></li>
                                                        <li class="item"><a
                                                                href="/search/category-memory-cards?type[0]=6522">کارت
                                                                حافظه microSD</a></li>
                                                        <li class="item"><a href="/search/category-car-charger">شارژر
                                                                تبلت و موبایل</a></li>
                                                        <li class="item"><a href="/search/category-tablet-stand">استند
                                                                تبلت</a></li>
                                                        <li class="item"><a href="/search/category-stylus">قلم لمسی
                                                                (Stylus)</a></li>
                                                        <li class="item"><a href="/search/category-cleaner-kit">کیت تمیز
                                                                کننده</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-cell-phone-data-cable">کابل رابط
                                                                تبلت</a></li>
                                                        <li class="item"><a href="/search/category-tablet-keyboard">کیبورد
                                                                مخصوص تبلت</a></li>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/tablet-ebook-reader/tablet-accessories">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="last alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/tablet-ebook-reader/tablet">انواع
                                                                تبلت</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet?attribute[A20215][0]=25128">تبلت
                                                                دارای قلم</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet?attribute[A20215][0]=25127">تبلت
                                                                دارای کیبورد</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet?attribute[A20215][0]=25129">تبلت
                                                                سیم کارتی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet?attribute[A20215][0]=25130">تبلت
                                                                با قابلیت مکالمه</a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="lastrow"></div>
                                </div>
                            </div>

                        </li>
                        <li class="l_two"><a href="/Main/Electronic-Devices/Laptop/" title="لپ تاپ" data-title="laptop">لپ
                                تاپ</a>
                            <div class="submenu laptop">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/laptop/notebook-netbook-ultrabook">لپ
                                                                تاپ و الترابوک</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?brand[0]=10">Apple</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?brand[0]=4">Asus</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?brand[0]=94">Lenovo</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?brand[0]=6">HP</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?brand[0]=3">Acer</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?brand[0]=95">MSI</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?brand[0]=2">Dell</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?brand[0]=188">VAIO</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?brand[0]=51">Microsoft</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?brand[0]=1163">Alienware</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="item"><a
                                                                href="/main/electronic-devices/laptop/notebook-netbook-ultrabook">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/laptop/notebook-netbook-ultrabook">بر
                                                                اساس نوع</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A14251][0]=14732">باریک
                                                                و سبک</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A14251][0]=14734">صفحه
                                                                نمایش لمسی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A14251][0]=14731">تبدیل
                                                                پذیر</a></li>

                                                        <li class="title"><a
                                                                href="/search/category-notebook-netbook-ultrabook">اندازه
                                                                صفحه نمایش</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute%5BA316%5D%5B0%5D=506&amp;attribute%5BA316%5D%5B1%5D=507&amp;attribute%5BA316%5D%5B2%5D=40164&amp;attribute%5BA316%5D%5B3%5D=509&amp;attribute%5BA316%5D%5B4%5D=40267&amp;attribute%5BA316%5D%5B5%5D=510&amp;attribute%5BA316%5D%5B6%5D=39250&amp;attribute%5BA316%5D%5B7%5D=511">تا
                                                                13 اینچ</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute%5BA316%5D%5B0%5D=511&amp;attribute%5BA316%5D%5B1%5D=40268&amp;attribute%5BA316%5D%5B2%5D=43919&amp;attribute%5BA316%5D%5B3%5D=513&amp;attribute%5BA316%5D%5B4%5D=512">13
                                                                اینچ تا 15 اینچ</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute%5BA316%5D%5B0%5D=515&amp;attribute%5BA316%5D%5B1%5D=514&amp;attribute%5BA316%5D%5B2%5D=516&amp;attribute%5BA316%5D%5B3%5D=517&amp;attribute%5BA316%5D%5B4%5D=519&amp;attribute%5BA316%5D%5B5%5D=35437&amp;attribute%5BA316%5D%5B6%5D=521&amp;attribute%5BA316%5D%5B7%5D=42184">15
                                                                اینچ و بزرگتر</a></li>

                                                        <li class="title"><a
                                                                href="/search/category-notebook-netbook-ultrabook">نوع
                                                                صفحه نمایش</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A317][0]=528">مات</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A317][0]=527">براق</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A321][0]=14822">نمایشگر
                                                                4K</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A321][0]=546">نمایشگر
                                                                Full HD</a></li>

                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/laptop/laptop-accessories">لوازم
                                                                جانبی لپ تاپ</a></li>
                                                        <li class="item"><a href="/search/category-laptop-bag">کیف و
                                                                کاور لپ تاپ</a></li>
                                                        <li class="item"><a href="/search/category-mouse">ماوس
                                                                (موشواره)</a></li>
                                                        <li class="item"><a href="/search/category-stand-cooling-pad">استند
                                                                و پایه خنک کننده</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-3g-gprs-modem?attribute[A13144][0]=13165"
                                                                s="" cn104"attribute[a13144][1]="13194&quot;">مودم همراه
                                                            USB</a></li>
                                                        <li class="item"><a href="/search/category-external-hard-disk">هارد
                                                                دیسک اکسترنال</a></li>
                                                        <li class="item"><a href="/search/category-speaker?type[0]=125">اسپیکر
                                                                (بلندگو)</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-headphone-headset-microphone">هدفون،
                                                                هدست، میکروفون </a></li>
                                                        <li class="item"><a
                                                                href="/search/category-optical-drive?type[0]=5033" s=""
                                                                od137"type[1]="6407&quot;">درایو نوری لپ تاپ</a></li>
                                                        <li class="item"><a href="/search/category-connector-cable">کابل
                                                                های رابط</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-ssd-memory?type[0]=243" s=""
                                                                ih233"type[1]="244&quot;/s/ih233&quot;type[2]=6279&quot;">حافظه
                                                            SSD اینترنال</a></li>
                                                        <li class="item"><a href="/search/category-macbook-accessories">لوازم
                                                                جانبی مک بوک</a></li>
                                                        <li class="item"><a
                                                                href="/main/electronic-devices/laptop/laptop-accessories">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="last alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/search/category-notebook-netbook-ultrabook">رده
                                                                کاربری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A14251][0]=14743">عمومی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A14251][0]=14733">مالتی
                                                                مدیا</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A14251][0]=14735">صنعتی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-notebook-netbook-ultrabook?attribute[A14251][0]=14730">مخصوص
                                                                بازی</a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="lastrow"></div>
                                </div>
                            </div>

                        </li>
                        <li class="l_two"><a href="/Main/Electronic-Devices/Camera/" title=" دوربین"
                                             data-title="camera"> دوربین</a>
                            <div class="submenu camera">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/camera/digital-camera">برند
                                                                دوربین</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?brand[0]=12">Canon</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?brand[0]=13">Nikon</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?brand[0]=15">Fujifilm</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?brand[0]=1">Sony</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?brand[0]=18">Samsung</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?brand[0]=55">Casio</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?brand[0]=14">Olympus</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-camcorder?brand[0]=76">GoPro</a>
                                                        </li>
                                                        <li class="title"><a
                                                                href="/search/category-camcorder?type[0]=16">دوربین
                                                                ورزشی </a></li>
                                                        <li class="title"><a href="/search/category-gopro-accessories">لوازم
                                                                جانبی دوربین های ورزشی</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-camcorder">دوربین
                                                                فیلم برداری</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/camera/digital-camera">دوربین
                                                                عکاسی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?type[0]=6">DSLR</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?type[0]=8">بدون
                                                                آینه</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?type[0]=9">شبه
                                                                SLR</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?type[0]=10">کامپکت
                                                                ساده</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?type[0]=1343">کامپکت
                                                                پیشرفته</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?type[0]=3533">کامپکت
                                                                سوپر زوم</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?type[0]=5">مقاوم
                                                                در برابر آب و ضربه</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-digital-camera?type[0]=9319">چاپ
                                                                سریع</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-standard-batteries">باتری،
                                                                شارژر و متعلقات</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-network-cam">دوربین
                                                                های تحت شبکه</a></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/camera/camera-accessories">لوازم
                                                                جانبی عکاسی و فیلمبرداری</a></li>
                                                        <li class="item"><a href="/search/category-camera-lens">لنز
                                                                دوربین </a></li>
                                                        <li class="item"><a href="/search/category-lens-filter">فیلتر
                                                                لنز</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-external-flash">فلاش</a></li>
                                                        <li class="item"><a href="/search/category-camera-bag">کیف
                                                                دوربین</a></li>
                                                        <li class="item"><a href="/search/category-memory-cards">کارت
                                                                حافظه</a></li>
                                                        <li class="item"><a href="/search/category-tripod-monopod">سه
                                                                پایه و تک پایه</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-camera-remote-controller">ریموت
                                                                کنترل دوربین</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-camera-display-protector">محافظ
                                                                صفحه نمایش</a></li>
                                                        <li class="item"><a href="/search/category-cleaner-kit">کیت تمیز
                                                                کننده</a></li>
                                                        <li class="item"><a href="/search/category-strap-and-harness">بند
                                                                و آویز دوربین</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-recording-accessories">لوازم
                                                                جانبی فیلمبرداری</a></li>
                                                        <li class="item"><a href="/main/camera/camera-accessories">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="last alternate">
                                                    <ul>
                                                        <li class="title"><a href="/search/category-binoculars">دوربین
                                                                دو چشمی و تک چشمی</a></li>
                                                        <li class="title"><a href="/search/category-microscope">میکروسکوپ</a>
                                                        </li>
                                                        <li class="title"><a
                                                                href="/search/category-telescope">تلسکوپ</a></li>
                                                        <li class="title"><a
                                                                href="/search/category-telescope-accessories">لوازم
                                                                جانبی تلسکوپ</a></li>
                                                        <li class="title"><a href="/search/category-magnifier">ذره
                                                                بین</a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="lastrow"></div>
                                </div>
                            </div>

                        </li>
                        <li class="l_two"><a href="/Main/Electronic-Devices/Computer-Parts/"
                                             title=" کامپیوتر و تجهیزات جانبی " data-title="computer-parts"> کامپیوتر و
                                تجهیزات جانبی </a>
                            <div class="submenu computer-parts">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/computer-parts">قطعات
                                                                کامپیوتر</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-motherboard/">مادربرد</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-processor/">پردازنده</a></li>
                                                        <li class="item"><a href="/search/category-graphics-card/">کارت
                                                                گرافیک</a></li>
                                                        <li class="item"><a href="/search/category-monitor/">نمایشگر
                                                                (مانیتور)</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-internal-hard-drive/">هارد دیسک
                                                                اینترنال</a></li>
                                                        <li class="item"><a href="/search/category-ram/">رم کامپیوتر</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-psu/">منبع تغذیه
                                                                (پاور)</a></li>
                                                        <li class="item"><a href="/search/category-computer-chassis">کیس
                                                                کامپیوتر</a></li>
                                                        <li class="item"><a href="/search/category-speaker/">اسپیکر
                                                                (بلندگو)</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-headphone-headset-microphone/">هدفون،
                                                                هدست، میکروفون</a></li>
                                                        <li class="item"><a href="/search/category-keyboard/">کیبورد
                                                                (صفحه کلید)</a></li>
                                                        <li class="item"><a href="/search/category-mouse/">ماوس
                                                                (موشواره) </a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/computer-parts/network">تجهیزات
                                                                شبکه و ارتباطات</a></li>
                                                        <li class="item"><a href="/search/category-modem-router-adsl/">مودم
                                                                - روتر ADSL</a></li>
                                                        <li class="item"><a href="/search/category-router-accesspoint/">روتر
                                                                و اکسس پوینت</a></li>
                                                        <li class="item"><a href="/search/category-3g-gprs-modem/">مودم
                                                                همراه 3G و 4G</a></li>
                                                        <li class="item"><a href="/search/category-nas/">ذخیره ساز تحت
                                                                شبکه</a></li>
                                                        <li class="item"><a href="/search/category-network-cam/">دوربین
                                                                های تحت شبکه</a></li>
                                                        <li class="item"><a href="/search/category-switch/">سوییچ</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-network-card/">کارت
                                                                شبکه</a></li>
                                                        <li class="item"><a href="/search/category-adapter">آداپتور</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-print-server">پرینت
                                                                سرور </a></li>
                                                        <li class="item"><a href="/search/category-antenna/">آنتن
                                                                تقویتی</a></li>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/computer-parts/network">مشاهده
                                                                موارد بیشتر</a></li>
                                                        <li class="title"><a href="/search/category-optical-drive">درایو
                                                                نوری</a></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/computer-parts/data-storage">تجهیزات
                                                                ذخیره سازی اطلاعات</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-ssd-memory?type%5B0%5D=243&amp;type%5B1%5D=6279&amp;type%5B2%5D=244">حافظه
                                                                SSD اینترنال</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-ssd-memory/?attribute%5BA614%5D%5B0%5D=15353&amp;attribute%5BA614%5D%5B1%5D=38562">حافظه
                                                                SSD اکسترنال</a></li>
                                                        <li class="item"><a href="/search/category-external-hard-disk">هارد
                                                                دیسک اکسترنال</a></li>
                                                        <li class="item"><a href="/search/category-usb-flash-memory">فلش
                                                                مموری USB</a></li>
                                                        <li class="item"><a href="/search/category-memory-cards/">کارت
                                                                حافظه</a></li>
                                                        <li class="item"><a href="/search/category-compact-disc/">لوح
                                                                فشرده</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-storage-accessories/">لوازم جانبی
                                                                تجهیزات ذخیره سازی</a></li>
                                                        <li class="title"><a href="/search/category-all-in-pc/">کامپیوتر
                                                                های All-in-One</a></li>
                                                        <li class="title"><a href="/search/category-assembled-cases/">کیس
                                                                های اسمبل شده</a></li>
                                                        <li class="title"><a href="/search/category-mini-pc/">کامپیوترهای
                                                                کوچک</a></li>
                                                        <li class="title"><a
                                                                href="/search/category-gaming-accessories/">تجهیزات
                                                                مخصوص بازی</a></li>
                                                        <li class="title"><a
                                                                href="/search/category-game?attribute[A21865][0]=28463">بازی
                                                                های مخصوص کامپیوتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="last alternate">
                                                    <ul>
                                                        <li class="title"><a href="/search/category-laptop-accessories">لوازم
                                                                جانبی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-cooling-system?status=2">خنک
                                                                کننده پردازنده</a></li>
                                                        <li class="item"><a href="/search/category-case-fan?status=2">فن
                                                                کیس</a></li>
                                                        <li class="item"><a href="/search/category-webcam/">وب کم</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-mouse-pad/">ماوس
                                                                پد</a></li>
                                                        <li class="item"><a href="/search/category-usb-hub/">یو اس بی
                                                                هاب (USB Hub)</a></li>
                                                        <li class="item"><a href="/search/category-digital-pen/">قلم
                                                                نوری</a></li>
                                                        <li class="item"><a href="/search/category-power-strip">چند راهی
                                                                برق</a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="lastrow"></div>
                                </div>
                            </div>


                        </li>
                        <li class="l_two"><a href="/Main/Electronic-Devices/Office-Machines/" title=" ماشین های اداری "
                                             data-title="office-machines"> ماشین های اداری </a>
                            <div class="submenu office-machines">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-office-machines">بر
                                                                اساس سازنده</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=16">Panasonic</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=1126">AEG</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=383">Gigaset</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=27">Epson</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=6">HP</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=12">Canon</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=18">Samsung</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=244">Brother</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=1119">Bixolon</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=1031">Datalogic</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-office-machines?brand[0]=55">Casio</a>
                                                        </li>
                                                        <li class="title"><a href="/search/category-office-machines">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/office-machines">پرینتر و
                                                                اسکنر</a></li>
                                                        <li class="item"><a href="/search/category-printer">پرینتر</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-printer?type[0]=4610">پرینتر
                                                                لیزری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-printer?type[0]=4609">پرینتر جوهر
                                                                افشان</a></li>
                                                        <li class="item"><a href="/search/category-printer?type[0]=4611"
                                                                            s="" rs975"type[1]="4612&quot;">پرینتر
                                                            چندکاره</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-printer?type[0]=4613">پرینتر
                                                                عکس</a></li>
                                                        <li class="item"><a href="/search/category-3d-printer">پرینتر سه
                                                                بعدی</a></li>
                                                        <li class="item"><a href="/search/category-printer-accessories">لوازم
                                                                جانبی پرینتر</a></li>
                                                        <li class="title"><a href="/search/category-scanner">اسکنر</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-scanner?type[0]=64">اسکنر
                                                                خانگی و اداری</a></li>
                                                        <li class="item"><a href="/search/category-scanner?type[0]=65">اسکنر
                                                                حرفه ای</a></li>
                                                        <li class="title"><a
                                                                href="/search/category-data-video-projector">دیتا-ویدئو
                                                                پروژکتور</a></li>
                                                        <li class="title"><a href="/search/category-copy-board">تخته
                                                                هوشمند</a></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/office-machines">لوازم
                                                                اداری</a></li>
                                                        <li class="item"><a href="/search/category-coppier">دستگاه
                                                                کپی</a></li>
                                                        <li class="item"><a href="/search/category-employee-timeclock">دستگاه
                                                                حضور و غیاب</a></li>
                                                        <li class="item"><a href="/search/category-shredder">کاغذ خرد
                                                                کن</a></li>
                                                        <li class="item"><a href="/search/category-presenter">پرزنتر</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-check-printer">پرفراژ
                                                                چک</a></li>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/office-machines">لوازم
                                                                فروشگاهی</a></li>
                                                        <li class="item"><a href="/search/category-cash-counter">اسکناس
                                                                شمار</a></li>
                                                        <li class="item"><a href="/search/category-money-detector">تشخیص
                                                                اصالت اسکناس</a></li>
                                                        <li class="item"><a href="/search/category-cashier-machine">صندوق
                                                                فروشگاهی</a></li>
                                                        <li class="item"><a href="/search/category-barcode-reader">بارکد
                                                                خوان</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-lable-printer-and-accesories">پرینتر
                                                                لیبل زن و حرارتی</a></li>
                                                        <li class="item"><a href="/search/category-calculator">ماشین
                                                                حساب</a></li>
                                                    </ul>
                                                </td>
                                                <td class="last alternate">
                                                    <ul>
                                                        <li class="title"><a href="/search/category-telephone">تلفن</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-telephone?type[0]=72">بی سیم</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-telephone?type[0]=73">باسیم
                                                                (رومیزی)</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="item"><a href="/search/category-fax">فکس</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-telephone-and-fax-accessories">لوازم
                                                                جانبی تلفن و فکس</a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="lastrow"></div>
                                </div>
                            </div>

                        </li>
                        <li class="l_two"><a href="/Main/Electronic-Devices/Accessories-Main/"
                                             title="لوازم جانبی کالای دیجیتال" data-title="accessories-main">لوازم جانبی
                                کالای دیجیتال</a>
                            <div class="submenu accessories-main">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/mobile/mobile-accessories">لوازم
                                                                جانبی موبایل</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-cell-phone-pouch-cover">کیف و
                                                                کاور</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-cell-phone-screen-guard">محافظ
                                                                صفحه نمایش</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-memory-cards?type[0]=6522">کارت
                                                                حافظه microSD</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-handsfree">هندزفری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-power-bank">پاوربانک</a></li>
                                                        <li class="item"><a href="/search/category-cell-phone-holder">مونوپاد
                                                                و پایه نگهدارنده</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-cell-phone-data-cable">کابل</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-car-charger">شارژر
                                                                موبایل</a></li>
                                                        <li class="item"><a
                                                                href="/main/electronic-devices/mobile/mobile-accessories">مشاهده
                                                                موارد بیشتر</a></li>
                                                        <li class="title"><a href="/search/category-cell-phone-kits">گجت
                                                                های موبایل</a></li>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/computer-parts">لوازم
                                                                جانبی کامپیوتر</a></li>
                                                        <li class="title"><a href="/search/category-office-accessories">لوازم
                                                                جانبی ماشین های اداری</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/main/laptop/laptop-accessories">لوازم
                                                                جانبی لپ تاپ</a></li>
                                                        <li class="item"><a href="/search/category-laptop-bag">کیف و
                                                                کاور</a></li>
                                                        <li class="item"><a href="/search/category-mouse">ماوس
                                                                (موشواره)</a></li>
                                                        <li class="item"><a href="/search/category-external-hard-disk">هارددیسک
                                                                اکسترنال</a></li>
                                                        <li class="item"><a href="/search/category-usb-flash-memory">فلش
                                                                مموری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-headphone-headset-microphone">هدفون</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-stand-cooling-pad">پایه
                                                                خنک کننده</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-optical-drive?type[0]=5033" s=""
                                                                ru701"type[1]="6407&quot;">درایو نوری لپ تاپ</a></li>
                                                        <li class="item"><a href="/search/category-laptop-charger">شارژر
                                                                مخصوص لپ تاپ</a></li>
                                                        <li class="item"><a href="/search/category-laptop-battery">باتری
                                                                لپ تاپ</a></li>
                                                        <li class="item"><a href="/search/category-laptop-ram">رم لپ
                                                                تاپ</a></li>
                                                        <li class="item"><a href="/search/category-connector-cable">کابل
                                                                های رابط</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-macbook-accessories?type[0]=6115">برچسب
                                                                های تزئینی</a></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/camera/camera-accessories">لوازم
                                                                جانبی عکاسی و فیلمبرداری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-external-flash">فلاش</a></li>
                                                        <li class="item"><a href="/search/category-camera-lens">لنز
                                                                دوربین</a></li>
                                                        <li class="item"><a href="/search/category-lens-filter">فیلتر
                                                                لنز</a></li>
                                                        <li class="item"><a href="/search/category-camera-bag">کیف
                                                                دوربین</a></li>
                                                        <li class="item"><a href="/search/category-tripod-monopod">سه
                                                                پایه و تک پایه</a></li>
                                                        <li class="item"><a
                                                                href="/main/electronic-devices/camera/camera-accessories">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/tablet-ebook-reader/tablet-accessories">لوازم
                                                                جانبی تبلت</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-tablet-bag-and-cover">کیف، کاور و
                                                                قاب محافظ تبلت</a></li>
                                                        <li class="item"><a href="/search/category-tablet-screen-guard">محافظ
                                                                صفحه نمایش تبلت</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-memory-cards?type[0]=6522">کارت
                                                                حافظه microSD</a></li>
                                                        <li class="item"><a
                                                                href="/main/electronic-devices/tablet-ebook-reader/tablet-accessories">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="last alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/search/category-multimedia-accessories">لوازم
                                                                جانبی صوتی و تصویری</a></li>
                                                        <li class="item"><a href="/search/category-tv-tables">میز
                                                                تلویزیون</a></li>
                                                        <li class="item"><a href="/search/category-bracket">پایه دیواری
                                                                و سقفی</a></li>
                                                        <li class="title"><a
                                                                href="/search/category-gaming-console-accessories">لوازم
                                                                جانبی کنسول بازی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-gaming-console-accessories?type%5B0%5D=7581&amp;type%5B1%5D=7582&amp;type%5B2%5D=7584&amp;type%5B3%5D=10199&amp;type%5B4%5D=10198&amp;type%5B5%5D=7587">Playstation</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-gaming-console-accessories?type%5B0%5D=7585&amp;type%5B1%5D=7586&amp;type%5B2%5D=7814&amp;type%5B3%5D=9490">Xbox</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="lastrow"></div>
                                </div>
                            </div>
                        </li>
                        <li class="l_two"><a href="/Search/Category-Digikala-Gift-Card/" title="کارت هدیه دیجی کالا"
                                             data-title="digikala-gift-card" data-override="کارت هدیه دیجی کالا">کارت
                                هدیه دیجی کالا</a></li>
                    </ul>
                </li>
                <li class="l_one"><span title="نشریات و مجلات">نشریات و مجلات<span class="arr"></span></span>
                    <ul class="level sl">
                        <li class="l_two"><a href="/Search/Category-mens-apparel/" title="مردانه"
                                             data-title="mens-apparel">مردانه</a></li>
                        <li class="l_two"><a href="/Search/Category-womens-apparel/" title="زنانه"
                                             data-title="womens-apparel">زنانه</a></li>
                        <li class="l_two"><a href="/Search/Category-kids-apparel/" title="بچگانه"
                                             data-title="kids-apparel">بچگانه</a></li>
                        <li class="l_two"><a href="/Search/Category-Sports/" title="ورزشی" data-title="sports">ورزشی</a>
                        </li>
                        <li class="l_two"><a href="/Main/Apparel/Perfume-All/" title="عطر"
                                             data-title="perfume-all">عطر</a></li>
                        <li class="l_two"><a href="/Main/Apparel/Watch-Clock/" title="ساعت" data-title="watch-clock">ساعت</a>
                        </li>
                        <li class="l_two"><a href="/Main/Apparel/Pesonal-Appliance-Accessories/"
                                             title="اکسسوری لوازم شخصی" data-title="pesonal-appliance-accessories">اکسسوری
                                لوازم شخصی</a></li>
                    </ul>
                </li>
                <li>
                    <a href="about" title="درباره ما">درباره ما</a>
                </li>
                <li>
                    <a href="contact" title="ارتباط با ما">ارتباط با ما</a>
                </li>
            </ul>
            <div class="promotion-badge"><a href="/special-offer">فروشگاه اینترنتی راحت بخر</a></div>
        </div>
    </div>
</nav>