<?php
	include '../Controller/crudC.php';
	$crudC=new crudC();
	$crudC->supprimercrud($_GET["id"]);
	header('Location:Gestion_animaux.php');
?>