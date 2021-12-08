<?php

include_once 'C:/xampp/htdocs/sp/Model/ticktes.php';
  include_once 'C:/xampp/htdocs/sp/Controller/ticktesC.php';

  $ticktes = null;

  $ticktesC = new ticktesC();

  if (
   
    isset($_POST["name_tk"]) &&
    isset($_POST["mail_tk"])&&
    isset($_POST["type_tk"]) &&
    isset($_POST["id3_ev"])

) {
    if (
       
 
        !empty($_POST["name_tk"]) &&
        !empty($_POST["mail_tk"])&& 
        !empty($_POST["type_tk"]) &&
        !empty($_POST["id3_ev"])

    ) {
        $ticktes = new ticktes(
        $_POST["id_tk"],
        $_POST["name_tk"],
        $_POST["type_tk"],
        $_POST["mail_tk"],
        $_POST["id3_ev"]

        );
        $ticktesC->ajouterticktes($ticktes);
        
    }
    else
        $error = "Missing information";
}






// Recipient 
$to=$_POST['mail_tk']; 
 
// Sender 
$from ='yahyasmt@gmail.com'; 
$fromName = 'PetPaw'; 
 
// Email subject 
$subject = 'Tickets events PetPaw';  
 
// Attachment file QR
require_once '../phpqrcode/qrlib.php';

$path='../qrimages/';
$file=$path.uniqid().".png";

$text=$_POST["name_tk"].$_POST["mail_tk"].$_POST["type_tk"];
QRcode::png($text,$file,'L',10,2); 
 
// Email body content 
$htmlContent = ' 
    <h3>Tickets events PetPaw</h3> 
    <p>Salut '.$_POST["name_tk"].'
    Votre ticket est bien enregistrée de type '.$_POST['type_tk'].'.
    Vous trouvez votre ticket dans la pièce jointe.    

    Merci PetPaw
    </p> 
'; 
 


// Header for sender info 
$headers = "From: $fromName"." <".$from.">"; 
 

// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 



// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 



// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 



// Preparing attachment 
if(!empty($file) > 0){ 
    if(is_file($file)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($file,"rb"); 
        $data =  @fread($fp,filesize($file)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 





// Send email 
$mail = @mail($to, $subject, $message, $headers, $returnpath);  
 




// Email sending status 
if($mail==true)
  {
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location:../events.php#buy-tickets');

  }
  else {
      echo "Mail failed"; 
      header('Location:../events.php#buy-tickets');

      
  }













?>

