<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/demo-welcome', function () {
    return view('pages.niceadmin.welcome');
});

Route::get('/demo-alerts', function () {
    return view('pages.niceadmin.alerts');
});

Route::get('/demo-accordions', function () {
    return view('pages.niceadmin.accordions');
});