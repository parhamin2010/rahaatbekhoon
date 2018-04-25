<?php
    $activeMenu = 'news';
    $activeSubMenu = 'newsAdd';
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= NAME; ?> | افزودن سایت جدید</title>
    <!-- Favicon -->
    <!--    <link rel="stylesheet" href="public/panel/plugins/ckeditor/ckeditor.js">-->
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
                <small>افزودن سایت جدید</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= URL; ?>adminpanel/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= URL; ?>adminpanel/news"><i class="fa fa-clone"></i> News</a></li>
                <li class="active">News Add</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">افزودن سایت جدید</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="box-body">
                                <div class='row'>

                                    <div class='col-md-5'>
                                        <div class="form-group" style="text-align:right">
                                            <label align="right" for="titleNews">:عنوان سایت</label>
                                            <input style="border-radius: 3px;text-align:right" type="text"
                                                   class="form-control" id="titleNews" name="titleNews" required>
                                        </div>
                                    </div>

                                    <div class='col-md-5'>
                                        <div class="form-group" style="text-align:right">
                                            <label align="right" for="linkNews">:لینک خبرخوان</label>
                                            <input style="border-radius: 3px;text-align:left" type="text"
                                                   class="form-control" id="linkNews" name="linkNews" required>
                                        </div>
                                    </div>

                                    <div class='col-md-2'>
                                        <div class="form-group" style="text-align:right">
                                            <label for="categoryNews">: دسته بندی</label>
                                            <select id="categoryNews" name="categoryNews" class="form-control select2"
                                                    style="border-radius: 3px;width: 100%;direction: rtl"
                                                    required>
                                                <?php
                                                    $categories = $data['category'];
                                                    foreach ($categories as $category) {
                                                        if ($category['main_cat'] == 1) {
                                                            ?>
                                                            <option value="<?= $category['id']; ?>">
                                                                <?= $category['name']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </select>
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

<script src="public/js/jquery.noty.packaged.js"></script>
<!-- CK Editor -->
<script src="public/js/countdown.js"></script>

<script type="text/javascript">
    $(document).ajaxStart(function () {
        Pace.restart();
    });
</script>

<script>
    $("#btnsubmit").on('click', function () {
        var titleNews = document.getElementById("titleNews").value;
        var categoryNews = document.getElementById("categoryNews").value;
        var linkNews = document.getElementById("linkNews").value;

        if (titleNews == "") {
            generate('warning', '<div class="activity-item" style="text-align:right" dir="rtl">عنوان سایت را وارد کنید.</div>');
        } else if (linkNews == "") {
            generate('warning', '<div class="activity-item" style="text-align:right" dir="rtl">لینک خبرخوان را وارد کنید.</div>');
        }
        else {
            formData = new FormData();
            formData.append("titleNews", titleNews);
            formData.append("categoryNews", categoryNews);
            formData.append("linkNews", linkNews);
            $.ajax({
                    url: "adminpanel/addNews",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        generate('success', '<div class="activity-item" style="text-align:right" dir="rtl">سایت جدید باموفقیت ثبت شد.</div>');
                        window.location.href = 'adminpanel/news/newsSource';
                    }
                }
            );
        }
    })
    ;
</script>

</body>
</html>
