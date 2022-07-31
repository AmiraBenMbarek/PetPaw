

<?php
	class events{
		private $id=null;
		private $nom=null;
		private $lieu=null;
		private $descrip_lieu=null;
		private $date=null;
		private $date_fin=null;
		private $nb_p=null;
		private $descrip_ev=null;
		private $spot=null;
		//private $id_admin=null;
		function __construct($id, $nom,$lieu,$descrip_lieu,$date, $date_fin,$nb_p,$descrip_ev,$spot){
            $this->id=$id;
			$this->nom=$nom;
			$this->lieu=$lieu;
			$this->descrip_lieu=$descrip_lieu;
			$this->date=$date;
			$this->date_fin=$date_fin;
			$this->nb_p=$nb_p;
			$this->descrip_ev=$descrip_ev;
			$this->spot=$spot;
			//$this->id_admin=$id_admin;
			
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

		function getlieu(){
			return $this->lieu;
		}

		function getdescrip_lieu(){
			return $this->descrip_lieu;
		}

		function getdate(){
			return $this->date;
		}
		function getdate_fin(){
			return $this->date_fin;
		}
		function getnb_p(){
			return $this->nb_p;
		}
		function getdescrip_ev(){
			return $this->descrip_ev;
		}
		function getspot()
		{
			return $this->spot;
		}
		// function getid_admin(){
		// 	return $this->id_admin;
		// }
		


		function setNom(string $nom){
			$this->nom=$nom;
		}
	
		function setlieu(string $lieu){
			$this->lieu=$lieu;
		}
		function setdescrip_lieu(string $descrip_lieu){
			$this->descrip_lieu=$descrip_lieu;
		}
		function setdate(string $date){
			$this->date=$date;
		}
		function setdate_fin(string $date_fin){
			$this->date_fin=$date_fin;
		}
		
		function setnb_p(string $nb_p){
			$this->nb_p=$nb_p;
		}
		function setdescrip_ev(string $descrip_ev){
			$this->descrip_ev=$descrip_ev;
		}
		function setspot(string $spot){
			$this->spot=$spot;
		}
		// function setid_admin(string $id_admin){
		// 	$this->id_admin=$id_admin;
		// }
	
		
		
	}


?>