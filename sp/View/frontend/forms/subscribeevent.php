


<?php

$to=$_POST['emailsub'];
$subject='Subscribe succeed';
$message='Merci de vous être abonné(e). 
Nous vous envoyons de notification a chaque nouvel evenement .

PetPaw';
$headers="From: yahyasmt@gmail.com ";
  
  $mail_sent= mail($to,$subject,$message,$headers);

  if($mail_sent==true)
  {
    echo"Mail Sent";
    header('Location:../events.php#subscribe');
   
    

  }
  else {
      echo "Mail failed";
      header('Location:events.php#subscribe');
      
  }


?>