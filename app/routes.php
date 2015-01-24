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

Route::get('/', ['as' => 'home', 'uses' => 'MainController@index']);
Route::get('register', ['as' => 'user.register', 'uses' => 'AuthenticationController@getUserRegister']);
Route::get('login', ['as' => 'user.login', 'uses' => 'AuthenticationController@getUserLogin']);
Route::group(['before' => 'auth'], function (){
	Route::get('/user/candidate', ['as' => 'candidate', 'uses' => 'CandidateController@index']);
	Route::get('/user/candidate/profile', ['as' => 'candidate.cv.profile', 'uses' => 'CandidateController@getProfile']);
	Route::post('/user/candidate/profile', ['as' => 'candidate.cv.profile.post', 'uses' => 'CandidateController@postProfile']);
	Route::get('/user/candidate/cv', ['as' => 'candidate.cvs', 'uses' => 'CandidateController@getCVs']);
	Route::get('/user/candidate/cv/create', ['as' => 'candidate.cv.create', 'uses' => 'CandidateController@getCVCreate']);
	Route::post('/user/candidate/cv/create', ['as' => 'candidate.cv.create.post', 'uses' => 'CandidateController@postCVCreate']);
	Route::get('/user/candidate/cv/edit/{id}', ['as' => 'candidate.cv.create.edit', 'uses' => 'CandidateController@getCVEdit']);
	Route::post('/user/candidate/cv/edit/{id}', ['as' => 'candidate.cv.create.edit.post', 'uses' => 'CandidateController@postCVEdit']);
	Route::put('/user/candidate/cv/edit/{id}/summary', ['as' => 'candidate.cv.edit.summary.put', 'uses' => 'CandidateController@postCVEditSummary']);
	
	Route::get('logout', ['as' => 'user.logout', 'uses' => 'AuthenticationController@getUserlogout']);
});

Route::group(['prefix' => 'admin', 'before' => 'auth-admin'], function (){
	Route::get('/', ['as' => 'admin.home', 'uses' => 'AdminController@index']);
	
	Route::get('cv', ['as' => 'admin.cv.index', 'uses' => 'AdminController@openCV']);	
	Route::get('cv-create', ['as' => 'admin.cv.create', 'uses' => 'AdminController@openCVCreate']);
	Route::post('cv-create', ['as' => 'admin.cv.create.store', 'uses' => 'AdminController@storeCV']);
});

Route::group(['prefix' => 'api'], function (){
	Route::resource('industry', 'IndustryController');
});

Route::get('admin/register', ['as' => 'admin.register', 'uses' => 'AuthenticationController@adminRegister']);
Route::get('admin/login', ['as' => 'admin.login', 'uses' => 'AuthenticationController@adminLogin']);
Route::get('admin/logout', ['as' => 'admin.logout.post', 'uses' => 'AuthenticationController@adminLogoutPost']);
Route::group(['before' => 'csrf'], function(){
	Route::post('admin/register', ['as' => 'admin.register.post', 'uses' => 'AuthenticationController@adminRegisterPost']);
	Route::post('admin/login', ['as' => 'admin.login.post', 'uses' => 'AuthenticationController@adminLoginPost']);	
	Route::post('login', ['as' => 'user.login.post', 'uses' => 'AuthenticationController@postUserLogin']);
	Route::post('register', ['as' => 'user.register.post', 'uses' => 'AuthenticationController@postUserRegister']);
});

// App::missing(function($exception)
// {
// 	//return Response::view('errors.missing', array(), 404);
// 	return ['er' => '123'];
// });

// App::error(function(Exception $exception)
// {
// 	return [
// 		'error' => [
// 			'code' => $exception->getCode(),
// 			'message' => $exception->getMessage(),
// 		]
// 	];
// });