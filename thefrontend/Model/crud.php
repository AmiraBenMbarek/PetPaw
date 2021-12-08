<?php
	class gestion_animaux{
		private $id=null;
		private $nom_Animal=null;
		private $race=null;
		private $genre=null;
		private $poid=null;
		private $date_recuperation=null;
		private $endroit_recuperation=null;
		private $img_animal=null;
		private $idrg=null;

		function __construct($id, $nom_Animal, $race, $genre,$poid,$date_recuperation,$endroit_recuperation,$idrg,$img_animal){
            $this->id=$id;
			$this->nom_Animal=$nom_Animal;
			$this->race=$race;
			$this->genre=$genre;
			$this->poid=$poid;
			$this->date_recuperation=$date_recuperation;
			$this->endroit_recuperation=$endroit_recuperation;
			$this->img_animal=$img_animal;
			$this->idrg=$idrg;
		
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function getid(){
			return $this->id;
		}
		function getnom_Animal(){
			return $this->nom_Animal;
		}
		function getrace(){
			return $this->race;
		}
		function getgenre(){
			return $this->genre;
		}
		function getpoid(){
			return $this->poid;
		}
		function getdate_recuperation(){
			return $this->date_recuperation;
		}
		function getendroit_recuperation(){
			return $this->endroit_recuperation;
		}
		function getimg_animal(){
			return $this->img_animal;
		}
		function getidrg(){
			return $this->idrg;
		}
		
		////////////////////////////////////////
		function setnom_Animal(string $nom_Animal){
			$this->nom_Animal=$nom_Animal;
		}
		function setrace(string $race){
			$this->race=$race;
		}
		function setgenre(string $genre){
			$this->genre=$genre;
		}
		function setpoid(string $poid){
			$this->poid=$poid;
		}
		function setdate_recuperation(string $date_recuperation){
			$this->date_recuperation=$date_recuperation;
		}
		function setendroit_recuperation(string $endroit_recuperation){
			$this->endroit_recuperation=$endroit_recuperation;
		}
		function setimg_animal(string $img_animal){
			$this->img_animal=$img_animal;
		}
		function setidrg(string $idrg){
			$this->idrg=$idrg;
		}
		
		
	}


?>