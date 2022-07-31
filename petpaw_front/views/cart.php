<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';

    $productC = new productC();
    $cart_items=$productC->displayCart($_SESSION["sessId"]["id"]);

    $total=$productC->totalCart($_SESSION["sessId"]["id"]);    
?>

<!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cart details</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets3/img/icon.png">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

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
        <link rel="stylesheet" href="assets3/css/cart.css">

    </head>

    <body>
        
    <?php include 'includes/header.php'; ?>

        <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="breadcrumb__links">
                        <a href="pet supplies.php">
                        <i class="fas fa-angle-double-left"></i>
                        Back To Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="main_cart">
        <div class="basket">
            <div class="basket-labels">
                <ul>
                    <li class="item item-heading">Item</li>
                    <li class="price">Price</li>
                    <li class="quantity">Quantity</li>
                    <li class="">Subtotal</li>
                    <li class="remove_cart_btn"></li>
                </ul>
            </div>
            <?php foreach($cart_items as $cart){ ?>
            <div class="basket-product">
                <div class="item">
                    <div class="product-details">
                        <h1 class="product_name"><strong><span class="item-quantity"><?php echo $cart['qte_panier']; ?></span> x </strong><?php echo $cart['nom_panier']; ?></h1>
                    </div>
                </div>
                <div class="price"><?php echo $cart['prix_total']; ?></div>
                <div class="quantity">
                    <input type="number" name="quantity_cart" id="quantity_field" value="<?php echo $cart['qte_panier']; ?>" min="1" class="quantity-field">
                </div>
                <div class="subtotal"><?php echo $cart['prix_total']*$cart['qte_panier']; ?></div>
                <form action="deleteCart.php" method="POST">
                    <div class="remove quantity">
                        <button type="submit"><i class="fa fa-window-close"></i></button>
                        <input type="hidden" value="<?php echo $cart['id_panier']; ?>" name="id_panier">
                    </div>
                </form>
            </div>
            <?php } ?>
        </div>
    <aside>
        <form action="checkout.php" method="POST">
            <div class="summary">
                <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
                <div class="summary-subtotal">
                    <div class="subtotal-title">Subtotal</div>
                    <div class="subtotal-value final-value" id="basket-subtotal"><?php echo $total['prix']; ?></div>
                    <input type="hidden" name="price_cart" value="<?php echo $total['prix']; ?>">
                </div>
                
                <div class="summary-total">
                    <div class="total-title">Total</div>
                    <div class="total-value final-value" id="basket-total"><?php echo $total['prix']; ?></div>
                </div>
                <div class="summary-checkout">
                    <button type="submit" class="checkout-cta btn">Proceed to Checkout</button>
                </div>
            </div>
        </form>
    </aside>
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
        <script src="./assets3/js/cart.js"></script>


    </body>

    </html>