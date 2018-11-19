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

Route::get('/', function () {
    return view('Home.home');
});

Route::get('/board', function () {
return view('Home.board');
});

Route::get('/committee', function () {
return view('Home.committee');
});

Route::get('/about', function () {
return view('Home.about');
});

Route::get('/products', function () {
return view('Home.products');
});