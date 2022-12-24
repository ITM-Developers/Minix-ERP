<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/welcome', function () {
    return view('pages.niceadmin.welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

// DEMO OF NICE ADMIN THEME
Route::middleware(['auth'])->group(function () {

    Route::get('/demo-niceadmin-dashboard', function () {
        return view('pages.niceadmin.dashboard');
    });

    Route::get('/demo-niceadmin-welcome', function () {
        return view('pages.niceadmin.welcome');
    });
    
    Route::get('/demo-niceadmin-alerts', function () {
        return view('pages.niceadmin.alerts');
    });
    
    Route::get('/demo-niceadmin-accordions', function () {
        return view('pages.niceadmin.accordions');
    });
    
    Route::get('/demo-niceadmin-badges', function () {
        return view('pages.niceadmin.badges');
    });
    
    Route::get('/demo-niceadmin-buttons', function () {
        return view('pages.niceadmin.buttons');
    });
    
    Route::get('/demo-niceadmin-not-found', function () {
        return view('pages.niceadmin.404');
    });

    Route::get('/demo-niceadmin-contact', function () {
        return view('pages.niceadmin.contact');
    });
});

// Auth::routes();
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('password/confirm',['ConfirmPasswordController','showConfirmForm'])->name('password.confirm');
Route::post('password/confirm',['ConfirmPasswordController','confirm']);
Route::post('password/email', ['ForgotPasswordController','sendResetLinkEmail'])->name('password.email');
Route::get('password/reset',[ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
Route::post('password/reset',[ResetPasswordController::class,'reset'])->name('password.update');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);



Route::get('/terms-and-conditions', function () {
    return view('pages.niceadmin.terms-and-conditions');
})->name('terms-and-conditions');