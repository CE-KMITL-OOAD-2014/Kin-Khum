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
			$newRestaurant->setImage(Input::get('restaurantImg'));


			$file = Input::file('restaurantImg');
			$newfile = time().".".$file->guessExtension();
			$newRestaurant->setImage($newfile);
			$file->move(app_path().'/../public/image/',$newfile);


			$newRestaurant->save();

			return  Redirect::to("/show/".$newRestaurant->getId());
	}


	public function search(){
			
			//$searchType = Input::get('type');

		    $restaurant = new Restaurant();
		    $search = $restaurant->search(Input::get('restaurant'));
		

			return View::make('search',array('search'=>$search));
		
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
		$user = new User();
		/*$userid = $user->getById($id);
		$userStatus= $user->getStatus();*/

		return View::make('showAll',array('showRes' => $showRes));
	}

	public function setBest(){

		$newVote = RestaurantDB::where('vote','=',5)->get();
		$size = count($newVote);
		if($size>10){
			$temp =10;

		}
		else{
			$temp=$size;
		}
		$best = array();
		for ($i=0; $i <$temp; $i++) {
			$obj = new Restaurant;

			$obj->setRestaurant($newVote[$i]->restaurant);
			$obj->setType($newVote[$i]->type);
			$obj->setAddress($newVote[$i]->address);
			$obj->setTelephone($newVote[$i]->telephone);
			$obj->setImage($newVote[$i]->image);
			$obj->setVote($newVote[$i]->vote);
			$best[$i] = $obj;

			# code...
		}

		return View::make('bestRes',array('showRes'=>$best));

	}

} 


?>