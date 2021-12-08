<?php

	include '../Controller/crudC.php';
    include_once '../Model/crud.php';
    include '../Controller/crudC2.php';
    include_once '../Model/crud2.php';
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $currentPage = (int) strip_tags($_GET['page']);
    }else{
        $currentPage = 1;
    }

	$crudC=new crudC();
    $crudCC=new crudC();
	$listecrud=$crudC->affichercrud(); 
    $pages=$crudCC->nbpage();
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
        isset($_POST["img_animal"])
    ) {
        if (
            !empty($_POST["nom_Animal"]) &&
            !empty($_POST["race"]) && 
            !empty($_POST["genre"])&&
            !empty($_POST["poid"]) &&
            !empty($_POST["date_recuperation"]) && 
            !empty($_POST["endroit_recuperation"])&&
            !empty($_POST["idrg"])&&
            !empty($_POST["img_animal"])
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
                $_POST['img_animal']
            );
            $crudC->ajoutercrud($crud);
            header('Location:Gestion_animaux.php');
        }
        else
            $error = "Missing information";
            
    }
     ///////////////////
     $crudC2=new crudC2();
     $listecrud2=$crudC2->affichercrud2(); 

     $crudC3=new crudC();
     $listecrud3=$crudC3->tagrace1(); 
     $crudC4=new crudC();
     $listecrud4=$crudC4->taglieu(); 
     
    //  $crud2 = null;
 
    //  if (
    //      isset($_POST["nom_regime"]) &&
    //      isset($_POST["type_nourriture"]) && 
    //      isset($_POST["nbr_repas"])
    //  ) {
    //      if (
    //          !empty($_POST["nom_regime"]) &&
    //          !empty($_POST["type_nourriture"]) && 
    //          !empty($_POST["nbr_repas"])
    //      ) {
    //          $crud2 = new regime_animaux(
    //              $_POST['id_regime'],
    //              $_POST['nom_regime'],
    //              $_POST['type_nourriture'],
    //              $_POST['nbr_repas']
    //          );
    //          $crudC2->ajoutercrud2($crud2);
    //          header('Location:Gestion_régimes.php');
    //      }
    //      else
    //          $error = "Missing information";
    //  }
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Front-end</title>
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
    <link rel="stylesheet" href="assets/css/styleadopt.css">
    <style>
        .dark-mode {
    background-color: black;
    color: white;
  }
        </style>
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
                                                <li><a href="Room.html">Rooms</a></li>
                                                <li><a href="adoptioncenter.html">Adoption</a>
                                                    <ul class="submenu">
                                                        <li><a href="elements.html">Cats</a></li>
                                                        <li><a href="elements.html">Dogs</a></li>
                                                        <li><a href="elements.html">More</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="pet supplies.html">Pet Supplies</a></li>
                                                <li><a href="blog.html">Shipping</a></li>
                                                <li><a href="projects.html">Events</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            
                                                <li><div id="google_translate_element"></div>
                                            <li>
                                            <script type="text/javascript">
                                            function googleTranslateElementInit() {
                                            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                                            }
                                            </script>

                                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
                                            </ul>
                                            <button onclick="switchdark()">Toggle dark mode</button>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="page de connexion.html" class="btn header-btn">Join Us Now</a>
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
    
    <main>
        
        <div class="our-cases-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div>
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                        
                            <h2>Adoption center</h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form method="get" action="search.php">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                        <input type="search" name="terme" class="form-control" placeholder='Search for an animal' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                      
                                    </div>
                                    </div>
                                </div>
                                <input name = "s" class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit" value="search">
                            </form>
                        </aside>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="assets/img/gallery/case22.png" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">cats in safety</a></h3>
                                <p>with your presious help, we save everyday an amount number of little kitten in danger and you give them a lovely family.</p>
                                <!-- Progress Bar -->
                                <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="10"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- / progress -->
                                <div class="prices">
                                    <p><span>10 of 100</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="assets/img/gallery/case33.png" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">dogs in safety</a></h3>
                                <p>with your presious help, we save everyday an amount number of little puppies in danger and you give them a lovely family.</p>
                                <!-- Progress Bar -->
                                <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="50"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prices">
                                    <p><span>50 of 100</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases">
                            <div class="cases-img">
                                <img src="assets/img/gallery/case1.png" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">birds in safety</a></h3>
                                <p>with your presious help, we save everyday an amount number of little birds in danger and you give them a lovely family.</p>
                                <!-- Progress Bar -->
                                <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="40"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prices">
                                    <p><span>40 of 100</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="blog_area section-padding">
                <div class="container">
                    <div class="row">
                        <!-- right section -->
                        <div class="col-lg-4">
                            <div class="blog_right_sidebar">
                            <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="signalisationanimal.php" class="btn header-btn">report an animal</a>
                                    </div>
                                    <br>
                                <aside class="single_sidebar_widget post_category_widget">
                                    <h4 class="widget_title" style="color: #2d2d2d;">categories</h4>
                                    <ul class="list cat-list">
                                        <li>
                                        <a href="trie.php?type= WHERE race LIKE 'chat'">
                                                <p>cats</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="trie.php?type= WHERE race LIKE 'chien'">
                                                <p>dogs</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="trie.php?type= ORDER BY date_recuperation DESC">
                                                <p>par dates decendantes</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="trie.php?type= ORDER BY date_recuperation ASC">
                                                <p>par dates acendante</p>
                                            </a>
                                        </li>
                                       
    
                                    </ul>
                                </aside>
                                <aside class="single_sidebar_widget tag_cloud_widget">
                                    <h4 class="widget_title" style="color: #2d2d2d;">popular tags</h4>
                                    <ul class="list">
                                    <?php
                                    foreach($listecrud3 as $crud3){
                                   ?>       
                                        <li>
                                            <a href="trie.php?type= WHERE race LIKE '<?php echo $crud3['race']; ?>'"><?php echo $crud3['race']; ?></a>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        foreach($listecrud4 as $crud4){
                                        ?>       
                                        <li>
                                        <li>
                                        <a href="trie.php?type= WHERE endroit_recuperation LIKE '<?php echo $crud4['endroit_recuperation']; ?>'"><?php echo $crud4['endroit_recuperation']; ?></a>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </aside>
    
                              
                            </div>
                        </div>
                        <!-- left section -->
                        
                        <div class="col-lg-8 mb-5 mb-lg-0">
                            <div class="blog_left_sidebar">
                            <?php
				foreach($listecrud as $crud){
			                ?>
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                    <?php echo'<img src="thebackend/View/assets/images/'.$crud['img_animal'].'"width="750" height="375" alt="image">' ?>
                                        <div class="blog_item_date">
                                            <p>pick up day :</p>
                                            <h3><?php echo $crud['date_recuperation']; ?></h3>
                                        </div>
                                    </div>
                                    <div class="blog_details">
                                       
                                            <h2 class="blog-head" style="color: #2d2d2d;"><?php echo $crud['nom_Animal']; ?></h2>
                                        </a>
                                        <p>endroit de recuperation: <?php echo $crud['endroit_recuperation']; ?>
                                    <br>race: <?php echo $crud['race']; ?></p>
                                        <ul class="blog-info-link">
                                            
                                            <li><form method="POST" action="animalindividuel.php">
						                        <input type="submit" name="plsinfo" value="plus d'informations..." class="genric-btn success radius">
						                        <input type="hidden" value=<?PHP echo $crud['id']; ?> name="id">
                                                <input type="hidden" value=<?PHP echo $crud['idrg']; ?> name="idrg">
					                        </form></li>
                                        </ul>
                                    </div>
                                </article>
                                <?php
				            }
			                ?>      
                                 <nav>
                    <ul class="pagination">
                        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                            <a href="adoptioncenter.php?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                        </li>
                        <?php 
                        for($page = 1; $page <= $pages; $page++): ?>
                          <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                          <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                <a href="adoptioncenter.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                          <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                          <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <a href="adoptioncenter.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
                    </ul>
                </nav>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
               
            </section>
            
        </div>
        
        <!-- Blog Area End -->
    </main>
    <footer>
        <div class="footer-wrapper">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-35">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Animals are the angels of this earth.</p>
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
                                    <h4>SiteMap</h4>
                                    <ul>
                                        <li><a href="#">Rooms</a></li>
                                        <li><a href="#">Adoption</a></li>
                                        <li><a href="#">Pet Supplies</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">events</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact us</h4>
                                    <ul>
                                        <li><a href="#">petpaw@gmail.com</a></li>
                                        <li><a href="#">Avenue Habib Bourgiba</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li class="number"><a href="#">(216) 27086763</a></li>
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
                                        </script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by PetPaw
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
    <script src="./assets/js/popup.js"></script>
    <script src="./assets/js/dark.js"></script>
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

    <script>
        function switchdark() {
        var element = document.body;
        var element2 = document.h2;
        var element3 = document.p;
        element.classList.toggle("dark-mode");
        element2.classList.toggle("dark-mode");
        element3.classList.toggle("dark-mode");
        }
        </script>

</body>

</html>