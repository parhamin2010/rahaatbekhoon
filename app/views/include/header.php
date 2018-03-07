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
                <li class="l_one"><span title="کالای دیجیتال">کالای دیجیتال<span class="arr"></span></span>
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
                <li class="l_one"><span title="مد و پوشاک">مد و پوشاک<span class="arr"></span></span>
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
                <li class="l_one"><span title="خانه، آشپزخانه و ابزار">خانه، آشپزخانه و ابزار<span
                            class="arr"></span></span>
                    <ul class="level sl">
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/Video-Audio-Entertainment/"
                                             title="صوتی و تصویری " data-title="video-audio-entertainment">صوتی و
                                تصویری </a>
                            <div class="submenu video-audio-entertainment">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-tv2"
                                                                             title="انواع تلویزیون بر اساس سازنده">تلویزیون
                                                                بر اساس سازنده</a></li>
                                                        <li class="item"><a href="/search/category-tv2?brand[0]=18"
                                                                            title="تلویزیون های Samsung">Samsung</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tv2?brand[0]=22"
                                                                            title="تلویزیون های LG">LG</a></li>
                                                        <li class="item"><a href="/search/category-tv2?brand[0]=68"
                                                                            title="تلویزیون های Philips">Philips</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tv2?brand[0]=1686"
                                                                            title="تلویزیون های TCL">TCL</a></li>
                                                        <li class="item"><a href="/search/category-tv2?brand[0]=59"
                                                                            title="تلویزیون های X.Vision">X.Vision</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-tv2?brand[0]=1591"
                                                                            title="تلویزیون های Snowa">Snowa</a></li>
                                                        <li class="item"><a href="/search/category-tv2"
                                                                            title="مشاهده سایر تلویزیون ها">مشاهده موارد
                                                                بیشتر</a></li>
                                                        <li class="title"><a href="/search/category-tv2"
                                                                             title="انواع تلویزیون بر اساس اندازه صفحه نمایش">بر
                                                                اساس اندازه</a></li>
                                                        <li class="item"><a href="/search/category-tv2?type[0]=9181"
                                                                            title="تلویزیون های 40 اینچ و کوچکتر">تلویزیون
                                                                40 اینچ و کوچکتر</a></li>
                                                        <li class="item"><a href="/search/category-tv2?type[0]=9182"
                                                                            title="تلویزیون های 42 تا 48 اینچ">تلویزیون
                                                                از 42 تا 48 اینچ</a></li>
                                                        <li class="item"><a href="/search/category-tv2?type[0]=9184"
                                                                            title="تلویزیون های 49 تا 52 اینچ">تلویزیون
                                                                از 49 تا 52 اینچ</a></li>
                                                        <li class="item"><a href="/search/category-tv2?type[0]=9185"
                                                                            title="تلویزیون های 55 اینچ و بزرگتر">تلویزیون
                                                                55 اینچ و بزرگتر</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/search/category-home-theatre"
                                                                             title="انواع سینمای خانگی">سینمای خانگی</a>
                                                        </li>
                                                        <li class="title"><a
                                                                href="/search/category-home-theatre?type[0]=5035"
                                                                title="انواع ساندبار">ساندبار</a></li>
                                                        <li class="title"><a href="/search/category-set-top-box"
                                                                             title="انواع گیرنده دیجیتال DVB-T">گیرنده
                                                                دیجیتال DVB-T</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-multimedia-player"
                                                                             title="پخش کننده چند رسانه ای خانگی">پخش
                                                                کننده چند رسانه ای خانگی</a></li>
                                                        <li class="item"><a href="/search/category-blu-ray-player"
                                                                            title="پخش کننده Blu-ray">پخش کننده
                                                                Blu-ray</a></li>
                                                        <li class="item"><a href="/search/category-dvd-player"
                                                                            title="پخش کننده DVD">پخش کننده DVD</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-portable-music-video-player"
                                                                title="پخش کننده پرتابل">پخش کننده پرتابل</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-home-multimedia-player"
                                                                title="پخش کننده خانگی">پخش کننده خانگی</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-tv-tables"
                                                                             title="میز تلویزیون">میز تلویزیون</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/search/category-data-video-projector/"
                                                                title="دیتا - ویدئو پروژکتور">دیتا - ویدئو پروژکتور</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/main/electronic-devices/video-audio-entertainment/game-console"
                                                                title="انواع کنسول بازی">کنسول بازی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-station-gaming-consoles"
                                                                title="کنسول بازی خانگی">کنسول خانگی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-portable-gaming-consoles"
                                                                title="کنسول بازی قابل حمل">کنسول قابل حمل</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-gaming-console-accessories"
                                                                title="لوازم جانبی کنسول بازی">لوازم جانبی کنسول
                                                                بازی</a></li>
                                                        <li class="title"><a
                                                                href="/search/category-game/?type%5B0%5D=6360&amp;type%5B1%5D=3568&amp;type%5B2%5D=4801&amp;type%5B3%5D=3570&amp;type%5B4%5D=5036&amp;type%5B5%5D=4676&amp;type%5B6%5D=6374%2F&amp;type%5B7%5D=6374&amp;type%5B8%5D=10479/"
                                                                title="بازی های مخصوص کنسول">بازی های مخصوص کنسول</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-ic-rcorder"
                                                                             title="ضبط کننده صدا">ضبط کننده صدا</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/search/category-headphone-headset-microphone"
                                                                title="هدفون، هدست، میکروفون">هدفون، هدست، میکروفون</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-radio"
                                                                             title="رادیو">رادیو</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/search/category-portable-music-video-player"
                                                                title="پخش کننده موسیقی و ویدئو پرتابل">پخش کننده موسیقی
                                                                و ویدئو پرتابل</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate last">
                                                    <ul>
                                                        <li class="title new"><a href="/search/category-car-stereo"
                                                                                 title="">سیستم صوتی و تصویری خودرو</a>
                                                        </li>
                                                        <li class="item"><a href="/search/category-car-player" title="">دستگاه
                                                                پخش خودرو</a></li>
                                                        <li class="item"><a href="/search/category-car-speaker"
                                                                            title="">بلندگو خودرو</a></li>
                                                        <li class="item"><a href="/search/category-car-amplifier"
                                                                            title="">آمپلی فایر خودرو</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-car-speaker?type[0]=4811"
                                                                title="">ساب ووفر</a></li>
                                                        <li class="item"><a href="/search/category-incar-accessories/"
                                                                            title="">لوازم جانبی خودرو</a></li>
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
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/Home-Appliance/" title="لوازم خانگی برقی"
                                             data-title="home-appliance">لوازم خانگی برقی</a>
                            <div class="submenu home-appliance">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="" title="لوازم پخت و پز">لوازم پخت و
                                                                پز</a></li>
                                                        <li class="item"><a href="/Search/Category-Microwave"
                                                                            title="اجاق مایکروویو">اجاق مایکروویو</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Oven"
                                                                            title="اجاق گاز">اجاق گاز</a></li>
                                                        <li class="item"><a href="/Search/Category-Oven-Toaster"
                                                                            title="آون توستر">آون توستر</a></li>
                                                        <li class="item"><a href="/Search/Category-Airfryer"
                                                                            title="سرخ کن">سرخ کن</a></li>
                                                        <li class="item"><a href="/Search/Category-Sandwich-Makers"
                                                                            title="ساندویچ ساز">ساندویچ ساز</a></li>
                                                        <li class="item"><a href="/Search/Category-Toaster"
                                                                            title="توستر">توستر</a></li>
                                                        <li class="item"><a href="/Search/Category-Grill-Barbecue"
                                                                            title="منقل، گریل و باربیکیو">منقل، گریل و
                                                                باربیکیو</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Rice-Cooker?type[0]=4726"
                                                                title="پلوپز">پلوپز</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Rice-Cooker?type[0]=4727"
                                                                title="زودپز">زودپز</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Rice-Cooker?type[0]=4761"
                                                                title="آرام پز">آرام پز</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Rice-Cooker?type[0]=4728"
                                                                title="بخارپز">بخارپز</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Rice-Cooker?type[0]=4742"
                                                                search="" category-rice-cooker="" #!=""
                                                                category-cooking="" category-home-and-kitchen=""
                                                                category-home-appliance="" type-4742="" type-4765=""
                                                                type-4815="" type-5286="" type-5576="" "type[1]="4765&quot;/Search/Category-Rice-Cooker/#!/Category-Cooking/Category-Home-and-Kitchen/Category-Home-Appliance/Category-Rice-Cooker/Type-4742/Type-4765/Type-4815/Type-5286/Type-5576/&quot;type[2]=4815&quot;/Search/Category-Rice-Cooker/#!/Category-Cooking/Category-Home-and-Kitchen/Category-Home-Appliance/Category-Rice-Cooker/Type-4742/Type-4765/Type-4815/Type-5286/Type-5576/&quot;type[3]=5286&quot;/Search/Category-Rice-Cooker/#!/Category-Cooking/Category-Home-and-Kitchen/Category-Home-Appliance/Category-Rice-Cooker/Type-4742/Type-4765/Type-4815/Type-5286/Type-5576/&quot;type[4]=5576&quot;"
                                                            title="مشاهده انواع لوازم پخت و پز">سایر لوازم پخت و پز </a>
                                                        </li>
                                                        <li class="title"><a
                                                                href="/Search/Category-Kitchen-Weighing-scale"
                                                                title="ترازو های آشپزخانه">ترازوی آشپزخانه</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/Search/Category-Chopper-Foodprocessor"
                                                                title="خرد کن و غذا ساز">خرد کن و غذا ساز</a></li>
                                                        <li class="item"><a href="/Search/Category-Food-Processor"
                                                                            title="انواع غذا ساز">غذا ساز</a></li>
                                                        <li class="item"><a href="/Search/Category-Chopper"
                                                                            title="خرد کن">خرد کن</a></li>
                                                        <li class="item"><a href="/Search/Category-Grinder"
                                                                            title="آسیاب کن">آسیاب کن</a></li>
                                                        <li class="item"><a href="/Search/Category-Hand-Blender"
                                                                            title="گوشت کوب برقی">گوشت کوب برقی</a></li>
                                                        <li class="item"><a href="/Search/Category-Meat-Mincers"
                                                                            title="چرخ گوشت">چرخ گوشت</a></li>
                                                        <li class="item"><a href="/Search/Category-Blenders"
                                                                            title="مخلوط کن">مخلوط کن</a></li>
                                                        <li class="item"><a href="/Search/Category-Mixer"
                                                                            title="انواع همزن">همزن</a></li>
                                                        <li class="title"><a
                                                                href="/Search/Category-Refrigerator-Freezer"
                                                                title="انواع یخچال و فریزر">یخچال و فریزر</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Refrigerator-Freezer?type[0]=4669"
                                                                title="یخچال و فریزر های ساید بای ساید">ساید بای
                                                                ساید</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Refrigerator-Freezer?type[0]=5629"
                                                                title="یخچال و فریزر های در فرانسوی">در فرانسوی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Refrigerator-Freezer?type[0]=4671"
                                                                title="یخچال و فریزر های دو قلو">دو قلو</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Refrigerator-Freezer?type[0]=4670"
                                                                title="یخچال و فریزر های یخچال و فریزر بالا پایین">یخچال
                                                                و فریزر بالا پایین</a></li>
                                                        <li class="item"><a href="/Search/Category-Refrigerator-Freezer"
                                                                            title="مشاهده انواع یخچال و فریزر">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-drink-maker"
                                                                             title="انواع نوشیدنی ساز">نوشیدنی ساز</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Juicer?type[0]=4682"
                                                                            title="آبمیوه گیری">آبمیوه گیری</a></li>
                                                        <li class="item"><a href="/Search/Category-Juicer?type[0]=4683"
                                                                            title="آب مرکبات گیر">آب مرکبات گیر</a></li>
                                                        <li class="item"><a href="/Search/Category-Boiler"
                                                                            title="انواع کتری برقی">کتری برقی</a></li>
                                                        <li class="item"><a href="/Search/Category-Tea-Makers"
                                                                            title="انواع چای ساز">چای ساز</a></li>
                                                        <li class="item"><a href="/Search/Category-Coffee-Makers"
                                                                            title="قهوه ساز">قهوه ساز</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Water-treatment-and-watercooler"
                                                                title="آبسردکن">آبسردکن</a></li>
                                                        <li class="item"><a href="/Search/Category-water-filters"
                                                                            title="تصفیه آب">تصفیه آب</a></li>
                                                        <li class="title"><a href="/Search/Category-Airtreatment"
                                                                             title="تهویه سرمایش و گرمایش">تهویه سرمایش
                                                                و گرمایش</a></li>
                                                        <li class="item"><a href="/Search/Category-Fan" title="پنکه">پنکه</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Heater" title="هیتر">هیتر</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Air-Purifier"
                                                                            title="ابزار های تصفیه کننده هوا">تصفیه
                                                                کننده هوا</a></li>
                                                        <li class="item"><a href="/Search/Category-Air%20Conditioner"
                                                                            title="کولر گازی">کولر گازی</a></li>
                                                        <li class="title"><a href="/Search/Category-Environment-Care"
                                                                             title="سلامت محیط">سلامت محیط</a></li>
                                                    </ul>
                                                </td>
                                                <td class="last alternate">
                                                    <ul>
                                                        <li class="title"><a href="" title="لوازم شستشو و نظافت">لوازم
                                                                شستشو و نظافت</a></li>
                                                        <li class="item"><a href="/Search/Category-Washing-Machines"
                                                                            title="ماشین لباسشویی">ماشین لباسشویی</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Dishwasher"
                                                                            title="ماشین ظرفشویی">ماشین ظرفشویی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Hard-Floor-Carpet-Cleaner"
                                                                title="سرامیک شوی و فرش شوی">سرامیک شوی و فرش شوی</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Vaccum-Cleaner"
                                                                            title="جارو برقی">جارو برقی</a></li>
                                                        <li class="item"><a href="/Search/Category-Handheld-Vaccum"
                                                                            title="جارو شارژی">جارو شارژی</a></li>
                                                        <li class="item"><a href="/Search/Category-Steam-Cleaner"
                                                                            title="بخار شو">بخار شو</a></li>
                                                        <li class="item"><a href="/Search/Category-Iron"
                                                                            title="اتو">اتو</a></li>
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
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/Home-kitchen-Appliances/" title="آشپزخانه"
                                             data-title="home-kitchen-appliances">آشپزخانه</a>
                            <div class="submenu Home-kitchen-Appliances">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Kitchen-Appliances">لوازم
                                                                پخت و پز</a></li>
                                                        <li class="item"><a href="/Search/Category-CookingTools">ابزار
                                                                آَشپزی</a></li>
                                                        <li class="item"><a href="/Search/Category-cookware">ظروف پخت و
                                                                پز</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-PressureCooker">زودپز</a></li>
                                                        <li class="item"><a href="/Search/Category-MilkAndCofeeMaker">شیر
                                                                جوش - قهوه جوش</a></li>
                                                        <li class="item"><a href="/Search/Category-cookwareSet">سرویس
                                                                پخت و پز</a></li>
                                                        <li class="item"><a href="/Search/Category-Meat-Board">تخته
                                                                گوشت</a></li>
                                                        <li class="item"><a href="/Search/Category-SpatulaLadleSet">سرویس
                                                                کفگیر و ملاقه</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ForkandSpoonnandKnife">قاشق،
                                                                چنگال و کارد</a></li>
                                                        <li class="item"><a href="/Search/Category-OtherCookwares">سایر
                                                                ظروف</a></li>
                                                        <li class="item"><a href="/Search/Category-BrazierBarbecue">منقل
                                                                و باربیکیو</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-KettleandTeapot">کتری
                                                                و قوری</a></li>
                                                        <li class="item"><a href="/Search/Category-TeaSets">سرویس چای
                                                                خوری</a></li>
                                                        <li class="item"><a href="/Search/Category-KettlTeapot">ست کتری
                                                                و قوری</a></li>
                                                        <li class="item"><a href="/Search/Category-TeaPot">قوری</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-PlateandEtc">بشقاب و
                                                                سایر ظروف</a></li>
                                                        <li class="item"><a href="/Search/Category-ServingWare">ظروف سرو
                                                                و پذیرایی</a></li>
                                                        <li class="item"><a href="/Search/Category-Ice-Cream-Maker">بستنی
                                                                خوری</a></li>
                                                        <li class="item"><a href="/Search/Category-Plate">بشقاب</a></li>
                                                        <li class="item"><a href="/Search/Category-Bowl">کاسه</a></li>
                                                        <li class="item"><a href="/Search/Category-Bottle">بطری آب</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-IceTray">قالب یخ</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Salt-Sugar-Shaker">شکر
                                                                پاش و نمک پاش</a></li>
                                                        <li class="item"><a href="/Search/Category-Instead-Of-Spice">جای
                                                                ادویه</a></li>
                                                        <li class="item"><a href="/Search/Category-Bread-Basket">ظرف
                                                                نان</a></li>
                                                        <li class="item"><a href="/Search/Category-KitchenBasket">سبد
                                                                آشپزخانه</a></li>
                                                        <li class="item"><a href="/Search/Category-Container">ظروف
                                                                نگهدارنده</a></li>
                                                        <li class="item"><a href="/Search/Category-LegumeContainer">ظروف
                                                                بنشن</a></li>
                                                        <li class="item"><a href="/Search/Category-Rice-Dish">ظرف
                                                                برنج</a></li>
                                                    </ul>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-TowelHandkerchief">حوله
                                                                و دستمال آشپزخانه</a></li>
                                                        <li class="item"><a href="/Search/Category-Home-Collection">سرویس
                                                                آشپزخانه</a></li>
                                                        <li class="item"><a href="/Search/Category-Hand-kerchief">دستگیره</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Handkerchief">دستمال</a></li>
                                                        <li class="item"><a href="/Search/Category-Apron">پیش بند</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-RiceCookerBlankcet">دم
                                                                کنی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-TeaPotCover">روقوری</a></li>
                                                        <li class="item"><a href="/Search/Category-PanMate">زیر قابلمه&zwnj;ای</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-BreadandVegetableBag">کیسه نان و
                                                                سبزی</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Flasks">کلمن و
                                                                فلاسک</a></li>
                                                    </ul>

                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Pastry">ابزار شیرینی
                                                                پزی</a></li>
                                                        <li class="item"><a href="/Search/Category-PastryForm">قالب
                                                                شیرینی پزی</a></li>
                                                        <li class="item"><a href="/Search/Category-PastryTools">ابزار
                                                                شیرینی پزی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Kitchen-Weighing-scale">ترازوی
                                                                آشپزخانه</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-DrainBowlsBuckets">آبکش،
                                                                کاسه، سطل</a></li>
                                                        <li class="item"><a href="/Search/Category-VirgoBasin">آبکش</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Virgo-1">صافی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Organizer">ارگانایزر</a></li>
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
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/Serving/" title="سرو و پذیرایی"
                                             data-title="serving">سرو و پذیرایی</a>
                            <div class="submenu Serving">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Dinnerware-Sets">سرویس
                                                                غذاخوری</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-ServingWare">ظروف
                                                                سرو و پذیرایی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ServingWare?type[0]=5759">کیک
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ServingWare?type[0]=5760">آجیل
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ServingWare?type[0]=5774">دیس
                                                                میوه</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ServingWare?type[0]=5775">دیس
                                                                برنج</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/Search/Category-DisposableContainer">ظروف یکبار
                                                                مصرف</a></li>
                                                        <li class="title"><a href="/Search/Category-PepperGrinder">آسیاب
                                                                نمک و فلفل</a></li>
                                                        <li class="title"><a href="/Search/Category-Crystal-Dishes">ظروف
                                                                کریستال</a></li>

                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-SpoonForkKnifeSet">سرویس
                                                                قاشق، کارد و چنگال</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/Search/Category-ForkandSpoonnandKnife">قاشق،
                                                                چنگال و کارد</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ForkandSpoonnandKnife?type[0]=5776">میوه
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ForkandSpoonnandKnife?type[0]=5777">چای
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ForkandSpoonnandKnife?type[0]=5778">غذا
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ForkandSpoonnandKnife?type[0]=5780">عسل
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ForkandSpoonnandKnife?type[0]=5781">مربا
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ForkandSpoonnandKnife?type[0]=5782">شربت
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ForkandSpoonnandKnife?type[0]=5783">اردور
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-ForkandSpoonnandKnife?type[0]=5784">قهوه
                                                                خوری</a></li>
                                                    </ul>


                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-MugAndJugSet">پارچ،
                                                                بطری و لیوان</a></li>
                                                        <li class="item"><a href="/Search/Category-CupandMug">ماگ، لیوان
                                                                و فنجان</a></li>
                                                        <li class="item"><a href="/Search/Category-Jug">پارچ</a></li>
                                                        <li class="item"><a href="/Search/Category-CupSet">ست فنجان و
                                                                نعلبکی</a></li>
                                                        <li class="item"><a href="/Search/Category-MugJugSet">سرویس پارچ
                                                                و لیوان</a></li>
                                                        <li class="item"><a href="/Search/Category-TeaSets">سرویس چای
                                                                خوری</a></li>
                                                    </ul>

                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Flasks">کلمن و
                                                                فلاسک</a></li>
                                                        <li class="item"><a href="/Search/Category-Flasks?type[0]=6292">فلاسک</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Flasks?type[0]=6293">کلمن</a>
                                                        </li>
                                                    </ul>


                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-TableclothandEtc">رومیزی،
                                                                رانر و زیر بشقابی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Tablecloths">رومیزی</a></li>
                                                        <li class="item"><a href="/Search/Category-Coasters">زیر
                                                                لیوانی</a></li>
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
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/Decorative/" title="دکوراتیو"
                                             data-title="decorative">دکوراتیو</a>
                            <div class="submenu Decorative">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/Search/Category-Home-Decor-Accessories">لوازم
                                                                دکوری خانه</a></li>
                                                        <li class="item"><a href="/Search/Category-Statue">مجسمه و
                                                                تندیس</a></li>
                                                        <li class="item"><a href="/Search/Category-Wallpaper">کاغذ
                                                                دیواری</a></li>
                                                        <li class="item"><a href="/Search/Category-Clocks">ساعت های
                                                                تزئینی</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/Search/Category-Enamels">میناکاری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Enamels?type[0]=5996">گز خوری</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Enamels?type[0]=5993">بشقاب</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Enamels?type[0]=5991">قندان</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Enamels?type[0]=5990">گلدان</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Crystal-Dishes">ظروف
                                                                کریستال</a></li>
                                                        <li class="title"><a
                                                                href="/Search/Category-Glass-Mirrors-and-Chinese">آبگینه،
                                                                آینه و چینی</a></li>
                                                        <li class="title"><a href="/Search/Category-Panel">تابلو</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Clay-and-Ceramic">سفال
                                                                و سرامیک</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Clay-and-Ceramic?type[0]=5966">شمعدان
                                                                و جا شمعی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Clay-and-Ceramic?type[0]=5967">اسانس
                                                                سوز</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Clay-and-Ceramic?type[0]=5920">ظروف</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Clay-and-Ceramic?type[0]=5965">گلدان</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Clay-and-Ceramic?type[0]=5974">آویز</a>
                                                        </li>

                                                    </ul>

                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Inlay">خاتم کاری</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Inlay?type[0]=6006">شکلات
                                                                خوری</a></li>
                                                        <li class="item"><a href="/Search/Category-Inlay?type[0]=6000">جعبه
                                                                جواهرات</a></li>
                                                        <li class="item"><a href="/Search/Category-Inlay?type[0]=6013">جا
                                                                سکه ای</a></li>
                                                        <li class="item"><a href="/Search/Category-Inlay?type[0]=5999">قلمدان</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Table-Linen">سفره
                                                                قلمکار</a></li>
                                                    </ul>

                                                    <!--						 -->


                                                </td>

                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Turquoise-Tattoo">فیروزه
                                                                کوبی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Turquoise-Tattoo?type[0]=5987">جعبه
                                                                جواهرات</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Turquoise-Tattoo?type[0]=5985">شکلات
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Turquoise-Tattoo?type[0]=6011">آجیل
                                                                خوری</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Turquoise-Tattoo?type[0]=5982">شمعدان</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Turquoise-Tattoo?type[0]=6096">صراحی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Turquoise-Tattoo?type[0]=6016">قندان</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Turquoise-Tattoo?type[0]=5980">گلدان</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Decorative-AC">لوازم
                                                                تزیینی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Candlestick">شمعدان</a></li>
                                                        <li class="item"><a href="/Search/Category-Flower-Pot">گلدان</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Candle">شمع</a></li>
                                                    </ul>


                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Bone-Product">محصولات
                                                                استخوانی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Bone-Product?type[0]=6008">جعبه
                                                                جواهرات</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Bone-Product?type[0]=6009">سرمه
                                                                دان</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Bone-Product?type[0]=6007">قلمدان</a>
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
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/BedandBath/" title="خواب و حمام"
                                             data-title="bedandbath">خواب و حمام</a>
                            <div class="submenu BedandBath">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Sleeping">خواب</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-SleepSet">سرویس
                                                                خواب</a></li>
                                                        <li class="item"><a href="/Search/Category-Mattress">تشک</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-SleepSet?type[0]=5703">لحاف</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Blankets">پتو</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-SleepSet?type[0]=5704">ملحفه</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Pillow">بالش</a></li>
                                                        <li class="item"><a href="/Search/Category-PillowsCover">رو
                                                                بالشی</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Cushion">کوسن</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-ClothHanger">بند
                                                                سیار</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Towel">انواع
                                                                حوله</a></li>
                                                        <li class="item"><a href="/Search/Category-Towel?type[0]=5696">دستی</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Towel?type[0]=5697">حمام</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Towel?type[0]=5698">استخری</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Towel?type[0]=5699">پالتویی</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Towel">سایر موارد</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Door-Mat">پادری</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Slippers">دمپایی</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-ShowerCurtains">پرده
                                                                حمام</a></li>
                                                    </ul>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-ClothBasket">سبد رخت
                                                                چرک</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Hair-Shampoo">شامپو
                                                                مو</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Body-Shampoo">شامپو
                                                                بدن</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Soap">صابون
                                                                شستشو</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-WashingMitt">لیف</a>
                                                        </li>
                                                    </ul>

                                                </td>
                                                <td class="alternate">


                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="lastrow"></div>
                                </div>
                            </div>

                        </li>
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/Cleaning/" title="شستشو و نظافت"
                                             data-title="cleaning">شستشو و نظافت</a>
                            <div class="submenu Cleaning">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Washing-Machines">ماشین
                                                                لباسشویی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Washing-Machines?brand[0]=367">بوش</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Washing-Machines?brand[0]=22">ال
                                                                جی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Washing-Machines?brand[0]=18">سامسونگ</a>
                                                        </li>
                                                        <li class="item"><a href="/Search/Category-Washing-Machines">مشاهده
                                                                موارد بیشتر</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Dishwasher">ماشین
                                                                ظرفشویی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Dishwasher?type[0]=4699">مبله</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Dishwasher?type[0]=4698">رومیزی</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/Search/Category-Hard-Floor-Carpet-Cleaner">سرامیک
                                                                شوی و فرش شوی</a></li>
                                                        <li class="title"><a href="/Search/Category-Steam-Cleaner">بخار
                                                                شو</a></li>
                                                        <li class="title"><a href="/Search/Category-Handheld-Vaccum">جارو
                                                                شارژی</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Vaccum-Cleaner">جاروبرقی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Vaccum-Cleaner?type[0]=4677">سطلی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Vaccum-Cleaner?type[0]=4717">کیسه
                                                                دار</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Vaccum-Cleaner?type[0]=4718">بدون
                                                                کیسه</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-Iron">اتو</a></li>
                                                        <li class="item"><a href="/Search/Category-Iron?type[0]=4680">اتو
                                                                بخار</a></li>
                                                        <li class="item"><a href="/Search/Category-Iron?type[0]=5527">اتو
                                                                مخزن دار</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-IroningAC">لوازم
                                                                اتو</a></li>
                                                        <li class="item"><a href="/Search/Category-IronTable">میز
                                                                اتو</a></li>
                                                        <li class="item"><a href="/Search/Category-Clothes-Rack">چوب
                                                                لباسی</a></li>
                                                    </ul>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-detergents">مواد
                                                                شوینده</a></li>
                                                        <li class="item"><a href="/Search/Category-Dishes-Detergents">شوینده
                                                                ظروف</a></li>
                                                        <li class="item"><a href="/Search/Category-Surface-Cleaner">تمیزکننده
                                                                سطوح</a></li>
                                                        <li class="item"><a href="/Search/Category-freshener-spray">اسپری
                                                                خوشبو کننده هوا</a></li>
                                                        <li class="item"><a href="/Search/Category-Washing-Liquid">مایع
                                                                دستشویی</a></li>
                                                        <li class="item"><a
                                                                href="/Search/Category-Carpet-and-Furniture-Shampoo">شامپو
                                                                فرش و مبل</a></li>
                                                        <li class="item"><a href="/Search/Category-Clothes-Detergents">شوینده
                                                                رخت</a></li>
                                                        <li class="item"><a href="/Search/Category-Glass-Cleaner">شیشه
                                                                پاک کن</a></li>

                                                    </ul>

                                                </td>

                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/Search/Category-CleaningTools">ابزار
                                                                نظافت</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/Search/Category-ShoesandClothingCleaning">نظافت
                                                                لباس</a></li>
                                                        <li class="item"><a href="/Search/Category-ClothBasket">سبد رخت
                                                                چرک</a></li>
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
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/Non-Electrical-Tools/" title=" ابزار غیر برقی"
                                             data-title="non-electrical-tools"> ابزار غیر برقی</a></li>
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/Power-Tools/" title="ابزار برقی"
                                             data-title="power-tools">ابزار برقی</a></li>
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/Gardening-Tools/" title="باغبانی"
                                             data-title="gardening-tools">باغبانی</a></li>
                        <li class="l_two"><a href="/Main/Home-and-Kitchen/Lighting/" title="نور و روشنایی"
                                             data-title="lighting">نور و روشنایی</a>
                            <div class="submenu Lighting">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-lamp">لامپ</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-lamp?attribute[A23013][0]=30876">حبابی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-lamp?attribute[A23013][0]=30874">شمعی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-lamp?attribute[A23013][0]=30875">اشکی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-lamp?attribute[A23013][0]=30873">تیوبی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-lamp?attribute[A23013][0]=30872">هالوژنی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-lamp?attribute[A23013][0]=31249">ریسه</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-lamp?attribute[A23013][0]=30929">لامپ
                                                                سقفی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-hanging-lamps?type[0]=8810">چراغ
                                                                سقفی</a></li>
                                                        <li class="item"><a href="/search/category-lamp?type[0]=7493">پروژکتور</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/search/category-lamp">بر اساس
                                                                تکنولوژی</a></li>
                                                        <li class="item"><a href="/search/category-lamp?type[0]=7368">لامپ
                                                                کم مصرف</a></li>
                                                        <li class="item"><a href="/search/category-lamp?type[0]=7487">LED
                                                                COB</a></li>
                                                        <li class="item"><a href="/search/category-lamp?type[0]=7486">LED
                                                                SMD</a></li>
                                                        <li class="item"><a href="/search/category-lamp?type[0]=7488">LED
                                                                فیلامنتی</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/search/category-hanging-lamps?type[0]=7677">لوستر</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-hanging-lamps?type[0]=8810">سقفی</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-hanging-lamps?type[0]=7465">دیواری</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-decorativelamp">آباژور</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-decorativelamp?type[0]=6605">ایستاده</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-decorativelamp?type[0]=6606">رومیزی</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-power-strip">محافظ و
                                                                چندراهی برق</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-power-strip?type[0]=5380">محافظ
                                                                ولتاژ</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-power-strip?type[0]=5379">چندراهی
                                                                برق</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-power-strip?type[0]=9481">تبدیل
                                                                دیواری</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-solder-gun">هویه</a>
                                                        </li>
                                                        <li class="title"><a
                                                                href="/search/category-screwdriver?type[0]=5549">فازمتر</a>
                                                        </li>
                                                        <li class="title"><a href="/search/category-multimeter">مولتی
                                                                متر و اهم متر</a></li>
                                                        <li class="title"><a
                                                                href="/search/category-light-accessories?type[0]=9482">فیوز
                                                                برق</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-lighting-antenna">آنتن
                                                                تلویزیون</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/search/category-exhaust-fans">هواکش</a></li>
                                                    </ul>
                                                </td>
                                                <td class="last alternate">
                                                    <ul>
                                                        <li class="title"><a href="/search/category-lamp?type[0]=7438">لامپ
                                                                هوشمند</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-light">چراغ
                                                                مطالعه</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-flashlight">چراغ
                                                                قوه</a></li>
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
                        <li class="l_two"><a href="/Search/Category-food-beverage/" title="خوراکی و آشامیدنی"
                                             data-title="food-beverage">خوراکی و آشامیدنی</a></li>
                    </ul>
                </li>
                <li class="l_one"><span title="آرایشی و بهداشتی">آرایشی و بهداشتی<span class="arr"></span></span>
                    <ul class="level sl">
                        <li class="l_two"><a href="/Main/Personal-Appliance/Beauty/" title="لوازم آرایشی"
                                             data-title="beauty">لوازم آرایشی</a></li>
                        <li class="l_two"><a href="/Main/Personal-Appliance/Hair-Clipper/" title="لوازم بهداشتی"
                                             data-title="hair-clipper">لوازم بهداشتی</a></li>
                        <li class="l_two"><a href="/Main/Personal-Appliance/Electrical-Personal-Care/"
                                             title="لوازم شخصی برقی" data-title="electrical-personal-care">لوازم شخصی
                                برقی</a></li>
                        <li class="l_two"><a href="/Search/Category-Sunglasses/" title="عینک آفتابی"
                                             data-title="sunglasses">عینک آفتابی</a></li>
                        <li class="l_two"><a href="/Main/Personal-Appliance/Jewelery/" title="زیورآلات"
                                             data-title="jewelery">زیورآلات</a></li>
                        <li class="l_two"><a href="/Main/Personal-Appliance/Health-Care/" title="ابزار سلامت"
                                             data-title="health-care">ابزار سلامت</a></li>
                    </ul>
                </li>
                <li class="l_one"><span title="کتاب، فرهنگ و هنر">کتاب، فرهنگ و هنر<span class="arr"></span></span>
                    <ul class="level sl">
                        <li class="l_two"><a href="/Main/Book-And-Media/Publication/" title="کتاب و مجلات"
                                             data-title="publication">کتاب و مجلات</a></li>
                        <li class="l_two"><a href="/Main/Book-And-Media/Stationery/" title="لوازم التحریر"
                                             data-title="stationery">لوازم التحریر</a></li>
                        <li class="l_two"><a href="/Main/Book-And-Media/Handicraft/" title="صنایع دستی"
                                             data-title="handicraft">صنایع دستی</a></li>
                        <li class="l_two"><a href="/Main/Book-And-Media/Carpet/" title="فرش" data-title="carpet">فرش</a>
                            <div class="submenu Carpet">
                                <div class="rows">
                                    <div class="firstrow">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-handmade-carpet">فرش
                                                                دستبافت</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-handmade-carpet?type[0]=7325">فرش&zwnj;های
                                                                یک تا سه متری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-handmade-carpet?type[0]=7326">فرش&zwnj;های
                                                                سه تا چهار متری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-handmade-carpet?type[0]=7327">فرش&zwnj;های
                                                                چهار تا شش متری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-handmade-carpet?type[0]=7328">فرش&zwnj;های
                                                                شش متری و بزرگ&zwnj;تر</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/search/category-machine-made-carpet">فرش
                                                                ماشینی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-machine-made-carpet?type[0]=9380">فرش&zwnj;های
                                                                چهار متری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-machine-made-carpet?type[0]=9381">فرش&zwnj;های
                                                                شش متری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-machine-made-carpet?type[0]=9382">فرش&zwnj;های
                                                                نه متری</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-machine-made-carpet?type[0]=9699">فرش&zwnj;های
                                                                دوازده متری</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-old-carpet">فرش
                                                                قدیمی</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a href="/search/category-gabbeh">گبه</a></li>
                                                        <li class="item"><a href="/search/category-gabbeh?type[0]=7329">گبه&zwnj;های
                                                                کوچکتر از یک متر</a></li>
                                                        <li class="item"><a href="/search/category-gabbeh?type[0]=7330">گبه&zwnj;های
                                                                یک تا سه متری</a></li>
                                                        <li class="item"><a href="/search/category-gabbeh?type[0]=7332">گبه&zwnj;های
                                                                سه تا چهار متری</a></li>
                                                        <li class="item"><a href="/search/category-gabbeh?type[0]=7331">گبه&zwnj;های
                                                                چهار تا شش متری</a></li>
                                                        <li class="item"><a href="/search/category-gabbeh?type[0]=7333">گبه&zwnj;های
                                                                شش متری و بزرگتر</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-collage">کلاژ و فرش
                                                                رنگ شده</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-collage?type[0]=7315">کلاژ
                                                                فرش</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-collage?type[0]=7318">کلاژ
                                                                گلیم</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-collage?type[0]=7316">کلاژ
                                                                جاجیم</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-collage?type[0]=7334">کلاژ چرم و
                                                                پوست</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-collage?type[0]=8414">فرش رنگ
                                                                شده</a></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-pictorial-carpet">تابلو
                                                                فرش</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-pictorial-carpet?type[0]=7320">طرح
                                                                خوشنویسی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-pictorial-carpet?type[0]=7321">طرح
                                                                گل</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-pictorial-carpet?type[0]=7322">طرح
                                                                حیوان</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-pictorial-carpet?type[0]=7732">طرح
                                                                پرنده</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-pictorial-carpet?type[0]=7324">طرح
                                                                منظره</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-pictorial-carpet?type[0]=7323">طرح
                                                                مینیاتور</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title"><a href="/search/category-pastor">پادری</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/Search?q=پادری%20دستبافت&amp;sortby=4">پادری فرش
                                                                دستبافت</a></li>
                                                        <li class="item"><a href="/search/category-pastor?type[0]=7336">پادری
                                                                گبه</a></li>
                                                        <li class="item"><a href="/search/category-pastor?type[0]=7337">پادری
                                                                کلاژ</a></li>
                                                        <li class="title"><a href="/search/category-rug">گلیم</a></li>
                                                    </ul>
                                                </td>
                                                <td class="alternate">
                                                    <ul>
                                                        <li class="title"><a
                                                                href="/search/category-traditional-furniture-and-decoration">مبلمان
                                                                سنتی</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-traditional-furniture-and-decoration?type%5B0%5D=9059">مبل
                                                                پاف</a></li>
                                                        <li class="item"><a
                                                                href="/search/category-traditional-furniture-and-decoration?type%5B0%5D=9060">کوسن</a>
                                                        </li>
                                                        <li class="item"><a
                                                                href="/search/category-traditional-furniture-and-decoration?type%5B0%5D=9189">میز
                                                                سنتی</a></li>
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
                        <li class="l_two"><a href="/Main/Book-And-Media/MusicalInstruments/" title="آلات موسیقی"
                                             data-title="musicalinstruments">آلات موسیقی</a></li>
                        <li class="l_two"><a href="/Main/Book-And-Media/Music-Audio-Content/" title="موسیقی"
                                             data-title="music-audio-content">موسیقی</a></li>
                        <li class="l_two"><a href="/Main/Book-And-Media/Film-Video-Content/" title="فیلم"
                                             data-title="film-video-content">فیلم</a></li>
                        <li class="l_two"><a href="/Main/Book-And-Media/Software-Games/" title="نرم افزار و بازی"
                                             data-title="software-games" data-override="نرم افزار و بازی">نرم افزار و
                                بازی</a></li>
                        <li class="l_two"><a href="/Main/Book-And-Media/Multimedia-Training-Pack/" title="محتوای آموزشی"
                                             data-title="multimedia-training-pack">محتوای آموزشی</a></li>
                    </ul>
                </li>
                <li class="l_one"><span title="ورزش و سفر">ورزش و سفر<span class="arr"></span></span>
                    <ul class="level sl">
                        <li class="l_two"><a href="/Main/Sport-Entertainment/Sports-Wear/" title="پوشاک ورزشی"
                                             data-title="sports-wear">پوشاک ورزشی</a></li>
                        <li class="l_two"><a href="/Main/Sport-Entertainment/SportShoes/" title="کفش ورزشی"
                                             data-title="sportshoes">کفش ورزشی</a></li>
                        <li class="l_two"><a href="/Main/Sport-Entertainment/Sport/" title="لوازم ورزشی"
                                             data-title="sport">لوازم ورزشی</a></li>
                        <li class="l_two"><a href="/Main/Sport-Entertainment/Bicycle/" title="دوچرخه و لوازم جانبی"
                                             data-title="bicycle">دوچرخه و لوازم جانبی</a></li>
                        <li class="l_two"><a href="/Main/Sport-Entertainment/Traveling-Equipment/" title="تجهیزات سفر"
                                             data-title="traveling-equipment">تجهیزات سفر</a></li>
                        <li class="l_two"><a href="/Main/Sport-Entertainment/Toys/" title="اسباب بازی"
                                             data-title="toys">اسباب بازی</a></li>
                        <li class="l_two"><a href="/Search/Category-Pet/" title="حیوانات خانگی" data-title="pet">حیوانات
                                خانگی</a></li>
                    </ul>
                </li>
                <li class="l_one"><span title="مادر و کودک">مادر و کودک<span class="arr"></span></span>
                    <ul class="level sl">
                        <li class="l_two"><a href="/Search/Category-Safety-and-Care/" title="ایمنی و مراقبت"
                                             data-title="safety-and-care">ایمنی و مراقبت</a></li>
                        <li class="l_two"><a href="/Main/Mother-and-Child/Dining-Accessories/" title="غذاخوری"
                                             data-title="dining-accessories">غذاخوری</a></li>
                        <li class="l_two"><a href="/Main/Mother-and-Child/Personal-Accessories/" title="لوازم شخصی"
                                             data-title="personal-accessories">لوازم شخصی</a></li>
                        <li class="l_two"><a href="/Main/Mother-and-Child/Health-and-Bathroom-Tools/"
                                             title="بهداشت و حمام" data-title="health-and-bathroom-tools">بهداشت و
                                حمام</a></li>
                        <li class="l_two"><a href="/Main/Mother-and-Child/Promenade-and-Travel-Accessories/"
                                             title="گردش و سفر" data-title="promenade-and-travel-accessories">گردش و
                                سفر</a></li>
                        <li class="l_two"><a href="/Main/Mother-and-Child/Entertainment-and-Games-Equipment/"
                                             title="سرگرمی و آموزشی" data-title="entertainment-and-games-equipment">سرگرمی
                                و آموزشی</a></li>
                        <li class="l_two"><a href="/Main/Mother-and-Child/Baby-Bedding/" title="خواب کودک"
                                             data-title="baby-bedding">خواب کودک</a></li>
                    </ul>
                </li>
                <li class="l_one"><span title="وسایل نقلیه و صنعتی">وسایل نقلیه و صنعتی<span class="arr"></span></span>
                    <ul class="level sl">
                        <li class="l_two"><a href="/Main/Vehicles/Cars/" title="خودرو" data-title="cars">خودرو</a></li>
                        <li class="l_two"><a href="/Main/Vehicles/Car-Accessory-parts/" title=" لوازم جانبی خودرو"
                                             data-title="car-accessory-parts"> لوازم جانبی خودرو</a></li>
                        <li class="l_two"><a href="/Main/Vehicles/Consumable-Parts/" title=" لوازم مصرفی خودرو"
                                             data-title="consumable-parts"> لوازم مصرفی خودرو</a></li>
                        <li class="l_two"><a href="/Search/Category-Motorbike/" title="موتور سیکلت"
                                             data-title="motorbike">موتور سیکلت</a></li>
                        <li class="l_two"><a href="/Search/Category-Motorbike-Accessory-parts/"
                                             title=" لوازم جانبی موتور سیکلت" data-title="motorbike-accessory-parts">
                                لوازم جانبی موتور سیکلت</a></li>
                        <li class="l_two"><a href="/Search/Category-Motorbike-Consumable-Parts/"
                                             title="لوازم مصرفی موتور سیکلت" data-title="motorbike-consumable-parts">لوازم
                                مصرفی موتور سیکلت</a></li>
                    </ul>
                </li>
            </ul>
            <div class="promotion-badge"><a href="/special-offer">فروشگاه اینترنتی راحت بخر</a></div>
        </div>
    </div>
</nav>