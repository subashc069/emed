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
    return view('layouts.front');
});
Route::name('frontend.order.')->prefix('order-now')->namespace('Front')->group(function () {
    Route::get('/', 'OrderController@index')->name('index');
    Route::post('/store', 'OrderController@store')->name('store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');


/*
|--------------------------------------------------------------------------
| Order Routes
|--------------------------------------------------------------------------
|
*/

Route::name('admin.order.')->prefix('dashboard/order')->namespace('Order')->middleware('auth')->group(function() {
   Route::get('/', 'OrderController@index')->name('index');
});
