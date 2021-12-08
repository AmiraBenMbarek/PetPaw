<?php
	class regime_animaux{
		private $id_regime=null;
		private $nom_regime=null;
		private $type_nourriture=null;
		private $nbr_repas=null;
		

		function __construct($id_regime, $nom_regime, $type_nourriture, $nbr_repas){
            $this->id_regime=$id_regime;
			$this->nom_regime=$nom_regime;
			$this->type_nourriture=$type_nourriture;
			$this->nbr_repas=$nbr_repas;
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function getid_regime(){
			return $this->id_regime;
		}
		function getnom_regime(){
			return $this->nom_regime;
		}
		function gettype_nourriture(){
			return $this->type_nourriture;
		}
		function getnbr_repas(){
			return $this->nbr_repas;
		}
		
		
		////////////////////////////////////////
		function setid_regime(string $id_regime){
			$this->id_regime=$id_regime;
		}
		function setnom_regime(string $nom_regime){
			$this->nom_regime=$nom_regime;
		}
		function settype_nourriture(string $type_nourriture){
			$this->type_nourriture=$type_nourriture;
		}
		function setnbr_repas(string $nbr_repas){
			$this->nbr_repas=$nbr_repas;
		}
		
		
		
	}


?>