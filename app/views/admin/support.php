<?php
$activeMenu = 'support';
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= NAME; ?> | پشتیبانی</title>
    <!-- Favicon -->
    <?php require('app/views/include/favicon.php'); ?>

    <link href="public/css/pace-theme-flash.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/panel/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="public/panel/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="public/panel/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="public/panel/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="public/panel/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="public/css/animate.min.css">

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
                <small>پشتیبانی</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= URL; ?>adminpanel/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= URL; ?>adminpanel/support"><i class="fa fa-support"></i> Support</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">پشتیبانی</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table direction table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="text-align:center;width: 40px">ردیف</th>
                                    <th style="text-align:center">عنوان</th>
                                    <th style="text-align:center;">نام و نام خانوادگی</th>
                                    <th style="text-align:center;">ایمیل</th>
                                    <th style="text-align:center;">متن</th>
                                    <th style="text-align:center;">تاریخ ثبت</th>
                                    <th style="text-align:center;">وضعیت</th>
                                    <th style="text-align:center;width: 50px">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                $ContactMessages = $data['ContactMessages'];
                                foreach ($ContactMessages as $ContactMessage) {
                                    ?>
                                    <tr id="row-<?= $ContactMessage['co_id']; ?>">
                                        <td style="text-align:center;vertical-align: middle"><?= $i; ?></td>
                                        <td style="text-align:center;vertical-align: middle"><?= $ContactMessage['co_title']; ?></td>
                                        <td style="text-align:center;vertical-align: middle"><?= $ContactMessage['co_user_name']; ?></td>
                                        <td style="text-align:center;vertical-align: middle"><?= $ContactMessage['co_user_email']; ?></td>
                                        <td style="text-align:center;vertical-align: middle"><?= $ContactMessage['co_text']; ?></td>
                                        <td style="text-align:center;vertical-align: middle"><?= Model::MiladiTojalili(date("Y/m/d",$ContactMessage['co_date'])); ?></td>
                                        <td style="text-align:center;vertical-align: middle" id="Readrow-<?= $ContactMessage['co_id']; ?>">
                                            <?php if ($ContactMessage['co_status'] == 0) {
                                                ?>
                                                <span class="label label-default">جدید</span>
                                                <?php
                                            } else {
                                                ?>
                                                <span class="label label-primary">خوانده شده</span>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                        <td style="text-align:center;vertical-align: middle">
                                            <button id="btn-pay-<?= $ContactMessage['co_id']; ?>"
                                                    data-id="<?= $ContactMessage['co_id']; ?>"
                                                    class="btn btn-success btn-xs"
                                                <?= $ContactMessage['co_status'] == 0 ? "":"disabled"; ?>><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

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

<script src="public/panel/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/panel/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="public/js/generate.js"></script>
<script src="public/js/jquery.noty.packaged.js"></script>

<script type="text/javascript">
    $(document).ajaxStart(function () {
        Pace.restart();
    });
</script>

<script>
    $(function () {
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "stateSave": true,
            "pageLength": 10,
            "autoWidth": true
        });
    });
</script>


<script>
    $(document).on("click", "[id*=btn-pay-]", function () {
        var id = $(this).data('id');
        $.post(
            "adminpanel/readMessage",
            {
                'id': id
            },
            function (data) {
                if (data == "ok") {
                    $('#btn-pay-'+id).attr('disabled','disabled');
                    $('#Readrow-'+id).html('<span class="label label-primary">خوانده شده</span>');
                }
                else {
                    generate('error', '<div style="text-align: right !important;" class="activity-item">متاسفانه خطایی رخ داده است.</div>');
                }
            });
    });
</script>

</body>
</html>