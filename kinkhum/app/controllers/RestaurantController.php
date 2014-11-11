<?php

class RestaurantController extends BaseController{

	public function createRestaurant(){

			$newRestaurant = new Restaurant();
			//$newId = new Id();
			$newRestaurant->restaurant = Input::get('restaurant');
			//$newUser->password = Hash::make(Input::get('password'));
			$newRestaurant->detail = Input::get('detail');
			$newRestaurant->type = Input::get('type'); 

			
			$newRestaurant->save();
			return 'create.blade';

	}
	public function reviewRestaurant 


} 


?>