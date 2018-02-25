<?php
$activeMenu = 'setting';
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= NAME; ?> | تنظیمات</title>
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
                <small>تنظیمات</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= URL; ?>adminpanel/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= URL; ?>adminpanel/settings"><i class="fa fa-cog"></i> Settings</a></li>
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
                            <h3 class="box-title">تنظیمات</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="box-body">
                                <div class='row'>

                                    <div class='col-md-4'>
                                        <div class="form-group" style="text-align:right">
                                            <label align="right" for="Email">:ایمیل</label>
                                            <input style="border-radius: 3px;text-align:left" type="email"
                                                   class="form-control" id="Email" name="Email"
                                                   value="<?= $data['infoAdmin'][0]['email']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class="form-group" style="text-align:right">
                                            <label align="right" for="passNew">:کلمه عبور جدید</label>
                                            <input style="border-radius: 3px;text-align:left" type="password"
                                                   class="form-control" id="passNew" name="passNew" required>
                                        </div>
                                    </div>

                                    <div class='col-md-4'>
                                        <div class="form-group" style="text-align:right">
                                            <label align="right" for="RepassNew">:تکرار کلمه عبور جدید</label>
                                            <input style="border-radius: 3px;text-align:left" type="password"
                                                   class="form-control" id="RepassNew" name="RepassNew" required>
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
<script src="public/js/countdown.js"></script>

<script type="text/javascript">
    $(document).ajaxStart(function () {
        Pace.restart();
    });
</script>

<script>
    $("#btnsubmit").on('click', function () {
        var passNew = document.getElementById("passNew").value;
        var RepassNew = document.getElementById("RepassNew").value;
        if (RepassNew == passNew) {
            $.post(
                "adminpanel/settingsEdit",
                {
                    'passNew': passNew
                },
                function (data) {
                    if (data == "ok") {
                        generate('success', '<div class="activity-item" style="text-align:right" dir="rtl">رمزعبور باموفقیت ویرایش شد.</div>');
                        window.location.href = 'adminpanel/dashboard';
                    }
                    else {
                        generate('error', '<div class="activity-item" style="text-align:right" dir="rtl">خطایی رخ داده است.</div>');
                    }
                }
            );
        }else {
            generate('warning', '<div class="activity-item" style="text-align:right" dir="rtl">کلمه عبور با تکرار آن مطابقت ندارد.</div>');
        }
    });
</script>

</body>
</html>
