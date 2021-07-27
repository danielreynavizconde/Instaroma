<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Database\Query\JoinClause;

class CategoriasController extends Controller
{
    //Muestra productos en general
    public function index(){
        $categorias = Categoria::orderBy('id','desc')->where('activo', '1')->paginate();
    }
}
