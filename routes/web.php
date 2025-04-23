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

Route::get('/products', [ProductController::class, 'index']);

//Ruta para agregar usuarios desde el navegador
Route::get('/usuarios/crear', [UserController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UserController::class, 'store'])->name('usuarios.store');

//phones rutas para poder agregar desde el navegador
Route::get('/telefonos/crear', [PhoneController::class, 'create'])->name('telefonos.create');
Route::post('/telefonos', [PhoneController::class, 'store'])->name('telefonos.store');

//rutas para agregar categorias desde el navegador
Route::get('/categorias/crear', [CategoryController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoryController::class, 'store'])->name('categorias.store');

//rutas para poder agregar productos:
Route::get('/products/crear', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

//dashboard que mostrará la vista principal de todos los elementos.
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
