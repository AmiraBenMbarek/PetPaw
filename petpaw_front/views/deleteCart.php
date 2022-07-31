<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';
    
    $productC = new productC();

    $productC->deleteCart($_POST["id_panier"]);

        header('Location:cart.php');

?>