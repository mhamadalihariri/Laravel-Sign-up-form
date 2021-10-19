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
    return view('layout');
});


Route::view('register','register');

// Route::post('registerUser','UserController@registerUser');

Route::post('register',['uses'=>'App\Http\Controllers\UserController@registerUser', 'as'=>'test.registerUser']);
