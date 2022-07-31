<?php
    include_once '../Controller/crudC.php';
    include '../Controller/crudC2.php';
    include '../Controller/crudC4.php';
    include '../Controller/servicec.php';
    include '../controller/loginC.php';

    $error = "";

    // create crud
    $crud = null;
    $crud2 = null;
    $crud3 = null;
    // create an instance of the controller
    $crudC = new crudC();
     
    ///////////////////
    $crudC2=new crudC2();
    $crudC4=new crudC4();
    $crudC3=new servic();
    $listecrud2=$crudC2->affichercrud2(); 
    $listecrud3=$crudC3->afficherenclos();
    $crud4 = null;

    if (
		isset($_POST["id_animal"]) &&
        isset($_POST["names"]) && 
        isset($_POST["dates"])&&
        isset($_POST["email"]) &&
        isset($_POST["phone"])&&
        isset($_POST["id_user"])
    ) {
        if (
            !empty($_POST["id_animal"]) &&
            !empty($_POST["names"]) && 
            !empty($_POST["dates"])&&
            !empty($_POST["email"]) &&
            !empty($_POST["phone"])&&
            !empty($_POST["id_user"])
        ) {
            $crud4 = new RDV(
                $_POST['id_rdv'],
			        	$_POST['id_animal'],
                $_POST['names'],
                $_POST['dates'],
                $_POST['email'],
                $_POST['phone'],
                $_POST['id_user']
            );
            $crudC4->ajoutercrud4($crud4);
            header('Location:adoptioncenter.php');
        }
        else
            $error = "Missing information";
            
    }

    ///////////////
   



?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>animal individuel</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/hamburgers.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/styleadopt.css">
</head>

<body>
  
<?php include 'includes/header.php'; ?>

  <main>

    <!--? Blog Area Start -->
    <?php
			if (isset($_POST['id'])){
				$crud = $crudC->recuperercrud($_POST['id']);
				
		?>
    <section class="blog_area single-post-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 posts-list">
            <div class="single-post">
              <h2 style="color: #2d2d2d;"><?php echo $crud['nom_Animal']; ?>
              </h2>
              <div class="feature-img">
                
                <div class="row gallery-item">
                <?php echo'<img src="assets/img/'.$crud['img_animal'].'"width="750" height="375" alt="image">' ?>
              </div>
              <div class="blog_details">

                <ul class="blog-info-link mt-3 mb-4">
                  <li><a href="trie.php?type= WHERE race LIKE '<?php echo $crud['race']; ?>'"> <?php echo $crud['race']; ?></a></li>
                  <li><a href="trie.php?type= WHERE endroit_recuperation LIKE '<?php echo $crud['endroit_recuperation']; ?>'"> <?php echo $crud['endroit_recuperation']; ?></a></li>
                </ul>
                <p class="excert">endroit de recuperation: <?php echo $crud['endroit_recuperation']; ?>
                                    <br>race: <?php echo $crud['race']; ?></p>
                <?php
			          if (isset($_POST['idrg'])){
		          		$crud2 = $crudC2->recuperercrud2($_POST['idrg']);
				
		            ?> 
                 <p class="excert">Regime alimentaire: <br> nom du regime: <?php echo $crud2['nom_regime']; ?>
                                    <br>nb repas: <?php echo $crud2['nbr_repas']; ?></p>

                <?php
			          }
		            ?> 
                
                <?php
			          if (isset($_POST['id_enclos'])){
		          		$crud3 = $crudC3->recupererser($_POST['id_enclos']);
				
		            ?> 
                 <p class="excert">l'enclos: <br> superfice: <?php echo $crud3['id']; ?></p>
                 <div class="row gallery-item">
                <?php echo'<img src="images/'.$crud3['image'].'"width="750" height="375" alt="image">' ?>
              </div>

                <?php
			          }
		            ?>                
                <ul class="blog-info-link">
                  <li>
                    <!-- Trigger/Open The Modal -->
                    <button id="myBtn" class="genric-btn success radius">rendez-vous</button>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                      <!-- Modal content -->
                      <div class="modal-content" >
                        <span class="close">&times;</span>
                        <form action="" method="post">
                        <input type="hidden" name="id_rdv" required value="0"
                              class="single-input">
                                <?php
                              if (isset($_POST['id'])){
                                $crud = $crudC->recuperercrud($_POST['id']);
                                
	                             	?>
                                   <input type="hidden" name="id_animal" required value=" <?php echo $crud['id']; ?>"
                              class="single-input">
                                <?php
                                  }		
                                ?>   
                          <div class="mt-10">
                            <input type="text" name="names" placeholder="First and last Name"
                              onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required
                              class="single-input">
                          </div>
                          <div class="mt-10">
                            <input type="date" name="dates" placeholder="date" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'date'" required class="single-input">
                          </div>
                          <div class="mt-10">
                            <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Email address'" required class="single-input">
                          </div>
                          <div class="mt-10">
                            <input type="number" minlength="8" name="phone" placeholder="phone" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'phone'" required class="single-input">
                          </div>
                          <div class="mt-10">
                            <input type="hidden" minlength="8" name="id_user" value="<?php echo $_SESSION["sessId"]["id"]?>">
                          </div>
                          <br>
                          <!-- <button onclick="makePDF()" class="btn btn-primary">Print</button> -->
                          <input onclick="window.print()"  type="submit" id="download_pdf" value="rendez-vous" class="genric-btn success radius">
                        </form>
                      </div>

                    </div>


                  </li>
                </ul>

              </div>
            </div>
            <br>
            <div class="navigation-top">

              <ul class="social-icons">
                <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>

              </ul>
            </div>
           
          </div>



        </div>
      </div>
    </section>
    <?php
		}
		?>
    <!-- Blog Area End -->
  </main>
  <?php include 'includes/footer.php'; ?>
  <!-- Scroll Up -->
  <div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
  </div>

  <!-- JS here -->

  <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="./assets/js/popupind.js"></script>
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
                                            function makePDF(){
                                                var printMe=document.getElementById('rdv');
                                                var wme=window.open("","","width:700,height:900");
                                                wme.document.write(printMe.outerHTML);
                                                wme.document.close();
                                                wme.focus();
                                                wme.print();
                                                wme.close();
                                            }
                                        </script>
</body>

</html>