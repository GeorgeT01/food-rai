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
    return view('user.home');
});


Route::get('register', 'User\Auth\RegisterController@index');
Route::post('register', 'User\Auth\RegisterController@store');
Route::get('login', 'User\Auth\LoginController@index');
Route::post('login', 'User\Auth\LoginController@login');
Route::get('logout', 'User\Auth\LogoutController@logout');