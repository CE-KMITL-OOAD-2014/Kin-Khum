<?php

	/**
	* 
	*/
	class Restaurant
	{
		private $id;	
		private $restaurant;
		private $type;
		private $detail;
		private $address;
		private $telephone;
		private $vote;
		private $image;


		function __construct(argument)
		{
			# code...
			$this->id = 'null';
			$this->restaurant = 'null';
			$this->type = 'null';
			$this->detail = 'null';
			$this->address = 'null';
			$this->telephone = 'null';
			$this->image= 'null';
			$this->vote = 'null';
		}

		function getRestaurant(){
			return $this->restaurant;

		}
		function getType(){
			return $this->type; 

		}
		function getDetail(){
			return $this->detail;
		}
		function getAddress(){
			return $this->address;
		}
		function getTelephone(){
			return $this->telephone;
		}
		function getImage(){
			return $this->image;
		}
		function getVote(){
			return $this->vote;
		}

		function setRestaurant($value){
			$this->restaurant = $value;
		}
		function setType($value){
			$this->type = $value;
		}
		function setDetail($value){
			$this->detail = $value;
		}
		function setAddress($value){
			$this->address = $value;
		}
		function setTelephone($value){
			$this->telephone = $value;
		}
		function setImage($value){
			$this->image = $value;
		}
		function setVote($value){
			$this->vote = $value;
		}


	}

?>