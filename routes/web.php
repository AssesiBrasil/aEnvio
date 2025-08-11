<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function() {

    Route::view('/', 'auth.login');
    Route::post('/login', [AuthController::class, 'index'])->name('login');
    
});

Route::middleware('auth')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/logout', LogoutController::class)->name('logout');

    //CLIENTES
    Route::get('/clientes', [ClientesController::class, 'create'])->name('clientes.create');
    Route::post('/clientes/store', [ClientesController::class, 'store'])->name('clientes.store');
    
});
    
