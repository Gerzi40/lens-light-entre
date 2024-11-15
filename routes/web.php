<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ServicesListController;
use App\Http\Controllers\ServiceDetailsController;


Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

//ini customer
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

    Route::get('/bookingHistory/{id}', [TransactionController::class, 'idAtRating'])->name('RatingPage');

    Route::POST('/bookingHistory/{transaction_id}', [TransactionController::class, 'updateRating'])->name('updateRating');

    Route::post('/profile', [ProfileController::class, 'updateUser'])->name('updateUser');

    Route::view('/payment', 'payment')->name('PaymentPage');
    
});

// ini admin
Route::middleware(['auth:admin'])->group(function(){
    Route::get('/adminhome', [AdminContoller::class, 'index'])->name('adminHome');
    Route::get('/adminbookings',[AdminContoller::class, 'showBooking'])->name('adminBooking');

    Route::get('/admin/addPackage', [AdminContoller::class, 'showAddPackage'])->name('adminAddPackage');
    Route::post('/admin/addPackage', [AdminContoller::class, 'createNewPackage'])->name('adminStorePackage');
    // bikin di bawah ini yang edit update dll
    Route::get('/admin/updatePackage/{id}', [AdminContoller::class, 'showUpdatePackage'])->name('showAdminUpdatePackage');
    Route::post('/admin/updatePackage/{id}', [AdminContoller::class, 'updatePackage'])->name('adminUpdatePackage');
    Route::delete('/admin/deletePackage/{id}', [AdminContoller::class, 'destroy'])->name('adminDeletePackage');
    // Route::get('/profile', function(){ return view('profile');})->name('profilePage');
});


// ini guest
Route::get('/aboutus', function(){ return view('aboutus');})->name('aboutUs');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'registerUser'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
