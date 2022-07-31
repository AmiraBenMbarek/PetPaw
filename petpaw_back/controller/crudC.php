<?php
	include_once '../Model/crud.php';
	class crudC {
		function tagrace1(){
			$sql="SELECT race, COUNT(*)
			FROM `gestion_animaux`
			GROUP BY race
			ORDER BY COUNT(*) DESC
			LIMIT 2";
			
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}
		function taglieu(){
			$sql="SELECT endroit_recuperation, COUNT(*)
			FROM `gestion_animaux`
			GROUP BY endroit_recuperation
			ORDER BY COUNT(*) DESC
			LIMIT 2";
			
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}
		function affichercrudtest(){
			$sql="SELECT race, COUNT(*)
			FROM `gestion_animaux`
			GROUP BY race
			ORDER BY COUNT(*) DESC
			LIMIT 1";
			
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}
		function nbpage()
		{
			
			// On se connecte à là base de données

			$db = config::getConnexion();
			// On détermine le nombre total d'articles
			$sql = 'SELECT COUNT(*) AS nb_articles FROM `gestion_animaux`;';
			
			// On prépare la requête
			$query = $db->prepare($sql);
			
			// On exécute
			$query->execute();
			
			// On récupère le nombre d'articles
			$result = $query->fetch();
			
			$nbArticles = (int) $result['nb_articles'];
			
			// On détermine le nombre d'articles par page
			$parPage = 2;
			
			// On calcule le nombre de pages total
			$pages = ceil($nbArticles / $parPage);
			return $pages;
			
		}
	
		function affichercrud(){
			// On détermine sur quelle page on se trouve

			if(isset($_GET['page']) && !empty($_GET['page'])){
				$currentPage = (int) strip_tags($_GET['page']);
			}else{
				$currentPage = 1;
			}
			// On se connecte à là base de données
			$db = config::getConnexion();
			// On détermine le nombre total d'articles
			$sql = 'SELECT COUNT(*) AS nb_articles FROM `gestion_animaux` ;';

			// On prépare la requête
			$query = $db->prepare($sql);

			// On exécute
			$query->execute();

			// On récupère le nombre d'articles
			$result = $query->fetch();

			$nbArticles = (int) $result['nb_articles'];

			// On détermine le nombre d'articles par page
			$parPage = 3;

			// On calcule le nombre de pages total
			$pages = ceil($nbArticles / $parPage);

			// Calcul du 1er article de la page
			$premier = ($currentPage * $parPage) - $parPage;

			$sql = 'SELECT * FROM `gestion_animaux` ORDER BY date_recuperation DESC LIMIT :premier, :parpage;';

			// On prépare la requête
			$query = $db->prepare($sql);

			$query->bindValue(':premier', $premier, PDO::PARAM_INT);
			$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

			// On exécute
			$query->execute();

			// On récupère les valeurs dans un tableau associatif
			$articles = $query->fetchAll(PDO::FETCH_ASSOC);
			return $articles;

		}
		function tri($type){
			$sql="SELECT * FROM `gestion_animaux` ";
			$sql .=$type;

			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function afficherback(){
			$sql="SELECT * FROM `gestion_animaux` ";

			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
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
		function ajoutercrud($gestion_animaux,$id){
			$sql="INSERT INTO gestion_animaux (nom_Animal,race,genre,poid,date_recuperation,endroit_recuperation,idrg,img_animal,id_admin,id_enclos) 
			VALUES (:nom_Animal,:race, :genre, :poid, :date_recuperation, :endroit_recuperation,:idrg,:img_animal,:id_admin,:id_enclos)";
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
					'img_animal' => $gestion_animaux->getimg_animal(),
					'id_admin' => $id,
					'id_enclos' => $gestion_animaux->getid_enclos()
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
						img_animal=:img_animal,
						id_admin= :id_admin,
						id_enclos=:id_enclos
						
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
					'img_animal' => $gestion_animaux->getimg_animal(),
					'id_admin' => $gestion_animaux->getid_admin(),
					'id_enclos' => $gestion_animaux->getid_enclos()
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>