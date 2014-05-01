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

//home page
Route::get('/', 'HomeController@showHome');

//Form request:: POST action will trigger to controller
Route::post('/', 'ContactController@getContactUsForm');

//whack-a-buzz game
Route::get('/whack', 'HomeController@showWhack');

//Routes all post controller actions
Route::resource('posts', 'PostsController');

Route::get('/admin', 'HomeController@showAdmin');

Route::get('/logout', 'HomeController@logout');

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');