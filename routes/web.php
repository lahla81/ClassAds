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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ads','AdsController');

Route::get('userAds','AdsController@getUserAds');

Route::get('{id}/{slug}','AdsController@getByCategory');

Route::post('search','AdsController@search');

Route::get('ad/{id}/{slug}','AdsController@show');

