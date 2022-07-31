<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';

    $productM = null;

    $productC = new productC();
    if (
        //isset($_POST["ID_Pr"]) &&
		isset($_POST["Name_Pr"]) &&
        isset($_POST["Price_Pr"]) && 
        isset($_POST["Quantity_Pr"]) && 
        isset($_POST["Image_Pr"]) && 
        isset($_POST["Type_Pr"]) && 
        isset($_POST["Category_Pr"]) && 
        isset($_POST["Description_Pr"])
    ) {
        
            $productM = new productM(
				$_POST['Name_Pr'],
                $_POST['Price_Pr'],
                $_POST['Quantity_Pr'],
                $_POST['Image_Pr'],
                $_POST['Type_Pr'],
                $_POST['Category_Pr'],
                $_POST['Description_Pr']
            );
            $productC->modifierProduit($productM, $_POST["ID_Pr"]);
            
            header('Location:products.php');
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Products</title>
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
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
        <!-- waves.css -->
        <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="assets/css/purchase.css">

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
                                            <li class="pcoded-hasmenu active">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Purchases</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="active">
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
                                                        <a href="Gestion_Enclos.html " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Rooms</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="type_enclos.html " class="waves-effect waves-dark ">
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
                            </div>
                        </nav>
                        <div class="pcoded-content">
                            <!-- Page-header start -->
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="page-header-title">
                                                <h5 class="m-b-10">Purchases - Products</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Purchases</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Purchases - Products</a>
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
                                        <!-- Page body start -->
                                        <div class="page-body">
                                            <div class="row">
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Product Table</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="data-table-main icon-list-demo">
                                                            <div class="row">
                                                                <?php
                                                                    if (isset($_POST['ID_Pr'])){
                                                                        $productM = $productC->retrieveProduit($_POST["ID_Pr"]);  
                                                                    }                                                                      
                                                                ?>
                                                                
                                                                        <form action="" method="POST">
                                                                            <h1>Edit Product</h1>
                                                                            <input type="hidden"  id="ID_Pr" value="<?php echo $productM['ID_Pr']; ?>" name="ID_Pr"><br>

                                                                            <input class="champs" type="text" value="<?php echo $productM['Name_Pr']; ?>"  id="Name_Pr" name="Name_Pr">
                                                                            <p id="errorName" class="error"></p>

                                                                            <input class="champs" type="number" value="<?php echo $productM['Price_Pr']; ?>" id="Price_Pr" name="Price_Pr">
                                                                            <p id="errorPrice" class="error"></p>

                                                                            <input class="champs" type="number" value="<?php echo $productM['Quantity_Pr']; ?>" id="Quantity_Pr" name="Quantity_Pr">
                                                                            <p id="errorQuantity" class="error"></p>

                                                                            <input type="file" id="Image_Pr" value="<?php echo $productM['Image_Pr']; ?>" name="Image_Pr"><br>

                                                                            <input class="champs" type="text" value="<?php echo $productM['Type_Pr']; ?>" id="Type_Pr" name="Type_Pr">
                                                                            <p id="errorType" class="error"></p>

                                                                            <input class="champs" type="text" value="<?php echo $productM['Category_Pr']; ?>" id="Category_Pr" name="Category_Pr">
                                                                            <p id="errorCategory" class="error"></p>

                                                                            <input class="champs" value="<?php echo $productM['Description_Pr']; ?>" id="Description_Pr" name="Description_Pr">
                                                                            <p id="errorDescription" class="error"></p>

                                                                            <input type="submit" value="Submit" class="add_btn">
                                                                            <button type="submit" class="add_btn"><a href="products.php" style="color:white">Cancel</a></button>
                                                                        </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Warning Section Ends -->
                        <!-- Required Jquery -->
                        <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
                        <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
                        <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
                        <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
                        <!-- waves js -->
                        <script src="assets/pages/waves/js/waves.min.js"></script>
                        <!-- jquery slimscroll js -->
                        <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
                        <!-- modernizr js -->
                        <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
                        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
                        <!-- Custom js -->
                        <script type="text/javascript" src="assets/pages/icon-modal.js"></script>
                        <script src="assets/js/pcoded.min.js"></script>
                        <script src="assets/js/vertical-layout.min.js "></script>
                        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
                        <script type="text/javascript" src="assets/js/script.js"></script>
                        <script type="text/javascript" src="assets/js/purchases.js"></script>


                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>