<?php
require_once 'recaptcha/autoload.php';
if (isset($_POST['submitpost']))
{
if (isset($_POST['gRecaptchaResponse'])){
$recaptcha = new \ReCaptcha\ReCaptcha('6LfQKYUdAAAAAMT9wqLQdNeiaYfKO-Ae91LVHjsj');
$resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
                  ->verify($_POST['gRecaptchaResponse']);
if ($resp->isSuccess()) {
    // Verified!
} else {
    $errors = $resp->getErrorCodes();
}
}
}

include '../Controller/crudC3.php';
include_once '../Model/crud3.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'includes/Exception.php';
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
$crudC3=new crudC3();


$error = "";


$crud = null;

if (
    isset($_POST["email_from"]) &&
    isset($_POST["email_from_alias"]) && 
    isset($_POST["objects"])&&
    isset($_POST["body"])&&
    isset($_POST["race"])&&
    isset($_POST["endroit_recuperation"])
) {
    if (
        !empty($_POST["email_from"]) &&
        !empty($_POST["email_from_alias"]) && 
        !empty($_POST["objects"])&&
        !empty($_POST["body"]) && 
        !empty($_POST["race"])&&
        !empty($_POST["endroit_recuperation"])
    ) {
        $crud = new sign(
            $_POST['id'],
            $_POST['email_from'],
            $_POST['email_from_alias'],
            $_POST['objects'],
            $_POST['body'],
            $_POST['race'],
            $_POST['endroit_recuperation']
        );
        $crudC3->ajoutercrud3($crud);
        $mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = "tls" ;              //Adresse IP ou DNS du serveur SMTP
$mail->Port = "587";   
$mail->Username   =  'onztwoz@gmail.com';    //Adresse email à utiliser
$mail->Password   =  'Qsdfghjklmpoiuytreza123456789';         //Mot de passe de l'adresse email à utiliser                       //Port TCP du serveur SMTP
$mail->SMTPAuth = "true";                        //Utiliser l'identification
$mail->CharSet = 'UTF-8';
$name = $_POST['email_from_alias'];
$email = 'onztwoz@gmail.com';
$message = $_POST['body'];
$from = $_POST["email_from"];
$csubject=$_POST["objects"];

//////////////////////////////////////////////////
      $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
      $body .= "<table style='width: 100%;'>";
      $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
      $body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
//////////////////////////////////////////////////

        
$mail->setFrom= trim($_POST["email_from"]);                //L'email à afficher pour l'envoi

$mail->AddAddress(trim($email));

$mail->Subject    =  $_POST["objects"];                      //Le sujet du mail
$mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
$mail->Body = $body; 	       //Texte brut
$mail->IsHTML(true);                                  //Préciser qu'il faut utiliser le texte brut

if (!$mail->send()) {
      echo $mail->ErrorInfo;
} else{
      echo 'Message bien envoyé';
}
        header('Location:signalisationanimal.php');
    }
    else
        $error = "Missing information";
        
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Environmental</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.png" alt="">
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
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="what-do.html">What we Do</a></li>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
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
<main>
    <!--? Hero Start -->
  
    <!-- Hero End -->
    <!--?  Contact Area start  -->
    <section class="blog_area single-post-area section-padding">
   <div class="container">
   <h2>report an animal</h2>
    <div class="row">
    <div class="col-lg-8">
    <form class="form-contact contact_form" method="post" action=""> 
    <!-- <div class="col-sm-6">
                            <div class="form-group">
           <input class="form-control valid" type="email" name="email_to" maxlength="255" placeholder="your mail"/>
    </div>
            </div> -->
            <input class="form-control valid" type="hidden" name="id" maxlength="255" value="0"/>
            <div class="col-sm-6">
            <div class="form-group">
           <input class="form-control valid" type="email" name="email_from" maxlength="255" placeholder="your mail" />
            </div>
            </div>
            <div class="col-sm-6">
          <div class="form-group">
           <input class="form-control valid" type="text" name="email_from_alias" maxlength="255" placeholder="votre noms" />
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
           <input class="form-control valid" type="text" name="objects" maxlength="255" placeholder="Objet de l'email" />
            </div>
            </div>

            
           <div class="col-12">
            <div class="form-group">
           <textarea class="form-control w-100" cols="30" rows="9" name="body" placeholder="décriver l'endroit ou vous avez trouvez l'animal et son état et un moyen alternatif pour vous contacter"></textarea>
           </div>
           </div>
           
           <div class="col-sm-6">
            <div class="form-group">
           <input class="form-control valid" type="text" name="race" maxlength="255" placeholder="race de l'animal" />
            </div>
            </div>

            <div class="col-sm-6">
            <div class="form-group">
           <input class="form-control valid" type="text" name="endroit_recuperation" maxlength="255" placeholder="endroit_recuperation" />
            </div>
            </div>

           <div class="g-recaptcha" data-sitekey="6LfQKYUdAAAAAMqvwVHYD0BXeQ0MbIL0Zu6oxFNN"></div>
      <br/>

           <input type="submit" value="Submit" name="submitpost"/>
       </form>
        </div>
        </div>
        </div>
        </section>
    
    <!-- Contact Area End -->
    
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
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
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
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- JS here -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

    </body>

</html>