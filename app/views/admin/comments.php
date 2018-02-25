<?php
$activeMenu = 'comment';
$activeSubMenu = '';
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= NAME; ?> | نظرات کاربران</title>
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
                <small>لیست نظرات</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= URL; ?>adminpanel/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= URL; ?>adminpanel/comments"><i class="fa fa-comment"></i> Comments</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">نظرات کاربران</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body direction">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="text-align:center;width: 50px">ردیف</th>
                                    <th style="text-align:center">کاربر</th>
                                    <th style="text-align:center">عنوان خبر</th>
                                    <th style="text-align:center;">نظر</th>
                                    <th style="text-align:center">تاریخ ارسال</th>
                                    <th style="text-align:center">وضعیت</th>
                                    <th style="text-align:center;width: 80px">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                $comments = $data['comments'];
                                foreach ($comments as $comment) {
                                    ?>
                                    <tr id="cm-row-<?= $comment['cm_id']; ?>">
                                        <td style="text-align:center;vertical-align:middle"><?= $i; ?></td>
                                        <td style="text-align:center;vertical-align:middle"><?= $comment['name']; ?></td>
                                        <td style="text-align:center;vertical-align:middle"><?= $comment['title']; ?></td>
                                        <td style="text-align:center;vertical-align:middle"><?= $comment['cm_text']; ?></td>
                                        <td style="text-align:center;vertical-align:middle"><?= Model::MiladiTojalili(date('Y/m/d', $comment['cm_date'])); ?></td>
                                        <td id="status-<?= $comment['cm_id']; ?>" style="text-align:center;vertical-align:middle"><?= $comment['cm_status'] == 1 ? "<i class='fa fa-check text-success fa-fw'></i> تایید شده" : "<i class='fa fa-circle text-danger fa-fw'></i> جدید"; ?></td>
                                        <td style="text-align:center;vertical-align:middle">
                                            <?php
                                            if ($comment['cm_status']==0) {
                                                ?>
                                                <button id="btn-cm-submit-<?= $comment['cm_id']; ?>"
                                                        data-id="<?= $comment['cm_id']; ?>"
                                                        class="btn btn-success btn-xs"><i class="fa fa-check"></i>
                                                </button>
                                                <?php
                                            }
                                            ?>
                                            <button id="btn-cm-delete-<?= $comment['cm_id']; ?>"
                                                    data-id="<?= $comment['cm_id']; ?>"
                                                    class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>
                                            </button>
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
<script src="public/js/countdown.js"></script>


<script src="public/panel/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/panel/plugins/datatables/dataTables.bootstrap.min.js"></script>

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
    $(document).on("click", "[id*=btn-cm-submit-]", function () {
        var id = $(this).data('id');

        $.post(
            "adminpanel/submitComment",
            {
                'id': id
            },
            function (data) {
                if (data == "ok") {
                    generate('success', '<div style="text-align: right !important;" class="activity-item">.باموفقیت تایید شد</div>');
                    $("#btn-cm-submit-"+id).remove();
                    $("#status-"+id).html(  "<i class='fa fa-check text-success fa-fw'></i> تایید شده" );
                }
                else {
                    generate('error', '<div style="text-align: right !important;" class="activity-item">متاسفانه خطایی رخ داده است</div>');
                }
            });
    });
</script>

<script>
    $(document).on("click", "[id*=btn-cm-delete-]", function () {
        var id = $(this).data('id');

        $.post(
            "adminpanel/delComment",
            {
                'id': id
            },
            function (data) {
                if (data == "ok") {
                    generate('success', '<div style="text-align: right !important;" class="activity-item">.باموفقیت حذف شد</div>');
                    $("#cm-row-"+id).remove();
                }
                else {
                    generate('error', '<div style="text-align: right !important;" class="activity-item">متاسفانه خطایی رخ داده است</div>');
                }
            });
    });
</script>
</body>
</html>
