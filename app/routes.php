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

//whack-a-buzz game
Route::get('/whack', 'HomeController@showWhack');

//Form request:: POST action will trigger to controller
Route::post('/','ContactController@getContactUsForm');