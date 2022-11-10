<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;

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

//Pages
Route::get('/', [DashboardController::class, 'index'])->name('home')->withoutMiddleware('auth');
Route::get('/home', [DashboardController::class, 'index'])->name('home')->withoutMiddleware('auth');
Route::get('/detail-class', function() {
    return view('detail-class');
});
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/educareer', function () {
    return view('list_class');
})->name('educareer');

//Login feature
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Register feature
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('store');

//Forgot passsword feature
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgot_view'])->name('password_request')->middleware('guest');
Route::post('/forgot-password', [ForgotPasswordController::class, 'password_email'])->name('password_email')->middleware('guest');
Route::get('/reset-password{token}',[ForgotPasswordController::class, 'password_reset'])->name('password.reset')->middleware('guest');
Route::post('/reset-password', [ForgotPasswordController::class, 'password_update'])->name('password_update')->middleware('guest');

