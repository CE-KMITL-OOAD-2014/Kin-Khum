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


		function __construct()
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

		function save(){
			$resDB             = new Restaurantdb();
			$resDB->id         = $this->id;
			$resDB->restaurant = $this->restaurant;
			$resDB->type       = $this->type;
			$resDB->address    = $this->address;
			$resDB->detail     = $this->detail;
			$resDB->telephone  = $this->telephone;
			$resDB->image      = $this->image;
			$resDB->vote       = $this->vote;
			$resDB->save();
		}


		/*
			$res               = new RestaurantOO;
			$res->getById(3);
			
			//---
			
			$res->getType()


		*/
			function getById($id){
				$resDB             = RestaurantDB::find($id);

				$this->id = $resDB->id ;
				$this->restaurant = $resDB->restaurant ;
				$this->type = $resDB->type ;
				$this->address = $resDB->address ;
				$this->detail = $resDB->detail ;
				$this->telephone = $resDB->telephone ;
				$this->image = $resDB->image ;
				$this->vote = $resDB->vote ;

			}

			public function search(){
			$searchRestaurant = Input::get('restaurant');
			//$searchType = Input::get('type');

			$search = DB::table('restaurants',$searchRestaurant)->where('restaurant',$searchRestaurant)->orWhere('type','like','%'.$searchRestaurant.'%')->get();

			return View::make('search',array('search'=>$search));
		//find::($id);
		
			}

		}

		?>