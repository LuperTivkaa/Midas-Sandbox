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
/**
 * Client Dashboard Below
 * 
 */
Route::middleware(['auth'])->group(function () {
Route::get('/Dashboard/home','DashboardController@index');
Route::get('/Dashboard/user/savings','DashboardController@savings');
Route::get('/Dashboard/savings/{id}','DashboardController@savingsByYear');
Route::get('/Dashboard/user/savingsummary','DashboardController@savingsGroup');
Route::get('/Dashboard/user/targetsavings','DashboardController@targetSavingHome');
Route::get('/Dashboard/targetsavings/{id}','DashboardController@targetSavingListings');
Route::get('/Dashboard/user/allTargetsavings','DashboardController@allTargetSavings');
Route::post('/Dashboard/user/customsearch','DashboardController@customSearch');
Route::get('/Dashboard/user/loans','DashboardController@allLoans');
Route::get('/Dashboard/user/loans/{id}','DashboardController@loanDeductionHistory');
Route::get('/Dashboard/userloans/view/{id}','DashboardController@loanDetails');
Route::get('/Dashboard/user/schemes','DashboardController@allProducts');
Route::get('/Dashboard/userproducts/view/{id}','DashboardController@productDetails');
Route::get('/Dashboard/userproducts/history/{id}','DashboardController@productDeductionHistory');
Route::get('/Dashboard/print/{from}/{to}','DashboardController@printStatement');
Route::get('/Dashboard/downloadpdf/{from}/{to}','DashboardController@downloadStatement');
});

//REGISTRATION ROUTES
    Route::middleware(['auth'])->group(function () {
        Route::get('/New','RegistrationController@createUser');
        Route::post('/Create','RegistrationController@storeUser');
        Route::get('/Nok/{id}','RegistrationController@nextOfKin');
        Route::post('/nokStore','RegistrationController@nokStore');
        Route::get('/bank/{id}','RegistrationController@bank');
        Route::post('/bankStore','RegistrationController@bankStore');
        Route::get('/photo/{id}','RegistrationController@photoCreate');
        Route::post('/photoStore','RegistrationController@photoStore');
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
Route::get('/activateUser/{id}','UsersController@activateUser');
Route::get('/deactivateUser/{id}','UsersController@deactivateUser');
Route::post('/search/User','UsersController@searchUser');
});

//Products routes
Route::get('/products','ProductsController@index');
Route::get('/deactivate/{id}','ProductsController@deactivate');
Route::get('/activate/{id}','ProductsController@activate');
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
Route::get('/prodSub/pending','ProductSubscriptionController@pendingSubscriptions');
Route::get('/prodSub/active','ProductSubscriptionController@activeSubscriptions');
Route::get('/prodSub/stop/{id}','ProductSubscriptionController@subStop');
Route::get('/prodSub/review/{id}','ProductSubscriptionController@review');
Route::post('/prodSub/reviewStore/{id}','ProductSubscriptionController@reviewStore');


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
Route::get('/loanSub/stop/{id}','LoanSubscriptionController@loanStop');
Route::post('/loanSub/update/{id}','LoanSubscriptionController@update');
Route::get('/user/page/{id}','LoanSubscriptionController@userLoanSubscriptions');
Route::get('/userLoan/review/{id}','LoanSubscriptionController@review');
Route::post('/userLoan/reviewStore/{id}','LoanSubscriptionController@reviewStore');
Route::get('/pendingLoans','LoanSubscriptionController@pendingLoans');
Route::get('/activeLoans','LoanSubscriptionController@activeLoans');
Route::get('/activeLoan/detail/{id}','LoanSubscriptionController@loanDetails');
Route::get('/userLoan/discard/{id}','LoanSubscriptionController@destroy');


//Monthly Savings Routes
Route::get('/saving-deductions','MonthlySavingController@index');
Route::get('/savings/export','MonthlySavingController@export')->name('saving.export');
Route::get('/usersaving/export','MonthlySavingController@export_view')->name('usersaving.export');
Route::get('/saving/create','MonthlySavingController@savingUpload')->name('usersaving.create');
Route::post('/saving/upload','MonthlySavingController@savingImport')->name('savings.upload');


//Contributors
Route::get('/contributors-list','ContributorsController@index');
Route::get('/inactive-contributors','ContributorsController@inactiveUsers');
Route::get('/recent/savings','ContributorsController@recentUploads');
Route::get('/saving/listings/{id}','ContributorsController@userListings');
Route::get('/saving/edit/{id}','ContributorsController@edit');
Route::post('/saving/update/{id}','ContributorsController@update');
Route::get('/saving/remove/{id}','ContributorsController@destroy');
Route::get('/saving/new','ContributorsController@create'); //Manually create saving, not complete
Route::post('/saving/store','ContributorsController@store');

//Monthly Target Savings Routes
Route::get('/targetsaving-deductions','TargetSavingController@index');
Route::get('/targetsaving/export','TargetSavingController@export')->name('ts.export');
Route::get('/targetsaving/create','TargetSavingController@tsUpload')->name('ts.create');//upload bulk
Route::post('/targetsaving/import','TargetSavingController@tsImport')->name('ts.import');
Route::get('/recent/targetsavings','TargetSavingController@recentTargetSavings');
Route::get('/targetsaving/edit/{id}','TargetSavingController@edit');
Route::post('/ts-saving/update/{id}','TargetSavingController@update');
Route::get('/targetsaving/remove/{id}','TargetSavingController@destroy');
Route::get('/targetsaving/new','TargetSavingController@create'); //manually create ts, not complete
Route::post('/targetsaving/store','TargetSavingController@store');

//Product Deductions
Route::get('/product/deductions','ProductDeductionsController@index');
Route::get('/productDeductions/export','ProductDeductionsController@export')->name('prod-deductions.export');
//show upload form
Route::get('/productDeductions/upload','ProductDeductionsController@upload')->name('prod-deductions.upload');
Route::post('/productDeductions/import','ProductDeductionsController@import')->name('prod-deductions.import');
Route::get('/productDeduction/listings','ProductDeductionsController@productDeductions');
Route::get('/productDeduction/detail/{id}','ProductDeductionsController@prodDeductionDetails');
Route::get('/productDeduction/edit/{id}','ProductDeductionsController@edit');
Route::post('/productDeduction/update/{id}','ProductDeductionsController@update');
Route::get('/productDeduction/remove/{id}','ProductDeductionsController@destroy');
Route::get('/product/repay/{id}','ProductDeductionsController@repay');
Route::post('/productRepay/store','ProductDeductionsController@repayStore');

//Loan Deductions
//Unfiltered loan deductions for MIDAS UPLOAD
Route::get('/loan/deductions','LoanDeductionsController@index');
Route::get('/loanDeductions/export','LoanDeductionsController@export')->name('loans.export');

//Unfiltered loan deductions for IPPIS UPLOAD
Route::get('/loan/ippisdeductions','LoanDeductionsController@ippis');
Route::get('/loanDeductions/ippisexport','LoanDeductionsController@defaultIppisExport')->name('default_ippis.export');

//Filtered loan deductions for IPPIS
Route::get('/loan/filter','LoanDeductionsController@filterDeductions');
Route::post('/loan/filterResult','LoanDeductionsController@filterLoanResult');
Route::get('/filterExcel/{payment_type}/{start_date}/{end_date}','LoanDeductionsController@excelFilterExport');

//Filtered loan deductions for MIDAS
Route::get('/midasFilterExcel/{payment_type}/{start_date}/{end_date}','LoanDeductionsController@midasExcelFilterExport');

//TODO: Implement PDF FOR DOWNLOAD


//IMPORT LOAN DEDUCTIONS
Route::get('/loan/uploadForm','LoanDeductionsController@importForm');
Route::post('/loan/deductionsImport','LoanDeductionsController@importLoanDeductions')->name('deductions.import');
Route::get('/loanDeduction/listings','LoanDeductionsController@loanDeductions');
Route::get('/loanDeduction/edit/{id}','LoanDeductionsController@edit');
Route::post('/loanDeduction/update/{id}','LoanDeductionsController@update');
Route::get('/loanDeduction/remove/{id}','LoanDeductionsController@destroy');
Route::get('/loanDeduction/history/{id}','LoanDeductionsController@loanDeductionHistory');
Route::get('/loan/repay/{id}','LoanDeductionsController@repay');
Route::post('/loanRepay/store','LoanDeductionsController@repayStore');



