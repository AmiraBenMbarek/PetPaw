    <?php
    include_once '../Model/events.php';
    include_once '../Controller/eventsC.php';
    include '../controller/loginC.php';

    $error = "";

    // create product
    $events = null;

    // create an instance of the controller
    $eventsC = new eventsC();

    if (
        // isset($_POST["id_ev"]) &&
		isset($_POST["nom_ev"]) &&
        isset($_POST["lieu"]) && 
        isset($_POST["descrip_lieu"])&& 
        isset($_POST["date_ev"])&& 
        isset($_POST["date_fin"])&&
        isset($_POST["nb_p"])&&
        isset($_POST["descrip_ev"])&&
        isset($_POST["spot"])

    ) {
        if (
           
			// !empty($_POST["id_ev"]) &&
            !empty($_POST["nom_ev"]) &&
            !empty($_POST["lieu"]) && 
            !empty($_POST["descrip_lieu"])&& 
            !empty($_POST["date_ev"])&& 
            !empty($_POST["date_fin"])&&
            !empty($_POST["nb_p"])&&
            !empty($_POST["descrip_ev"])&&
            !empty($_POST["spot"])
        ) {
            $events = new events(
            $_POST["id_ev"],
            $_POST["nom_ev"],
            $_POST["lieu"],
            $_POST["descrip_lieu"],
            $_POST["date_ev"],
            $_POST["date_fin"],
            $_POST["nb_p"],
            $_POST["descrip_ev"],
            $_POST["spot"]
            );
            $eventsC->ajouterevents($events,$_SESSION['sessId']['id']);
            header('Location:gestion_events.php');
        }
        else
            $error = "Missing information";
    }


    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajout events </title>
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

                                            <li class="pcoded-hasmenu active">
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
                                            </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
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
                                            <h5 class="m-b-10">Ajout_events</h5>
                                            <p class="m-b-0">Permet d'ajouter des events</p>
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
                                                        <h5>Ajout events</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    <div id="error">
                                                        <?php echo $error; ?>
                                                    </div>
                                                    <form action=""     class="form-material" method="POST" >
                                                        
                                                            <div class="form-group form-default">
                                                                <input type="hidden"  name="id_ev" id="id_ev"  value="0" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <!-- <label class="float-label">Id_events</label> -->
                                                            </div>
                                                          
                                                            <div class="form-group form-default ">
                                                                <input type="text"  id="nom_ev" name="nom_ev" class="form-control" required=""   onblur="saisirNom()" >
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nom_events</label>
                                                                <p id="errorName" class="erreur" ></p>
                                                                
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text"  id="lieu" name="lieu" class="form-control" required="" onblur="saisirNom2()" >
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">lieu</label>
                                                                <p id="errorName2" class="erreur" ></p>
                                                            </div>

                                                            <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Description lieu</label>
                                                                            <div class="col-sm-10">
                                                                                <textarea name="descrip_lieu" rows="5" cols="5" class="form-control" placeholder="Description lieu"></textarea>
                                                                            </div>
                                                            </div>

                                                            <div class="form-group form-default">
                                                                 <label class="">date_debut</label>
                                                                <input type="datetime-local"  onblur="saisirdate_recuperation()" id="date_ev" name="date_ev" class="form-control" required="" >
                                                                <span class="form-bar"></span>
                                                                <p id="errorDF" class="erreur" ></p>
                                                               
                                                                
                                                            </div>

                                                            <div class="form-group form-default">
                                                            <label class="">date_fin</label>
                                                                <input type="datetime-local"  id="date_fin" name="date_fin" class="form-control" required="" onblur="saisirdate_fin()" >
                                                                <span class="form-bar"></span>
                                                               
                                                                <p id="errorDF1" class="erreur" ></p>
                                                                
                                                            </div>
                                                      
                                                            <div class="form-group form-default">
                                                             <label class="col-sm-2 col-form-label">location place maps</label>
                                                                            <div class="col-sm-10">
                                                                                <textarea name="nb_p" rows="5" cols="5" class="form-control" placeholder="Location place maps <ifram>....."></textarea>
                                                                            </div>
                                                              
                                                                
                                                            </div>
                                                            

                                                            <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Description event</label>
                                                                            <div class="col-sm-10">
                                                                                <textarea name="descrip_ev" rows="5" cols="5" class="form-control" placeholder="Description event....."></textarea>
                                                                            </div>
                                                            </div>

                                                            <div class="form-group form-default">
                                                                <label >spot</label>
                                                                <input type="number"  id="spot" name="spot" class="form-control" required="" onblur="spot()" max="2"  min="1"  placeholder="2 pour spot 1 pour non spot  "  >
                                                                <span class="form-bar"></span>
                                                                <br>
                                                                <p id="errorspot" class="erreur" ></p>
                                                                
                                                            </div>


                                                            
                                                            <input  type="submit" onclick="ajout(event)" value="Add" class="btn btn-primary waves-effect waves-light">
                                                        </form>
                                                    </div>
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
<!-- Custom js -->
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>


<script>
    
    function saisirNom() {
                var name = document.getElementById('nom_ev').value;
                var regex = /^[A-Za-z]+$/;


                if (!(regex.test(name))) {
                    document.getElementById("errorName").textContent = "Name has to be composed of letters only!";
                    document.getElementById("errorName").style.color = "red";
                    return 0;
                } 
                else if (name[0] == name[0].toLowerCase()) {
                    document.getElementById("errorName").textContent = "Name has to start by a capital letter!";
                    document.getElementById("errorName").style.color = "red";
                    return 0;
                }
                 else {
                    document.getElementById("errorName").textContent = "Name Verified";
                    document.getElementById("errorName").style.color = "green";
                    return 1;
                }
    }
    function saisirNom2() {
                var name = document.getElementById('lieu').value;
                var regex = /^[A-Za-z]+$/;


                if (!(regex.test(name))) {
                    document.getElementById("errorName2").textContent = "Name has to be composed of letters only!";
                    document.getElementById("errorName2").style.color = "red";
                    return 0;
                } 
                else if (name[0] == name[0].toLowerCase()) {
                    document.getElementById("errorName2").textContent = "Name has to start by a capital letter!";
                    document.getElementById("errorName2").style.color = "red";
                    return 0;
                }
                 else {
                    document.getElementById("errorName2").textContent = "Name Verified";
                    document.getElementById("errorName2").style.color = "green";
                    return 1;
                }
    }
   
   

    


function spot()
{
    var nbm = document.getElementById("spot").value;

    if (nbm<1 || nbm>2) {
        document.getElementById("errorspot").textContent = "nombre  doit entre 1 et 2 ";
        document.getElementById("errorspot").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorspot").textContent = "Number Verified";
        document.getElementById("errorspot").style.color = "green";
            return 1;
    }



}

function saisirdate_recuperation() {
    var DateFond = document.getElementById("date_ev").value;
    var dat=new Date();

    if (new Date(DateFond).getTime() <= dat.getTime())
    {
        document.getElementById("errorDF").textContent = "date superiour a la date actuel ";
        document.getElementById("errorDF").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorDF").textContent = "date verified";
        document.getElementById("errorDF").style.color="green";
        return 1;
    }
}
function saisirdate_fin() {
   
    var DateFond = document.getElementById("date_fin").value;
    var DateFond2 = document.getElementById("date_ev").value;
    var dat=new Date();

    if (new Date(DateFond).getTime() <=  new Date(DateFond2).getTime())
    {
        document.getElementById("errorDF1").textContent = "date superiour a la date de l evenment ";
        document.getElementById("errorDF1").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorDF1").textContent = "date verified";
        document.getElementById("errorDF1").style.color="green";
        return 1;
    }
}






    function ajout(event) {
    if ( saisirNom() == 0 || saisirNom2() == 0 ||saisirdate_fin() == 0  ||  spot()==0 || numBer()==0 || saisirdate_recuperation()==0  )
    
        event.preventDefault();
    }


  







</script>





</body>

</html>
