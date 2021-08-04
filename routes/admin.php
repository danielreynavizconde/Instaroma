<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\MensajeController;
use App\Http\Controllers\Admin\AjusteController;
use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Admin\HomeController;

Route::get('',[HomeController::class, 'index'])->name('admin.home');

Route::resource('categorias', CategoriaController::class)->names('admin.categorias');

Route::resource('productos', ProductoController::class)->names('admin.productos');

Route::resource('mensajes', MensajeController::class)->names('admin.mensajes');

Route::resource('ajustes', AjusteController::class)->names('admin.ajustes');

Route::resource('sliders', SliderController::class)->names('admin.sliders');

