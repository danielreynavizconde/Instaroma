<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //Muestra productos en general
    public function index(){
        $productos = Producto::orderBy('id','desc')->where('activo', '1')->paginate();
        return view('Productos.index', compact('productos'));
    }
    //Muestra detalle de producto
    public function show($id){
        $producto = Producto::find($id);
        return view('Productos.show', compact('producto'));
    }
}
