<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MainController@index');

Route::get('/toptrack', 'TrackController@toptrack');

Route::post('/find', 'TrackController@create');

Route::delete('/ParseNewTrackDelete/{id}', 'TrackController@destroy');

Route::get('/addnewtrack/', 'TrackController@ParseNewTrack');

Route::post('/addnewtrack/', 'TrackController@AddNewTrack');

Auth::routes();

Route::get('/home', 'HomeController@index');
