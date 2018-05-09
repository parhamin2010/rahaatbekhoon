<?php
    Model::sessionInit();
    $activeMenu = 'dashboard';
    $activeSubMenu = 'not';
    $orderStat = $data['orderStat'];
    $keys = array_keys($orderStat);
    
    $values = array_values($orderStat);
    $values = implode(',', $values);
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= NAME; ?> | پنل مدیریت</title>
    <!-- Favicon -->
    <?php require('app/views/include/favicon.php'); ?>

    <link href="public/css/pace-theme-flash.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/panel/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="public/panel/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="public/panel/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="public/panel/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="public/panel/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="public/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!--
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-default.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-default-indicator.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-dark.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-dark-indicator.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-slide.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-slide-indicator.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-chrome.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-chrome-indicator.css" />
        <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-hubspot.css" />
    -->
    <link rel="stylesheet" href="public/library/offlinealert/themes/offline-theme-default-indicator.css"/>
    <link rel="stylesheet" href="public/library/offlinealert/themes/offline-language-persian.css"/>
    <link rel="stylesheet" href="public/css/animate.min.css">


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
        <?php require('app/views/admin/include/header.php');?>
    </header>

    <aside class="main-sidebar direction">
        <?php require('app/views/admin/include/sidebar.php'); ?>
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small> پنل مدیریت</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <p>اخبار ثبت شده</p>
                            <h4 style="margin-top: 30px;margin-bottom:12px"><?= number_format($data['bannerTop']['newsCount']['0']['Count']); ?></h4>
                        </div>
                        <div class="icon">
                            <i style="padding: 10px 0;font-size: 80px;" class="ion ion-ios-paper-outline"></i>
                        </div>
                        <a href="adminpanel/news" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                            اطلاعات بیشتر </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <p>نشریات ثبت شده</p>
                            <h4 style="margin-top: 30px;margin-bottom:12px"><?= number_format($data['bannerTop']['vipNews']['0']['Count']); ?></h4>
                        </div>
                        <div class="icon">
                            <i style="padding: 10px 0;font-size: 80px;" class="ion ion-android-done-all"></i>
                        </div>
                        <a href="adminpanel/mags" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                            اطلاعات بیشتر </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <p>کاربران ثبت شده</p>
                            <h4 style="margin-top: 30px;margin-bottom:12px"><?= number_format($data['bannerTop']['userCount']['0']['Count']); ?></h4>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-person-outline"></i>
                        </div>
                        <a href="adminpanel/users" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                            اطلاعات بیشتر </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <p>آخرین بررسی</p>
                            <h5 style="margin-top: 30px;margin-bottom:12px"><?= file_get_contents("lastUpdateNews.txt"); ?></h5>

                        </div>
                        <div class="icon">
                            <i style="padding: 10px 0;font-size: 80px;" class="ion ion-ios-reload"></i>
                        </div>
                        <a style="cursor:pointer" data-toggle="modal" data-target="#info-Modal1" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                            اطلاعات بیشتر </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="chart">
                                        <div id="mainb" style="height:350px;"></div>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">

                <div class="col-md-7">
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">آخرین اخبار ثبت شده</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body direction">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>عنوان خبر</th>
                                        <th>دسته بندی</th>
                                        <th>تاریخ ثبت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                        $all_order_data = $data['latesrNews'];
                                        if (sizeof($all_order_data) > 0) {
                                            foreach ($all_order_data as $order_data) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <a target="_blank" href="<?= URL; ?>news/<?= $order_data['n_id']; ?>"><?= Model::summary($order_data['title'],70); ?></a>
                                                    </td>
                                                    <td>
                                                        <a target="_blank" href="<?= URL; ?>topic/category/<?= $order_data['id']; ?>"><?= $order_data['name']; ?></a>
                                                    </td>
                                                    <td>
                                                        <?= $order_data['date_created']; ?>
                                                    </td>
                                                </tr>
                                            <?php }
                                        } else {
                                            ?>
                                            <div class="text-center" style="padding-bottom: 10px !important;">
                                                متاسفانه در حال حاضر محصولی را خریداری نکرده اید!
                                            </div>
                                            <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <a href="adminpanel/news" class="btn btn-sm btn-default btn-flat pull-left">مشاهده
                                همه</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-5">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">آخرین کاربران عضو شده</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix">
                                <?php
                                    $all_user_data = $data['userGetlatest'];
                                    foreach ($all_user_data as $user_data) {
                                        if ($user_data['image'] == "0") {
                                            $url = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($user_data['email']))) . "?d=identicon&r=x";
                                        } else {
                                            $url = $user_data['image'];
                                        }
                                        ?>

                                        <li>
                                            <img onerror="this.src='public/images/user-default-image.jpg'" width="80px"
                                                 src="<?= $url; ?>" alt="User Image">
                                            <a class="users-list-name" href="#" dir="rtl"
                                               title="<?= $user_data['name']; ?>"><?= $user_data['name']; ?></a>
                                            <span class="users-list-date" title="<?= $user_data['registery_date']; ?>">
                                            <?php
                                                $date = Model::jaliliToMiladi($user_data['registery_date']);
                                                $resDate = Model::days_away_to($date);
                                                if ($resDate == 0) {
                                                    echo "امروز";
                                                } else if ($resDate == 1) {
                                                    echo "دیروز";
                                                } else {
                                                    echo $resDate . " روز قبل";
                                                }
                                            ?>
                                        </span>
                                        </li>
                                    <?php } ?>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="adminpanel/users" class="uppercase">مشاهده تمامی کاربران </a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

        <div dir="rtl" class="modal fade" id="info-Modal1" role="dialog">
            <div class="modal-dialog" style="width: 300px;">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="color: #fff;background: #2484c6;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">آخرین بررسی</h4>
                    </div>
                    <div class="modal-body" style="padding: 0 15px;text-align: right;text-align: right;">
                        <div id="form-regular-delete" class="login-fold" style="display: inline;block">
                            <p class="email-wrap">
                                <label style="font-size: .9em;color: #777;display: inline-block;margin-top: 10px;font-weight: 700;">در این بخش آخرین زمان بررسی تعداد اعضای کانال ها مشخص می گردد.<br/><br/>
                                    برای تنظیم زمان مورد نظر می بایست در کرون جاب هاست تنظیمات مربوطه را انجام دهید.</label>
                                <input id="del-val" type="hidden" value="#"/>
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer"
                         style="margin-top: 10px !important;font-size: .8em;background: #f8f8f8;padding: 15px;text-align: left;border-bottom: 1px solid #e5e5e5;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">متوجه شدم</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <?php require('app/views/admin/include/footer.php'); ?>
    </footer>
</div>
<script src="public/library/highcharts/highcharts.js"></script>
<script src="public/library/highcharts/exporting.js"></script>
<script src="public/js/pace.js"></script>
<script src="public/panel/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="public/library/offlinealert/offline.min.js"></script>
<script src="public/panel/plugins/morris/morris.min.js"></script>
<script src="public/panel/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="public/panel/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="public/panel/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="public/panel/plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="public/panel/plugins/daterangepicker/daterangepicker.js"></script>
<script src="public/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="public/panel/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="public/panel/plugins/fastclick/fastclick.js"></script>
<script src="public/panel/dist/js/app.min.js"></script>
<script src="public/panel/plugins/chartjs/Chart.min.js"></script>
<script src="public/panel/plugins/echarts/dist/echarts.min.js"></script>

<script src="public/panel/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/panel/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="public/js/generate.js"></script>
<script src="public/js/jquery.noty.packaged.js"></script>

<script type="text/javascript">
    $(document).ajaxStart(function () {
        Pace.restart();
    });
</script>

<script type="text/javascript">

    var run = function () {
        var req = new XMLHttpRequest();
        req.timeout = 1500;
        req.open('GET', <?= URL; ?>+'adminpanel/dashboard', true);
        req.send();
    };

    setInterval(run, 30000);
</script>

<script type="text/javascript">
    window.onload = LineChart();

    function GetInfoLineChart() {

        $.ajax({
            dataType: "json",
            url: "adminpanel/dashboard",
            type: "POST",
            data: {
                name: $("#id-name").val()
            },
            success: function (data) {
                LineChart();
            },
            error: function () {
                $('#myModal').modal('show');
            }
        });
    }

    function LineChart() {

        var theme = {
            textStyle: {
                fontFamily: 'Vazir, sans-serif'
            }
        };
        var myChart = echarts.init(document.getElementById('mainb'), theme);

        myChart.setOption({
            title: {
                x: 'center',
                y: 'top',
                padding: [10, 0, 20, 0],
                text: 'نمودار اخبار ثبت شده در 10 روز اخیر',
                textStyle: {
                    fontSize: 14,
                    fontWeight: 'normal'
                }
            },
            tooltip: {
                trigger: 'axis'
            },
            toolbox: {
                show: true,
                y: 'top',
                feature: {
                    magicType: {
                        show: true,
                        title: {
                            line: '',
                            bar: ''
                        },
                        type: ['line', 'bar']
                    },
                    saveAsImage: {
                        show: true,
                        title: ' '
                    }
                }
            },
            calculable: true,
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0,
                data: ['تعداد اخبار'],
                y: 'bottom'
            },
            xAxis: [{
                type: 'category',
                data: [<?php foreach ($keys as $date) {
                    echo "'$date',";
                } ?>]
            }],
            yAxis: [{
                type: 'value',
                axisLabel: {
                    formatter: '{value}'
                }
            }],
            series: [
                {
                    name: 'تعداد اخبار',
                    type: 'bar',
                    data: [<?= $values ?>]
                }
            ]
        });
    }
</script>


</body>
</html>
