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
Route::resource('/contact','User\ContactController')->only(['index','store']);
Route::resource('/comment','User\CommentController')->only(['store','delete']);
Route::resource('/posts','User\PostController')->only(['index','show']);
Route::get('/about','User\AboutController@index')->name('user.about');


// Route::get('/about', 'AppController@about')->name('about');
// Route::get('/contact', 'AppController@contact')->name('contact');
// Route::resource('/posts', 'PostController')->only(['index', 'show']);

// Routes for client patient
Route::prefix('/patient')->namespace('Patient')->name('patient.')->group(function() {
    Route::get('/home', 'PatientController@index')->name('home');
    Route::get('/profile/{id}', 'PatientController@profile')->name('profile');
    Route::put('/profile/{id}', 'PatientController@update')->name('update');
    Route::patch('/profile/{id}', 'PatientController@email')->name('email');
    Route::put('/profil/{id}', 'PatientController@password')->name('password');
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

    Route::get('/calendar', 'CalendarController@index')->name('calendar.index');
    Route::get('/appointments/day', 'AppointmentController@day')->name('appointments.day');
    Route::get('/appointments/come', 'AppointmentController@come')->name('appointments.come');
    Route::get('/appointments/histories', 'AppointmentController@histories')->name('appointments.histories');
    Route::get('/appointments/{appointment}','AppointmentController@show')->name('appointments.show');

    Route::get('/patients/{patient}/antecedents/create', 'AntecedentController@create')->name('patients.antecedent.create');
    Route::post('/patients/{patient}/antecedents/store', 'AntecedentController@store')->name('patients.antecedent.store');
    Route::get('/patients/{patient}/antecedents/{antecedent}/edit', 'AntecedentController@edit')->name('patients.antecedent.edit');
    Route::put('/patients/{patient}/antecedents/{antecedent}/update', 'AntecedentController@update')->name('patients.antecedent.update');
    
    Route::get('/patients/{patient}/calendar', 'PatientController@calendar')->name('patients.calendar');
    Route::resource('/patients', 'PatientController');

    Route::delete('/child/{patient}/destroy/{children}', 'ChildController@destroy')->name('patients.childs.destroy');
    Route::put('/child/{patient}/update/{children}', 'ChildController@update')->name('patients.childs.update');
    Route::post('/child/{patient}/store', 'ChildController@store')->name('patients.childs.store');
    Route::get('/child/{patient}/create', 'ChildController@create')->name('patients.childs.create');
    Route::get('/child/{patient}', 'ChildController@index')->name('patients.childs');
    Route::get('/child/{patient}/children/{children}', 'ChildController@show')->name('patients.childs.show');

    Route::get('/pregnacies/{patient}/create', 'PregnacyController@create')->name('pregnacies.create');
    Route::post('/pregnacies/{patient}/store', 'PregnacyController@store')->name('pregnacies.store');
    
    Route::get('/home', 'MedecinController@index')->name('home');

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

    Route::post('/clients/{patient}/active', 'ClientController@active')->name('clients.active');
    Route::post('/clients/{patient}/deactive', 'ClientController@deactive')->name('clients.deactive');
    Route::resource('/clients', 'ClientController')->only(['index','destroy']);

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
