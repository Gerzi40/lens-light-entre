<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/servicesList', function(){
    return view('servicesList');
});


Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
