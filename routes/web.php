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
	/* LOGIN */
	Route::get('bestcs/login', 'FrontendController@login');
	/* RESET PASSWORD */
	Route::get('reset-password', 'FrontendController@resetPassword');
	Route::post('reset-password', 'FrontendController@postPassword')->name('bestcs.resetpassword');
});
/* PARTICIPANT */
Route::group(['namespace' => 'Participant'], function(){
	/* BEST CS */
	Route::resource('bestcs-participant', 'ParticipantPageController');
	/* UPLOAD FILE */
	Route::resource('bestcs-upload', 'UploadController');
	/* ITINERARY */
	Route::get('bestcs/itinerary', 'ParticipantPageController@itinerary');
	/* NOTIFICATION */
	Route::get('bestcs/notifications', 'ParticipantPageController@notifications');
	/* PROFILE */
	Route::get('bestcs/profile', 'ParticipantPageController@profile');
	/* SCHEDULES */
	Route::get('bestcs/schedules', 'ParticipantPageController@schedules');
	/* DO DONT */
	Route::get('bestcs/dodonts', 'ParticipantPageController@dodonts');
	/* FEEDBACK */
	Route::get('bestcs/feedback', 'ParticipantPageController@feedback');	
});
/* BACKEND */
Route::group(['namespace' => 'Backend'], function(){
	/* AUTHENTICATION */
	Auth::routes();
	Route::post('activation', 'CheckingController@sendActivation');
	Route::get('home', 'HomeController@index');	
	/* UPLOAD PRESENTATOIN */
	Route::resource('upload', 'UploadPresentationController');
	/* CHECK NIK AND EMAIL */
	Route::resource('checking', 'CheckingController');
	/* PROFILE */
	Route::resource('profile', 'ProfileController');
	/* PARTICIPANT */
	Route::resource('participant', 'ParticipantController');
	/* SCORESHEETS */
	Route::resource('scoresheets-category', 'ScoresheetsCategoryController');
	Route::get('scoresheets/winner', 'ScoresheetsController@winner');
	Route::resource('scoresheets', 'ScoresheetsController');
	/* SESSION */
	Route::resource('session', 'SessionController');
	/* CATEGORY */
	Route::resource('category', 'CategoryController');
	/* MASTER DATA */
	Route::resource('master-data', 'MasterDataController');
	/* USERS */
	Route::resource('users', 'UsersController');
	/* NOTIFICATIONS */
	Route::resource('notification', 'NotificationController');
	Route::get('notification/create/{notification}', 'NotificationController@createNotification')->name('notification.createnotification');
	Route::put('notification/create/{notification}', 'NotificationController@postNotification')->name('notification.postnotification');
	/* ITINERARY */
	Route::resource('itinerary', 'ItineraryController');
	Route::get('itinerary/create/{itinerary}', 'ItineraryController@createItinerary')->name('itinerary.createitinerary');
	Route::put('itinerary/create/{itinerary}', 'ItineraryController@postItinerary')->name('itinerary.createitinerary');
	/* UNIT MODULE */
	Route::resource('unit-score', 'UnitScoreController');
	Route::resource('unit-category', 'UnitCategoryController');
	Route::resource('unit-category-parent', 'UnitCategoryParentController');
});
