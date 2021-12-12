<?php
    include_once '../controller/productC.php';

    $productC = new productC();
    $id=$_GET['ID_Pr'];
    if (isset($id)){
        $product = $productC->getProduct($id);  
    }
    $comment = $productC->afficherComments($id);
?>

    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Product details</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">

        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/animated-headline.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/pet supplies.css">


    </head>

    <body>
        <!-- ? Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/loader.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header ">
                    <div class="header-bottom  header-sticky">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2">
                                    <div class="logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10">
                                    <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                        <!-- Main-menu -->
                                        <div class="main-menu d-none d-lg-block">
                                            <nav>
                                                <ul id="navigation">
                                                    <li><a href="index.html">Home</a></li>

                                                    <li><a href="adoption.html">Adoption</a>
                                                        <ul class="submenu">
                                                            <li><a href="elements.html">Cats</a></li>
                                                            <li><a href="elements.html">Dogs</a></li>
                                                            <li><a href="elements.html">More</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="active"><a href="pet supplies.php">Pet Supplies</a></li>

                                                    <li><a href="projects.html">Events</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- Header-btn -->
                                        <div class="header-right-btn d-none d-lg-block ml-20">
                                            <a href="contact.html" class="btn header-btn">Make a Donation</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>

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
                <div class="col-lg-12">
                    <div class="breadcrumb__links" style="float:right;">
                        <div class="orders_hover">
                            <a href="cart.php" class="orders">Go to cart
                            <i class="fa fa-shopping-cart"></i></a>
                            <a href="orders.php" class="orders">Go to orders
                            <i class="fa fa-cart-arrow-down"></i></a>
                            <a href="wishlist.php" class="orders">Wishlist
                            <i class="fa fa-heart"></i></a>
                            <span id="google_translate_element"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

    <main>
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container" style="margin-top:-40px;">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product__details__pic">
                        <div class="product__details__slider__content">
                            <img data-hash="product-1" src="assets/img/gallery/<?php echo $product['Image_Pr']; ?>" height="360" width="270" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h2><strong><?php echo $product['Name_Pr'] ?></strong></h2>
                        
                        <div class="product__details__price"><h3><?php echo $product['Price_Pr'] ?> DT</h3></div>
                        <p><?php echo $product['Description_Pr'] ?></p>
                        <div class="product__details__button">
                            <form action="addCart.php" method="POST">
                                <div class="quantity">
                                    <span>Quantity:</span>
                                    <div class="pro-qty">
                                        <input type="number" name="quantity_cart" min="1" max="<?php echo $product['Quantity_Pr']?>" value="1">
                                    </div>
                                </div>
                                <input type="hidden" name="id_cart" value="<?php echo $product['ID_Pr']?>" >
                                <input type="hidden" name="name_cart" value="<?php echo $product['Name_Pr']?>" >
                                <input type="hidden" name="price_cart" value="<?php echo $product['Price_Pr']?>" >
                                <button type="submit" name="add_to_cart" class="cart-btn btn">
                                    <span class="fa fa-shopping-cart"></span> 
                                        Add to cart
                                </button>
                                <ul style="margin-right:10px" class="icon_hover">
                                    <li><a href="addWishlist.php?id_cart=<?php echo $product['ID_Pr']; ?>"><span class="fa fa-heart"></span></a></li>
                                </ul>
                            </form>
                            
                            
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Availability:</span>
                                    <div class="stock__checkbox">
                                        <label for="stockin">
                                            <h4>In Stock</h4>
                                            <input type="checkbox" id="stockin" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>

                                <!-- <li>
                                    <span>Promotions:</span>
                                    <p>Free shipping</p>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="comments" class="row">
                <div class="container">
                            <div class="comment_section p-5">
                                <form action="comments.php" method="POST" class="single_sidebar_widget search_widget">
                                    <div class="form-group">
                                        <div class="input-group add-comment-section mt-4 mb-4">
                                            <input type="text" class="form-control" id="comment_pr" name="comment_pr" placeholder="Leave a comment" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Leave a comment'">
                                            <button class="btn" type="submit">Comment</button>
                                            <input type="hidden" name="ID_Pr" value="<?php echo $id ?>">
                                        </div>
                                    </div>
                                </form>
                                <?php foreach($comment as $cmt){ ?>
                                <div class="commented-section mt-2">
                                    <div class="d-flex flex-row align-items-center commented-user">
                                        <h3 class="mr-2">User Name</h3>
                                    </div>
                                    <div class="comment-text-sm"><span><?php echo $cmt['comments'] ?></span></div>
                                    <div class="reply-section">
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                    </div>
                        
        </div>
    </section>
    <!-- Product Details Section End -->
        </main>
        <footer>
            <div class="footer-wrapper">
                <!-- Footer Start-->
                <div class="footer-area footer-padding">
                    <div class="container">
                        <div class="row justify-content-between" style="display:flex;">
                            <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <div class="single-footer-caption mb-30">
                                        <!-- logo -->
                                        <div class="footer-logo mb-35">
                                            <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                        </div>
                                        <div class="footer-tittle">
                                            <div class="footer-pera">
                                                <p>The automated process starts as soon as your clothes go into the machine.</p>
                                            </div>
                                        </div>
                                        <!-- social -->
                                        <div class="footer-social">
                                            <a href="#"><i class="fab fa-twitter" target="_blank"></i></a>
                                            <a href="#"><i class="fab fa-facebook-f" target="_blank"></i></a>
                                            <a href="#"><i class="fab fa-instagram" target="_blank"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Our solutions</h4>
                                        <ul>
                                            <li><a href="#">Design & creatives</a></li>
                                            <li><a href="#">Telecommunication</a></li>
                                            <li><a href="#">Restaurant</a></li>
                                            <li><a href="#">Programing</a></li>
                                            <li><a href="#">Architecture</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Company</h4>
                                        <ul>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Review</a></li>
                                            <li><a href="#">Insights</a></li>
                                            <li><a href="#">Carrier</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Contact us</h4>
                                        <ul>
                                            <li><a href="#">consulto98@gmail.com</a></li>
                                            <li><a href="#">76/A, Green road, NYC</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li class="number"><a href="#">(80) 783 367-3904</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-bottom area -->
                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="footer-border">
                            <div class="row d-flex align-items-center">
                                <div class="col-xl-12 ">
                                    <div class="footer-copy-right text-center">
                                        <p>
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            Copyright &copy;
                                            <script>
                                                document.write(new Date().getFullYear());
                                            </script> All rights reserved by PetPaw <i class="fa fa-heart" aria-hidden="true"></i>
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End-->
            </div>
        </footer>
        <!-- Scroll Up -->
        <div id="back-top">
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- JS here -->

        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
        <!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>

        <!-- counter , waypoint,Hover Direction -->
        <script src="./assets/js/jquery.counterup.min.js"></script>
        <script src="./assets/js/waypoints.min.js"></script>
        <script src="./assets/js/jquery.countdown.min.js"></script>
        <script src="./assets/js/hover-direction-snake.min.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        <script src="./assets/js/product.js"></script>
        <!-- <script src="assets/js/product.js"></script> -->
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </body>

    </html>