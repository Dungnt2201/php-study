<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); // Các route cho đăng nhập, đăng ký, xác thực tự động

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/maintenance', function () {
    return view('maintenance');
});
