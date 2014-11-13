<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/',function(){
	return View::make('index');
});

Route::get('/index',function(){
	return View::make('index2');
});
//Route::get('/','LoginController@loginConnect'); -<------ ตรงนี้ อย่าเอาออก

Route::post('/willLogin','LoginController@login');


Route::get('/login',function(){
	return View::make('loginss');
});
//Route::post('/login','LoginController@login');'

Route::get('/register',function(){
	return View::make('Register1');
});

Route::post('/willRegister','LoginController@register');

//Route::get('/logout',function(){
 //Auth::logout();
 //return Response::make('You are now logged out ');
 //});

Route::post('/createRes','RestaurantController@createRestaurant');

Route::get('/create',function(){
	return View::make('create');
});


	
Route::post('/searchx','RestaurantController@search');
	
Route::get('/search',function(){
	return View::make('search');
});


Route::post('/reviewRes','RestaurantController@review');

Route::get('/review',function(){
	return View::make('review');
});


Route::post('/uploadImg','RestaurantController@createRestaurant');

Route::get('/upload',function(){
	return View::make('upload');
});
