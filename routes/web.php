<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SportsController@index');
Route::get('/sport/{key}', 'SportsController@show')->name('sport');
Route::get('/sport/odds/{key}', 'SportsController@odds')->name('odds');