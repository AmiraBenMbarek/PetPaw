<?php
	include '../Controller/crudC3.php';
	$crudC=new crudC3();
	$crudC->supprimercrud3($_GET["id"]);
	header('Location:Gestion_sign.php');
?>