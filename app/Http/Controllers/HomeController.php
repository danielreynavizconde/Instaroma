<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $productos = Producto::orderBy('id','desc')->where('activo', '1')->paginate();
        $sliders = Slider::orderBy('id','desc')->where('activo', '1')->paginate();
        $productosTendencias = Producto::orderBy('id','desc')->where('filtro', '2')->where('activo', '1')->paginate();
        $productosDestacados = Producto::orderBy('id','desc')->where('filtro', '3')->where('activo', '1')->paginate();
        return view('home', compact('productos','sliders','productosTendencias','productosDestacados'));


    }
}
