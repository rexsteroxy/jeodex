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
// Routes for the users pages
Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about');
//Route::get('/domestic', 'PageController@domestic');
//Route::get('/ecommerce', 'PageController@ecommerce');
Route::get('/contact', 'PageController@contact');
Route::get('/track', 'PackageController@getPackage');

// Routes for the Admin pages
    Route::middleware('auth')->group( function() {
    Route::get('/register', 'RegistrationController@create');
    Route::post('/register', 'RegistrationController@store');
    Route::get('/logout', 'SessionsController@destroy');

    Route::get('/admin/management', 'AdminController@manage');
    Route::get('/admin/delete/{user_id}', 'AdminController@deleteAdmin');

    Route::get('/profile/{user}', 'AdminController@profile');

    Route::get('/profile/edit/{user}', 'AdminController@edit');
    Route::post('/profile/update/{user}', 'AdminController@update');

    Route::get('/admin', 'AdminController@index')->name('admin');
    //Route::get('/notifications', 'AdminController@notice');

    Route::get('/status', 'UpdateStatusController@status');
    Route::get('/view_status/{package_id}', 'UpdateStatusController@viewStatus');

    Route::get('/status_update/{package_id}', 'UpdateStatusController@update');
    Route::post('/package/{package}/update_status', 'UpdateStatusController@store');
    
   
    Route::get('/packages', 'PackageController@index');
    Route::get('/package_upload', 'PackageController@uploadPackage');
    Route::post('/add_package', 'PackageController@addPackage');
    Route::get('/edit/{package_id}', 'PackageController@edit');
    Route::post('/update/{package_id}', 'PackageController@update');
    Route::get('/view/{package_id}', 'PackageController@show');
    Route::get('/delete/{package_id}', 'PackageController@delete');

    Route::any('/search', 'PackageController@search');
    
});

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');




