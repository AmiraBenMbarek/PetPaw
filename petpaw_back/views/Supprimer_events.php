<?php

    include_once '../Controller/eventsC.php';
    include '../controller/loginC.php';

	$eventsC = new eventsC();
    $eventsC->supprimerevents($_GET["id_ev"]);
	header('Location:gestion_events.php');
?>





