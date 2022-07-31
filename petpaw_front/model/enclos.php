<?php
class enclos{
	
private $id;
private $superficie;
private $duree;
private $image;
private $id_type;

public  function __construct($id,$nom,$image,$prix,$id_cat)
{
	 $this->id=$id;
    $this->superficie=$nom;
    $this->image=$image;
    $this->duree=$prix;
    $this->id_type=$id_cat;
   


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