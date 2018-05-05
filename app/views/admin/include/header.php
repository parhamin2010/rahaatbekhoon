<!-- Logo -->
<a href="<?= URL; ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">
                <img src="public/images/favicon/favicon-32x32.png">
            </span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">مدیریت پنل <b><?= NAME; ?></b></span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu" style="float: left">
        <ul class="nav navbar-nav">
                <?php
//            if ($data['headerStatus']['0']['request'] != 0 ) {
//                ?>
<!--                <li class="dropdown notifications-menu">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                        <i class="fa fa-bell-o"></i>-->
<!--                        <span class="label label-danger" style="border-radius: 5px;color: #d9534f !important;-->
<!--                    width: 8px;height: 8px;margin-top: 5px;margin-right: 5px"> </span>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li>-->
<!--                            <!-- inner menu: contains the actual data -->
<!--                            <ul class="menu">-->
<?php
//                                if ($data['headerStatus']['0']['request'] != 0) {
//                                    ?>
<!--                                    <li>-->
<!--                                        <a href="adminpanel/confirmArtist">-->
<!--                                            <i class="fa fa-users text-aqua"></i> --><?//= $data['headerStatus']['0']['request']; ?>
<!--                                            درخواست تغییر حساب کاربری دارید.-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    --><?php
//                                }
//                                ?>
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                --><?php
//            }
//            ?>
            <li class="dropdown user user-menu">
                <a href="adminpanel/logout">
                    <i class="fa fa-sign-out fa-fw"></i> <span>خروج</span>
                </a>
            </li>
        </ul>
    </div>

</nav>