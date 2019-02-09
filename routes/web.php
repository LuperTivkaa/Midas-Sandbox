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

Route::get('/Dashboard', 'MadminController@index');
Route::get('/Dashboard/Users', 'MadminController@cooperators');
//dashobard routes
Route::get('/Dashboard/home','DashboardController@index');

//REGISTRATION ROUTES
Route::get('/Staff/New','RegistrationController@createStaff');