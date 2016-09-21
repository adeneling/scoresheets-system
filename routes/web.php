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
	/* AUTHENTICATION */
	Auth::routes();
	Route::get('/home', 'HomeController@index');	
	/* UPLOAD PRESENTATOIN */
	Route::resource('upload', 'UploadPresentationController');
	/* CHECK NIK AND EMAIL */
	Route::resource('checking', 'CheckingController');
	/* PROFILE */
	Route::resource('profile', 'ProfileController');
	/* SCORESHEETS */
	Route::resource('scoresheets', 'ScoresheetsController');
	/* SESSION */
	Route::resource('session', 'SessionController');
	/* CATEGORY */
	Route::resource('category', 'CategoryController');
	/* MASTER DATA */
	Route::resource('master-data', 'MasterDataController');
	/* USERS */
	Route::resource('users', 'UsersController');
});
