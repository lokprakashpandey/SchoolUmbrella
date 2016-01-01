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

Route::get('/adminLogin','AdminController@index');
Route::post('admin/login','AdminController@login');

Route::group(['middleware'=>'organization'], function(){
	Route::get('organization','OrganizationController@index');
	Route::get('organization/edit','OrganizationController@edit');
	Route::post('organization/edit','OrganizationController@update');
	Route::post('organization/addCourses','OrganizationController@addCourses');		
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
Route::group(['middleware'=>'admin','prefix' => 'myAdmin'], function(){
	Route::get('','AdminController@home');
	Route::get('edit','AdminController@edit');
	Route::get('affiliates','AffiliateController@index');
	Route::get('affiliates/add','AffiliateController@create');
	Route::post('affiliates/add','AffiliateController@store');
	Route::get('affiliates/edit/{id}','AffiliateController@edit');
	Route::post('affiliates/edit/{id}','AffiliateController@update');
	Route::get('affiliates/del/{id}','AffiliateController@destroy');
	
	Route::get('levels','LevelController@index');
	Route::get('levels/add','LevelController@create');
	Route::post('levels/add','LevelController@store');
	Route::get('levels/edit/{id}','LevelController@edit');
	Route::post('levels/edit/{id}','LevelController@update');
	Route::get('levels/del/{id}','LevelController@destroy');

	Route::get('streams','StreamController@index');
	Route::get('streams/add','StreamController@create');
	Route::post('streams/add','StreamController@store');
	Route::get('streams/edit/{id}','StreamController@edit');
	Route::post('streams/edit/{id}','StreamController@update');
	Route::get('streams/del/{id}','StreamController@destroy');

	Route::get('courses','CourseController@index');
	Route::get('courses/add','CourseController@create');
	Route::post('courses/add','CourseController@store');
	Route::get('courses/edit/{id}','CourseController@edit');
	Route::post('courses/edit/{id}','CourseController@update');
	Route::get('courses/del/{id}','CourseController@destroy');
});

Route::controllers([
		'auth' => 'Auth\AuthController',
		]);
