<?php
session_start();
include('../config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$db = config::getConnexion();
$query= $db -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$sql2 ="SELECT id FROM admin WHERE UserName=:email and Password=:password";
$query2= $db -> prepare($sql2);
$query2-> bindParam(':email', $email, PDO::PARAM_STR);
$query2-> bindParam(':password', $password, PDO::PARAM_STR);
$query2-> execute();
$result=$query2->fetch();
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
$_SESSION['sessId']=$result;
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>