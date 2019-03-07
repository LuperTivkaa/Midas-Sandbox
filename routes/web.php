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

  //
    // Route::middleware(['auth'])->group(function () {
    //     Route::get('leadsadd','crmcontroller@addleads');
    //     Route::get('leadslist', 'crmcontroller@leadslist');
    //     Route::any('leadview/{id}','crmcontroller@show');
    //     Route::get('leadedit/{id}','crmcontroller@edit');
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
//dashobard routes
Route::get('/Dashboard/home','DashboardController@index');

//REGISTRATION ROUTES
    Route::middleware(['auth'])->group(function () {
        Route::get('/New','RegistrationController@createUser');
        Route::post('/Create','RegistrationController@storeUser');
        Route::get('/Nok','RegistrationController@nextOfKin');
        Route::post('/nokStore','RegistrationController@nokStore');
        Route::get('/bank','RegistrationController@bank');
        Route::post('/bankStore','RegistrationController@bankStore');

    });
    

//Session/login controller
Route::get('/login', 'SessionController@create')->name('login');
Route::post('/signin','SessionController@store');
Route::get('/logout','SessionController@destroy');

//Manage Users  Controller
Route::middleware(['auth'])->group(function () {
Route::get('/user/all','UsersController@index');
Route::get('/user/bank','UsersController@bankList');
Route::get('/user/nok','UsersController@nokList');
Route::get('/userDetails/{id}','UsersController@profileDetails');
Route::get('/editProfile/{id}','UsersController@editProfile');
Route::post('/updateProfile/{id}','UsersController@updateProfile');
Route::get('/editBank/{id}','UsersController@editBank');
Route::post('/updateBank/{id}','UsersController@updateBank');
Route::get('/editNok/{id}','UsersController@editNok');
Route::post('/updateNok/{id}','UsersController@updateNok');
});

//Products routes
Route::get('/products','ProductsController@index');
Route::get('/product/create','ProductsController@create');
Route::post('/product/store','ProductsController@store');
Route::get('/product/detail/{id}','ProductsController@show');
Route::get('/editProduct/{id}','ProductsController@edit');
Route::post('/updateProduct/{id}','ProductsController@update');

//Product Subscription
Route::get('/subscriptions','ProductSubscriptionController@index');
Route::get('/new_subscription','ProductSubscriptionController@create');

