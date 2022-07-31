<?php 
include_once '../model/enclos.php';
include_once '../controller/servicec.php';
include '../controller/loginC.php';


if(!isset($_POST['id'])||!isset($_POST['superficie'])||!isset($_POST['dure']))
{
	echo "erreur de ";
}

$service=new en( $_POST['id'],$_POST['superficie'],$_POST['dure']);


$produitc=new servic();
$produitc->Modifierser($service);
header('location:enclos.php');


?>