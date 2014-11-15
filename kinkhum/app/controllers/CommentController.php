<?php

class CommentController extends BaseController{

	public function createRestaurant(){

			$newRestaurant = new Restaurant();
			//$newId = new Id();
			$newRestaurant->setRestaurant(Input::get('restaurant'));
			//$newUser->password = Hash::make(Input::get('password'));
			$newRestaurant->setDetail(Input::get('detail'));
			$newRestaurant->setType(Input::get('type')); 
			$newRestaurant->setAddress(Input::get('address'));
			$newRestaurant->setTelephone(Input::get('telephone'));
			$file = Input::file('restaurantImg');
			$newfile = time().".".$file->guessExtension();
			$newRestaurant->setImage($newfile);
			$file->move(app_path().'/../public/image/',$newfile);


			$newRestaurant->save();

			echo "Create Success";

	}


	public function review(){

		$newReview = new Restaurant('restaurantImg');

		$newReview->restaurant = (Input::get('restaurant'));
		$newReview->detail = (Input::get('detail'));

		$file = Input::file()
		return View::make();
	

	}
}
	

?>