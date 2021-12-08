<?php
  
    // include_once 'C:/xampp/htdocs/sp/Model/sponsors.php';
    include_once 'C:/xampp/htdocs/sp/Controller/sponsorsC.php';
    include_once 'C:/xampp/htdocs/sp/Model/events.php';
    include_once 'C:/xampp/htdocs/sp/Controller/eventsC.php';
   

    $error = "";

    $sponsors = null;

    $sponsorsC = new sponsorsC();
  

	$listesponsors=$sponsorsC->affichersponsors(); 
    $events = null;

    $eventsC = new eventsC();
  

	$listeevents=$eventsC->afficherevents(); 



  


?>
<?php
require_once('../calendar/utils/auth.php');


$sql = "SELECT id, title, description, start, end, color FROM emplois ";

$req = $auth->prepare($sql);
$req->execute();
$emplois = $req->fetchAll();

?>



<?php
require_once './recaptcha/autoload.php';

if (isset($_POST['submitform1'])) {

        if (isset($_POST['g-recaptcha-response'])) {

            $recaptcha = new \ReCaptcha\ReCaptcha('6LfrtXwdAAAAADZDjfC1z_fIywWHOr3gfhAGKAYv');
            $resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
                              ->verify($_POST['g-recaptcha-response']);
            if ($resp->isSuccess()) {
              echo('Captcha Valide ');
            } else {
                $errors = $resp->getErrorCodes();
                echo('Captcha InValide ');
                echo($errors);
            }
            
        }
        else {
          echo('Captcha non Rempli');
        }
         
}

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

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>


   <!-- (A) LOAD LIKE/DISLIKE BUTTON -->
    <link rel="stylesheet" href="like-dis-php/lidi.css"/>
    <script src="like-dis-php/lidi.js"></script>

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
                                              <li><a href="events.php">events</a>
                                                  <ul class="submenu">
                                                      <li><a href="events.php#speakers">speakers</a></li>
                                                      <li><a href="events.php#schedule">schedule</a></li>
                                                      <li><a href="events.php#venue">venue</a></li>
                                                      <li><a href="events.php#hotels">hotels</a></li>
                                                      <li><a href="events.php#gallery">gallery</a></li>
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

  <!-- ======= Hero Section ======= -->

  <?php
 foreach($listeevents as $events){

  if($events['spot']==2){
 ?>
  
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0"><?php echo $events['nom_ev']; ?><br><span>ADOPTION</span> Animals</h1>
      <p class="mb-4 pb-0"><?php echo $events['date_ev']; ?> TO <?php echo $events['date_fin']; ?>, <?php echo $events['lieu']; ?></p>
      <a href="https://www.youtube.com/watch?v=aX4KrV3_ZtY&t=9s" class="glightbox play-btn mb-4"></a>
      <!-- <a href="#about" class="about-btn scrollto">About The Event</a> -->
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p><?php echo $events['descrip_ev']; ?></p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p><?php echo $events['lieu']; ?></p> 
            <!-- Avenue Habib Bourguiba, Tunis -->
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p><?php echo $events['date_ev']; ?> TO <?php echo  $events['date_fin']; ?></p>
          </div>
            <!-- (B) RENDER LIKE/DISLIKE BUTTON HERE -->
            <div id="demowrap">
                                <!-- <img src="raspberry.jpg"/> -->
                                <div id="demo"></div>
                                </div>
                                 <!-- (C) PHP GET REACTIONS -->
                                <?php
                                require "like-dis-php/2-reactions.php";
                                $id = $events['id_ev']; // POST/PRODUCT/WHATEVER ID
                                $uid = 2; // USER ID, USE $_SESSION IN YOUR PROJECT
                                $reacts = $_REACT->get($id, $uid);
                                ?>

                                <!-- (D) GENERATE LIKE/DISLIKE BUTTON -->
                                <script>
                                lidi.create({
                                // (D1) LIKE/DISLIKE BUTTON SETTINGS
                                hWrap : document.getElementById("demo"),
                                status : <?=$reacts["user"]?>,
                                count : [<?=$reacts["react"][0]?>, <?=$reacts["react"][1]?>],

                                // (D2) UPDATE SERVER ON REACTION CHANGE
                                onChange : (status, recount) => {
                                    // FORM DATA
                                    var data = new FormData();
                                    data.append("id", <?=$id?>);
                                    data.append("react", status);

                                    // FETCH
                                    fetch("like-dis-php/4-ajax.php", { method: "POST", body: data })
                                    .then(res => res.json())
                                    .then((res) => {
                                    if (res.error) { alert(res.error); }
                                    else { recount(res); }
                                    })
                                    .catch((err) => { console.error(err); });
                                }
                                });
                                </script>


        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Event Speakers</h2>
          <p>Here are some of our speakers</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Brenden Legros</a></h3>
                <p>Quas alias incidunt</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Hubert Hirthe</a></h3>
                <p>Consequuntur odio aut</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Cole Emmerich</a></h3>
                <p>Fugiat laborum et</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Jack Christiansen</a></h3>
                <p>Debitis iure vero</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Alejandrin Littel</a></h3>
                <p>Qui molestiae natus</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                <p>Non autem dicta</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Speakers Section -->

    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

       
        <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
          necessitatibus voluptatem quis labore perspiciatis quia.</h3>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" >

         
            <?php foreach($emplois as $event){
              if( $event['start']<=$events['date_ev'] &&   $events['date_fin']>=$event['end']  ){
            ?>
            
                  <div class="row schedule-item">
                    <div class="col-md-2"><time><?php echo $event['start'] ?></time></div>
                    <div class="col-md-10">
                      <h4><?php echo $event['title']; ?></h4>
                      <p><?php echo $event['description']; ?></p>
                    </div>
                  </div>
                  <?php }}?>
           

          </div>
          

        </div>

      </div>

    </section><!-- End Schedule Section -->

    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location info and gallery</p>
        </div>

        <div class="row g-0">
          <div class="col-lg-6 venue-map">
            <?php echo $events['nb_p']; ?> 
        </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8 position-relative">
                <h3><?php echo $events['lieu']; ?></h3>
                <p><?php echo $events['descrip_lieu']; ?></p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/1.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/2.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/3.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/4.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/5.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/6.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/7.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/8.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Venue Section -->

    <!-- ======= Hotels Section ======= -->
    <section id="hotels" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Hotels</h2>
          <p>Her are some nearby hotels</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="assets/img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 1</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>0.4 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="assets/img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 2</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill-half-full"></i>
              </div>
              <p>0.5 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="assets/img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 3</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>0.6 Mile from the Venue</p>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Hotels Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a href="assets/img/gallery/1.jpg" class="gallery-lightbox"><img src="assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/2.jpg" class="gallery-lightbox"><img src="assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/3.jpg" class="gallery-lightbox"><img src="assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/4.jpg" class="gallery-lightbox"><img src="assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/5.jpg" class="gallery-lightbox"><img src="assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/6.jpg" class="gallery-lightbox"><img src="assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/7.jpg" class="gallery-lightbox"><img src="assets/img/gallery/7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/8.jpg" class="gallery-lightbox"><img src="assets/img/gallery/8.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Gallery Section -->

    <!-- ======= Supporters Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>
        
        <!-- <h4 class="">Gold Sponsors</h4>

        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a href="sponsors.php"><img src="assets/img/supporters/1.png" class="img-fluid"  alt=""   >
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a href="sponsors.php"><img src="assets/img/supporters/2.png" class="img-fluid" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a href="sponsors.php"><img src="assets/img/supporters/3.png" class="img-fluid" alt="">
            </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a href="sponsors.php"><img src="assets/img/supporters/4.png" class="img-fluid" alt="">
            </a>
            </div>
          </div>
        </div>
          
        <h4 class="">Platinum Sponsors</h4>

        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a href="sponsors.php"><img src="assets/img/supporters/5.png" class="img-fluid" alt="">
            </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a href="sponsors.php"><img src="assets/img/supporters/6.png" class="img-fluid" alt="">
            </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a href="sponsors.php"><img src="assets/img/supporters/7.png" class="img-fluid" alt="">
            </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a href="sponsors.php"><img src="assets/img/supporters/8.png" class="img-fluid" alt="">
            </a>
            </div>
          </div>

         </div>
        <h5 class="">Want to be a sponsor ? </h5>
        <a  class="btn">apply now</a> -->
       
        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
              <?php
                  foreach($listesponsors as $sponsors){
                    if($sponsors['id2_ev']==$events['id_ev']){
                 ?>
                 
                   
                   <div class="col-lg-3 col-md-4 col-xs-6">
                   <div class="supporter-logo">


                    <form method="POST" action="sponsors.php">
                              
                            
                      <input type="hidden" value=<?PHP echo $sponsors['id_sp']; ?> name="id_sp">
                                                                
                           
                       <button type="submit" style="color: transparent; background-color: transparent; border-color: transparent; " >
                       <?php echo'<img src="../assets/images/'.$sponsors['image_sp'].'"width="480;" height="300" alt="image" class="img-fluid">'  ?>
                       </button>
                       </form>
                            
                        </div>
                        </div>
                            
                           
            
                   
                    <?php }} ?>
                    </div>
                
                        
                      </div>

      </div>
      

    </section>
    <!-- End Sponsors Section -->

    <!-- =======  F.A.Q Section ======= -->
    <section id="faq">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">

            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </p>
                </div>
              </li>

            </ul>

          </div>
        </div>

      </div>

    </section><!-- End  F.A.Q Section -->

    <!-- ======= Subscribe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2>Subscribe</h2>
          <p>pour avoir plus de notification sur les événements merci de vous abandonner</p>
        </div>

        <form method="POST" action="forms/subscribeevent.php">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 d-flex">
              <input name="emailsub" type="email" class="form-control" placeholder="Enter your Email" required>
              <!-- <div class="g-recaptcha" data-sitekey="6LfrtXwdAAAAABEbEPgdA9_VX7-ct2Cs2tytSCqh"></div> -->
              <br>
              <button type="submit"  class="ms-2">Subscribe</button>
            </div>
          </div>
        </form>
        <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

      </div>
    </section><!-- End Subscribe Section -->

    <!-- ======= Buy Ticket Section ======= -->
    <section id="buy-tickets" class="section-with-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center">$150</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                <h6 class="card-price text-center">$250</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">$350</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>

      <!-- Modal Order Form -->
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <form method="POST" action="forms/tickets.php">
                
              <div class="form-group">
              <input type="hidden"  name="id_tk" id="id_tk"  value="0" class="form-control" required="">
              </div>
              
                <div class="form-group">
                  <input type="text" class="form-control" name="name_tk" placeholder="Your Name">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="mail_tk" placeholder="Your Email">
                </div>
                <div class="form-group mt-3">
                  <select id="type_tk" name="type_tk" class="form-select">
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="form-group">
              <input type="hidden"  name="id3_ev" id="id3_ev"  value="<?php echo $events['id_ev']; ?>" class="form-control" required="">
              </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>

            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </section><!-- End Buy Ticket Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Nihil officia ut sint molestiae tenetur.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>lot 13, Résidence Essalem II, Avenue Fethi Zouhir, Cebalat Ben Ammar 2083</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+216 92 371 716</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">petpaw@esprit.tn</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" >
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <br>
            <br>
            <div class="g-recaptcha " data-sitekey="6LfrtXwdAAAAABEbEPgdA9_VX7-ct2Cs2tytSCqh"></div>
              <br>
            <div class="text-center"><input value="Send Message" class="btn" name="submitform1" type="submit"></div>
          </form>
          
         
        </div>

      </div>
    </section><!-- End Contact Section -->


   
  </main><!-- End #main -->
  <?php }} ?>
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