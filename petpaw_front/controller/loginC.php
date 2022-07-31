<?php
session_start();
include('../config.php');
if(isset($_POST['login']))
{
$status='1';
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT email,password FROM users WHERE email=:email and password=:password and status=(:status)";
$db = config::getConnexion();
$query= $db -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':status', $status, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$sql2 ="SELECT id FROM users WHERE email=:email and password=:password and status=(:status)";
$query2= $db -> prepare($sql2);
$query2-> bindParam(':email', $email, PDO::PARAM_STR);
$query2-> bindParam(':password', $password, PDO::PARAM_STR);
$query2-> bindParam(':status', $status, PDO::PARAM_STR);
$query2-> execute();
$result=$query2->fetch();

if($query->rowCount() > 0)
{
$_SESSION['sessId']=$result;


echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details Or Account Not Confirmed');</script>";

}

}

?>