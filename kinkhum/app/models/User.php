<?php
	/**
	* 
	*/
	class User
	{
		private $id;	
		private $username;
		private $name;
		private $email;
		private $password;
		private $status;


		function __construct()
		{
			$this->id = 'null';
			$this->username = 'null';
			$this->name ='null';
			$this->email = 'null';
			$this->password = 'null';
			$this->status = 'null';
	

			# code...
		}


		function getUsername(){
			return $this->username;

		}

		function getName(){
			return $this->name;
		}

		function getEmail(){
			return $this->email;
		}

		function getPassword(){
			return $this->password;
		}

		function getStatus(){
			return $this->status;
		}

		function setUsername($value){
			$this->username = $value;
		}

		function setName($value){
			$this->name = $value;
		}

		function setEmail($value){
			$this->email = $value;
		}

		function setPassword($value){
			$this->password = $value;
		}

		function setStatus($value){
			$this->status = $value;
		}

		//}

		
		function set($username,$password,$name){
			$newUser->username = Input::get('username');
			$newUser->password = Hash::make(Input::get('password'));
			$newUser->name = Input::get('name'); 
			
			$newUser->save();
			return 'ok';
		}

		function save(){
			$userDB = new Userdb();
			$userDB->username  = $this->username;
			$userDB->name      = $this->name;
			$userDB->password  = $this->password;
			$userDB->name      = $this->name;
			$userDB->status    = $this->status;
			$userDB->save();

		}


	function getById($id){
			$userDB = Userdb::find($id);
			$this->username = $userDB->username;
			$this->password = $userDB->password;
			$this->name     = $userDB->name;
			$this->status   = $userDB->status;
		}


	}


  ?>


