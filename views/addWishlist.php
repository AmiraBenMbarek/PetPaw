<?php
    include_once '../controller/productC.php';

    $productC = new productC();

    if (
		isset($_GET['id_cart']) 
    ) {
        
        $productC->addToWishlist($_GET['id_cart']);
        header('Location:pet supplies.php');
    }
    
?>