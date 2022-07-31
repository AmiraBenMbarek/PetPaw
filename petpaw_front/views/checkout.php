<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';

    $productC = new productC();

    $cart_items=$productC->displayCart($_SESSION["sessId"]["id"]);

?>

    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Checkout</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets3/img/icon.png">

        <!-- CSS here -->
        <link rel="stylesheet" href="assets3/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets3/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets3/css/slicknav.css">
        <link rel="stylesheet" href="assets3/css/flaticon.css">
        <link rel="stylesheet" href="assets3/css/progressbar_barfiller.css">
        <link rel="stylesheet" href="assets3/css/gijgo.css">
        <link rel="stylesheet" href="assets3/css/animate.min.css">
        <link rel="stylesheet" href="assets3/css/animated-headline.css">
        <link rel="stylesheet" href="assets3/css/magnific-popup.css">
        <link rel="stylesheet" href="assets3/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets3/css/themify-icons.css">
        <link rel="stylesheet" href="assets3/css/slick.css">
        <link rel="stylesheet" href="assets3/css/nice-select.css">
        <link rel="stylesheet" href="assets3/css/pet supplies.css">


    </head>

    <body>
        
    <?php include 'includes/header.php'; ?>

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="breadcrumb__links">
                    <a href="pet supplies.php">Products</a>
                        <i class="fas fa-angle-right"></i>
                        <a href="product.php">Product Detail</a>
                        <i class="fas fa-angle-right"></i>
                        <span>Checkout</span>
                    </div>
                </div>
                <div class="lg-10">
                    <div class="pdf_download" style="cursor:pointer">
                        <div class="printer">
                            <i class="fa fa-print"></i>
                            <span id="download_pdf">Download receipt</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <form action="addOrders.php" class="single_sidebar_widget search_widget" method="POST">
                <div class="row">                        
                        <div class="col-lg-4" style="margin-left:30%;">
                            <div class="checkout__order" style="width:450px;">
                                <div id="receipt">
                                    
                                    <img src="assets3/img/logo/logo.png" alt="">
                                    <h2 style="margin-left:50px;margin-top:20px;margin-bottom:20px;">Thank you for your purchase!</h2>
                                    <h5>Your order</h5>
                                    <div class="checkout__order__product">
                                        <ul>
                                            <li>
                                                <span class="top__text">Products</span>
                                                <span style="margin-right:20px" class="top__text__right">Total</span>
                                            </li>
                                            <li>
                                            </li>
                                            <?php foreach($cart_items as $cart){ ?>
                                            <li><?php echo $cart['qte_panier'] ?> X <?php echo $cart['nom_panier'] ?><span style="margin-right:20px"><?php echo $cart['prix_total'] ?> DT</span></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="comment_section">
                                
                                <div class="form-group search_widget">
                                    <input type="email" class="form-control" name="send_mail" placeholder="write your email to get a notification" onfocus="this.placeholder = ''" onblur="this.placeholder = 'write your email to get a notification'">
                                </div>
                                </div>
                                    <button type="submit" class="cart_btn btn">Place order</button>
                            </div>
                        </div>
                </form>
            </div>
        </section>
        <!-- Checkout Section End -->

    </main>
    <?php include 'includes/footer.php'; ?>
        <!-- Scroll Up -->
        <div id="back-top">
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- JS here -->

        <script src="./assets3/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="./assets3/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets3/js/popper.min.js"></script>
        <script src="./assets3/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="./assets3/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets3/js/owl.carousel.min.js"></script>
        <script src="./assets3/js/slick.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="./assets3/js/wow.min.js"></script>
        <script src="./assets3/js/animated.headline.js"></script>
        <script src="./assets3/js/jquery.magnific-popup.js"></script>

        <!-- Date Picker -->
        <script src="./assets3/js/gijgo.min.js"></script>
        <!-- Nice-select, sticky -->
        <script src="./assets3/js/jquery.nice-select.min.js"></script>
        <script src="./assets3/js/jquery.sticky.js"></script>

        <!-- counter , waypoint,Hover Direction -->
        <script src="./assets3/js/jquery.counterup.min.js"></script>
        <script src="./assets3/js/waypoints.min.js"></script>
        <script src="./assets3/js/jquery.countdown.min.js"></script>
        <script src="./assets3/js/hover-direction-snake.min.js"></script>

        <!-- contact js -->
        <script src="./assets3/js/contact.js"></script>
        <script src="./assets3/js/jquery.form.js"></script>
        <script src="./assets3/js/jquery.validate.min.js"></script>
        <script src="./assets3/js/mail-script.js"></script>
        <script src="./assets3/js/jquery.ajaxchimp.min.js"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="./assets3/js/plugins.js"></script>
        <script src="./assets3/js/main.js"></script>
        <script src="./assets3/js/product.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>

    </html>