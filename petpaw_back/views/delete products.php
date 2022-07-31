<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';

    $productC = new productC();
    $productC->deleteProduct($_POST["ID_Pr"]);

        header('Location:products.php');

?>