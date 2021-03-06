<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|s
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Route::get('/index',function(){
// 	return View::make('index2');
// });

//Route::get('/','LoginController@loginConnect'); -<------ ตรงนี้ อย่าเอาออก

Route::post('/login','UserController@login');
Route::get('/login',function(){
	return View::make('loginss');
});
Route::get('/logout',function(){
	Auth::logout();
	return Redirect::to("/");
});

Route::get('/register',function(){
	return View::make('Register1');
});

Route::post('/willRegister','UserController@register');

//Route::get('/logout',function(){
 //Auth::logout();
 //return Response::make('You are now logged out ');
 //});

Route::post('/res/create','RestaurantController@createRestaurant');

Route::get('/createRes1',function(){
	return View::make('createRes1');
});

Route::post('/createRes1','RestaurantController@createRestaurant');

	
Route::post('/search','RestaurantController@search');
	
Route::get('/search',function(){
	return View::make('search');
});


Route::post('show/{id}/reviewsRes1','ReviewController@review');
/*
Route::get('show/{id}/reviewsRes1',function(){
	return View::make('reviewsRes1');
});
*/

Route::post('/uploadImg','RestaurantController@createRestaurant');

Route::get('/upload',function(){
	return View::make('upload');
});

Route::get('/show/{id}','RestaurantController@show');


	
	
Route::post('/res/showall','RestaurantController@showAllRestaurant');
	
/*Route::get('/showAll',function(){
	return View::make('showAll');
});*/

Route::get('/','RestaurantController@showAllRestaurant');


Route::get('/bestRes','RestaurantController@setBest');

