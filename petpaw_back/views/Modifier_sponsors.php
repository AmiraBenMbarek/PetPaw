
<?php
    include_once '../Model/sponsors.php';
    include_once '../Controller/sponsorsC.php';
    include_once '../Model/events.php';
    include_once '../Controller/eventsC.php';
    include '../controller/loginC.php';


    $error = "";

    // create product
    $sponsors = null;

    // create an instance of the controller
    $sponsorsC = new sponsorsC();
  

	

    if (
        // isset($_POST["id_sp"]) &&
		isset($_POST["name_sp"]) &&
        isset($_POST["type_sp"]) && 
        isset($_POST["numtel_sp"])&& 
        isset($_POST["mail_sp"])&& 
        isset($_POST["inves_sp"])&& 
        isset($_POST["image_sp"])&& 
        isset($_POST["descrip_sp"])&&
        isset($_POST["id2_ev"])

    ) {
        if (
           
			// !empty($_POST["id_sp"]) &&
            !empty($_POST["name_sp"]) &&
            !empty($_POST["type_sp"]) && 
            !empty($_POST["numtel_sp"])&& 
            !empty($_POST["mail_sp"])&& 
            !empty($_POST["inves_sp"])&&
            !empty($_POST["image_sp"])&&
            !empty($_POST["descrip_sp"])&&
            !empty($_POST["id2_ev"])
        ) {
            $sponsors = new sponsors(
            $_POST["id_sp"],
            $_POST["name_sp"],
            $_POST["type_sp"],
            $_POST["numtel_sp"],
            $_POST["mail_sp"],
            $_POST["inves_sp"],
            $_POST["image_sp"],
            $_POST["descrip_sp"],
            $_POST["id2_ev"]

            );
            $sponsorsC->modifiersponsors($sponsors, $_POST["id_sp"]);
            header('Location:gestion_sponsors.php');
        }
        else
            $error = "Missing information";
    }


    $eventsC = new eventsC();
  

	$listeevents=$eventsC->afficherevents(); 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modfier Sponsors </title>
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
                                                <li class="active">
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
                                            <h5 class="m-b-10">Modfier_Sponsor</h5>
                                            <p class="m-b-0">Permet d'Modfier des Sponsors</p>
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
                                                        <h5>Modfier Sponsors</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    <div id="error">
                                                    <?php echo $error; ?>
                                                    </div>
                                                    <?php
                                                        if (isset($_POST['id_sp'])){
                                                            $sponsors = $sponsorsC->recuperersponsors($_POST['id_sp']);
				
		                                            ?>

                                                        <form action="" class="form-material" method="POST">
                                                            <div class="form-group form-default">
                                                                <input type="hidden" name="id_sp" id="id_sp"   value="<?php echo $sponsors['id_sp']; ?>"  class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <!-- <label class="float-label">Id_Sponsors</label> -->
                                                            </div>
                                                          
                                                            <div class="form-group form-default">
                                                                <input type="text"  id="name_sp" name="name_sp" onblur="saisirNom()" value="<?php echo $sponsors['name_sp']; ?>" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nom_Sponsors</label>
                                                                <p id="errorName" class="erreur" ></p>
                                                            </div>
                                                            <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Select Type</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="type_sp" id="type_sp" class="form-control">
                                                                        <option value="<?php echo $sponsors['type_sp']; ?>"><?php echo $sponsors['type_sp']; ?></option>
                                                                        <option value="Gold">Gold</option>
                                                                        <option value="Platinum">Platinum</option>
                                                                         <option value="Standard">Standard</option>
                                                                        </select>
                                                                    </div>
                                                            </div>
                                                           
                                                           
                                                            <div class="form-group form-default">
                                                                <input type="number"  id="numtel_sp"  onblur="numBer()" name="numtel_sp" value="<?php echo $sponsors['numtel_sp']; ?>"  class="form-control"required="" maxlength="11">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Numero_Tel</label>
                                                                <p id="errorNBM" class="erreur" ></p>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="email"  id="mail_sp" name="mail_sp"  onblur="saisirMail()" value="<?php echo $sponsors['mail_sp']; ?>" class="form-control" required="" placeholder="                    @gmail.com">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Adress_Mail</label>
                                                                <p id="errorMR" class="erreur" ></p>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="number"  id="inves_sp" onblur="Inves()" name="inves_sp" value="<?php echo $sponsors['inves_sp']; ?>" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Enter Investissement</label>
                                                                <p id="errorinv" class="erreur" ></p>
                                                            </div>
                                                            <div class="form-group form-default">
                                                            <!-- <label class="float-label">Enter Image</label>
                                                            <br> -->
                                                                <input type="file"  id="image_sp" name="image_sp"  value="" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                
                                                            </div>
                                                         
                                                            <div class="form-group form-default">
                                                            <label>Description</label>
                                                            <br>
                                                                <textarea rows="5" cols="33" name="descrip_sp" class="form-control" placeholder="Description Sponsors....." required=""><?php echo $sponsors['descrip_sp']; ?></textarea>
                                                            </div>
                                                            <!-- <div class="form-group form-default">
                                                                <input type="number"  name="id2_ev" id="id2_ev"  class="form-control" value=" <?php echo $sponsors['id2_ev']; ?>" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">id2_event</label>
                                                            </div> -->
                                                            <div class="form-group form-default">
                                                            <label>Nom_ID_event</label>
                                                            <select class="form-control" name="id2_ev" id="id2_ev">
                                                            
                                                            <?php 
                                                            foreach ($listeevents as $events){
                                                            ?>
                                                            <option value="<?php echo $events['id_ev']; ?>"><?php echo $events['nom_ev']; ?>-<?php echo $events['id_ev']; ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                            
                                                            </select>
                                                            
                                                            </div>


                                                            <input type="submit" value="Modifier" onclick="ajout(event)" class="btn btn-warning waves-effect waves-light">
                                                            
                                                        </form>
                                                    
                                                        <?php
                                                         }
                                                        ?>

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


                            <!-- Warning Section Starts -->
                            <!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
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
                var name = document.getElementById('name_sp').value;
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



    function saisirMail() {

        var mail = document.getElementById("mail_sp").value;
        var x=mail.length-10;
        var terminaison=mail.substring(x,mail.length);
           
            
            

     
        if (!(terminaison==="@esprit.tn"))
        {
            document.getElementById("errorMR").textContent = "mail non valide";
            document.getElementById("errorMR").style.color = "red";
            return 0;
        }
        else
        {
            document.getElementById("errorMR").textContent = "mail Verified";
            document.getElementById("errorMR").style.color = "green";
            return 1;

        }

    }

function numBer()
{
    var nbm = document.getElementById("numtel_sp").value;

    if (nbm <= 0 ) {
        document.getElementById("errorNBM").textContent = "nombre des membres doit être supérieur à 0 ";
        document.getElementById("errorNBM").style.color = "red";
    }
    else
    {
        document.getElementById("errorNBM").textContent = "Number Verified";
        document.getElementById("errorNBM").style.color = "green";
            return 1;
    }



}
function Inves()
{
    var nbm = document.getElementById("inves_sp").value;

    if (nbm <= 0 ) {
        document.getElementById("errorinv").textContent = "nombre des membres doit être supérieur à 0 ";
        document.getElementById("errorinv").style.color = "red";
    }
    else
    {
        document.getElementById("errorinv").textContent = "Number Verified";
        document.getElementById("errorinv").style.color = "green";
            return 1;
    }



}






    function ajout(event) {
    if ( saisirNom() == 0 || saisirMail()==0  || numBer()==0   || Inves()==0)
        event.preventDefault();
    }


  







</script>






</body>

</html>
