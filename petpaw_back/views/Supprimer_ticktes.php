<?php

    include_once '../Controller/ticktesC.php';
    include '../controller/loginC.php';

	$ticktesC = new ticktesC();
    $ticktesC->supprimerticktes($_GET["id_tk"]);
	header('Location:gestion_ticktes.php');
?>





