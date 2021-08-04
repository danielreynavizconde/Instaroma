<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;

use App\Http\Livewire\ShowProductos;
use App\Models\Producto;

//Muestra Ruta de la pagina Home
Route::get('/', HomeController::class)->name('home');

//Muestra Rutas para productos
Route::resource('productos', ProductosController::class)->names('productos');

Route::get('categoria/{categoria}', [ProductosController::class,'categoria'])->name('productos.categoria');

//Muestra Rutas para el control de dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('Admin.dashboard');
})->name('dashboard');
//Muestra Rutas para el control de productos
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/productos', function () {
    $productos = Producto::orderBy('id','desc')->where('activo', '1')->paginate();        
        return view('Admin.productos', compact('productos'));
})->name('productosAdmin');
//Muestra Rutas para el control de categorias
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/categorias', function () {
    return view('Admin.categorias');
})->name('categoriasAdmin');
//Muestra Rutas para el control de mensajes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/mensajes', function () {
    return view('Admin.mensajes');
})->name('mensajesAdmin');
//Muestra Rutas para el control de ajustes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/ajustes', function () {
    return view('Admin.ajustes');
})->name('ajustesAdmin');




//Muestra Rutas para paginas estaticas
Route::get('talleres', function(){
    return view('talleres');
})->name('talleres');

Route::get('contactanos',[ContactanosController::class, 'index'])->name('contactanos.index');