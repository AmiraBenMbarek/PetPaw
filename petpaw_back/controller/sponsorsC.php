<?php
	include_once '../Model/sponsors.php';
	class sponsorsC {
		function affichersponsors(){
			$sql="SELECT * FROM sponsors";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimersponsors($id){
			$sql="DELETE FROM sponsors WHERE id_sp=:id_sp";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_sp', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutersponsors($sponsors,$id){
			$sql="INSERT INTO sponsors (id_sp,name_sp,type_sp,numtel_sp,mail_sp,inves_sp,image_sp,descrip_sp,id2_ev,id_admin) 
			VALUES (:id_sp,:name_sp,:type_sp,:numtel_sp,:mail_sp,:inves_sp,:image_sp,:descrip_sp,:id2_ev,$id)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_sp' => $sponsors->getid(),
					'name_sp' => $sponsors->getNom(),
					'type_sp' => $sponsors->gettype(),
					'numtel_sp' => $sponsors->getnumero(),
                    'mail_sp'=> $sponsors-> getEmail(),
                    'inves_sp'=> $sponsors->getinves(),
					'image_sp'=> $sponsors->getimage(),
                    'descrip_sp'=> $sponsors->getdescrip(),
					'id2_ev'=> $sponsors->getid_ev()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperersponsors($id){
			$sql="SELECT * from sponsors where id_sp=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$sponsors=$query->fetch();
				return $sponsors;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiersponsors($sponsors, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE sponsors SET 

						name_sp= :name_sp,
						type_sp= :type_sp,
						numtel_sp= :numtel_sp,
						mail_sp= :mail_sp,
						inves_sp= :inves_sp,
						image_sp= :image_sp,
						descrip_sp= :descrip_sp,
						id2_ev= :id2_ev
					WHERE id_sp= :id_sp'
				);
				$query->execute([
					
					
					'name_sp' => $sponsors->getNom(),
					'type_sp' => $sponsors->gettype(),
					'numtel_sp' => $sponsors->getnumero(),
                    'mail_sp'=> $sponsors-> getEmail(),
                    'inves_sp'=> $sponsors->getinves(),
					'image_sp'=> $sponsors->getimage(),
                    'descrip_sp'=> $sponsors->getdescrip(),
                    'id2_ev'=> $sponsors->getid_ev(),					
					'id_sp' => $id

					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


		function triersponsorsDESC()
		{
		$sql = "SELECT * from sponsors ORDER BY type_sp DESC";
		$db = config::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
		}


		function triersponsorsASC()
		{
		$sql = "SELECT * from sponsors ORDER BY type_sp ASC";
		$db = config::getConnexion();
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