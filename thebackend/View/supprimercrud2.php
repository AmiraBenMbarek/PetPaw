<?php
	include '../Controller/crudC2.php';
	$crudC=new crudC2();
	$crudC->supprimercrud2($_GET["id_regime"]);
	header('Location:Gestion_régimes.php');
?>