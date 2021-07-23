<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $productos = Producto::paginate();
        $sliders = Slider::paginate();
        return view('home', compact('productos','sliders'));
    }
}
