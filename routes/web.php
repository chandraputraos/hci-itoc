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


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/mobile', 'MobileController@mobile')->name('coba');

Route::get('/mobile', function () {
    return view('mobile');
});

// Route::view('/{any}', 'mobile')->where('any', '.*');



