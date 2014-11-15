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
		private $voteRes;


		function __construct()
		{
			# code...
			$this->idReview = 'null';
			$this->idRestaurant = 'null';
			$this->review = 'null';
			$this->reviewImg = 'null';
			$this->voteRes = 'null';
		
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

		function getvoteRes(){
			return $this->voteRes;
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


		function setvoteRes($value){
			$this->voteRes = $value;

		}


		function save(){
			$review  = new ReviewDB();
			
			$review->idReview = $this->idReview;
			$review->idRestaurant = $this->idRestaurant ;
			$review->review  = $this->review;			
			$review->reviewImg  = $this->reviewImg ;
			$review->voteRes = $this->voteRes;
			
			$review->save();
		}







			function getByRestaurant($idReview){
				$reviewDB  = ReviewDB::find($idReview);
				$size = count($reviewDB);
				$review= array();
				
				for($i=0; $i<size; $i++){
					$reviewRestaurant->idReview = $reviewDB[$i]->idReview;
					$reviewRestaurant->idRestaurant= $reviewDB[$i]->idRestaurant;
					$reviewRestaurant->review = $reviewDB[$i]->review;;
					$reviewRestaurant->reviewImg = $reviewDB[$i]->reviewImg;
					$reviewRestaurant->voteRes = $reviewDB[$i]->voteRes;
				}


				$review = $reviewRestaurant;
				return $review;

			}


		}

		?>