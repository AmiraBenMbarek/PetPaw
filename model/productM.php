<?php
class productM{ 

    private $name=null;
    private $price=null;
    private $quantity=null;
    private $image=null;
    private $description=null;
    private $type=null;
    private $category=null;

    function __construct($name, $price, $quantity, $image,$type,$category, $description){
        //$this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->quantity=$quantity;
        $this->image=$image;
        $this->type=$type;
        $this->category=$category;
        $this->description=$description;
    }
    
    /*public function getid(){
        return $this->id;
    }*/

    public function getname(){
        return $this->name;
    }

    public function getprice(){
        return $this->price;
    }

    public function getquantity(){
        return $this->quantity;
    }

    public function getimage(){
        return $this->image;
    }

    public function getdescription(){
        return $this->description;
    }

    public function gettype(){
        return $this->type;
    }

    public function getcategory(){
        return $this->category;
    }

    function setname(string $name){
        $this->name=$name;
    }
    function setprice(string $price){
        $this->price=$price;
    }
    function setquantity(string $quantity){
        $this->quantity=$quantity;
    }
    function setimage(string $image){
        $this->image=$image;
    }
    function setdescription(string $description){
        $this->description=$description;
    }
    function setcategory(string $category){
        $this->category=$category;
    }
    function settype(string $type){
        $this->descripttypeion=$type;
    }
}
?>