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

// Routes For static pages
Route::get('/','User\HomeController@index')->name('index');
Route::get('/contact','User\ContactController@index')->name('user.contact');
Route::resource('/posts','User\PostController')->only(['index','show']);
Route::get('/about','User\AboutController@index')->name('user.about');


// Route::get('/about', 'AppController@about')->name('about');
// Route::get('/contact', 'AppController@contact')->name('contact');
// Route::resource('/posts', 'PostController')->only(['index', 'show']);

// Routes for client patient
Route::prefix('/patient')->namespace('Patient')->name('patient.')->group(function() {
    Route::get('/home', 'PatientController@index')->name('home');
    Route::namespace('Auth')->group(function(){
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login')->name('login');
        Route::post('/logout', 'LoginController@logout')->name('logout');
    
        Route::get('/password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
        Route::post('/password/confirm', 'ConfirmPasswordController@confirm')->name('password.confirm');
    
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });
});

// Routes for medecin
Route::prefix('/medecin')->namespace('Medecin')->name('medecin.')->group(function(){
    Route::get('/home', 'MedecinController@index')->name('home');
    
    Route::get('/patients/{patient}/antecedents/create', 'AntecedentController@create')->name('patients.antecedent.create');
    Route::post('/patients/{patient}/antecedents/store', 'AntecedentController@store')->name('patients.antecedent.store');
    Route::get('/patients/{patient}/antecedents/{antecedent}/edit', 'AntecedentController@edit')->name('patients.antecedent.edit');
    Route::put('/patients/{patient}/antecedents/{antecedent}/update', 'AntecedentController@update')->name('patients.antecedent.update');
    
    Route::get('/patients/{patient}/calendar', 'PatientController@calendar')->name('patients.calendar');
    Route::resource('/patients', 'PatientController');
    
    Route::get('/pregnacies/{patient}/create', 'PregnacyController@create')->name('pregnacies.create');
    Route::post('/pregnacies/{patient}/store', 'PregnacyController@store')->name('pregnacies.store');


    Route::namespace('Auth')->group(function(){
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login')->name('login');
        Route::post('/logout', 'LoginController@logout')->name('logout');
    
        Route::get('/password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
        Route::post('/password/confirm', 'ConfirmPasswordController@confirm')->name('password.confirm');
    
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });
});

// Routes for partener Responsable
Route::prefix('/partener')->namespace('Responsable')->name('responsable.')->group(function(){
    Route::get('/home', 'ResponsableController@index')->name('home');
    Route::resource('/services', 'ServiceController')->only(['index']);
    Route::resource('/medecins', 'MedecinController');

    Route::namespace('Auth')->group(function(){
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login')->name('login');
        Route::post('/logout', 'LoginController@logout')->name('logout');
    
        Route::get('/password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
        Route::post('/password/confirm', 'ConfirmPasswordController@confirm')->name('password.confirm');
    
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });
});

// Routes for Admin
Route::prefix('/admin')->namespace('Admin')->name('admin.')->group(function(){
    Route::get('/', 'AdminController@index')->name('home');

    Route::resource('/clients', 'ClientController')->only(['index']);

    Route::resource('/parteners', 'PartenerController');
    Route::resource('/services', 'ServiceController')->only(['index', 'store', 'update','destroy']);

    Route::resource('/posts', 'PostController')->except(['show', 'store']);

    Route::namespace('Auth')->group(function(){
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login')->name('login');
        Route::post('/logout', 'LoginController@logout')->name('logout');
    
        Route::get('/password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
        Route::post('/password/confirm', 'ConfirmPasswordController@confirm')->name('password.confirm');
    
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });
});

// Routes for attachments store
Route::post('/attachments', 'AttachmentController@store')->name('attachments.store');