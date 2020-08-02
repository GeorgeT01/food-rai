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
})->name('home');



Route::prefix('user')->group(function(){
    Route::get('register', 'User\Auth\RegisterController@index')->name('user.register');
    Route::post('register', 'User\Auth\RegisterController@store')->name('user.register.submit');
    Route::get('login', 'User\Auth\LoginController@index')->name('user.login');
    Route::post('login', 'User\Auth\LoginController@login')->name('user.login.submit');
    Route::get('logout', 'User\Auth\LogoutController@logout')->name('user.logout');
});







Route::get('store', 'Store\StoreController@index');
Route::get('store/login', 'Store\Auth\LoginController@showLoginForm');
Route::get('store/register', 'Store\Auth\RegisterController@showRegisterForm');