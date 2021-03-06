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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/trips', 'HomeController@trips')->name('trips');
Route::get('/trips/{id}', 'HomeController@tripShow')->name('show');


Route::get('/about', 'HomeController@about')->name('about');
