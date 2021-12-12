<?php
    include_once '../controller/productC.php';

    $productC = new productC();
    // if (
	// 	isset($_GET['id_cart']) &&
    //     isset($_GET['name_cart']) &&
    //     isset($_GET['price_cart']) &&
	// 	isset($_GET['quantity_cart'])
    // ) {
        
    //     $productC->addProductToCart($_GET['id_cart'],$_GET['name_cart'],$_GET['price_cart'],$_GET['quantity_cart']);
    //     //header('Location:cart.php');
    // }

    if (
		isset($_GET['id_cart']) &&
        isset($_GET['name_cart']) &&
        isset($_GET['price_cart']) &&
		isset($_GET['quantity_cart'])
    ) {
        
        $productC->addProductToCart($_GET['id_cart'],$_GET['name_cart'],$_GET['price_cart'],$_GET['quantity_cart']);
        header('Location:cart.php');
    }
    
?>