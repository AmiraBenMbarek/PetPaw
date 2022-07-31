<?php
    include_once '../controller/productC.php';
    include '../controller/loginC.php';
    
    $id=$_POST["ID_Pr"];
    $comment=$_POST["comment_pr"];
    $productM=null;
    $productC=new productC();
    $name = $productC->getUserName($_SESSION["sessId"]["id"]);

if (isset($id) &&
    isset($comment))
    {
        $productM= new productM($comment);
        $productC->addComment($productM,$id,$_SESSION["sessId"]["id"],$name['name']);  
        header("Location:product.php?ID_Pr=$id");
    }


?>