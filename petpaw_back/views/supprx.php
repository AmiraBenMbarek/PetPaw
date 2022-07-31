<?php 

include_once '../controller/servicec.php';
include '../controller/loginC.php';


$produitc=new servic();
$prod=$produitc->supprimertype($_POST['id']);
//$catc=new produitC();
//$catc->supprimerproduit($sqlc);
header('location:type.php');

?>


