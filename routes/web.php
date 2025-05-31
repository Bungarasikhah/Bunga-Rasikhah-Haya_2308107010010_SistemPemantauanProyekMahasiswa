<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\ProfileController;

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('home');  // Ini akan memuat view home.blade.php
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->middleware('auth')->name('dashboard');

Route::get('/proyek', [ProyekController::class, 'showProyek'])->middleware('auth')->name('proyek');

Route::get('/evaluations', [EvaluationController::class, 'showEvaluations'])->name('evaluations');

Route::get('/profile', [ProfileController::class, 'showProfile'])->middleware('auth')->name('profile');
