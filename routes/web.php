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

Route::get('/','ListController@indexlanguage');

Route::get('language/{locale}','ListController@language'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('list','ListController@index');
Route::post('list','ListController@create');

Route::get('test','ListController@test');

