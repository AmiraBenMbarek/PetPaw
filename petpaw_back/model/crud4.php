<?php
	class rdv {
		private $id_rdv=null;
		private $id_animal=null;
		private $names=null;
		private $dates=null;
		private $email=null;
		private $phone=null;
	

		function __construct($id_rdv, $id_animal, $names, $dates,$email,$phone){
            $this->id_rdv=$id_rdv;
			$this->id_animal=$id_animal;
			$this->names=$names;
			$this->dates=$dates;
			$this->email=$email;
			$this->phone=$phone;
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function getid_rdv(){
			return $this->id_rdv;
		}
		function getid_animal(){
			return $this->id_animal;
		}
		function getnames(){
			return $this->names;
		}
		function getdates(){
			return $this->dates;
		}
		function getemail(){
			return $this->email;
		}
		function getphone(){
			return $this->phone;
		}
	
		
		////////////////////////////////////////
		function setid_rdv(string $id_rdv){
			$this->id_rdv=$id_rdv;
		}
		function setid_animal(string $id_animal){
			$this->id_animal=$id_animal;
		}
	
		function setnames(string $names){
			$this->names=$names;
		}
		function setdates(string $dates){
			$this->dates=$dates;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function setphone(string $phone){
			$this->phone=$phone;
		}
		
		
	}


?>