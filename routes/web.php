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

Route::get('/contact', 'PageController@contact');
//Route::get('/track', 'PageController@trackPage');
//Route::get('/track_id', 'PageController@trackPage');
Route::post('/track', 'PackageController@getPackage');

// Creating Routes for the Admin pages
    Route::middleware('auth')->group( function() {
    Route::get('/register', 'RegistrationController@create');
    Route::post('/register', 'RegistrationController@store');
    Route::get('/logout', 'SessionsController@destroy');

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::get('/packages', 'PackageController@index');
    Route::get('/package_upload', 'PackageController@uploadPackage');
    Route::post('/add_package', 'PackageController@addPackage');
    Route::get('/edit/{package_id}', 'PackageController@edit');
    Route::post('/update/{package_id}', 'PackageController@update');
    Route::get('/view/{package_id}', 'PackageController@show');
    Route::get('/delete/{package_id}', 'PackageController@delete');
    
});

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');




