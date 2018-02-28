<?php
$userId = Model::sessionGet('userId');
$level = Model::sessionGet('level');
?>
<header id="dk-header">
    <div class="W-100" style="background: rgba(255,255,255,1)">
        <div>
            <div class="inner-wraper">
                <div class="runit left" style="color: #ffffff; font-size: 10pt;text-align: right;">
                    <?=
                    Model::jaliliDate('l j F Y | H:i');
                    ?>
                    <div style="text-align: left;float: left">
                        <a href="#"><span class="fa fa-telegram" style="font-size: 13pt;margin-left: 6px"></span></a>
                        <a href="#"><span class="fa fa-instagram" style="font-size: 13pt;margin-left: 6px"></span></a>
                        <a href="#"><span class="fa fa-twitter" style="font-size: 13pt;margin-left: 6px"></span></a>
                        <a href="#"><span class="fa fa-facebook" style="font-size: 13pt;margin-left: 6px"></span></a>
                        <a href="#"><span class="fa fa-google-plus" style="font-size: 13pt;margin-left: 6px"></span></a>
                        <a href="rss"><span class="fa fa-rss" style="font-size: 13pt"></span></a>
                    </div>
                    <hr style="margin-top: 8px">
                    <div style="margin-top:0px;color: #fff">
                        <input type="text" id="Searcher" style=";width: 350px;padding: 5px" autocomplete="off" onkeypress="if(event.keyCode==13) return mykeypress(event)" placeholder="عبارت مورد نظرتان را جستجو کنید..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

