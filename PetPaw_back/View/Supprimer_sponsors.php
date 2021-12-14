<?php

    include_once '../Controller/sponsorsC.php';
	$sponsorsC = new sponsorsC();
    $sponsorsC->supprimersponsors($_GET["id_sp"]);
	header('Location:gestion_sponsors.php');
?>





