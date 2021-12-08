<?php
	class rdv{
		private $id=null;
		private $email_from=null;
		private $email_from_alias=null;
		private $objects=null;
		private $body=null;
		private $race=null;
		private $endroit_recuperation=null;

		function __construct($id, $email_from, $email_from_alias, $objects,$body,$race,$endroit_recuperation){
            $this->id=$id;
			$this->email_from=$email_from;
			$this->email_from_alias=$email_from_alias;
			$this->objects=$objects;
			$this->body=$body;
			$this->race=$race;
			$this->endroit_recuperation=$endroit_recuperation;
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function getid(){
			return $this->id;
		}
		function getemail_from(){
			return $this->email_from;
		}
		function getemail_from_alias(){
			return $this->email_from_alias;
		}
		function getobjects(){
			return $this->objects;
		}
		function getbody(){
			return $this->body;
		}
		function getrace(){
			return $this->race;
		}
		function getendroit_recuperation(){
			return $this->endroit_recuperation;
		}
		
		////////////////////////////////////////
		function setid(string $id){
			$this->id=$id;
		}
		function setemail_from(string $email_from){
			$this->email_from=$email_from;
		}
	
		function setemail_from_alias(string $email_from_alias){
			$this->email_from_alias=$email_from_alias;
		}
		function setobjects(string $objects){
			$this->objects=$objects;
		}
		function setbody(string $body){
			$this->body=$body;
		}
		function setrace(string $race){
			$this->race=$race;
		}
		function setendroit_recuperation(string $endroit_recuperation){
			$this->endroit_recuperation=$endroit_recuperation;
		}
		
		
	}


?>