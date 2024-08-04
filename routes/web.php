<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainServiceController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::post('customer-Registration/','Registration')->name('customer.registration');
    Route::post('customer-do-login','customerLogin')->name('customer.login');
    Route::get('/customer-logout','customerLogout')->name('customer.logout');
});
Route::controller(AuthController::class)->group(function(){
    Route::get('login/','login')->name('login.form');
    Route::post('do-login','adminLogin')->name('admin.login');
    Route::get('/logout','logout')->name('logout');
    // Route::get('/profile','profile')->name('profile');
});
Route::controller(DashboardController::class)->group(function(){
    Route::get('dashboard','dashboard')->name('dashboard');
});
Route::resource('train-services', TrainServiceController::class);
Route::resource('stations', StationController::class);
Route::resource('users', UserController::class);
Route::resource('wallets', WalletController::class);
Route::resource('tickets', TicketController::class);
