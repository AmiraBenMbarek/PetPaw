<?php
    include_once '../controller/productC.php';

    $orderC = new productC();
    if (
        isset($_POST["ID_ord"]) && 
        isset($_POST["Quantity_ord"])
    ) {
        $orderC->editOrder($_POST["ID_ord"],$_POST['Quantity_ord']);
    }
    header("location:pet supplies.php");

?>