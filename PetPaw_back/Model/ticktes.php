<?php
	class ticktes{
		private $id=null;
		private $nom=null;
		private $email=null;
		private $type=null;
        private $id2_ev=null;
		function __construct($id,$nom,$email,$type,$id2_ev){
            $this->id=$id;
			$this->nom=$nom;
			$this->email=$email;
			$this->type=$type;
			$this->id2_ev=$id2_ev;
			
		}
        

		function getid(){
			return $this->id;
		}
		function getNom(){
			return $this->nom;
		}
		function getEmail(){
			return $this->email;
		}
		function gettype(){
			return $this->type;
		}
		function getid_ev(){
			return $this->id2_ev;
		}
		


		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setEmail(string $email){
			$this->email=$email;
		}
		function settype(string $type){
			$this->type=$type;
		}
		function setid_ev(string $id2_ev){
			$this->id2_ev=$id2_ev;
		}
		
	}


?>