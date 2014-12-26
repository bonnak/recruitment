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
	Route::get('/user/candidate', ['as' => 'candidate', 'uses' => 'MainController@openMemberHome']);
	Route::get('/user/candidate/create', ['as' => 'candidate.cv.create', 'uses' => 'MainController@getCVCreate']);
	
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
});