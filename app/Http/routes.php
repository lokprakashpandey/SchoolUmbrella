<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@index');
Route::get('/register','HomeController@register');
//href bata jati pani janchha tyo get bata janchha
Route::post('/register','HomeController@create');
Route::get('/login','HomeController@login');
Route::post('login','HomeController@authenticate');
Route::controllers([
	'auth' => 'Auth\AuthController',
	]);