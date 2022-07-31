<?php
    include_once '../controller/productC.php';
    include('../controller/loginC.php');

    echo($_SESSION["sessId"]["id"]);

    $productC = new productC();

    if (
		isset($_GET['id_cart']) &&
        isset($_GET['name_cart']) &&
        isset($_GET['price_cart']) &&
		isset($_GET['quantity_cart'])
    ) {
        
        $productC->addProductToCart($_GET['id_cart'],$_GET['name_cart'],$_GET['price_cart'],$_GET['quantity_cart'],$_SESSION["sessId"]["id"]);
        header('Location:pet supplies.php');
    }
    
?>