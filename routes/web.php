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

// Route::get('/', function () {
//     return view('welcome');
// });

//ROUTES FOR HOME CONTROLLER
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/committee', 'HomeController@committee');
Route::get('/board', 'HomeController@board');
Route::get('/products', 'HomeController@products');
Route::get('/news', 'HomeController@news');
Route::get('/gallery', 'HomeController@gallery');

//ROUTES FOR ADMIN DASHBOARD

Route::get('/Dashboard', 'MadminController@index')->middleware('auth');


//dashobard routes
Route::get('/Dashboard/home','DashboardController@index');

//REGISTRATION ROUTES

    Route::get('/New','RegistrationController@createStaff');
    Route::post('/Create','RegistrationController@storeUser');


// Route::group(['prefix'=>'User'], function(){
//     Route::get('/New','RegistrationController@createStaff')
//     ->middleware('auth');
//     Route::post('/Create','RegistrationController@storeUser')
//     ->middleware('can:create');
// });

//Session/login controller
Route::get('/login', 'SessionController@create')->name('login');
Route::post('/signin','SessionController@store');
Route::get('/logout','SessionController@destroy');
