<?php
	include '../Controller/crudC3.php';
	include '../controller/loginC.php';

	$crudC=new crudC3();
	$crudC->supprimercrud3($_GET["id"]);
	header('Location:Gestion_sign.php');
?>