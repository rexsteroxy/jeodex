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

Route::get('/', 'PageController@index')->name('home');

Route::get('/about', 'PageController@about');
Route::get('/domestic', 'PageController@domestic');
Route::get('/ecommerce', 'PageController@ecommerce');
//Route::get('/login', 'PageController@login');
Route::get('/contact', 'PageController@contact');

// Creating Routes for the Admin pages
Route::middleware('auth')->group( function() {
    Route::get('/register', 'RegistrationController@create');
    Route::post('/register', 'RegistrationController@store');
    Route::get('/logout', 'SessionsController@destroy');
   
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/admin/package_upload', 'PackageController@uploadPackage');
    Route::post('/admin/store', 'PackageController@addPackage');
    Route::get('/admin/{package}', 'PackageController@show');
});
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');




