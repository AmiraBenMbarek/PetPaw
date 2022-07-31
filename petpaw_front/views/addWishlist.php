<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';

    $productC = new productC();

    if (
		isset($_GET['id_cart']) 
    ) {
        
        $productC->addToWishlist($_GET['id_cart'],$_SESSION["sessId"]["id"]);
        header('Location:pet supplies.php');
    }
    
?>