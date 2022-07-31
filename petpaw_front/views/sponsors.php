<?php
  
    // include_once '../Model/sponsors.php';
    include_once '../Controller/sponsorsC.php';
    include_once '../Model/events.php';
    include_once '../Controller/eventsC.php';
    include_once '../Controller/loginC.php';

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

<?php include 'includes/header.php'; ?>

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
                            
                            <?php echo'<img src="assets/img/supporters/'.$sponsors['image_sp'].'"width="480;" height="300" alt="image" class="img-fluid">'  ?>
                            
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
   <?php include 'includes/footer.php'; ?>


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