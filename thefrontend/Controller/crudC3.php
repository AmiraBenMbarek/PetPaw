<?php
	include '../config3.php';
	include_once '../Model/crud3.php';
	class crudC3 {
		function affichercrud3(){
			$sql="SELECT * FROM `sign`";
			$db = config3::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutercrud3($sign){
			$sql="INSERT INTO `sign` (email_from,email_from_alias,objects,body,race,endroit_recuperation) 
			VALUES (:email_from,:email_from_alias, :objects,:body,:race,:endroit_recuperation)";
			$db = config3::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'email_from' => $sign->getemail_from(),
					'email_from_alias' => $sign->getemail_from_alias(),
					'objects' => $sign->getobjects(),
					'body' => $sign->getbody(),
					'race' => $sign->getrace(),
					'endroit_recuperation' => $sign->getendroit_recuperation()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercrud3($id){
			$sql="SELECT * from `sign` where id=$id";
			$db = config3::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$adherent=$query->fetch();
				return $adherent;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		

	}
?>