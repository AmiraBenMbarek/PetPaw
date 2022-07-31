<?php
class enclos{
	
private $id;
private $superficie;
private $duree;
private $image;
private $id_type;
private $id_admin;

public  function __construct($id,$nom,$image,$prix,$id_type,$id_admin)
{
	 $this->id=$id;
    $this->superficie=$nom;
    $this->image=$image;
    $this->duree=$prix;
    $this->id_type=$id_type;
    $this->id_admin=$id_admin;


}

 
function getid(){ 
   return $this->id;
}
function getsuperficie(){
   return $this->superficie;
}


function getduree() {
   return $this->duree;
}


function getimage() {
   return $this->image;
}   

function getid_type() {
   return $this->id_type;
}

function getid_admin() {
   return $this->id_admin;
}


}
class en{
   private  $id ;
   private  $superficie ;
   private $duree;

public  function __construct($id,$prix,$£DATE)
{
   $this->id=$id;
   $this->superficie=$prix;
   $this->duree=$£DATE;

}
function getid(){
   return $this->id;
}

function getsuperficie() {
   return $this->superficie;
}


function getduree() {
   return $this->duree;
}


}




?>