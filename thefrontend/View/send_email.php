<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'includes/Exception.php';
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = "tls" ;              //Adresse IP ou DNS du serveur SMTP
$mail->Port = "587";   
$mail->Username   =  'onztwoz@gmail.com';    //Adresse email à utiliser
$mail->Password   =  'Qsdfghjklmpoiuytreza123456789';         //Mot de passe de l'adresse email à utiliser                       //Port TCP du serveur SMTP
$mail->SMTPAuth = "true";                        //Utiliser l'identification
$mail->CharSet = 'UTF-8';
$name = $_POST['email_from_alias'];
$email = 'onztwoz@gmail.com';
$message = $_POST['body'];
$from = $_POST["email_from"];
$csubject=$_POST["object"];

//////////////////////////////////////////////////
      $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
      $body .= "<table style='width: 100%;'>";
      $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
      $body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
//////////////////////////////////////////////////

$mail->setFrom= trim($_POST["email_from"]);                //L'email à afficher pour l'envoi

$mail->AddAddress(trim($email));

$mail->Subject    =  $_POST["object"];                      //Le sujet du mail
$mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
$mail->Body = $body; 	       //Texte brut
$mail->IsHTML(true);                                  //Préciser qu'il faut utiliser le texte brut

if (!$mail->send()) {
      echo $mail->ErrorInfo;
} else{
      echo 'Message bien envoyé';
}
header('Location:contact.php');
?>