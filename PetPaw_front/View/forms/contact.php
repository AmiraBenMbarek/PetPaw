<?php
$to="yahyasmt@gmail.com";
$subject=$_POST['subject'];
$name=$_POST['name'];
$message="Name: ".$name."
".$_POST['message'];

$headers=$_POST['email']; 
  $mail_sent= mail($to,$subject,$message,$headers);

  if($mail_sent==true)
  {
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location:../events.php#contact');

  }
  else {
      echo "Mail failed"; 
      header('Location:../events.php#contact');

      
  }

?>

