<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\HomeController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('admin', [HomeController::class, 'index'])->name('admin.home');
Route::get('register', [RegisterController::class, 'index'])->name('auth.register.index');
Route::post('register', [RegisterController::class, 'store'])->name('auth.register');
Route::resource('login', LoginController::class)->names('auth.login');
Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');
Route::resource('forgot-password', ForgotPasswordController::class)->names('auth.passwords');
