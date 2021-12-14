<?php
	include '../config3.php';
	include_once '../Model/ticktes.php';
	class ticktesC {
		function afficherticktes(){
			$sql="SELECT * FROM ticktes";
			$db = config3::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerticktes($id){
			$sql="DELETE FROM ticktes WHERE id_tk=:id_tk";
			$db = config3::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_tk', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterticktes($ticktes){
			$sql="INSERT INTO ticktes ( name_tk,mail_tk,type_tk,id3_ev) 
			VALUES (:name_tk,:mail_tk,:type_tk,:id3_ev)";
			$db = config3::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					// 'id_tk ' => $ticktes->getid(),
					'name_tk' => $ticktes->getNom(),
					'mail_tk'=> $ticktes-> getEmail(),
					'type_tk' => $ticktes->gettype(),
					'id3_ev'=> $ticktes->getid_ev()

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererticktes($id){
			$sql="SELECT * from ticktes where id_tk =$id";
			$db = config3::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$ticktes=$query->fetch();
				return $ticktes;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierticktes($ticktes, $id){
			try {
				$db = config3::getConnexion();
				$query = $db->prepare(
					'UPDATE ticktes SET 

						name_tk= :name_tk,
						mail_tk= :mail_tk,
						type_tk= :type_tk,
						id3_ev=:id3_ev
					WHERE id_tk = :id_tk '
				);
				$query->execute([
					
					
					'name_tk' => $ticktes->getNom(),
					'mail_tk'=> $ticktes-> getEmail(),
					'type_tk' => $ticktes->gettype(),
                    'id3_ev'=> $ticktes->getid_ev(),
					
					'id_tk ' => $id

					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


		function trierticktesDESC()
		{
		$sql = "SELECT * from ticktes ORDER BY type_tk DESC";
		$db = config3::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
		}


		function trierticktesASC()
		{
		$sql = "SELECT * from ticktes ORDER BY type_tk ASC";
		$db = config3::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
	    }



	}
?>