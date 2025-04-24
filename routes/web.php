<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/crear', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Usuarios
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/crear', [UserController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UserController::class, 'store'])->name('usuarios.store');

// Teléfonos
Route::get('/telefonos', [PhoneController::class, 'index'])->name('telefonos.index');
Route::get('/telefonos/crear', [PhoneController::class, 'create'])->name('telefonos.create');
Route::post('/telefonos', [PhoneController::class, 'store'])->name('telefonos.store');

// Categorías
Route::get('/categorias', [CategoryController::class, 'index'])->name('categorias.index');
Route::get('/categorias/crear', [CategoryController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoryController::class, 'store'])->name('categorias.store');

// Dashboard principal
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

