<!DOCTYPE html>
<html>

<?php 
class servic{
	
	
	function nbpage()
		{
			$db = config::getConnexion();
			$sql = 'SELECT COUNT(*) AS nb_articles FROM `enclos`;';
			$query = $db->prepare($sql);
			$query->execute();
			$result = $query->fetch();
			$nbArticles = (int) $result['nb_articles'];
			$pages = ceil($nbArticles / 2);
			return $pages;
			
		}
		function recupererser($id){
			$sql="SELECT * from  `enclos`  where id=$id";
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
	function afficherenclos(){
		if(isset($_GET['page']) && !empty($_GET['page'])){
			$currentPage = (int) strip_tags($_GET['page']);
		}else{
			$currentPage = 1;
		}
		$sql = 'SELECT COUNT(*) AS nb_articles FROM `enclos` ;';
		$db=config::getConnexion();
		$query = $db->prepare($sql);
		$query->execute();
		$result = $query->fetch();
		$nbArticles = (int) $result['nb_articles'];
		$parPage = 2;
		$pages = ceil($nbArticles / $parPage);
		$premier = ($currentPage * $parPage) - $parPage;
		$sql = 'SELECT * FROM `enclos` LIMIT :premier, :parpage;';
		$query = $db->prepare($sql);
		$query->bindValue(':premier', $premier, PDO::PARAM_INT);
		$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
		$query->execute();
		$articles = $query->fetchAll(PDO::FETCH_ASSOC);
		return $articles;
		// $sql="SELECT * FROM enclos";
		// $db=config::getConnexion();
		// try{
		// 	$liste=$db->query($sql);
		// 	return $liste;
		// }
		// catch(Exception $e){
		// 	die("erreur:".$e->getMessage());
		// }
	}
	   function supprimerenclos($numadh){
 		$sql="DELETE  FROM enclos WHERE `id`= $numadh ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
			die("erreur:".$e->getMessage());
   }
}

 function Modifierser($ser)
 {
 $sqlc= "UPDATE `enclos` SET superficie=:superficie,dure=:datee WHERE id=:id  ";
 $db=config::getConnexion();
 try{ $recipesStatement = $db->prepare($sqlc);
 	$recipesStatement->execute([ 'superficie' =>$ser->getsuperficie(),
	 							 'datee' =>$ser->getduree(), 		            
 					              'id' =>$ser->getid(),
 		         ]);
 }
  catch(Exception $e){ 
	
 			 die("erreur:".$e->getMessage());
 }

 }

 function Ajouter($ser){
 $sql= "INSERT INTO `enclos` VALUES (:id, :superficie,:duree,:image,:id_type,:id_admin)";
 $db=config::getConnexion();
 try{ $recipesStatement = $db->prepare($sql);
 	$recipesStatement->execute([ 
		            'id'=>$ser->getid(),
 		            'superficie' =>$ser->getsuperficie(),
 		            'duree'=>$ser->getduree(),
 					'image'=>$ser->getimage(),
 		            'id_type'=>$ser->getid_type(),
					 'id_admin'=>$ser->getid_admin()
 		           
 	]);
  }
  catch(Exception $e){ 
 	
 			 die("erreur:".$e->getMessage());

 }

 }

 function recherche($search_value)
    {
        $sql="SELECT * FROM typee where id like '%$search_value%' or nom like  '%$search_value%' ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function trierenclos1()
	{
		$sql = "SELECT * from enclos ORDER BY superficie ASC";
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


 function trierenclos()
 {
	 $sql = "SELECT * from enclos ORDER BY superficie DESC";
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
 


function affichertype(){
 	$sql="SELECT * FROM typee

 	";
 	$db=config::getConnexion();
 	try{
 		$liste=$db->query($sql);
 		return $liste;
 	}
 	catch(Exception $e){
 		die("erreur:".$e->getMessage());
 	}
 }
   function supprimertype($numadh){
$sql="DELETE  FROM typee WHERE `id`= $numadh ";
	$db=config::getConnexion();
	try{
		$liste=$db->query($sql);

	}catch(Exception $e){
		die("erreur:".$e->getMessage());
}
}

function Modifiertype($ser)
{
$sqlc= "UPDATE `typee` SET nom=:nom WHERE id=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
$recipesStatement->execute([ 'nom'=>$ser->getnom(),
				'id'=>$ser->getid(),
			 ]);
}
catch(Exception $e){ 
 
		 die("erreur:".$e->getMessage());
}

}

function Ajoutertype($ser){
$sql= "INSERT INTO `typee` VALUES (:id, :nom)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
$recipesStatement->execute([ 'id'=>$ser->getid(),
				'nom' =>$ser->getnom(),



]);
}
catch(Exception $e){ 
 
		 die("erreur:".$e->getMessage());

}

}
}
?>
</html>