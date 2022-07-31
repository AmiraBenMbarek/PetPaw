<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';

    $productC = new productC();

    $mail=$_POST['send_mail'];

    $cart_items=$productC->displayCart($_SESSION["sessId"]["id"]);
    foreach($cart_items as $cart){
        $productC->addOrder($cart['ID_Pr'],$cart['prix_total'],$cart['qte_panier'],$cart['id_panier'],$_SESSION["sessId"]["id"]);
    }

    $message = "Thank you for purchasing from our shop

    Your order was placed successfully
    ";
    
        $cart_items=$productC->displayCart($_SESSION["sessId"]["id"]);
        foreach($cart_items as $cart){
        $message .= $cart['qte_panier']." x ".$cart['nom_panier']."     " .$cart['prix_total']." DT
    ";
        }
    
        mail($mail,'Order Confirmed',$message,'From: mirabm48@gmail.com');

        
    header("Location:orders.php");
?>