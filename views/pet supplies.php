<?php
    include_once '../controller/productC.php';

    $productC = new productC();

    $listeproduits=$productC->afficherproduits();
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
                                        <a href="index.html"><img src="assets/img/logo/logo2.png" alt=""></a>
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
                                                    <li class="active"><a href="#">Pet Supplies</a></li>

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
                <div class="col-lg-12">
                    <div class="breadcrumb__links" style="float:right;">
                        <a href="orders.php">Go to orders
                        <i class="fa fa-cart-arrow-down"></i></a>
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
                                                <input type="text" class="form-control" name="nom_pr" placeholder='Search By Name' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search By Name'">
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
                                    <h4 class="widget_title" style="color: #2d2d2d;">Sort</h4>
                                    <ul class="list cat-list">
                                        <li class="sidenav">
                                            <button class="dropdown_btn active">By Price 
                                            <i class="fa fa-caret-down"></i>
                                          </button>
                                            <div class="dropdown_container">
                                            <a href="tri_produits_par_prix_asc.php"><p>Ascending</p></a>
                                            <a href="tri_produits_par_prix_desc.php"><p>Descending</p></a>
                                            </div>
                                        </li>
                                        <li>
                                            <button class="dropdown_btn">By Type 
                                            <i class="fa fa-caret-down"></i>
                                          </button>
                                            <div class="dropdown_container">
                                                <p>Cats</p>
                                                <p>Dogs</p>
                                                <p>Birds</p>
                                                <p>Rabbits</p>
                                                <p>Horses</p>
                                            </div>
                                        </li>
                                        <li>
                                            <button class="dropdown_btn">By Name 
                                            <i class="fa fa-caret-down"></i>
                                          </button>
                                            <div class="dropdown_container">
                                                <p>Ascending (A-Z)</p>
                                                <p>Descending (Z-A)</p>
                                            </div>
                                            </a>
                                        </li>
                                        <li>
                                            <button class="dropdown_btn">By Category 
                                                <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown_container">
                                                <p>Toys</p>
                                                <p>Food</p>
                                                <p>Clothes</p>
                                                <p>More</p>
                                            </div>
                                            </a>
                                        </li>

                                    </ul>
                                </aside>
                                <script>
                                    var dropdown = document.getElementsByClassName("dropdown_btn");
                                    var i;

                                    for (i = 0; i < dropdown.length; i++) {
                                        dropdown[i].addEventListener("click", function() {
                                            this.classList.toggle("active");
                                            var dropdownContent = this.nextElementSibling;
                                            if (dropdownContent.style.display === "block") {
                                                dropdownContent.style.display = "none";
                                            } else {
                                                dropdownContent.style.display = "block";
                                            }
                                        });
                                    }
                                </script>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <?php
                            foreach($listeproduits as $produit){
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <?php echo '<a href="'."product.php?ID_Pr=". $produit['ID_Pr'].'">'?><img src="assets/img/gallery/<?php echo $produit['Image_Pr']; ?>"class="product__item__pic set-bg" height="360" width="270" alt="Image"></a>
                                
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
                                            <a href="index.html"><img src="assets/img/logo/logo2_footer2.png" alt=""></a>
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


    </body>

    </html>