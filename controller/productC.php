<?php

include '../config.php';
// include_once '../model/productM.php';

class productC
{

    function afficherproduits(){
        $sql="SELECT * FROM `product`";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
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

    function addOrder($id,$price,$qte){
        $sql="INSERT INTO orders (ID_ord , Date_ord,Quantity_ord, Price_ord, ID_Pr)
			VALUES (NULL,CURDATE(),$qte,$price, $id)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
            }
        }

    function getOrder($id){
        $sql="SELECT * from orders where ID_Pr = $id";
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

    function editOrder($id,$qte){
        
        $sql="UPDATE orders SET 
                Quantity_ord = $qte
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
            //$sql->bindValue(':Name_Pr', $nom);
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }
}

?>

