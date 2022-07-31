<?php 

// include 'Controller/servicec.php';
//include'Controller/produitc.php';
include '../controller/loginC.php';

  $db=config::getConnexion();
  $recipesStatement = $db->prepare('SELECT * FROM enclos');
  $recipesStatement->execute();
  $prod=$recipesStatement->fetchall();


  $db=config::getConnexion();
  $recipesStatement = $db->prepare('SELECT * FROM typee');
  $recipesStatement->execute();
  $liste=$recipesStatement->fetchall();
  

?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Room</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

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
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
<?php include 'includes/header.php'; ?>

    <main>
        <!--? Hero Start -->
       <br>
       <br>
       <br>
       


        <!-- Hero End -->
        <!--? Our Cases Start -->
        <div class="our-cases-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10 ">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Caring for animals</h2>
                            <p class="pl-20 pr-20">
                              </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                <?php  foreach ($prod as $res) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                            <a href=""><?php echo"<img src='images/".$res['image']."'>" ?></a>
                            </div>
                            <div class="cases-caption">
                            <h3><a href=""><h4><?php echo $res['superficie'] ?>m²</h4></a></h3>
                            <p class="blog-meta">
								<span class="author"><h4><?php echo $res['dure'] ?></h4></span>
								
							</p>

                               
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>
     
                   
     
       
    </main>
    <?php include 'includes/footer.php'; ?>

      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/animated.headline.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>
</html>