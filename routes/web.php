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

// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         // Matches The "/admin/users" URL
//     });
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
Route::get('/new-subscription','ProductSubscriptionController@create');
Route::post('/productsub','ProductSubscriptionController@store');
Route::get('/p-sub/{id}','ProductSubscriptionController@show');
Route::get('/user/products/{id}','ProductSubscriptionController@userSubscriptions');
Route::get('/userProdSub/edit/{id}','ProductSubscriptionController@edit');
Route::post('/user/ProductEdit/{id}','ProductSubscriptionController@update');
Route::get('/userProdSub/delete/{id}','ProductSubscriptionController@destroy');

//Loan Product Routes
Route::get('/loanProducts','LoanProductController@index');
Route::get('/loanProduct/create','LoanProductController@create');
Route::post('/loanProduct/store','LoanProductController@store');
Route::get('/loanProduct/edit/{id}','LoanProductController@edit');
Route::post('/loanProduct/update/{id}','LoanProductController@update');

//Loan Subscription Routes
Route::get('/loan-subscriptions','LoanSubscriptionController@index');
Route::get('/loanSub/create','LoanSubscriptionController@create');
Route::post('/loanSub/store','LoanSubscriptionController@store');
Route::get('/loan-request/{id}','LoanSubscriptionController@show');
Route::get('/loanSub/edit/{id}','LoanSubscriptionController@edit');
Route::post('/loanSub/update/{id}','LoanSubscriptionController@update');
Route::get('/user/loan/{id}','LoanSubscriptionController@userLoanSubscriptions');
Route::get('/userLoan/review/{id}','LoanSubscriptionController@review');
Route::post('/userLoan/reviewStore/{id}','LoanSubscriptionController@reviewStore');
Route::get('/pendingLoans','LoanSubscriptionController@pendingLoans');
Route::get('/activeLoans','LoanSubscriptionController@activeLoans');
Route::get('/userLoan/discard/{id}','LoanSubscriptionController@destroy');
