<?php

use Illuminate\Support\Facades\Route;


Route::namespace('App\Http\Controllers')->group(function() {
    Route::resource('/user', 'UserController');
});

Route::get('/', ['App\Http\Controllers\MainController', 'index'])->name('home');

Route::get('/login', ['App\Http\Controllers\MainController', 'login'])->name('login');

Route::get('/about', ['App\Http\Controllers\MainController', 'about'])->name('about');

Route::get('/attempt', ['App\Http\Controllers\AuthController', 'authenticate']);
