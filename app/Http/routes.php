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
Route::post('/register','HomeController@create');
Route::get('/login','HomeController@login');
Route::post('/login','HomeController@authenticate');


Route::group(['middleware'=>'organization'], function(){
Route::get('organization','OrganizationController@index');	
});

Route::group(['middleware'=>'parent'], function(){
Route::get('parent','ParentController@index');	
});

Route::group(['middleware'=>'student'], function(){
Route::get('student','StudentController@index');	
});

Route::group(['middleware'=>'teacher'], function(){
Route::get('teacher','TeacherController@index');	
});

Route::group(['middleware'=>'admin'], function(){
Route::get('admin','AdminController@index');	
});


Route::controllers([
		'auth' => 'Auth\AuthController',
		]);

