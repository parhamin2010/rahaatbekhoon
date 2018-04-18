<?php
    Model::sessionInit();
    $userId = Model::sessionGet('userId');
    $level = Model::sessionGet('level');
?>
<div class="off-canvas-panel_mo" data-popup="off-canvas_menu">
    <div class="off-canvas-panel-wrapper_mo">
        <div class="off-canvas-logo">
            <a href="<?= URL; ?>" style="text-align: center">
                <img style="width: 95px;margin: 25px 0 0 0px; filter: brightness(10.25); "
                     src="public/images/pixel-perfect-final-v02-01.png"/>
            </a>
        </div>
        <nav role="navigation">
            <ul id="menu-megamenu" class="menu__list">
                <li>
                    <a class="btn_mo-ripple" data-ripple-color="rgba(190,190,190,0.75)" href="<?= URL; ?>">
                        <i style="margin-left: 10px;float: right;margin-top: 24px;" class="icon fa fa-home fa-fw"></i>
                        <span class="pull-right">صفحه اصلی</span>
                    </a>
                </li>
                <li>
                    <a class="btn_mo-ripple" data-ripple-color="rgba(190,190,190,0.75)" href="#">
                        <i style="margin-left: 10px;float: right;margin-top: 24px;" class="icon fa fa-home fa-fw"></i>
                        <span class="pull-right">اخبار و رویدادها</span>
                    </a>
                    <ul>
                        <?php
                            $categories = $data['getCategory'];
                            foreach ($categories as $category) {
                                if ($category['main_cat'] == 1) {
                                    ?>
                                    <li id="menu-item-356292"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children item">
                                        <a class="btn_mo-ripple" property="url"
                                           href="blogs/category/<?= $category['id']; ?>">
                                            <i style="margin-left: 10px;float: right;margin-top: 24px;"
                                               class="icon fa <?= $category['icon']; ?> fa-fw"></i>
                                            <span><?= $category['name']; ?></span>
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                </li>
                <li>
                    <a class="btn_mo-ripple" data-ripple-color="rgba(190,190,190,0.75)" href="#">
                        <i style="margin-left: 10px;float: right;margin-top: 24px;" class="icon fa fa-home fa-fw"></i>
                        <span class="pull-right">نشریات و مجلات</span>
                    </a>
                    <ul>
                        <?php
                            $categories = $data['getCategory'];
                            foreach ($categories as $category) {
                                if ($category['main_cat'] == 2) {
                                    ?>
                                    <li id="menu-item-356292"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children item">
                                        <a class="btn_mo-ripple" property="url"
                                           href="blogs/category/<?= $category['id']; ?>">
                                            <i style="margin-left: 10px;float: right;margin-top: 24px;"
                                               class="icon fa <?= $category['icon']; ?> fa-fw"></i>
                                            <span><?= $category['name']; ?></span>
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                </li>
                <li>
                    <a class="btn_mo-ripple" data-ripple-color="rgba(190,190,190,0.75)" href="about">
                        <i style="margin-left: 10px;float: right;margin-top: 24px;" class="icon fa fa-users fa-fw"></i>
                        <span class="pull-right">درباره ما</span>
                    </a>
                </li>
                <li>
                    <a class="btn_mo-ripple" data-ripple-color="rgba(190,190,190,0.75)" href="contact">
                        <i style="margin-left: 10px;float: right;margin-top: 24px;"
                           class="icon fa fa-comments fa-fw"></i>
                        <span class="pull-right">ارتباط با ما</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>