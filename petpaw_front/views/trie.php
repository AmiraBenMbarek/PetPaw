<?php
include '../Controller/crudC.php';
include_once '../Model/crud.php';
include '../controller/loginC.php';

$crudC=new crudC();
$listecrud=$crudC->tri($_GET["type"]);
$crud = null;

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
</head>

<body>
    
<?php include 'includes/header.php'; ?>
    
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
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="search" name="terme" class="form-control" placeholder='Search for an animal' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                      
                                    </div>
                                </div>
                                <button name = "s" class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                            </form>
                        </aside>
                    </div>
                </div>
               
            <section class="blog_area section-padding">
                <div class="container">
                    <div class="row">
                        <!-- right section -->
                        <div class="col-lg-4">
                            <div class="blog_right_sidebar">
                                
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
                                        <li>
                                            <a href="#">cats</a>
                                        </li>
                                        <li>
                                            <a href="#">dogs</a>
                                        </li>
                                        <li>
                                            <a href="#">birds</a>
                                        </li>
                                        <li>
                                            <a href="#">ill</a>
                                        </li>
                                        <li>
                                            <a href="#">tunis</a>
                                        </li>
                                        <li>
                                            <a href="#">ariana</a>
                                        </li>
                                        <li>
                                            <a href="#">broken wings</a>
                                        </li>
                                        <li>
                                            <a href="#">broken paws</a>
                                        </li>
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
                                    <?php echo'<img src="assets/img/'.$crud['img_animal'].'"width="750;" height="375" alt="image">' ?>
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
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        
        <!-- Blog Area End -->
    </main>
    <?php include 'includes/footer.php'; ?>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/popup.js"></script>
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