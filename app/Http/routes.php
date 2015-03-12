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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('{username}/{gistId}', ['uses' => 'GistController@show', 'as' => 'gist.show']);
Route::get('trending', ['uses' => 'GistController@index', 'as' => 'gist.index']);

Route::get('users', ['uses' => 'UserController@index', 'as' => 'user.index']);
Route::get('{username}', ['uses' => 'UserController@show', 'as' => 'user.show']);