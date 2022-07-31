<?php
	include '../controller/crudC.php';
    include_once '../model/crud.php';
    include '../controller/crudC2.php';
    include_once '../model/crud2.php';
    include '../controller/servicec.php';

    include '../controller/loginC.php';


    $crudC2=new crudC2();
    $listecrud2=$crudC2->affichercrud2(); 
	$crudC=new crudC();
	$listecrud=$crudC->afficherback(); 
    $crudC3=new servic();
    $listecrud3=$crudC3->afficherenclos();
    
    $error = "";

    
    $crud = null;

    if (
		isset($_POST["nom_Animal"]) &&
        isset($_POST["race"]) && 
        isset($_POST["genre"])&&
        isset($_POST["poid"]) &&
        isset($_POST["date_recuperation"]) && 
        isset($_POST["endroit_recuperation"])&&
        isset($_POST["idrg"])&&
        isset($_POST["img_animal"])&&
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
                $_POST['id_enclos']
            );
            $crudC->ajoutercrud($crud,$_SESSION['sessId']['id']);
            header('Location:Gestion_animaux.php');
        }
        else
            $error = "Missing information";
            
    }    
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>gestion animaux</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/stylear.css">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>  
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
                                                    <li class="active">
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
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">gestion animaux</h5>
                                            <!-- Text input to enter the employee's name -->
    <input type="text" id="employee_name"><br>
    <!-- Our search button -->
    <input type="button" id="search_button" value="Search">
    <!-- This div will contain a list of all employee names that match our search term -->
    <div id="search_results" style="padding:5px;"></div>

<!-- JQuery library -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    //Add a JQuery click listener to our search button.
    $('#search_button').click(function(){
        //If the search button is clicked,
        //get the employee name that is being search for
        //from the search_box.
        var employee_name = $('#employee_name').val().trim();

        //Carry out a GET Ajax request using JQuery
        $.ajax({
            //The URL of the PHP file that searches MySQL.
            url: 'search.php',
            data: {
                name: employee_name
            },
            success: function(returnData){
                //Set the inner HTML of our search_results div to blank to
                //remove any previous search results.
                $('#search_results').html('');
                //Parse the JSON that we got back from search.php
                var results = JSON.parse(returnData);
                //Loop through our employee array and append their
                //names to our search results div.
                $.each(results, function(key, value){
                    //The name of the employee will be present
                    //in the "name" property.
                    $('#search_results').append(value.name + '<br>');
                });
                //If no employees match the name that was searched for, display a
                //message saying that no results were found.
                if(results.length == 0){
                    $('#search_results').html('No employees with that name were found!');
                }
            }
        });
    });
</script>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.php"> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Pages</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">gestion animaux</a>
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
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>gestion animaux </h5>
                                                    <span>c'est une gestion qui permet de prendre en charge les animaux et les régimes alimentaire</span>
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

                                                        "Centre de controle de type enclos."
                                                    </p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hover table card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>animaux</h5>
                                            <ul>
                                                <li>
                                                    <!-- Trigger/Open The Modal -->
                                                    <button id="myBtn" class="genric-btn success radius">ajouter</button>
                                
                                                    <!-- The Modal -->
                                                    <div id="myModal" class="modal">
                                
                                                      <!-- Modal content -->
                                                      <div class="modal-content">
                                                        <span class="close">&times;</span>
                                                        <form class="form-material" action="" method="POST" id="ajoutform">
                                                        <div class="form-group form-default">
                                                                <input type="hidden"  name="id" id="id" class="form-control" required value="0">
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" onblur="saisirNom()" name="nom_Animal" id="nom_Animal" class="form-control" required>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label nom_Animal">nom_Animal</label>
                                                                <p id="errorName" class="error"></p>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" onblur="saisirrace()" name="race" id="race" class="form-control" required>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label race">race</label>
                                                                <p id="errorrace" class="error"></p>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" onblur="saisirgenre()" name="genre" id="genre" class="form-control" required>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label genre">genre</label>
                                                                <p id="errorgenre" class="error"></p>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="number" onblur="saisirWeight()" name="poid"  id="poid" class="form-control" required>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label poid">poid en kg</label>
                                                                <p id="errorWeight" class="error"></p>
                                                            </div>

                                                          
                                                            
                                                            <div class="form-group form-default">
                                                                <input type="date" onblur="saisirdate_recuperation()" name="date_recuperation" id="date_recuperation" class="form-control" required>
                                                                <span class="form-bar"></span>
                                                                <p id="errorDF" class="error"></p>
                                                                
                                                            </div>

                                                            <div class="form-group form-default">
                                                                <input type="test" onblur="saisirendroit_recuperation()" name="endroit_recuperation" id="endroit_recuperation" class="form-control" required>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label endroit_recuperation">endroit_recuperation</label>
                                                                <p id="errorendroit_recuperation" class="error"></p>
                                                            </div>
                                                            <div class="form-group form-default">
															<select name="idrg"  id="idrg" form="ajoutform">
                                                            <?php
			                                            	foreach($listecrud2 as $crud2){
			                                                ?>
																<option value="<?php echo $crud2['id_regime']; ?>">ID= <?php echo $crud2['id_regime']; ?>/ nom=<?php echo $crud2['nom_regime']; ?></option>
																
                                                                <?php
			                                                	}
			                                                    ?>
															</select>
														</div>
                                                            <div class="form-group form-default">
                                                                <input type="file"  name="img_animal" id="img_animal" class="form-control" required>
                                                                <span class="form-bar"></span>
                                                            </div>

                                                            <div class="form-group form-default">
                                                                <input type="hidden"  name="id_admin" id="id_admin" class="form-control" required value="<?php echo $_SESSION['sessId']['id'] ?>">
                                                                <span class="form-bar"></span>
                                                            </div>

                                                            <div class="form-group form-default">
															<select name="id_enclos"  id="id_enclos" form="ajoutform">
                                                            <?php
			                                            	foreach($listecrud3 as $crud3){
			                                                ?>
																<option value="<?php echo $crud3['id']; ?>">ID= <?php echo $crud3['id']; ?></option>
																
                                                                <?php
			                                                	}
			                                                    ?>
															</select>
														</div>
                                                            

                                                          

                                                            <input type="submit" onclick="ajout(event)" value="Ajouter">
                                                        </form>
                                                      </div>
                                
                                                    </div>
                                
                                
                                                  </li>
                                            </ul>

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
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>id animal</th>
                                                            <th>nom_Animal</th>
                                                            <th>race</th>
                                                            <th>genre</th>
                                                            <th>poid</th>
                                                            <th>date_recuperation</th>
                                                            <th>endroit_recuperation</th>
                                                            <th>img_animal</th>
                                                            <th>id régimes</th>
                                                            <th>id user</th>
                                                            <th>id enclos</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
				foreach($listecrud as $crud){
			?>
			<tr>
				<td><?php echo $crud['id']; ?></td>
				<td><?php echo $crud['nom_Animal']; ?></td>
				<td><?php echo $crud['race']; ?></td>
				<td><?php echo $crud['genre']; ?></td>
                <td><?php echo $crud['poid']; ?></td>
                <td><?php echo $crud['date_recuperation']; ?></td>
                <td><?php echo $crud['endroit_recuperation']; ?></td>
                <td> <?php echo'<img src="assets/images/'.$crud['img_animal'].'"width="100;" height="120" alt="image">' ?></td>
                <td><?php echo $crud['idrg']; ?></td>
                <td><?php echo $crud['id_admin']; ?></td>
                <td><?php echo $crud['id_enclos']; ?></td>
                                                            
             
				<td>
					<form method="POST" action="Modifier_animal.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $crud['id']; ?> name="id">
					</form>
                    
				</td>
				<td>
					<a href="supprimercrud.php?id=<?php echo $crud['id']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hover table card end -->
                                    
                                    <!-- Hover table card start -->
                                    
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
<script type="text/javascript" src="assets/js/popup.js"></script>
<script type="text/javascript" src="assets/js/verifier.js"></script>

</body>

</html>
