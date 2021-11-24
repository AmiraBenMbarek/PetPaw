<?php
    include_once '../controller/productC.php';
    $productC = new productC();
    $productC->deleteProduct($_POST["ID_Pr"]);

        header('Location:products.php');

?>