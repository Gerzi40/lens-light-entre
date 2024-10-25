<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\ServicesListController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/servicesList', [ServicesListController::class, 'view'])->name('servicesList');
    
    Route::get('/serviceDetails/{id}', [ServiceDetailsController::class, 'view'])->name('serviceDetails');
    
    Route::get('/bookingHistory', function(){
        return view('bookingHistory');
    });
    
    Route::get('/profile', function(){
        return view('profile');
    });
    
    Route::get('/aboutus', function(){
        return view('aboutus');
    });
});


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'registerUser'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
