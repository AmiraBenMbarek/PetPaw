<?php
class productM{ 

    // private $Date_ord=null;
    private $Quantity_ord=null;
    private $Price_ord=null;

    function __construct( $Quantity_ord, $Price_ord){
        // $this->Date_ord=$Date_ord;
        $this->Quantity_ord=$Quantity_ord;
        $this->Price_ord=$Price_ord;
    }
    

    public function getDate_ord(){
        return $this->Date_ord;
    }

    public function getQuantity_ord(){
        return $this->Quantity_ord;
    }

    public function getPrice_ord(){
        return $this->Price_ord;
    }

    function setDate_ord(string $Date_ord){
        $this->Date_ord=$Date_ord;
    }
    function setQuantity_ord(string $Quantity_ord){
        $this->Quantity_ord=$Quantity_ord;
    }
    function setPrice_ord(string $Price_ord){
        $this->Price_ord=$Price_ord;
    }
}
?>