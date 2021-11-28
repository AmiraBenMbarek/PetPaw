<?php
    include_once '../controller/productC.php';

    $id=$_POST["ID_Pr"];
    $comment=$_POST["comment_pr"];
    $productM=null;
    $productC=new productC();

if (isset($id) &&
    isset($comment))
    {
        $productM= new productM($comment);
        $productC->addComment($productM,$id);  
        header("Location:product.php?ID_Pr=$id");
    }


?>