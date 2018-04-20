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

Route::middleware('auth')->group(function () {
    Route::get('choose-collage', 'CollageController@choose_collage');
    Route::post('choose-collage', 'CollageController@store');

    Route::get('download-image', 'ImageDownloadController@index');
    Route::post('download-image', 'ImageDownloadController@store');

    Route::get('distribution', 'DistributionController@index');
    Route::post('distribution', 'DistributionController@store');

    Route::get('download-image/delete' ,'DeleteSessionImageController@delete');

    Route::get('profile', 'ProfileController@index');
    Route::post('profile', 'ProfileController@store');
});








//Route::get('distribution/preview', 'PreviewController@index');
//Route::post('distribution', 'DistributionController@store');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
