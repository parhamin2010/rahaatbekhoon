<div style="direction: ltr;height: 480px" id="hero" class="home-page-slider4">
    <div id="owl-main" class="owl-carousel silder4 owl-inner-nav owl-ui-sm">
        <?php
        $detect = new Mobile_Detect;
        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
        $sliders = $data['sliders'];
        foreach ($sliders as $slider) {
            ?>
            <a href="blog/<?= $slider['n_id']; ?>">
                <div class="item"
                     style="background-image: url('public/images/news/<?= $slider['i_image']; ?>');background-repeat: no-repeat;background-size: 100% 100%;"></div>
                <p style="direction:rtl;font-size: 14px;margin-top: -51px;background: rgba(255,255,255,0.8);color: #000;float: right;padding: 15px 10px 15px 0;width: 100%;text-align: right;">
                    <?= $deviceType=='computer' ? $slider['title']:Model::summary($slider['title'],80); ?></p>
            </a><!-- /.item<?= $slider['n_id']; ?> -->
            <?php
        }
        ?>
    </div><!-- /.owl-carousel -->
    <div class="customNavigation">
        <div class="container" style="width: 100% !important;">

            <div class="controls clearfix hidden-xs">
                <a href="#" data-target=".silder4" class="btn btn-reddit pull-left owl-prev"><i
                            class="fa fa-angle-left"></i></a>
                <a href="#" data-target=".silder4" class="btn btn-reddit pull-right owl-next"><i
                            class="fa fa-angle-right"></i></a>
            </div>
            <!-- /.controls -->

        </div>
    </div>
</div>