<?php
class productM{ 

    // private $Date_ord=null;
    private $comment=null;
    //private $Price_ord=null;

    function __construct( $comment){
        $this->comment=$comment;
    }
    

    public function getComment(){
        return $this->comment;
    }

    // public function getQuantity_ord(){
    //     return $this->Quantity_ord;
    // }

    // public function getPrice_ord(){
    //     return $this->Price_ord;
    // }

    function setComment(string $comment){
        $this->comment=$comment;
    }
    // function setQuantity_ord(string $Quantity_ord){
    //     $this->Quantity_ord=$Quantity_ord;
    // }
    // function setPrice_ord(string $Price_ord){
    //     $this->Price_ord=$Price_ord;
    // }
}
?>