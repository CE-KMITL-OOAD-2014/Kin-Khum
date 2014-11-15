<?php

class ReviewController extends BaseController{
	public function review($id){

		
		$newReview = new Review();
			//$newId = new Id();
			$newReview->setidReview(Input::get('idReview'));
			//$newUser->password = Hash::make(Input::get('password'));
			$newReview->setidRestaurant($id);
			$newReview->setReview(Input::get('review')); 
			$newReview->setReviewImg(Input::get('reviewImg'));
			$newReview->setvoteRes(Input::get('voteRes'));

			
			$file = Input::file('restaurantImg');
			$newfile = time().".".$file->guessExtension();
			$newReview->setReviewImg($newfile);
			$file->move(app_path().'/../public/image/',$newfile);


			$newReview->save();

			return  Redirect::to('/show/'.$id);
	

	}
	// public function showReview($idReview){
			

	// 			return  View::make('/show/{id}');
	// }

}

?>