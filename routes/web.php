<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Muestra Ruta de la pagina Home
Route::get('/', HomeController::class)->name('home');

Route::resource('productos', ProductosController::class)->names('productos');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

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


