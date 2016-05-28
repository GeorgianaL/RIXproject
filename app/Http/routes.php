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

Route::get('/', 'PageController@showIndex');
Route::get('/video/{id}', 'PageController@showVideoPage');


Route::get('/user/logout', 'UserController@logout');
Route::post('/request/signup', 'UserController@signup');
Route::post('/request/login', 'UserController@login');


Route::get('/secret/getVimeoVideos', 'VideoController@getVimeo');
Route::post('/secret/insertVideoVimeo', 'VideoController@insertVideoVimeo');

Route::post('/likevideo', 'VideoController@likeVideo');

Route::get('/secret/getYoutubeVideo/{tag}', 'VideoController@VideoYoutube');
// Route::get('/request/addPref', 'PreferencesController@addPref');

Route::post('/getPaginateVideo', 'PageController@showMoreVideos');