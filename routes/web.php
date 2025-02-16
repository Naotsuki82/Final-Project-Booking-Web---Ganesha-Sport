<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/lapangan-futsal', function () {
    return view('lapangan-futsal');
})->name('lapangan-futsal');

Route::get('/lapangan-basket', function () {
    return view('lapangan-basket');
})->name('lapangan-basket');

Route::get('/meja-billiar', function () {
    return view('meja-billiar');
})->name('meja-billiar');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/', function () {
    return view('welcome');
});


