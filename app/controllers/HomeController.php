<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	public function showHome()
	{
		$posts = Post::all();

		return View::make('home')->with('posts', $posts);
	}
	public function showWhack()
	{
		return View::make('whackGame');
	}
	public function showAdmin()
	{	
		$posts = Post::all();
		$users = User::all();

		$data = array(
			'posts' => $posts, 
			'users' => $users 
		);

		return View::make('admin')->with($data);
	}
	public function showLogin()
	{
		return View::make('login');
	}
	public function doLogin()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{	
			$posts = Post::all();
			$users = User::all();

			$data = array(
				'posts' => $posts, 
				'users' => $users 
			);

			Session::flash('successMessage', 'Login Successfull');

		    return View::make('admin')->with($data);
		}
		else
		{
			Session::flash('errorMessage', 'Unable to login. Please check your email and password.');

		    return Redirect::back()->withInput();
		}
	}
	public function logout()
	{
		Auth::logout();

		Session::flash('successMessage', 'Logout Successfull');

		return View::make('admin');
	}
}
