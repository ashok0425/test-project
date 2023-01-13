<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
   

Route::middleware('guest')->group(function(){
    // access this route only if not login 
    Route::get('/','AuthController@index');
    Route::get('/login','AuthController@index')->name('login');
});









