<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Home page redirects to Login
Route::redirect('/', '/login');

// Register
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register']);

// Login
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');