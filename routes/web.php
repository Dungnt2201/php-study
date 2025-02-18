<?php

use App\Events\UserRegistered;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register-test', function () {
    $user = User::factory()->create([
        'email' => Str::random(10) . '@example.com' // Email ngẫu nhiên để tránh trùng
    ]);

    event(new UserRegistered($user));

    return "User đã đăng ký: " . $user->email;
});