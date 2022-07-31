<?php
  
    
    include_once '../Controller/eventsC.php';
    include '../controller/loginC.php';

    $error = "";

    $events = null;

    $eventsC = new eventsC();
  

	$listeevents=$eventsC->afficherevents(); 



    


    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gestion_events</title>
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
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
<?php include 'includes/header.php'; ?>
                        <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="index.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu active">
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

                                            <li class="pcoded-hasmenu active">
                                                <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                    <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                    <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Events</span>
                                                    <span class="pcoded-mcaret "></span>
                                                </a>
                                                <ul class="pcoded-submenu ">
                                                <li class="active">
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
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Gestion Events </h5>
                                        <p class="m-b-0">It is a management that allows to take charge of events and events.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.php"> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Pages</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Gestion Events </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    
                                    <!-- Hover table card end -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Gestion events</h5>
                                            <span>It is a management that allows to take charge of events</span>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa-chevron-left"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                    <li><i class="fa fa-times close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <p>

                                                "events type control center."
                                            </p>
                                            <a href="Ajout_events.php"  name="ajouter"> <input  class="btn btn-primary waves-effect waves-light" type="submit" value="Ajouter"></a>
                                        </div>
                                    </div>
                                    <!-- Hover table card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>events</h5>
                                            <span>use class <code>table-hover</code> inside table element</span>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block table-border-style">

                                            <div class="p-15 p-b-0">
                                                        <form class="form-material" action = "verif-formev.php" method ="get">
                                                            <div class="form-group form-primary">
                                                                <div class="col-sm-4">
                                                                <input type = "search" name ="terme" class="form-control" required="">
                                                                
                                                                <span class="form-bar"></span>
                                                                <label class="float-label"><i class="fa fa-search m-r-10"></i>Search events</label>
                                                                </div>
                                                                </div>
                                                            <input  class="btn btn-info waves-effect waves-light" type = "submit" name = "s" value = "Rechercher" >
                                                            
                                                            <br>
                                                            <br>
                                                        </form>
                                          </div>


                                            <div class="p-15 p-b-0">

                                                <form method="POST" action="trieev.php">
                                                <input type="submit"  name="trierasc" id="trierasc"  class="btn  btn-info" value="trierasc" ></input>
                                                <input type="submit"  name="trierdesc"  id="trierdesc"  class="btn  btn-info" value="trierdesc" ></input>
                                                
                                            
                                                </form>

                                                
                                                <br>
                                           </div>

                                  


                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                 <thead>
                                                        <tr>
                                                            <td> ID</td>
                                                            <td>Name</td>
                                                            <td>Lieu</td>
                                                            <td>Description_lieu</td>
                                                            <td>Date Debut</td>
                                                            <td>Date Fin</td>
                                                            <td>localisation carte google</td>
                                                            <td>Description_event</td>
                                                            <td>spot</td>
                                                            <td>Modifier</td>
                                                            <td>Supprimer</td>
                                                        </tr>
                                                 </thead>
                                                 <tbody>
                                                     
                                                
                                                        <?php
                                                            foreach($listeevents as $events){
                                                           
                                                        ?>
                                                        <tr>
                                                            <td>
                                                            <?php echo $events['id_ev']; ?>
                                                             </td>
                                                            <td>
                                                            <?php echo $events['nom_ev']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $events['lieu']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $events['descrip_lieu']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $events['date_ev']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $events['date_fin']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $events['nb_p']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $events['descrip_ev']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $events['spot']; ?>
                                                            </td>
                                                           
                                                            <td>
                                                                <form method="POST" action="Modifier_events.php">
                                                                    <input class="btn btn-warning waves-effect waves-light" type="submit" name="Modifier" value="Modifier">
                                                                    <input type="hidden" value=<?PHP echo $events['id_ev']; ?> name="id_ev">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <a  href="Supprimer_events.php?id_ev=<?php echo $events['id_ev']; ?>">  <input class="btn btn-danger waves-effect waves-light" type="submit" value="Supprimer"></a>
                                                            </td>
                                                           
                                                        </tr>
                                                        </tbody>
                                                    <?php } ?>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hover table card end -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="styleSelector">
                
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>     <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>     <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>
