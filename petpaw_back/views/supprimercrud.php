<?php
	include '../Controller/crudC.php';
	include '../controller/loginC.php';

	$crudC=new crudC();
	$crudC->supprimercrud($_GET["id"]);
	header('Location:Gestion_animaux.php');
?>