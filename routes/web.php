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

Route::get('/', 'AppController@index')->name('welcome');
Route::get('/login-user', 'AppController@create')->name('login-user');
Route::get('/profile-user', 'AppController@profile')->name('profile-user');
Route::get('/maman', 'AppController@maman')->name('maman');
Route::get('/enfant', 'AppController@enfant')->name('enfant');
Route::get('/contact', 'AppController@contact')->name('contact');
Route::get('/about', 'AppController@about')->name('about');
Route::get('/sensibiliser', 'AppController@sensibiliser')->name('sensibiliser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
