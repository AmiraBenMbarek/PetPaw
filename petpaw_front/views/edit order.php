<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';

    $orderC = new productC();

    $id=$_POST['ID_ord'];
    $order = $orderC->getOrder2($id);

    $product=$orderC->getProduct($order['ID_Pr']);

?>

    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Edit order</title>
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

        <section class="product-details">
        <div class="container" style="margin-left:30%">
            <form action="edit2.php?ID_ord=<?php echo $order['ID_ord']; ?>" method="POST">
                <div class="row">
                    <h2>Order details</h2>
                </div>
                <div class="row">
                    <table id="product_table" border="1">
                        <tr>
                            <td>Order Reference</td>
                            <td>Quantity</td>
                        </tr>
                        <tr>
                            <td><input value="<?php echo $order['ID_ord']; ?>" readonly type="number" name="ID_ord" ></td>
                            <td><input type="number" name="Quantity_ord" value="<?PHP echo $order['Quantity_ord']; ?>" ></td>
                            <input type="hidden" name="Price_ord" value="<?PHP echo $product['Price_Pr']; ?>" >
                        </tr>
                    </table>
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </section>


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

    </body>

    </html>