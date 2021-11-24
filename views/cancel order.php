<?php
    include_once '../controller/productC.php';
    
    $productC = new productC();

    $productC->cancelOrder($_POST["ID_ord"]);

        header('Location:pet supplies.php');

?>