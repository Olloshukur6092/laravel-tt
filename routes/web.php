<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('auth')->group(function () {
    Route::get('/register', [RegisterController::class, 'registerPage'])->name('auth.register');
    Route::get('/login', [LoginController::class, 'loginPage'])->name('auth.login');
    Route::post('/register', [RegisterController::class, 'registerStore'])->name('register_store');
    Route::post('/login', [LoginController::class, 'checkLogin'])->name('check_login');
});
