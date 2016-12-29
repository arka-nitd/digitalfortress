<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/','HomeController@dashboard');
    Route::get('login/fb', 'HomeController@login');
	Route::get('login/fb/callback', 'HomeController@callback');
	Route::get('logout', 'HomeController@logout');
	Route::get('start','HomeController@start');
    Route::get('/round/{id}','MainController@round');
    Route::get('/rules', 'MainController@rules');
    Route::get('/round/{rid}/{qid}', 'MainController@showquestion');
    Route::post('/check/{qid}','MainController@quesvalidate');
    Route::post('/round/{id}','MainController@nextround');
    Route::get('/leaderboard', 'MainController@lboard');

});
