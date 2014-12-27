<?php

class AuthenticationController extends BaseController{

	public function adminLogin()
	{
		return View::make('admin.login');
	}

	public function adminLoginPost()
	{
		$username = Input::get('user_name');
		$password = Input::get('password');

		$validator = Validator::make(Input::all(), [
			'user_name' => 'required|min:2',
			'password' => 'required|min:4|max:12'
		]);

		if($validator->fails())
		{
			return Redirect::route('admin.login')->withErrors($validator);
		}else
		{
			$auth=Auth::attempt([
				'user_name'=> $username, 
				'password'=> $password,
				'user_type' => null
			]);

			if($auth)
			{
				return Redirect::route('admin.home')->with('global', 'You are now logged in!');
			}else{
				return Redirect::back()->with('global', 'Username or password was incorrect.')->withInput();
			}
		}
	}

	public function adminRegister()
	{
		return View::make('admin.register');
	}

	public function adminRegisterPost()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if($$validator->passes()){
			$user = new User;
			$user->user_name = Input::get('user_name');
			$user->password = Hash::make(Input::get('password'));
			$user->email = Input::get('email');
			$user->role = 0;
			$user->activated = Input::get('status');
			$user->save();

			return Redirect::to('admin.login')->with('global', 'Register successfully');
		}else{
			return Redirect::to('admin.register')->with('global','The following errors occurred')->withErrors($vali)->withInput();
		}
	}

	public function adminLogoutPost()
	{
		Auth::logout();
		return Redirect::route('admin.login');
	}
	
	public function getUserLogin()
	{
		return View::make('login');
	}
	
	public function postUserLogin()
	{
		$username = Input::get('user_name');
		$password = Input::get('password');
		
		$validator = Validator::make(Input::all(), [
				'user_name' => 'required',
				'password' => 'required'
				]);
		
		if($validator->fails())
		{
			return Redirect::route('user.login')->withErrors($validator);
		}
		else
		{
			$auth_username = Auth::attempt([
				'user_name'=> $username,
				'password'=> $password,
				'role' => null
			]);
			
			$auth_email = Auth::attempt([
				'email'=> $username,
				'password'=> $password,
				'role' => null
			]);
		
			if($auth_username || $auth_email)
			{
				switch (Auth::user()->user_type)
				{
					case 1: // Employer
						break;
						
					case 2: // Employee
						return Redirect::route('home')->with('global', 'You are now logged in!');
						break;
				}
			}
			else
			{
				return Redirect::route('user.login')->with('global', 'Username or password was incorrect.')->withInput();
			}
		}
	}
	
	public function getUserlogout()
	{
		Auth::logout();
		
		return Redirect::route('user.login');
	}
	
	public function getUserRegister()
	{
		if(!Auth::guest())
		{
			return Redirect::to('/');
		}
		
		return View::make('register');
	}
}