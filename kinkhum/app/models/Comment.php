<?php

	/**
	* 
	*/
	class Comment
	{
		private $id;	
		private $idRestaurant;
		private $comment;
		private $commentImg;


		function __construct()
		{
			# code...
			$this->idComment = 'null';
			$this->idRestaurant = 'null';
			$this->comment = 'null';
			$this->commentImg = 'null';
		
		}

		function getidComment(){
			return $this->idComment;

		}
		function getidRestaurant(){
			return $this->idRestaurant;

		}
		
		function getComment(){
			return $this->comment;
		}
		
		function getCommentImg(){
			return $this->commentImg;
		}
		
		function setidComment($value){
			$this->idComment = $value;

		}

		function setidRestaurant($value){
			$this->idRestaurant = $value;

		}

		function setComment($value){
			$this->comment = $value;
		}

		function setCommentImg($value){
			$this->commentImg = $value;
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



		}

		?>