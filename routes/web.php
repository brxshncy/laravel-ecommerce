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

Route::get('/','CustomerController@home');

Route::prefix('customer')->group(function(){
    Route::get('login','CustomerController@login')->name('customer-login')->middleware('customer');
    Route::get('logout','CustomerController@logout')->name('customer-logout');
});
Route::prefix('admin')->group(function(){
    Route::get('login','AdminController@login')->name('admin');
    Route::post('login','AdminController@login')->name('admin-login');
    Route::group(['middleware' => ['admin']],function(){
        Route::get('home','AdminController@home');
    });
});
Route::get('login/facebook', 'CustomerController@fb_redirectToProvider')->name('login-facebook');
Route::get('login/facebook/callback', 'CustomerController@fb_handleProviderCallback');
Route::get('login/google', 'CustomerController@google_redirectToProvider')->name('login-google');
Route::get('login/google/callback', 'CustomerController@google_handleProviderCallback');