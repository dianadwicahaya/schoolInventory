<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware auth supaya hanya user login yang bisa akses barangs
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('barangs.index');
    });

    Route::resource('barangs', BarangController::class);
});
