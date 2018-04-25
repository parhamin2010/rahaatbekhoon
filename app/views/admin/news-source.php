<?php
$activeMenu = 'news';
$activeSubMenu = 'newsSource';
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= NAME; ?> | لیست منابع</title>
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
                <small>لیست منابع</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= URL; ?>adminpanel/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= URL; ?>adminpanel/newsSource"><i class="fa fa-clone"></i> Sources</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">مدیریت اخبار</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table direction table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="text-align:center;width: 40px">ردیف</th>
                                    <th style="text-align:center">عنوان سایت</th>
                                    <th style="text-align:center;">دسته بندی</th>
                                    <th style="text-align:center;width: 50px">وضعیت</th>
                                    <th style="text-align:center;width: 100px">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                $rss = $data['rss'];
                                foreach ($rss as $rssInfo) {
                                    ?>
                                    <tr id="news-row-<?= $rssInfo['n_id']; ?>">
                                        <td style="text-align:center;vertical-align: middle"><?= $i; ?></td>
                                        <td title="<?= $rssInfo['title']; ?>" style="text-align:center;vertical-align: middle">
                                            <a href="<?= $rssInfo['link']; ?>" style="color: inherit" target="_blank">
                                            <?= $rssInfo['title']; ?>
                                            </a>
                                        </td>
                                        <td style="text-align:center;vertical-align: middle"><?= $rssInfo['name']; ?></td>
                                        <td style="text-align:center;vertical-align: middle">
                                            <?php if ($rssInfo['status'] == 1) {
                                                ?>
                                                <span class="label label-success">فعال</span>
                                                <?php
                                            } else {
                                                ?>
                                                <span class="label label-danger">غیرفعال</span>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                        <td style="text-align:center;vertical-align: middle">
                                            <a class="btn btn-warning btn-xs"
                                               href="adminpanel/news/newsEdit/<?= $rssInfo['n_id']; ?>">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            <button data-toggle="modal"
                                                    data-target="#del-Modal"
                                                    id="btn-del-style-<?= $rssInfo['n_id']; ?>"
                                                    data-id="<?= $rssInfo['n_id']; ?>"
                                                    data-mask="<?= $rssInfo['i_id']; ?>"
                                                    data-inputmask="<?= $rssInfo['i_image']; ?>"
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

    <div dir="rtl" class="modal fade" id="del-Modal" role="dialog">
        <div class="modal-dialog" style="width: 300px;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="color: #fff;background: #2484c6;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">حذف آلبوم</h4>
                </div>
                <div class="modal-body" style="padding: 0 15px;text-align: right;text-align: right;">
                    <div id="form-regular-delete" class="login-fold" style="display: inline;block">
                        <p class="email-wrap">
                            <label style="font-size: .9em;color: #777;display: inline-block;margin-top: 10px;font-weight: 700;">آیا
                                از حذف این آلبوم اطمینان دارید؟</label>
                            <input id="del-val" type="hidden" value="#"/>
                            <input id="del-img" type="hidden" value="#"/>
                            <input id="del-imageName" type="hidden" value="#"/>
                        </p>
                        <div class="row" style="margin-right: 0;margin-left: 15px;">
                            <div class="sign-up-inside-login">
                                <button id="delete-submit" class="btn btn-danger">حذف</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"
                     style="margin-top: 10px !important;font-size: .8em;background: #f8f8f8;padding: 15px;text-align: right;border-bottom: 1px solid #e5e5e5;">
                    <span>توجه کنید در صورت حذف تمامی نظرات و اطلاعات این خبر نیز حذف میگردد و امکان بازیابی نیز وجود ندارد.</span>
                </div>
            </div>
        </div>
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
            "pageLength": 25,
            "autoWidth": true
        });
    });
</script>
<script>
    $(document).on("click", "[id*=btn-del-style-]", function () {
        var ids = $(this).data('id');
        var imgs = $(this).data('mask');
        var imageName = $(this).data('inputmask');
        var s = document.getElementById("del-val");
        s.value = ids;
        var i = document.getElementById("del-img");
        i.value = imgs;
        var j = document.getElementById("del-imageName");
        j.value = imageName;
    });
</script>

<script>
    $(document).on("click", "#delete-submit", function () {
        $('#del-Modal').modal('hide');
        var id = document.getElementById('del-val').value;
        var image = document.getElementById('del-img').value;
        var imageName = document.getElementById('del-imageName').value;
        $.post(
            "adminpanel/delnews",
            {
                'id': id,
                'image': image,
                'imageName': imageName
            },
            function (data) {
                if (data == "ok") {
                    generate('success', '<div style="text-align: right !important;" class="activity-item">.خبر مورد نظر باموفقیت حذف شد</div>');
                    $("#news-row-" + id).remove();
                }
                else {
                    generate('error', '<div style="text-align: right !important;" class="activity-item">متاسفانه خطایی رخ داده است</div>');
                }
            });
    });
</script>
</body>
</html>
