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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/patient')->namespace('Patient')->name('patient.')->group(function() {
    Route::get('/home', 'PatientController@index')->name('home');
    Route::get('/about', 'PatientController@about')->name('about');
    Route::get('/Blog', 'PatientController@blog')->name('blog');
    Route::get('/contact', 'PatientController@contact')->name('contact');

    // Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    // Route::post('/login', 'Auth/LoginController@login')->name('login');

});