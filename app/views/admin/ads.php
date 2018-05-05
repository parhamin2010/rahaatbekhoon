<?php
    $activeMenu = 'ads';
    
    $newsInfo = $data['newsInfo'];
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= NAME; ?> | تبلیغات</title>
    <!-- Favicon -->
    <?php require('app/views/include/favicon.php'); ?>

    <link href="public/css/pace-theme-flash.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/panel/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="public/panel/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="public/panel/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="public/panel/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/panel/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="public/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-default-indicator.css"/>
    <link rel="stylesheet" href="public/library/offlinealert/themes/offline-language-persian.css"/>

    <script src="public/js/sample.js" type="text/javascript"></script>
    <link href="public/css/sample.css" rel="stylesheet" type="text/css"/>

    <script src="http://code.highcharts.com/stock/highstock.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://code.highcharts.com/maps/modules/map.js" type="text/javascript" charset="utf-8"></script>

    <!-- <script src="https://code.highcharts.com/maps/modules/data.js"></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.18.2/codemirror.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.18.2/codemirror.min.css' type="text/css"
          rel="stylesheet"></link>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.18.2/theme/neo.min.css' type="text/css"
          rel="stylesheet"></link>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.18.2/mode/javascript/javascript.min.js'></script>

    <script src="https://code.highcharts.com/adapters/standalone-framework.js" type="text/javascript"
            charset="utf-8"></script>
    <script src="https://code.highcharts.com/highcharts-more.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://code.highcharts.com/modules/data.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/funnel.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

    <script src="http://editor.highcharts.com/highcharts-editor.complete.js" type="text/javascript"></script>
    <link href="http://editor.highcharts.com/highcharts-editor.min.css" type="text/css" rel="stylesheet"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">

<div class="wrapper">

    <header class="main-header">
        <?php require('app/views/admin/include/header.php'); ?>
    </header>

    <aside class="main-sidebar direction">
        <?php require('app/views/admin/include/sidebar.php'); ?>
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>مدیریت تبلیغات</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= URL; ?>adminpanel/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= URL; ?>adminpanel/ads"><i class="fa fa-trello"></i> Ads</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" data-id="<?= $data['attrId']; ?>">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">ویرایش خبر</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="box-body">
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <div class="form-group" style="text-align:right">
                                            <label for="imageNews" style="direction: rtl;">انتخاب کاور خبر (سایز
                                                مناسب:145*288 یا 290*294) :</label>
                                            <br/>
                                            <input style="float: right;" type='file' id="imageNews"/>
                                            <br/>
                                            <img src="public/images/news/<?= $newsInfo['0']['i_image']; ?>"
                                                 style="margin-left: 50px;width: 50%" id="blah"/>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <input id="btnsubmit" class="btn btn-dropbox" value="ثبت" type="submit">
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>

                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <?php require('app/views/admin/include/footer.php'); ?>
    </footer>
</div>


<script src="public/panel/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/panel/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="public/panel/plugins/fastclick/fastclick.js"></script>
<script src="public/panel/dist/js/app.min.js"></script>
<script src="public/library/offlinealert/offline.min.js"></script>
<script src="public/js/pace.min.js"></script>

<script type="text/javascript" src="public/panel/plugins/ckeditor/ckeditor.js"></script>
<script src="http://editor.highcharts.com/integrations/ckeditor.js" type="text/javascript" charset="utf-8"></script>

<script src="public/js/jquery.noty.packaged.js"></script>
<!-- CK Editor -->
<script src="public/js/countdown.js"></script>

<script type="text/javascript">
    $(document).ajaxStart(function () {
        Pace.restart();
    });
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imageNews").change(function () {
        readURL(this);
    });
</script>

<script>
    $("#btnsubmit").on('click', function () {
        var input = document.getElementById("imageNews");


        file = input.files[0];
        if (file != undefined) {
            formData = new FormData();
            if (!!file.type.match(/image.*/)) {
                formData.append("image", file);
                $.ajax({
                        url: "adminpanel/editNews",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            generate('success', '<div class="activity-item" style="text-align:right" dir="rtl">آلبوم مورد نظر باموفقیت ویرایش شد.</div>');
                            window.location.href = 'adminpanel/news';
                        }
                    }
                );
            } else {
                generate('warning', '<div class="activity-item" style="text-align:right" dir="rtl">یک تصویر معتبر انتخاب کنید.</div>');
            }
        }
    })
    ;
</script>

</body>
</html>
