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

		function getId(){
			return $this->id;

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
			//$resDB->id         = $this->id;

			$resDB->restaurant = $this->restaurant;
			$resDB->type       = $this->type;
			$resDB->address    = $this->address;
			$resDB->detail     = $this->detail;
			$resDB->telephone  = $this->telephone;
			$resDB->image      = $this->image;
			$resDB->vote       = $this->vote;
			$resDB->save();

			$this->id = $resDB->id;

		}


		/*
			$res               = new RestaurantOO;
			$res->getById(3);
			
			//---
			
			$res->getType()


		*/
			function getById($id){
				$resDB  = RestaurantDB::find($id);
				$getResId = new Restaurant();
				

				$getResId->id = $resDB->id ;
				$getResId->restaurant = $resDB->restaurant ;
				$getResId->type = $resDB->type ;
				$getResId->address = $resDB->address ;
				$getResId->detail = $resDB->detail ;
				$getResId->telephone = $resDB->telephone ;
				$getResId->image = $resDB->image ;
				$getResId->vote = $resDB->vote ;

				return $getResId;

			}


			public function search($restaurant){
			
			//$searchType = Input::get('type');

			$search = DB::table('restaurants',$restaurant)->where('restaurant',$restaurant)->orWhere('type','like','%'.$restaurant.'%')->get();

			return $search;
		//find::($id);
		
			}

			public function getAll(){
				$getRes = RestaurantDB::all();
				$size = count($getRes);
				$result = array();
				for ($i=0; $i<$size ; $i++) {
					$getRestaurant = new Restaurant();
				

					$getRestaurant->id = $getRes[$i]->id;
					$getRestaurant->restaurant = $getRes[$i]->restaurant ;
					$getRestaurant->type = $getRes[$i]->type ;
					$getRestaurant->address = $getRes[$i]->address ;
					$getRestaurant->detail = $getRes[$i]->detail ;
					$getRestaurant->telephone = $getRes[$i]->telephone ;
					$getRestaurant->image = $getRes[$i]->image ;
					$getRestaurant->vote = $getRes[$i]->vote ;		
					# code...
				
					$result[$i] = $getRestaurant;
				}
				return  $result;
			}

		public function calVote($idRestaurant){
		$newVote = ReviewDB::where('idRestaurant','=',$idRestaurant)->get();
		$size = count($newVote);
		$temp = 0;
		for ($i=0; $i <$size ; $i++) {
			$temp+= $newVote[$i]->voteRes;
		# code...
		}
		$temp/=$size;
		$res=RestaurantDB::find($idRestaurant);
		$res->vote=$temp;
		$res->save;


	}




		}

		?>