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

Route::get('/', 'PageController@index');

Route::get('/about', 'PageController@about');
Route::get('/domestic', 'PageController@domestic');
Route::get('/ecommerce', 'PageController@ecommerce');
Route::get('/login', 'PageController@login');
Route::get('/contact', 'PageController@contact');

