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

Route::get('/', [
    'uses' => 'HomeController@getHome',
    'as' => 'site.index'
]);

Route::post('/submitRequest', 'HomeController@saveRequest');

Route::get('/about', [
    'uses' => 'HomeController@getAbout',
    'as' => 'site.about'
]);

Route::get('/services', [
    'uses' => 'HomeController@getServices',
    'as' => 'site.services'
]);

Route::get('/book', [
    'uses' => 'OrderController@saveBooking',
    'as' => 'site.order'
]);