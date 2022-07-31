<?php
include_once '../config.php';
include_once '../controller/servicec.php';
include '../controller/loginC.php';


$produitc=new servic();
$prod=$produitc->afficherenclos();
$prod=$produitc->trierenclos();

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Back-end</title>
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
                                                    <a href="products.php" class=" waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Products</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
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

                                        <li class="pcoded-hasmenu active">
                                            <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Events</span>
                                                <span class="pcoded-mcaret "></span>
                                            </a>
                                            <ul class="pcoded-submenu ">
                                                <li class="active">
                                                    <a href="gestion_events.php " class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Events</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="gestion_sponsors.php " class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Sponsors</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="gestion_ticktes.php" class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Tikctes</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="calendar/index.php" class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Emplois</span>
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
                                                    <a href="gestion_animaux.php " class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Animals</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="gestion_régime.php " class="waves-effect waves-dark ">
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
                            <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">

                           
						<li class="nav-item">
							<a  href="./produit.php">
								<i class="fas fa-layer-group"></i>
								<p>Encols</p>
							</a>
                            </li>

                            <li class="nav-item">
							<a  href="./categorie.php">
								<i class="fas fa-layer-group"></i>
								<p>Types</p>
							</a>
    </li>
                            </ul>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="dash.php">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">


                                        <div class="table-responsive">
          
          <h1>Liste des Enclos</h1>

          <div>
           
           <a href="ajouters.php"> <button type="button" class="btn btn-primary"  style="margin-top:3%;margin-left:5%;border-radius: 10%;">ajouter</button></a>
           <br>
           <br>
       
     </div>

              <table class="table align-items-center table-flush">
   <th>id</th> 
  <th>superficie</th>
  <th>duree</th>
  <th>image</th>
  <th>id_type</th>


   <th>Supprimer</th>
  <th>Modifier</th>
<tr>
<?php
foreach($prod as $pro){

?>
 <td> <?php echo $pro['id']?> </td>
<td> <?php echo $pro['superficie']?> </td>
<td> <?php echo $pro['dure']?> </td>

<td><?php echo"<img src='./uploads/".$pro['image']."'>" ?>
      <style>
            img{
            width: 90px;
                        height: 90px;         
            }
            
            </style>
</td>


<td> <?php echo $pro['id_type']?> </td>

<td> 
<form method="post" action="supprumer.php">
<button type="submit" value="Supprimer" name="supprimer"  class="btn btn-primary btn-sm" style="margin-top:3%;margin-left:5%;border-radius: 10%;">Supprimer</button>

<input type="hidden" value="<?php echo $pro['id'] ?>" name="id">
</form></td>
<td> 
<form method="GET" action="Modifier.php">
<button type="submit" value="Modifier" name="Modifier"  class="btn btn-primary btn-sm" style="margin-top:3%;margin-left:5%;border-radius: 10%;">Modifier</button>

<input type="hidden" value="<?php echo $pro['id'] ?>" name="id">
</form></td>
</tr>
<?php
} 
?>


<td> 
               <form method="POST" action="trier.php">
                     <input type="submit"  id="trier"  class="btn btn-primary btn-sm" value="trier" ></input>
                     <input type="hidden" value=<?PHP echo  $pro['id']; ?> name="id">
               </form>
                                        
                    			  
     </td>

</table> 
 









                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="assets/pages/widget/amchart/gauge.js"></script>
    <script src="assets/pages/widget/amchart/serial.js"></script>
    <script src="assets/pages/widget/amchart/light.js"></script>
    <script src="assets/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>