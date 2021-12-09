<?php
    include_once '../controller/productC.php';

    $productC = new productC();

    $mail=$_POST['send_mail'];

    $cart_items=$productC->displayCart();
    foreach($cart_items as $cart){
        $productC->addOrder($cart['ID_Pr'],$cart['prix_total'],$cart['qte_panier'],$cart['id_panier']);
    }
    header("Location:orders.php?mail=$mail");
?>