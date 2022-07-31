<?php 
include_once '../model/type.php';
include_once'../controller/servicec.php';
include '../controller/loginC.php';

if(!isset($_POST['id'])||!isset($_POST['nom']))
{
	echo "erreur de ";
}

$service=new type ( $_POST['id'],$_POST['nom']);


$produitc=new servic();
$produitc->Ajoutertype($service);
header('location:type.php');


?>