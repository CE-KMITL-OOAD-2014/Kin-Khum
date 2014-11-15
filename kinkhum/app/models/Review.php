<?php

	/**
	* 
	*/
	class Review
	{
		private $idReview;	
		private $idRestaurant;
		private $review;
		private $reviewImg;


		function __construct()
		{
			# code...
			$this->idReview = 'null';
			$this->idRestaurant = 'null';
			$this->review = 'null';
			$this->reviewImg = 'null';
		
		}

		function getidReview(){
			return $this->idReview;

		}
		function getidRestaurant(){
			return $this->idRestaurant;

		}
		
		function getReview(){
			return $this->review;
		}
		
		function getReviewImg(){
			return $this->reviewImg;
		}
		
		function setidReview($value){
			$this->idReview = $value;

		}

		function setidRestaurant($value){
			$this->idRestaurant = $value;

		}

		function setReview($value){
			$this->review = $value;
		}

		function setReviewImg($value){
			$this->reviewImg = $value;
		}


		function save(){
			$reviewDB  = new Reviewdb();
			
			$reviewDB->idReview = $this->idReview;
			$reviewDB->idRestaurant = $thid->idRestaurant 
			
			$reviewDB->review    = $this->review;
			
			$reviewDB->reviewImg  = $this->reviewImg ;
			
			$reviewDB->save();
		}


			function getById($idReview){
				$resDB  = RestaurantDB::find($idReview);
				$getResId = new Review();
				
				$getReviewId->id = $resDB->id ;
				$getReviewId->restaurant = $resDB->restaurant ;
				$getReviewId->type = $resDB->type ;
				$getReviewId->address = $resDB->address ;
				$getReviewId->detail = $resDB->detail ;
				$getReviewId->telephone = $resDB->telephone ;
				$getReviewId->image = $resDB->image ;
				$getReviewId->vote = $resDB->vote ;

				return $getResId;

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



		}

		?>