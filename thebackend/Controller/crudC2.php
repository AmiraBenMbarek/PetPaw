<?php
	include '../config2.php';
	include_once '../Model/crud2.php';
	class crudC2 {
		function affichercrud2(){
			$sql="SELECT * FROM `regime_animaux`";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimercrud2($id_regime){
			$sql="DELETE FROM `regime_animaux` WHERE id_regime=:id_regime";
			$db = config2::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_regime', $id_regime);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutercrud2($regime_animaux){
			$sql="INSERT INTO regime_animaux (nom_regime,type_nourriture,nbr_repas) 
			VALUES (:nom_regime,:type_nourriture, :nbr_repas)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'nom_regime' => $regime_animaux->getnom_regime(),
					'type_nourriture' => $regime_animaux->gettype_nourriture(),
					'nbr_repas' => $regime_animaux->getnbr_repas()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercrud2($id_regime){
			$sql="SELECT * from regime_animaux where id_regime=$id_regime";
			$db = config2::getConnexion();
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
		
		function modifiercrud2($regime_animaux, $id_regime){
			try {
				$db = config2::getConnexion();
				$query = $db->prepare(
					'UPDATE regime_animaux SET 
						id_regime= :id_regime, 
						nom_regime= :nom_regime, 
						type_nourriture= :type_nourriture, 
						nbr_repas= :nbr_repas
						
					WHERE id_regime= :id_regime'
				);
				$query->execute([
					'id_regime' => $regime_animaux->getid_regime(),
					'nom_regime' => $regime_animaux->getnom_regime(),
					'type_nourriture' => $regime_animaux->gettype_nourriture(),
					'nbr_repas' => $regime_animaux->getnbr_repas()

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>