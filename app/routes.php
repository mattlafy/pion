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

/*
Route::get('/', function()
{
	return View::make('hello');
});

*/
Route::get('/', 'NewsController@index');
Route::any('player/junk/player.html', 'PlayerController@index');
Route::any('standings', 'PlayerController@standings');
Route::get('/login', 'AuthController@login');
Route::any('/logout', 'AuthController@logout');
Route::post('/check', 'AuthController@check');

Route::resource('player', 'PlayerController');
Route::resource('team', 'TeamController');
Route::resource('match', 'MatchController');
Route::resource('news', 'NewsController');
Route::resource('rules', 'RulesController');
Route::resource('season', 'SeasonController');
Route::resource('map', 'MapController');