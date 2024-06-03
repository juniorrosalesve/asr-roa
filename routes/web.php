<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductoController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');


Route::middleware(['auth', 'verified'])->group(function() {
    Route::prefix('sales')->group(function(){
        Route::get('/', [SalesController::class, 'index'])->name('dashboard');
    });
    Route::prefix('products')->group(function() {
        Route::get('/', [ProductoController::class, 'index'])->name('productos');

        Route::post('/create', [ProductoController::class, 'store'])->name('create-product');
        Route::get('/delete/{id}', [ProductoController::class, 'delete'])->name('delete-product');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// hola