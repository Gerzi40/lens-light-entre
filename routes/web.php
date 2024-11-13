<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServicesListController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->group(function(){

    Route::get('/servicesList', [ServicesListController::class, 'view'])->name('servicesList');

    //Route::post('/servicesList', [ServicesListController::class, 'search'])->name('servicesListSearch');
    
    Route::get('/serviceDetails/{id}', [ServiceDetailsController::class, 'view'])->name('serviceDetails');
    
    Route::get('/bookingHistory', [TransactionController::class, 'showTransaction'])->name('bookingHistory');

    Route::get('/profile', function(){ return view('profile');})->name('profilePage');
    
    Route::get('/payment/{id}', [PaymentController::class, 'viewPrice'])->name('paymentPage');

    Route::get('/paymentSuccess', function(){ return view('paymentSuccess');})->name('paymentSuccess');

    Route::post('/paymentSuccess', function(){ return view('paymentSuccess');})->name('paymentSuccess');

    Route::post('/payment', [TransactionController::class, 'createTransaction'])->name('createTransaction');

    Route::get('/rating/{id}', [TransactionController::class, 'idAtRating'])->name('RatingPage');

    Route::view('/payment', 'payment')->name('PaymentPage');
    
});

Route::get('/aboutus', function(){ return view('aboutus');})->name('aboutUs');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'registerUser'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
