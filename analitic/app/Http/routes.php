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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('catalogo', 'HomeController@catalogo');
Route::get('load', 'HomeController@loadProduct');
Route::get('contact', 'HomeController@contact');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
	Route::Resource('analitic','analiticController');
// Route::group(['middleware'=>'auth'],function(){
// 	// Route::Resource('analitic','analiticController');
// });
