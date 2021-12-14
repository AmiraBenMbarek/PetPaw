<?php
  
    // include_once '../Model/sponsors.php';
    include_once '../Controller/sponsorsC.php';
    include_once '../Model/events.php';
    include_once '../Controller/eventsC.php';
   

    $error = "";

    $sponsors = null;

    $sponsorsC = new sponsorsC();
  

	$listesponsors=$sponsorsC->affichersponsors(); 
    $events = null;

    $eventsC = new eventsC();
  

	$listeevents=$eventsC->afficherevents(); 

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PetPaw</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">


  
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  

  <!-- css index -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- css index icon -->
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <!-- css index navbar -->
  <link rel="stylesheet" href="assets/css/slicknav.css">




  <!-- Template Main CSS File -->
  <link href="assets/css/events.css" rel="stylesheet">
  

   



</head>

<body>

  <!-- ======= Header ======= -->
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
                                              <li><a href="events.html">events</a>
                                                  <ul class="submenu">
                                                      <li><a href="events.html#speakers">speakers</a></li>
                                                      <li><a href="events.html#schedule">schedule</a></li>
                                                      <li><a href="events.html#venue">venue</a></li>
                                                      <li><a href="events.html#hotels">hotels</a></li>
                                                      <li><a href="events.html#gallery">gallery</a></li>
                                                  </ul>
                                              </li>
                                              <li><a href="contact.html">Contact</a></li>
                                              <li> <a >Translate</a>
                                               <ul class="submenu">
                                               <div id="google_translate_element"></div>
                                                <script type="text/javascript">
                                                function googleTranslateElementInit() {
                                                  new google.translate.TranslateElement({pageLanguage: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                                }
                                                </script>
                                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                                 </ul>

                                             </li>
                                          </ul>
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
  </header><!-- End Header -->
    <main>
     
        <section id="speakers-details">
            <div class="container">
              <div class="section-header">
                <h2>Sponsors Details</h2>
                <p>Sponsors Event</p>
              </div>
             
              <?php
                if (isset($_POST['id_sp'])){
                     $sponsors = $sponsorsC->recuperersponsors($_POST['id_sp']);
		        ?>
                 <br>
                 <br>
                    <div class="row">
                            <div class="col-md-6">
                            
                            <?php echo'<img src="../../PetPaw_back/View/assets/img/supporters/'.$sponsors['image_sp'].'"width="480;" height="300" alt="image" class="img-fluid">'  ?>
                            
                            </div>
                            
                            <div class="col-md-6">
                                <div class="details">

                                    
                                    <div>
                                    <h2 style="display: inline">Name: </h2> <h4 style="display: inline"><?php echo $sponsors['name_sp']; ?></h4>
                                    </div>
                                    <br>
                                    <div>
                                    <h2 style="display: inline">Type:</h2> <h4 style="display: inline"><?php echo $sponsors['type_sp']; ?></h4>
                                    </div>
                                    <br>
                                    <div>
                                    <h2 style="display: inline">Number:</h2> <h4 style="display: inline"><?php echo $sponsors['numtel_sp']; ?></h4>
                                    </div>
                                    <br>
                                    <div>
                                    <h2 style="display: inline">Mail:</h2> <h4 style="display: inline"><?php echo $sponsors['mail_sp']; ?></h4>
                                    </div>
                                    <br>
                                    <div>
                                    <h2 style="display: inline">Investissement:</h2> <h4 style="display: inline"><?php echo $sponsors['inves_sp']; ?> $</h4>
                                    </div>
                                    <br>    
                                    <div>
                                    <h2 style="display: inline">Description:</h2> <h4 style="display: inline"><?php echo $sponsors['descrip_sp']; ?></h4>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>

                            </div>
                        
            
                    </div>
                    <?php } ?>
                  
                </div>
      
          </section>
  







    
                   
     
       
    </main>
   <!-- ======= Footer ======= -->
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
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
</footer><!-- End  Footer -->


   <!-- Scroll Up -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

 

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/events.js"></script>



  

  <!-- JS here  index -->
 <!-- JS here -->

 <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
 <!-- Jquery, Popper, Bootstrap -->
 <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>

 <!-- Jquery Mobile Menu -->
 <script src="./assets/js/jquery.slicknav.min.js"></script>


 <script src="./assets/js/slick.min.js"></script>

 <script src="./assets/js/navbarforevent.js"></script>

</body>

</html>