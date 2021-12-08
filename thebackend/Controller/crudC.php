<?php
	include '../config.php';
	include_once '../Model/crud.php';
	class crudC {
		function affichercrud(){
			$sql="SELECT * FROM `gestion_animaux`";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimercrud($id){
			$sql="DELETE FROM `gestion_animaux` WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutercrud($gestion_animaux){
			$sql="INSERT INTO gestion_animaux (nom_Animal,race,genre,poid,date_recuperation,endroit_recuperation,idrg,img_animal) 
			VALUES (:nom_Animal,:race, :genre, :poid, :date_recuperation, :endroit_recuperation,:idrg,:img_animal)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'nom_Animal' => $gestion_animaux->getnom_Animal(),
					'race' => $gestion_animaux->getrace(),
					'genre' => $gestion_animaux->getgenre(),
					'poid' => $gestion_animaux->getpoid(),
					'date_recuperation' => $gestion_animaux->getdate_recuperation(),
					'endroit_recuperation' => $gestion_animaux->getendroit_recuperation(),
					'idrg' => $gestion_animaux->getidrg(),
					'img_animal' => $gestion_animaux->getimg_animal()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercrud($id){
			$sql="SELECT * from gestion_animaux where id=$id";
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
		
		function modifiercrud($gestion_animaux, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE gestion_animaux SET 
						id= :id, 
						nom_Animal= :nom_Animal, 
						race= :race, 
						genre= :genre,
						poid= :poid, 
						date_recuperation= :date_recuperation, 
						endroit_recuperation= :endroit_recuperation,
						idrg= :idrg,
						img_animal=:img_animal
						
					WHERE id= :id'
				);
				$query->execute([
					'id' => $gestion_animaux->getid(),
					'nom_Animal' => $gestion_animaux->getnom_Animal(),
					'race' => $gestion_animaux->getrace(),
					'genre' => $gestion_animaux->getgenre(),
					'poid' => $gestion_animaux->getpoid(),
					'date_recuperation' => $gestion_animaux->getdate_recuperation(),
					'endroit_recuperation' => $gestion_animaux->getendroit_recuperation(),
					'idrg' => $gestion_animaux->getidrg(),
					'img_animal' => $gestion_animaux->getimg_animal()
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>