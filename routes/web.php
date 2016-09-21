<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/* FRONTEND */
Route::group(['namespace' => 'Frontend'], function(){
	Route::get('/', 'HomeController@index');
});
/* BACKEND */
Route::group(['namespace' => 'Backend'], function(){
	Auth::routes();
	Route::get('/home', 'HomeController@index');
	Route::resource('checking', 'CheckingController');
	Route::resource('profile', 'ProfileController');
	Route::resource('registration', 'RegistrationController');
	Route::resource('scoresheets', 'ScoresheetsController');
	Route::resource('session', 'SessionController');
	Route::resource('category', 'CategoryController');
	Route::resource('master-data', 'MasterDataController');
	Route::resource('users', 'UsersController');
});
