<?php
$userId = Model::sessionGet('userId');
$level = Model::sessionGet('level');
?>
<header id="dk-header">
    <div class="W-100" style="background: rgba(255,255,255,1)">
        <div>
            <div class="inner-wraper">
                <div class="runit left" style="color: #fff; font-size: 8pt;text-align: left">
                    <?=
                    Model::jaliliDate('j F Y - H:i:s');
                    ?>
                    <hr style="color: #fff">
                    <div style="margin-top:0px;color: #fff">
                        <input type="text" id="Searcher" style=";width: 350px;padding: 5px" autocomplete="off" onkeypress="if(event.keyCode==13) return mykeypress(event)" placeholder="عبارت مورد نظرتان را جستجو کنید..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

