<?php

class ReviewController extends BaseController{
	public function review(){

		/*
		$newReview = new Review();

		//$newReview->setReview();
		$newReview->setidReview (1);
		$newReview->setidRestaurant(1);
		$newReview->setReview("yes");
		//$newReview->setReviewImg(Input::get('reviewImg'));



		$newReview->setId(Auth::username()->id);
		$file = Input::file('reviewImg');
		$newfile = time().".".$file->guessExtension();
		$newReview->setImage($newfile);
		$file->move(app_path().'/../public/image/',$newfile);

		$newReview->save();
		echo "ok";

*/
		$newReview = new Review();
			//$newId = new Id();
			$newReview->setidReview(Input::get('idReview'));
			//$newUser->password = Hash::make(Input::get('password'));
			$newReview->setidRestaurant(Input::get('idRestaurant'));
			$newReview->setReview(Input::get('review')); 
			$newReview->setReviewImg(Input::get('reviewImg'));
			$newReview->setvoteRes(Input::get('voteRes'));

			
			$file = Input::file('restaurantImg');
			$newfile = time().".".$file->guessExtension();
			$newReview->setReviewImg($newfile);
			$file->move(app_path().'/../public/image/',$newfile);


			$newReview->save();

			echo "Create Success";
	

	}
}

?>