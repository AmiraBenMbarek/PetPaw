<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';
    
    $productC = new productC();

    $productC->cancelOrder($_POST["ID_ord"]);

        header('Location:orders.php');

?>