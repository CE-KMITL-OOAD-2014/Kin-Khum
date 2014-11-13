<?php

class RestaurantController extends BaseController{

	public function createRestaurant(){

			$newRestaurant = new Restaurant();
			//$newId = new Id();
			$newRestaurant->restaurant = Input::get('restaurant');
			//$newUser->password = Hash::make(Input::get('password'));
			$newRestaurant->detail = Input::get('detail');
			$newRestaurant->type = Input::get('type'); 
			$file = Input::file('restaurantImg');
			$newfile = time().".".$file->guessExtension();
			$newRestaurant->setImage($newfile);
			$file->move(app_path().'/../public/image./',$newfile);

			$newRestaurant->save();
			return 'create.blade';

	}
	//public function reviewRestaurant 

	public function search(){
			$searchRestaurant = Input::get('restaurant');
			//$searchType = Input::get('type');

			$search = DB::table('restaurants',$searchRestaurant)->where('restaurant',$searchRestaurant)->orWhere('type','like','%'.$searchRestaurant.'%')->get();

			return View::make('search',array('search'=>$search));
		//find::($id);
		
	}


	//public function review(){
		//	$reviewRestaurant = new Review();
		//	$reviewRestaurant = Input::get('detail');
			//$reviewRestaurant = 

			//$newVote


//	}

} 

	

?>