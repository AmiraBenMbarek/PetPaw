<?php

include '../config.php';
include_once '../model/productM.php';

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

    function ajouterProduit($productM){
        
        $sql="INSERT INTO product (ID_Pr, Name_Pr, Price_Pr, Quantity_Pr, Image_Pr, Description_Pr, Type_Pr, Category_Pr)
			VALUES (NULL,:Name_Pr,:Price_Pr, :Quantity_Pr,:Image_Pr, :Description_Pr,:Type_Pr, :Category_Pr)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					//'ID_Pr' => $productM->getid(),
					'Name_Pr' => $productM->getname(),
					'Price_Pr' => $productM->getprice(),
					'Quantity_Pr' => $productM->getquantity(),
					'Image_Pr' => $productM->getimage(),
					'Description_Pr' => $productM->getdescription(),
                    'Type_Pr' => $productM->gettype(),
					'Category_Pr' => $productM->getcategory()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
    }

    function retrieveProduit($id){
        $sql="SELECT * from product where ID_Pr= $id";
        
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            //$query -> bindValue(':id',$id);
            $query->execute();

            $produit=$query->fetch();
            return $produit;
        }
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }
    
    function modifierProduit($productM, $id){
        
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE product SET 
                    Name_Pr = :Name_Pr, 
                    Price_Pr = :Price_Pr, 
                    Quantity_Pr = :Quantity_Pr,
                    Image_Pr = :Image_Pr,
                    Type_Pr = :Type_Pr,
                    Category_Pr = :Category_Pr,
                    Description_Pr = :Description_Pr
                WHERE ID_Pr = :ID_Pr'
            );
            $query -> bindValue(':ID_Pr',$id);
           if( $query->execute([
                'ID_Pr'=> $id,
                'Name_Pr' => $productM->getname(),
                'Price_Pr' => $productM->getprice(),
                'Quantity_Pr' => $productM->getquantity(),
                'Image_Pr' => $productM->getimage(),
                'Description_Pr' => $productM->getdescription(),
                'Type_Pr' => $productM->gettype(),
                'Category_Pr' => $productM->getcategory()
            ])) echo 'sucess';
            else echo 'errrrrrrrrrrrrrror';
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    function deleteProduct($id){
        $sql="DELETE FROM product WHERE ID_Pr=:ID_Pr";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':ID_Pr', $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('error:'. $e->getMessage());
        }
    }

    function afficherOrders(){
        $sql="SELECT * FROM `orders`";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }

    function pie_chart()
    {
        $sql="SELECT count(`comments`.id_cmt) AS cmt,`product`.Name_Pr FROM `comments` JOIN `product` ON `comments`.ID_Pr = `product`.ID_Pr GROUP BY `product`.ID_Pr";
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