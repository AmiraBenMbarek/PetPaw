<?php 
include_once '../model/enclos.php';
include_once '../controller/servicec.php';
include '../controller/loginC.php';


if(!isset($_POST['id'])||!isset($_POST['superficie'])||!isset($_POST['dure']))
{
	echo "erreur de ";
}
echo $_POST['id_type'];
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['image']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png','jfif'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
                        echo "L'envoi a bien été effectué !.<br>"; 
                      //  echo  'uploads/' . basename($_FILES['screenshot']['name']);
                }
        }
} 

 $service=new enclos($_POST['id'],$_POST['superficie'],$_FILES['image']['name'],$_POST['dure'],$_POST['id_type'],$_POST['id_admin']);


   $produitc=new servic();
   $produitc->Ajouter($service);
   header('location:enclos.php');


?>

