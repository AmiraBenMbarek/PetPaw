<?php
include_once '../model/productM.php';
class productC
{
    function afficherproduits(){
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        }else{
            $currentPage = 1;
        }
        $sql="SELECT COUNT(*) AS nbr_pages FROM `product`";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        $nbr_pages = (int) $result['nbr_pages'];
        //$pages = ceil($nbr_pages / 9);
        $page_number = ($currentPage * 9) - 9;

        $sql = "SELECT * FROM `product` LIMIT $page_number, 9;";
			$query = $db->prepare($sql);
			$query->execute();
		    return $query->fetchAll();			
    }

    function getProduct($id){
        $sql="SELECT * from product where ID_Pr= $id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $produit=$query->fetch();
            return $produit;
        } 
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }

    function addOrder($id,$price,$qte,$id_panier,$id_user){
        $sql="INSERT INTO orders (ID_ord , Date_ord,Quantity_ord, Price_ord, ID_Pr,id_panier ,id_client)
			VALUES (NULL,CURDATE(),$qte,$price, $id, $id_panier, $id_user)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
            }
        }

    function getOrder($id_user){
        $sql="SELECT * from orders where id_client = $id_user";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $produit=$query->fetchAll();
            return $produit;
        }
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }

    function cancelOrder($id){
        $sql="DELETE FROM orders WHERE ID_ord=:ID_ord";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':ID_ord', $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('error:'. $e->getMessage());
        }
    }
    
    function getOrder2($id){
        $sql="SELECT * from orders where ID_ord = $id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $produit=$query->fetch();
            return $produit;
        }
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }

    function editOrder($id,$qte,$price){
        
        $sql="UPDATE orders SET 
                Quantity_ord = $qte,
                Price_ord = $qte*$price
            WHERE ID_ord = $id";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute();			
        }
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }

    function priceAsc()
    {
        $sql="SELECT * FROM `product` ORDER BY `product`.`Price_Pr` ASC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }
    
    function priceDesc()
    {
        $sql="SELECT * FROM `product` ORDER BY `product`.`Price_Pr` DESC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }

    function search($nom){
        $sql="SELECT * from product where Name_Pr = '$nom'";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }

    function getUserName($id_user)
    {
        $sql="SELECT name FROM `users` where id = $id_user";
            $db = config::getConnexion();
            $query = $db->prepare($sql);
			$query->execute();
		    return $query->fetch();
    }

    function addComment($productM,$id,$id_user,$nom){
        $sql="INSERT INTO comments (id_cmt ,userName ,comments, ID_Pr, id_user)
			VALUES (NULL,'$nom',:comments,$id, $id_user)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'comments' => $productM->getComment()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
        }

        function afficherComments($id,$id_user){
            $sql="SELECT comments as comment, userName as nom FROM `comments` where ID_Pr = $id";
            $db = config::getConnexion();
            $query = $db->prepare($sql);
			$query->execute();
		    return $query->fetchAll();
        }

    function nameAsc()
    {
        $sql="SELECT * FROM `product` ORDER BY `product`.`Name_Pr` ASC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }

    function nameDesc()
    {
        $sql="SELECT * FROM `product` ORDER BY `product`.`Name_Pr` DESC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }

    function typeAsc()
    {
        $sql="SELECT * FROM `product` ORDER BY `product`.`Type_Pr` ASC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }

    function typeDesc()
    {
        $sql="SELECT * FROM `product` ORDER BY `product`.`Type_Pr` DESC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }

    function pagination()
	{
        $db = config::getConnexion();
        $sql = 'SELECT COUNT(*) AS nbr_pages FROM `product`;';
        $query = $db->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        $nbr_pages = (int) $result['nbr_pages'];
        $pages = ceil($nbr_pages / 9);
        return $pages;
	}

    function addProductToCart($id,$nom,$price,$quantity,$id_user)
    {
        $sql="INSERT INTO panier (id_panier ,nom_panier, qte_panier,prix_total, ID_Pr, id_user )
			VALUES (NULL,'$nom',$quantity, $price, $id,$id_user)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
            }
    }

    function displayCart($id_user){
        $sql="SELECT * FROM `panier` where id_user = $id_user";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }

    function totalCart($id_user)
    {
        $db = config::getConnexion();
        $sql="SELECT SUM(qte_panier * prix_total) AS prix FROM panier where id_user = $id_user";
        $query = $db->prepare($sql);
        $query->execute();
        $total = $query->fetch();
        return $total;
        
    }

    function deleteCart($id){
        $sql="DELETE FROM panier where id_panier = $id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('error:'. $e->getMessage());
        }
    }

    function addToWishlist($id,$id_user)
    {
        $sql="INSERT INTO wishlist (id_wishlist ,id_pr ,id_user)
			VALUES (NULL,$id,$id_user)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
            }
    }

    function displayWishlist($id_user){
        $sql="SELECT * FROM `wishlist` where id_user = $id_user";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }
}

?>

