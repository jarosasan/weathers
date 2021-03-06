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
    
Route::get('/', 'CitiesController@index')->name('home');
Route::get('/city/{city}', 'CitiesController@show')->name('show');
Route::post('/store', 'CitiesController@store')->name('store');
Route::delete('/delete/{id}', 'CitiesController@destroy')->name('delete');
