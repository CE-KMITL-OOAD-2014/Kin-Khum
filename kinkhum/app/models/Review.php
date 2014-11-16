<?php

	/**
	* 
	*/
	class Review
	{
		private $id;	
		private $idRestaurant;
		private $review;
		private $reviewImg;
		private $voteRes;


		function __construct()
		{
			# code...
			$this->id = 'null';
			$this->idRestaurant = 'null';
			$this->review = 'null';
			$this->reviewImg = 'null';
			$this->voteRes = 'null';
		
		}

		function getidReview(){
			return $this->id;

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

		function getvoteRes(){
			return $this->voteRes;
		}
		
		function setidReview($value){
			$this->id = $value;

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


		function setvoteRes($value){
			$this->voteRes = $value;

		}


		function save(){
			$review  = new ReviewDB();
			
			$review->id = $this->id;
			$review->idRestaurant = $this->idRestaurant ;
			$review->review  = $this->review;			
			$review->reviewImg  = $this->reviewImg ;
			$review->voteRes = $this->voteRes;
			
			$review->save();

			$res = new Restaurant;
			$res->calVote($review->idRestaurant);
		}


			function getByRestaurant($idReview){
				$reviewDB  = ReviewDB::where('idRestaurant',$idReview)->get();
				$size = count($reviewDB);
				$review= array();
				
				if ($size==0) {
					# code...
					return null;
				}
				for($i=0; $i<$size; $i++){
					$reviewRestaurant=new Review;
					$reviewRestaurant->id= $reviewDB[$i]->id;
					$reviewRestaurant->idRestaurant= $reviewDB[$i]->idRestaurant;
					$reviewRestaurant->review = $reviewDB[$i]->review;;
					$reviewRestaurant->reviewImg = $reviewDB[$i]->reviewImg;
					$reviewRestaurant->voteRes = $reviewDB[$i]->voteRes;
				$review[$i] = $reviewRestaurant;
				}


				
				return $review;

			}


		}

		?>