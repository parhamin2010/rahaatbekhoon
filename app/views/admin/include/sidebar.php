<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-right image">
            <img onerror="this.src='public/images/user-default-image.jpg'" src="<?= $data['infoAdmin'][0]['image']; ?>"
                 class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
            <p><?= $data['infoAdmin'][0]['name']; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="treeview <?php if ($activeMenu == 'dashboard') {
            echo 'active';
        } ?>">
            <a href="<?= URL; ?>adminpanel/dashboard">
                <i class="fa fa-dashboard"></i> <span>داشبورد</span>
            </a>
        </li>
        <li class="treeview <?php if ($activeMenu == 'category') {
            echo 'active';
        } ?>">
            <a style="cursor: pointer">
                <i class="fa fa-th-list fa-fw"></i> <span>دسته بندی ها</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="<?php if ($activeSubMenu == 'categoryAdd') {
                    echo 'active';
                } ?>"><a href="adminpanel/categories/add"><i class="fa <?php if ($activeSubMenu == 'categoryAdd') {
                            echo 'fa-circle';
                        } else {
                            echo 'fa-circle-o';
                        } ?>"></i> افزودن دسته بندی جدید</a></li>
                <li class="<?php if ($activeSubMenu == 'categoriesManage') {
                    echo 'active';
                } ?>"><a href="adminpanel/categories"><i class="fa <?php if ($activeSubMenu == 'categoriesManage') {
                            echo 'fa-circle';
                        } else {
                            echo 'fa-circle-o';
                        } ?>"></i> مدیریت دسته بندی ها</a></li>
            </ul>
        </li>
        <li class="treeview <?php if ($activeMenu == 'news') {
            echo 'active';
        } ?>">
            <a style="cursor: pointer">
                <i class="fa fa-clone fa-fw"></i> <span>اخبار</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="<?php if ($activeSubMenu == 'newsAdd') {
                    echo 'active';
                } ?>"><a href="adminpanel/news/newsAdd"><i class="fa <?php if ($activeSubMenu == 'newsAdd') {
                            echo 'fa-circle';
                        } else {
                            echo 'fa-circle-o';
                        } ?>"></i> افزودن خبر جدید</a></li>
                <li class="<?php if ($activeSubMenu == 'newsManage') {
                    echo 'active';
                } ?>"><a href="adminpanel/news"><i class="fa <?php if ($activeSubMenu == 'newsManage') {
                            echo 'fa-circle';
                        } else {
                            echo 'fa-circle-o';
                        } ?>"></i> مدیریت اخبار</a></li>
            </ul>
        </li>
        <li class="treeview <?php if ($activeMenu == 'member') {
            echo 'active';
        } ?>">
            <a href="adminpanel/users">
                <i class="fa fa-users fa-fw"></i> <span>لیست کاربران</span>
            </a>
        </li>
        <li class="treeview <?php if ($activeMenu == 'comment') {
            echo 'active';
        } ?>">
            <a href="adminpanel/comments">
                <i class="fa fa-comment fa-fw"></i> <span>نظرات کاربران</span>
                <?php if ($data['newComment'][0]['num'] != 0) {
                    ?>
                    <small class="label pull-right bg-yellow"
                           style="padding: .4em .6em .1em;"><?= $data['newComment'][0]['num']; ?></small>
                    <?php
                } ?>
            </a>
        </li>
        <li class="treeview <?php if ($activeMenu == 'support') {
            echo 'active';
        } ?>">
            <a href="adminpanel/support">
                <i class="fa fa-support fa-fw"></i> <span>پشتیبانی</span>
                <?php if ($data['newContact'][0]['num'] != 0) {
                    ?>
                    <small class="label pull-right bg-green"
                           style="padding: .4em .6em .1em;"><?= $data['newContact'][0]['num']; ?></small>
                    <?php
                } ?>
            </a>
        </li>
        <li class="treeview <?php if ($activeMenu == 'setting') {
            echo 'active';
        } ?>">
            <a href="adminpanel/settings">
                <i class="fa fa-cog fa-fw"></i> <span>تنظیمات</span>
            </a>
        </li>
    </ul>
</section>