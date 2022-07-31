<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';

    $productC = new productC();

    $listeproduits=$productC->priceAsc();
    
?>

    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pet Supplies</title>
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
                <div class="col-lg-12">
                    <div class="breadcrumb__links" style="float:right;">
                        <div class="orders_hover">
                            <a href="cart.php" class="orders">Go to cart
                            <i class="fa fa-shopping-cart"></i></a>
                            <a href="orders.php" class="orders">Go to orders
                            <i class="fa fa-cart-arrow-down"></i></a>
                            <a href="wishlist.php" class="orders">Wishlist
                            <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <main>
            <section class="blog_area section-padding">
                <div class="container">
                    <div class="row">
                        <!-- right section -->
                        <div class="col-lg-3 col-md-3">
                            <div class="blog_right_sidebar">
                                <aside class="single_sidebar_widget search_widget">
                                    <form action="search_produit.php" method="POST">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control"  name="nom_pr" placeholder='Search By Name' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search By Name'">
                                                <div class="input-group-append">
                                                    <button class="btns" type="button">
                                                    <i class="ti-search"></i>
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="button primary-bg text-white w-100 btn_1 btn" type="submit">Search</button>
                                    </form>
                                </aside>
                                <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Sort<span style="float:right"><strong><a style="color:black" href="pet supplies.php">x</a></strong></span></h4>
                                    <ul class="list cat-list">
                                        <li class="sidenav">
                                            <button class="dropdown_btn">By Price 
                                            <i class="fa fa-caret-down"></i>
                                          </button>
                                            <div class="dropdown_container">
                                            <a href="tri_produits_par_prix_asc.php"><p>Ascending</p></a>
                                            <a href="tri_produits_par_prix_desc.php"><p>Descending</p></a>
                                            </div>
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <?php
                            foreach($listeproduits as $produit){
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <?php echo '<a href="'."product.php?ID_Pr=". $produit['ID_Pr'].'">'?><img src="assets3/img/gallery/<?php echo $produit['Image_Pr']; ?>"class="product__item__pic set-bg" height="360" width="270" alt="Image"></a>
                                
                                    <ul class="product__hover">
                                        <li><a href="#"><span class="fa fa-heart"></span></a></li>
                                        <li><a href="#"><span class="fa fa-shopping-cart"></span></a></li>
                                    </ul>
                            </div>
                                <div class="product__item__text">
                                    <h6><a href="product.php?ID_Pr=<?php echo $produit['ID_Pr']; ?>"><?php echo $produit['Name_Pr']; ?></a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price"><?php echo $produit['Price_Pr']; ?> DT</div>
                                </div>
                        </div>
                        <?php } ?>
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                        
                    
                    </div>
                </div>
            </section>
            <!-- Blog Area End -->
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


    </body>

    </html>