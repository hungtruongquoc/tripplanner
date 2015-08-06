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

Route::group(['prefix' => 'tp'], function()
{
	Route::get('/', 'IndexController@index');
	Route::get('home', 'HomeController@index');
	Route::get('trips', 'TripsController@index');
	Route::get('trips/show/{id}', 'TripsController@show');
	Route::get('trips/destroy/{id}', 'TripsController@destroy');
	Route::get('trips/create/{name?}', 'TripsController@create');
	Route::get('language/update/{id?}', ['as'=>'lang.switch', 'uses'=>'LanguageController@update']);
	Route::post('trips/store', 'TripsController@store');
	Route::get('admin', 'AdminController@index');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'trips'=> 'TripsController',
]);
