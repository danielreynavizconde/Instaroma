<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;

use App\Http\Livewire\ShowProductos;


//Muestra Ruta de la pagina Home
Route::get('/', HomeController::class)->name('home');

//Muestra Rutas para productos
Route::resource('productos', ProductosController::class)->names('productos');

//Muestra Rutas para el control de dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Muestra Rutas para paginas estaticas
Route::get('talleres', function(){
    return view('talleres');
})->name('talleres');

Route::get('contacto', function(){
    return view('contacto');
})->name('contacto');

Route::get('carrito', function(){
    return view('carrito');
})->name('carrito');

Route::resource('carrito/añadir', CartController::class)->names('cart');