<div style="position: relative;direction: ltr;height: 480px;width: 100%;margin: 5px !important" id="hero" class="home-page-slider4">
    <div id="owl-main" class="owl-carousel silder4 owl-inner-nav owl-ui-sm">
        <?php
        $detect = new Mobile_Detect;
        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
        $sliders = $data['sliders'];
        foreach ($sliders as $slider) {
            ?>
            <a href="news/<?= $slider['n_id']; ?>">
                <div class="item"
                     style="background-image: url('public/images/news/<?= $slider['i_image']; ?>');background-repeat: no-repeat;background-size: 100% 100%;"></div>
                <div style="position: absolute;width: 0;height: 0;border-left: 10px solid transparent;border-right: 10px solid transparent;
	            border-bottom: 10px solid rgba(255,255,255,0.85);z-index: 999;margin-top: -110px;right: 50px;"></div>
                <p style="direction:rtl;font-size: 14pt;margin-top: -100px;background: rgba(255,255,255,0.85);color: #000;float: right;padding: 15px 20px 65px 0;width: 100%;text-align: right;">
                    <?= $deviceType == 'computer' ? $slider['title'] : Model::summary($slider['title'], 80); ?>
                    <br/>
                    <br/>
                    <span style="font-size: 10.5pt;">
                         <?= $deviceType == 'computer' ? Model::summary($slider['subtitle'], 200) : Model::summary($slider['subtitle'], 80); ?>
                    </span>
                </p>
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
