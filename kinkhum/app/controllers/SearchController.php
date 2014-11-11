<?php

class SearchController extends BaseController{

	public function searchRestaurant(){




			$newRestaurant = new Restaurant();
			//$newId = new Id();
			$newRestaurant->restaurant = Input::get('restaurant');
			//$newUser->password = Hash::make(Input::get('password'));
			$newRestaurant->detail = Input::get('detail');
			$newRestaurant->type = Input::get('type'); 

			
			$newRestaurant->save();
			return 'ok';

	}



} 


?>
