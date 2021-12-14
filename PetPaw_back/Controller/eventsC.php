<?php
	include '../config2.php';
	include_once '../Model/events.php';
	class eventsC {
		function afficherevents(){
			$sql="SELECT * FROM events";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerevents($id){
			$sql="DELETE FROM events WHERE id_ev=:id_ev";
			$db = config2::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_ev', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterevents($events){
			$sql="INSERT INTO events (id_ev,nom_ev,lieu,descrip_lieu,date_ev,date_fin,nb_p,descrip_ev,spot) 
			VALUES (:id_ev,:nom_ev,:lieu,:descrip_lieu,:date_ev,:date_fin,:nb_p,:descrip_ev,:spot)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_ev' => $events->getid(),
					'nom_ev' => $events->getNom(),
					'lieu' => $events->getlieu(),
					'descrip_lieu' => $events->getdescrip_lieu(),
                    'date_ev'=> $events-> getdate(),
                    'date_fin'=> $events->getdate_fin(),
                    'nb_p'=> $events->getnb_p(),
					'descrip_ev'=> $events->getdescrip_ev(),
					'spot'=>$events->getspot()

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererevents($id){
			$sql="SELECT * from events where id_ev=$id";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$events=$query->fetch();
				return $events;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierevents($events, $id){
			try {
				$db = config2::getConnexion();
				$query = $db->prepare(
					'UPDATE events SET 
						id_ev= :id_ev,
						nom_ev= :nom_ev,
						lieu= :lieu,
						descrip_lieu= :descrip_lieu,
						date_ev= :date_ev,
						date_fin= :date_fin,
						nb_p= :nb_p,
						descrip_ev= :descrip_ev,
						spot= :spot
						
					WHERE id_ev= :id_ev'
				);
				$query->execute([
					
					'id_ev' =>$events->getid(),
					'nom_ev' => $events->getNom(),
					'lieu' => $events->getlieu(),
					'descrip_lieu' => $events->getdescrip_lieu(),
                    'date_ev'=> $events-> getdate(),
                    'date_fin'=> $events->getdate_fin(),
                    'nb_p'=> $events->getnb_p(),
					'descrip_ev'=>$events->getdescrip_ev(),
					'spot'=>$events->getspot()
					
					

					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function triereventsDESC()
		{
		$sql = "SELECT * from events ORDER BY date_ev DESC";
		$db = config2::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
		}


		function triereventsASC()
		{
		$sql = "SELECT * from events ORDER BY date_ev ASC";
		$db = config2::getConnexion();
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