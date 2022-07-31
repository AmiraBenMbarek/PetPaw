<?php
	class sponsors{
		private $id=null;
		private $nom=null;
		private $type=null;
		private $numero=null;
        private $email=null;
		private $inves=null;
		private $image=null;
		private $descrip=null;
		private $id2_ev=null;
		function __construct($id, $nom,$type, $numero ,$email, $inves, $image,$descrip,$id2_ev){
            $this->id=$id;
			$this->nom=$nom;
			$this->type=$type;
			$this->numero=$numero;
			$this->email=$email;
			$this->inves=$inves;
			$this->image=$image;
			$this->descrip=$descrip;
			$this->id2_ev=$id2_ev;
			
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

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
		function getnumero(){
			return $this->numero;
		}
		function getinves(){
			return $this->inves;
		}
		function getimage(){
			return $this->image;
		}

		function getdescrip(){
			return $this->descrip;
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
		function setnumero(string $numero){
			$this->numero=$numero;
		}
		function settype(string $type){
			$this->type=$type;
		}
		function setinves(string $inves){
			$this->inves=$inves;
		}
		function setimage(string $image){
			$this->image=$image;
		}
	
		function setdescrip(string $descrip){
			$this->descrip=$descrip;
		}
		function setid_ev(string $id2_ev){
			$this->id2_ev=$id2_ev;
		}

	}


?>