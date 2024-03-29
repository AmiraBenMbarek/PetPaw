<?php
    include_once '../Model/crud.php';
    include_once '../Controller/crudC.php';
    include '../Controller/crudC3.php';
    include_once '../Model/crud3.php';
    include '../Controller/crudC2.php';
    include_once '../Model/crud2.php';
    include '../controller/servicec.php';

    include '../controller/loginC.php';
    $crud3 = null;
    $crudC4=new servic();
    $listecrud4=$crudC4->afficherenclos();

    $error = "";

    // create crud
    $crud = null;

    // create an instance of the controller
    $crudC = new crudC();
    if (
		isset($_POST["nom_Animal"]) &&
        isset($_POST["race"]) && 
        isset($_POST["genre"])&&
        isset($_POST["poid"]) &&
        isset($_POST["date_recuperation"]) && 
        isset($_POST["endroit_recuperation"])&&
        isset($_POST["idrg"])&&
        isset($_POST["img_animal"])&&
        isset($_POST["id_admin"])&&
        isset($_POST["id_enclos"])
    ) {
        if (
            !empty($_POST["nom_Animal"]) &&
            !empty($_POST["race"]) && 
            !empty($_POST["genre"])&&
            !empty($_POST["poid"]) &&
            !empty($_POST["date_recuperation"]) && 
            !empty($_POST["endroit_recuperation"])&&
            !empty($_POST["idrg"])&&
            !empty($_POST["img_animal"])&&
            !empty($_POST["id_admin"])&&
            !empty($_POST["id_enclos"])
        ) {
            $crud = new gestion_animaux(
                $_POST['id'],
				$_POST['nom_Animal'],
                $_POST['race'],
                $_POST['genre'],
                $_POST['poid'],
                $_POST['date_recuperation'],
                $_POST['endroit_recuperation'],
                $_POST['idrg'],
                $_POST['img_animal'],
                $_POST['id_admin'],
                $_POST['id_enclos']
              
            );
            $crudC->ajoutercrud($crud);
            header('Location:Gestion_sign.php');
        }
        else
            $error = "Missing information";
    }    
    ///////////////////
    $crud3 = null;
    $crud2 = null;
    $crudC3=new crudC3();
    $listecrud3=$crudC3->affichercrud3(); 
    $crudC2=new crudC2();
    $listecrud2=$crudC2->affichercrud2(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ajou dans la table des animaux </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
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

                                            <li class="pcoded-hasmenu active">
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
                                                    <li class="">
                                                        <a href="Gestion_régimes.php " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Animal Diet</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                <li class="">
                                                    <a href="Gestion_sign.php" class="waves-effect waves-dark ">
                                                        <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                        <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">signal</span>
                                                        <span class="pcoded-mcaret "></span>
                                                    </a>
                                                </li>
                                                <li class="">
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
                                            <h5 class="m-b-10">Modifier_Enclos</h5>
                                            <p class="m-b-0">Permet de modifier des Enclos</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
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
                                  
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Modifier animal</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <?php
			                                             if (isset($_POST['id'])){
				                                        $crud3 = $crudC3->recuperercrud3($_POST['id']);
				
                                                    ?>
                                                    <div class="card-block">
                                                    <form class="form-material" action="" method="POST" id="ajoutform">
                                                    <table>
                                                    <tr>
                                                    
                                                        <td><input type="hidden" name="id" id="id" value="0" maxlength="20"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="nom_Animal">nom_Animal:
                                                            </label>
                                                        </td>
                                                        <td><input type="text" onblur="saisirNom()" name="nom_Animal" id="nom_Animal"  maxlength="20">
                                                        <p id="errorName" class="error"></p></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="race">race:
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <input type="race" name="race" id="race" value="<?php echo $crud3['race']; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="genre">genre:
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="genre" id="genre">
                                                        </td>
                                                    </tr> 
                                                    <tr>
                                                        <td>
                                                            <label for="poid">poid:
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="poid" id="poid" >
                                                        </td>
                                                    </tr> 
                                                    <tr>
                                                        <td>
                                                            <label for="date_recuperation">date_recuperation:
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <input type="date" name="date_recuperation" id="date_recuperation" >
                                                        </td>
                                                    </tr>   
                                                    <tr>
                                                        <td>
                                                            <label for="endroit_recuperation">endroit_recuperation:
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="endroit_recuperation" id="endroit_recuperation" value="<?php echo $crud3['endroit_recuperation']; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="idrg">id regime:
                                                            </label>
                                                        </td>
                                                        <td><select name="idrg"  id="idrg" form="ajoutform">
                                                                                                <?php
                                                                                                
			                                            	foreach($listecrud2 as $crud2){
			                                                ?>
																<option value="<?php echo $crud2['id_regime']; ?>"><?php echo $crud2['id_regime']; ?></option>
																
                                                                <?php
			                                                	}
			                                                    ?>
															</select>
                                                                <p id="errorName" class="error"></p></td>
                    
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label for="img_animal">img_animal:
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <input type="file" name="img_animal" id="img_animal">
                                                                </td>
                                                            </tr>  
                                                            <input type="hidden"  name="id_admin" id="id_admin" class="form-control" required value="<?php echo $_SESSION['sessId']['id'] ?>">
                                                            <tr>
                                                        <td>
                                                            <label for="id_enclos">id enclos:
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <select name="id_enclos"  id="id_enclos" form="ajoutform">
                                                             <?php                               
			                                            	foreach($listecrud4 as $crud4){
			                                                ?>
																<option value="<?php echo $crud4['id']; ?>"><?php echo $crud4['id']; ?></option>
																
                                                                <?php
			                                                	}
			                                                    ?>
															</select>
                    
                                                            </tr>
                                                            <tr>
                                                            
                                                                <td>
                                                                    <input type="submit" value="Modifier"> 
                                                                </td>
                                                                <td>
                                                                    <input type="reset" value="Annuler" >
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </form>
                                                    </div>
                                                    <?php
	                                            	 }
		                                            ?>
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                        
                                                
                                                           
                                                           
                                                        </div>
                                                    </div>
                                                    <!-- Main-body end -->
                                                    <div id="styleSelector">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

<!-- Required Jquery -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>

<!-- modernizr js -->
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<script type="text/javascript" src="assets/js/verifier.js"></script>

<!-- Custom js -->
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
