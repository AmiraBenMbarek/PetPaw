<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';
    include_once '../Controller/sponsorsC.php';

    $productC = new productC();
    $stats=$productC->pie_chart();

    $sponsorsC = new sponsorsC();
	$listesponsors=$sponsorsC->affichersponsors(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <script src="https://www.google.com/jsapi"></script>
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/icon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
<?php include 'includes/header.php'; ?>

                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="active">
                                        <a href="index.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Modules</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="pcoded-hasmenu">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Purchases</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="products.php" class=" waves-effect waves-dark">
                                                            <span class="pcoded-micon "><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Products</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="orders.php" class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Orders</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                    <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                    <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Rooms</span>
                                                    <span class="pcoded-mcaret "></span>
                                                </a>
                                                <ul class="pcoded-submenu ">
                                                    <li class=" ">
                                                        <a href="enclos.php" class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Rooms</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="type.php" class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Room Types</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </li>

                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                    <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                    <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Events</span>
                                                    <span class="pcoded-mcaret "></span>
                                                </a>
                                                <ul class="pcoded-submenu ">
                                                <li class=" ">
                                                    <a href="gestion_events.php" class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Events</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="gestion_sponsors.php" class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Sponsors</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="gestion_ticktes.php" class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Tickets</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="calendar/index.php" class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Booking</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                </ul>
                                            </li>

                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                    <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                    <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Animals</span>
                                                    <span class="pcoded-mcaret "></span>
                                                </a>
                                                <ul class="pcoded-submenu ">
                                                    <li class=" ">
                                                        <a href="Gestion_animaux.php " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Animals</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="Gestion_régimes.php " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Animal Diet</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                    <a href="animals stats.php" class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">animals stats</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                    <li class=" ">
                                                    <a href="Gestion_sign.php" class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">signal</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    <div class="pcoded-content ">
                        <!-- Page-header start -->
                        <div class="page-header ">
                            <div class="page-block ">
                                <div class="row align-items-center ">
                                    <div class="col-md-8 ">
                                        <div class="page-header-title ">
                                            <h5 class="m-b-10 ">Dashboard</h5>
                                            <p class="m-b-0 ">Welcome to PetPaw</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <ul class="breadcrumb-title ">
                                            <li class="breadcrumb-item ">
                                                <a href="index.php "> <i class="fa fa-home "></i> </a>
                                            </li>
                                            <li class="breadcrumb-item "><a href="#! ">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content ">
                            <!-- Main-body start -->
                            <div class="main-body ">
                                <div class="page-wrapper ">
                                    <!-- Page-body start -->
                                    <div class="page-body ">
                                        <div class="row ">
                                            <!--  sale analytics start -->
                                            <div class="col-xl-8 col-md-12 ">
                                                <div class="card ">
                                                    <div class="card-header ">
                                                        <h5>Statistics</h5>
                                                        <div class="card-header-right ">
                                                            <ul class="list-unstyled card-option ">
                                                                <li><i class="fa fa fa-wrench open-card-option "></i></li>
                                                                <li><i class="fa fa-window-maximize full-card "></i></li>
                                                                <li><i class="fa fa-minus minimize-card "></i></li>
                                                                <li><i class="fa fa-refresh reload-card "></i></li>
                                                                <li><i class="fa fa-trash close-card "></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block ">
                                                        <div class="pie-chart" id="pie-chart" style="margin: 0 auto;width:600px;height: 400px;"></div>
                                                    </div>
                                                    <div class="card-block ">
                                                        <div class="pie_chart" id="pie_chart" style="margin: 0 auto;width:600px;height: 400px;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-md-12 ">
                                                <div class="card ">
                                                    <div class="card-header ">
                                                        <h5>Team Members</h5>
                                                        <div class="card-header-right ">
                                                            <ul class="list-unstyled card-option ">
                                                                <li><i class="fa fa fa-wrench open-card-option "></i></li>
                                                                <li><i class="fa fa-window-maximize full-card "></i></li>
                                                                <li><i class="fa fa-minus minimize-card "></i></li>
                                                                <li><i class="fa fa-refresh reload-card "></i></li>
                                                                <li><i class="fa fa-trash close-card "></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block ">
                                                        <div class="align-middle m-b-30 ">
                                                            <img src="assets/images/avatar-2.jpg " alt="user image " class="img-radius img-40 align-top m-r-15 ">
                                                            <div class="d-inline-block ">
                                                                <h6>Amira Ben Mbarek</h6>
                                                                <p class="text-muted m-b-0 ">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class="align-middle m-b-30 ">
                                                            <img src="assets/images/avatar-3.jpg " alt="user image " class="img-radius img-40 align-top m-r-15 ">
                                                            <div class="d-inline-block ">
                                                                <h6>Ramy Aouinet</h6>
                                                                <p class="text-muted m-b-0 ">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class="align-middle m-b-30 ">
                                                            <img src="assets/images/avatar-4.jpg " alt="user image " class="img-radius img-40 align-top m-r-15 ">
                                                            <div class="d-inline-block ">
                                                                <h6>Yahya Samet</h6>
                                                                <p class="text-muted m-b-0 ">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class="align-middle m-b-10 ">
                                                            <img src="assets/images/avatar-5.jpg " alt="user image " class="img-radius img-40 align-top m-r-15 ">
                                                            <div class="d-inline-block ">
                                                                <h6>Zeineb Maatoug</h6>
                                                                <p class="text-muted m-b-0 ">Developer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  project and team member end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector "> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        
        window.onload = function() {
            google.load("visualization", "1.1", {
                packages: ["corechart"],
                callback: 'drawChart'
            });
        };
        
        function drawChart() {

            var data1 = new google.visualization.arrayToDataTable([
                 ['Language', 'Rating'],
           <?php
                foreach ($stats as $stat){
                    echo "['".$stat['Name_Pr']."', ".$stat['cmt']."],";
                }
            ?>
            ]);

            var options1 = {
                title: 'Products Popularity',
            };

            var chart1 = new google.visualization.PieChart(document.getElementById('pie-chart'));
            chart1.draw(data1, options1);
            


            var data = new google.visualization.arrayToDataTable([
                ['Language', 'Rating'],
                <?php
                    foreach($listesponsors as $sponsors){
                        echo "['".$sponsors['name_sp']."', ".$sponsors['inves_sp']."],";
                    }
                ?>
            ]);
            var options = {
                title: 'Sponsors Stats',
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
            
        }

    </script>
    <!-- Required Jquery -->
    <script type="text/javascript " src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript " src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript " src="assets/js/popper.js/popper.min.js "></script>
    <script type="text/javascript " src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript " src="assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js "></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript " src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript " src="assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript " src="assets/js/SmoothScroll.js "></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript " src="assets/js/chart.js/Chart.js "></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js "></script>
    <script src="assets/pages/widget/amchart/gauge.js "></script>
    <script src="assets/pages/widget/amchart/serial.js "></script>
    <script src="assets/pages/widget/amchart/light.js "></script>
    <script src="assets/pages/widget/amchart/pie.min.js "></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js "></script>
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js "></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript " src="assets/pages/dashboard/custom-dashboard.js "></script>
    <script type="text/javascript " src="assets/js/script.js "></script>
</body>

</html>