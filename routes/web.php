<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruDashboardController;
use App\Http\Controllers\MuridDashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
})->name('home');

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['role.guru'])->group(function () {
        Route::get('/guru/dashboard', [GuruDashboardController::class, 'index']);
    });

    Route::middleware(['role.murid'])->group(function () {
        Route::get('/murid/dashboard', [MuridDashboardController::class, 'index']);
    });
});
