<?php

class ReviewController extends BaseController{

	public function review($id){

		$newReview = new Restaurant('restaurantImg');

		$newReview->restaurant = (Input::get('restaurant'));
		$newReview->detail = (Input::get('detail'));

		$file = Input::file()
		return View::make();
	

	}
}
	

?>