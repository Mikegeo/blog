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

/*Route::get('about',function() {
	return view('pages.about'); // resourses/views/pages/about.blade.php
});*/

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');