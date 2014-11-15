<?php

class RestaurantController extends BaseController{

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
		$newReview = new Restaurant();
		$newReview->restaurant = (Input::get('restaurant'));
		$newReview->detail = (Input::get('detail'));

		return View::make();
	}



	public function search(){
			
			//$searchType = Input::get('type');

		    $restaurant = new Restaurant();
		    $search = $restaurant->search(Input::get('restaurant'));

			return View::make('search',array('search'=>$search));
		//find::($id);
		
	}


	public  function show($id){
		$showRes = new Restaurant();
		$show = $showRes->getById($id);
	

		return  View::make('show',array("show"=>$show));
	}


} 

	

?>