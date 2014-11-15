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
		$review = new Review();
		$showReview = $review->getByRestaurant($id);
		$imgReview = $review->getReviewImg();

		return  View::make('show',array("show"=>$show ,"showReview"=>$showReview,"imgReview"=>$imgReview));
	}

	public function showAllRestaurant(){

		$showAll = new Restaurant();
		$showRes = $showAll->getAll();

		return View::make('showAll',array('showRes' => $showRes));
	}

} 

	

?>