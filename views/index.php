<?php
    include_once '../controller/productC.php';

    $productC = new productC();
    $stats=$productC->pie_chart();
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
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" height="15" width="147" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Yahya Samet</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>Yahya Samet</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">Yahya Samet<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.html" class="waves-effect waves-dark">
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
                                        <li class="">
                                            <a href="gestion_client.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="" data-i18n="">Users</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <!--<ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="" class="waves-effect waves-dark">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Manage Shipping</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="" class="waves-effect waves-dark">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Manage Bills</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>-->
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Purchases</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="products.php" class=" waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Products</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href=" " class="waves-effect waves-dark ">
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
                                                    <a href="Gestion_Enclos.html" class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Rooms</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="type_enclos.html" class="waves-effect waves-dark ">
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
                                                    <a href="gestion_event.html " class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Events</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="gestion_sponsors.html " class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Sponsors</span>
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
                                                    <a href="Gestion_animaux.html " class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Animals</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="Gestion_r??gimes.html " class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Animal Diet</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="pcoded-hasmenu ">
                                            <a href="Gestion_Livraison.html " class="waves-effect waves-dark ">
                                                <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Shipping</span>
                                                <span class="pcoded-mcaret "></span>
                                            </a>
                                            <ul class="pcoded-submenu ">
                                                <li class=" ">
                                                    <a href=" " class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Shipping</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href=" " class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Bills</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>


                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label " data-i18n="nav.category.forms ">Forms &amp; Tables</div>
                            <ul class="pcoded-item pcoded-left-item ">
                                <li>
                                    <a href="form-elements-component.html " class="waves-effect waves-dark ">
                                        <span class="pcoded-micon "><i class="ti-layers "></i><b>FC</b></span>
                                        <span class="pcoded-mtext " data-i18n="nav.form-components.main ">Form Components</span>
                                        <span class="pcoded-mcaret "></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="bs-basic-table.html " class="waves-effect waves-dark ">
                                        <span class="pcoded-micon "><i class="ti-layers "></i><b>FC</b></span>
                                        <span class="pcoded-mtext " data-i18n="nav.form-components.main ">Basic Table</span>
                                        <span class="pcoded-mcaret "></span>
                                    </a>
                                </li>

                            </ul>

                            <div class="pcoded-navigation-label " data-i18n="nav.category.forms ">Chart &amp; Maps</div>
                            <ul class="pcoded-item pcoded-left-item ">
                                <li>
                                    <a href="chart.html " class="waves-effect waves-dark ">
                                        <span class="pcoded-micon "><i class="ti-layers "></i><b>FC</b></span>
                                        <span class="pcoded-mtext " data-i18n="nav.form-components.main ">Chart</span>
                                        <span class="pcoded-mcaret "></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="map-google.html " class="waves-effect waves-dark ">
                                        <span class="pcoded-micon "><i class="ti-layers "></i><b>FC</b></span>
                                        <span class="pcoded-mtext " data-i18n="nav.form-components.main ">Maps</span>
                                        <span class="pcoded-mcaret "></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                        <span class="pcoded-micon "><i class="ti-layout-grid2-alt "></i></span>
                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.main ">Pages</span>
                                        <span class="pcoded-mcaret "></span>
                                    </a>
                                    <ul class="pcoded-submenu ">
                                        <li class=" ">
                                            <a href="auth-normal-sign-in.html " class="waves-effect waves-dark ">
                                                <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Login</span>
                                                <span class="pcoded-mcaret "></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="auth-sign-up.html " class="waves-effect waves-dark ">
                                                <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                <span class="pcoded-mtext " data-i18n="nav.basic-components.breadcrumbs ">Register</span>
                                                <span class="pcoded-mcaret "></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="sample-page.html " class="waves-effect waves-dark ">
                                                <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                <span class="pcoded-mtext " data-i18n="nav.basic-components.breadcrumbs ">Sample Page</span>
                                                <span class="pcoded-mcaret "></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                            <div class="pcoded-navigation-label " data-i18n="nav.category.other ">Other</div>
                            <ul class="pcoded-item pcoded-left-item ">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                        <span class="pcoded-micon "><i class="ti-direction-alt "></i><b>M</b></span>
                                        <span class="pcoded-mtext " data-i18n="nav.menu-levels.main ">Menu Levels</span>
                                        <span class="pcoded-mcaret "></span>
                                    </a>
                                    <ul class="pcoded-submenu ">
                                        <li class=" ">
                                            <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                <span class="pcoded-mtext " data-i18n="nav.menu-levels.menu-level-21 ">Menu Level 2.1</span>
                                                <span class="pcoded-mcaret "></span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                <span class="pcoded-micon "><i class="ti-direction-alt "></i></span>
                                                <span class="pcoded-mtext " data-i18n="nav.menu-levels.menu-level-22.main ">Menu Level 2.2</span>
                                                <span class="pcoded-mcaret "></span>
                                            </a>
                                            <ul class="pcoded-submenu ">
                                                <li class=" ">
                                                    <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.menu-levels.menu-level-22.menu-level-31 ">Menu Level 3.1</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                <span class="pcoded-mtext " data-i18n="nav.menu-levels.menu-level-23 ">Menu Level 2.3</span>
                                                <span class="pcoded-mcaret "></span>
                                            </a>
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
                                            <p class="m-b-0 ">Welcome to Mega Able</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <ul class="breadcrumb-title ">
                                            <li class="breadcrumb-item ">
                                                <a href="index.html "> <i class="fa fa-home "></i> </a>
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
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12 ">
                                                <div class="card ">
                                                    <div class="card-block ">
                                                        <div class="row ">
                                                            <div class="col ">
                                                                <h4>$256.23</h4>
                                                                <p class="text-muted ">This Month</p>
                                                            </div>
                                                            <div class="col-auto ">
                                                                <label class="label label-success ">+20%</label>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-sm-8 ">
                                                                <canvas id="this-month " style="height: 150px; "></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card quater-card ">
                                                    <div class="card-block ">
                                                        <h6 class="text-muted m-b-15 ">This Quarter</h6>
                                                        <h4>$3,9452.50</h4>
                                                        <p class="text-muted ">$3,9452.50</p>
                                                        <h5>87</h5>
                                                        <p class="text-muted ">Online Revenue<span class="f-right ">80%</span></p>
                                                        <div class="progress ">
                                                            <div class="progress-bar bg-c-blue " style="width: 80% "></div>
                                                        </div>
                                                        <h5 class="m-t-15 ">68</h5>
                                                        <p class="text-muted ">Offline Revenue<span class="f-right ">50%</span></p>
                                                        <div class="progress ">
                                                            <div class="progress-bar bg-c-green " style="width: 50% "></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  sale analytics end -->

                                            <!--  project and team member start -->
                                            <div class="col-xl-8 col-md-12 ">
                                                <div class="card table-card ">
                                                    <div class="card-header ">
                                                        <h5>Projects</h5>
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
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary ">
                                                                                    <label class="check-task">
                                                                                    <span class="cr ">
                                                                                            <i class="cr-icon fa fa-check txt-default "></i>
                                                                                        </span>
                                                                                </label>
                                                                                </div>
                                                                            </div>
                                                                            Assigned</th>
                                                                        <th>Name</th>
                                                                        <th>Due Date</th>
                                                                        <th class="text-right ">Priority</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option ">
                                                                                <div class="checkbox-fade fade-in-primary ">
                                                                                    <label class="check-task ">
                                                                                    <span class="cr ">
                                                                                                <i class="cr-icon fa fa-check txt-default "></i>
                                                                                            </span>
                                                                                </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle ">
                                                                                <img src="assets/images/avatar-4.jpg " alt="user image " class="img-radius img-40 align-top m-r-15 ">
                                                                                <div class="d-inline-block ">
                                                                                    <h6>Yahya Samet</h6>
                                                                                    <p class="text-muted m-b-0 ">Graphics Designer</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Able Pro</td>
                                                                        <td>Jun, 26</td>
                                                                        <td class="text-right "><label class="label label-danger ">Low</label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option ">
                                                                                <div class="checkbox-fade fade-in-primary ">
                                                                                    <label class="check-task ">
                                                                                    <span class="cr ">
                                                                                                <i class="cr-icon fa fa-check txt-default "></i>
                                                                                            </span>
                                                                                </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle ">
                                                                                <img src="assets/images/avatar-5.jpg " alt="user image " class="img-radius img-40 align-top m-r-15 ">
                                                                                <div class="d-inline-block ">
                                                                                    <h6>Zeineb Maatoug</h6>
                                                                                    <p class="text-muted m-b-0 ">Web Designer</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Mashable</td>
                                                                        <td>March, 31</td>
                                                                        <td class="text-right "><label class="label label-primary ">high</label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option ">
                                                                                <div class="checkbox-fade fade-in-primary ">
                                                                                    <label class="check-task ">
                                                                                    <span class="cr ">
                                                                                                <i class="cr-icon fa fa-check txt-default "></i>
                                                                                            </span>
                                                                                </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle ">
                                                                                <img src="assets/images/avatar-3.jpg " alt="user image " class="img-radius img-40 align-top m-r-15 ">
                                                                                <div class="d-inline-block ">
                                                                                    <h6>Ramy Aouinet</h6>
                                                                                    <p class="text-muted m-b-0 ">Developer</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Flatable</td>
                                                                        <td>Aug, 02</td>
                                                                        <td class="text-right "><label class="label label-success ">medium</label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option ">
                                                                                <div class="checkbox-fade fade-in-primary ">
                                                                                    <label class="check-task ">
                                                                                    <span class="cr ">
                                                                                                <i class="cr-icon fa fa-check txt-default "></i>
                                                                                            </span>
                                                                                </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle ">
                                                                                <img src="assets/images/avatar-2.jpg " alt="user image " class="img-radius img-40 align-top m-r-15 ">
                                                                                <div class="d-inline-block ">
                                                                                    <h6>Amira Ben Mbarek</h6>
                                                                                    <p class="text-muted m-b-0 ">Developer</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Guruable</td>
                                                                        <td>Sep, 22</td>
                                                                        <td class="text-right "><label class="label label-primary ">high</label></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-right m-r-20 ">
                                                                <a href="#! " class=" b-b-primary text-primary ">View all Projects</a>
                                                            </div>
                                                        </div>
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
                                                            <img src="assets/images/avatar-1.jpg " alt="user image " class="img-radius img-40 align-top m-r-15 ">
                                                            <div class="d-inline-block ">
                                                                <h6>Ramy Mgaidi</h6>
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
                                                                <p class="text-muted m-b-0 ">Graphics Designer</p>
                                                            </div>
                                                        </div>
                                                        <div class="align-middle m-b-10 ">
                                                            <img src="assets/images/avatar-5.jpg " alt="user image " class="img-radius img-40 align-top m-r-15 ">
                                                            <div class="d-inline-block ">
                                                                <h6>Zeineb Maatoug</h6>
                                                                <p class="text-muted m-b-0 ">Web Designer</p>
                                                            </div>
                                                        </div>
                                                        <div class="text-center ">
                                                            <a href="#! " class="b-b-primary text-primary ">View all Projects</a>
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
            var data = new google.visualization.arrayToDataTable([
                ['Language', 'Rating'],
                <?php
                    foreach ($stats as $stat){
                        echo "['".$stat['Name_Pr']."', ".$stat['cmt']."],";
                    }
                ?>
            ]);

            var options = {
                title: 'Products Popularity',
            };

            var chart = new google.visualization.PieChart(document.getElementById('pie-chart'));
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