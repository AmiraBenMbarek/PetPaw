<?php
	include_once '../Model/crud4.php';
	class crudC4 {
		function affichercrud4(){
			$sql="SELECT * FROM `RDV`";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutercrud4($sign){
			$sql="INSERT INTO `rdv` (id_animal,names,dates,email,phone) 
			VALUES (:id_animal,:names, :dates,:email,:phone)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'id_animal' => $sign->getid_animal(),
					'names' => $sign->getnames(),
					'dates' => $sign->getdates(),
					'email' => $sign->getemail(),
					'phone' => $sign->getphone()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercrud4($id){
			$sql="SELECT * from `RDV` where id=$id";
			$db = config::getConnexion();
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