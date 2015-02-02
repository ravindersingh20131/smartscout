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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users', ['uses' => 'UsersController@index']);
Route::get( 'login', [ 'uses' => 'UsersController@login', 'as' => 'login' ] );
Route::post( 'login', [ 'uses' => 'UsersController@processLogin', 'as' => 'login' ] );
Route::get( 'logout', [ 'uses' => 'UsersController@logout' ] );
Route::get( 'register', [ 'uses' => 'UsersController@register' ] );
//Route::get( 'dashboard', [ 'before' => 'auth', 'uses' => 'UsersController@dashboard' ] );
Route::get( 'dashboard', [ 'uses' => 'UsersController@dashboard' ] );