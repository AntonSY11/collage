<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'CollageController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('choose-collage', 'CollageController@choose_collage');
Route::post('choose-collage', 'CollageController@store');
