<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', function () {
        return view('home');
    });
});



Route::get('/servicesList', function(){
    return view('servicesList');
});

Route::get('/serviceDetails', function(){
    return view('serviceDetails');
});

Route::get('/bookingHistory', function(){
    return view('bookingHistory');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/aboutus', function(){
    return view('aboutus');
});


Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
