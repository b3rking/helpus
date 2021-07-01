<?php

use Illuminate\Support\Facades\Route;


Route::get('/', ['App\Http\Controllers\MainController', 'index'])->name('home');

Route::get('/login', ['App\Http\Controllers\MainController', 'login'])->name('login');

Route::get('/about', ['App\Http\Controllers\MainController', 'about'])->name('about');

Route::post('/register', ['App\Http\Controllers\AuthController', 'register'])->name('register');

Route::get('/attempt', ['App\Http\Controllers\AuthController', 'authenticate']);


Route::get('/logout', ['App\Http\Controllers\AuthController', 'logout'])->name('logout');

//// route to create admin!

Route::get('/add_user', ['App\Http\Controllers\MainController', 'create'])->name('create');


/// admin and all protected routes!

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', ['App\Http\Controllers\MainController', 'dashboard'])->name('dashboard');
});

Route::middleware('auth')->group(function() {
    Route::resource('patient', 'App\Http\Controllers\PatientController');
});
