<?php

include '../config.php';
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

        // try{
        //     $liste = $db->query($sql);
        //     return $liste;
        // }
        // catch(Exception $e){
        //     die('erreur: '. $e->getMessage());
        // }
			
			
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

    function addOrder($id,$price,$qte,$id_panier){
        $sql="INSERT INTO orders (ID_ord , Date_ord,Quantity_ord, Price_ord, ID_Pr,id_panier)
			VALUES (NULL,CURDATE(),$qte,$price, $id, $id_panier)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
            }
        }

    function getOrder(){
        $sql="SELECT * from orders";
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

    function addComment($productM,$id){
        $sql="INSERT INTO comments (id_cmt  ,comments, ID_Pr)
			VALUES (NULL,:comments,$id)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					//'ID_Pr' => $productM->getid(),
					'comments' => $productM->getComment()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
        }

        function afficherComments(){
            $sql="SELECT * FROM `comments`";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('erreur: '. $e->getMessage());
            }
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
    //$total_products = $pdo->query('SELECT * FROM products')->rowCount();

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

    function addProductToCart($id,$nom,$price,$quantity)
    {
        $sql="INSERT INTO panier (id_panier ,nom_panier, qte_panier,prix_total, ID_Pr)
			VALUES (NULL,'$nom',$quantity, $price, $id)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
            }
    }

    function displayCart(){
        $sql="SELECT * FROM `panier`";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }

    function totalCart()
    {
        $db = config::getConnexion();
        $sql="SELECT SUM(qte_panier * prix_total) AS prix FROM panier";
        $query = $db->prepare($sql);
        $query->execute();
        $total = $query->fetch();
        return $total;
        
    }

    function deleteCart(){
        $sql="DELETE FROM panier";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('error:'. $e->getMessage());
        }
    }
}

?>

