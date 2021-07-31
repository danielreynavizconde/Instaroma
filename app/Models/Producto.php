<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "producto";

    //Relación uno a muchos(inversa)
    public function categoria(){
        return $this->belongs('App\Models\Categoria');
    }
    //Relacion uno a muchos
    public function imagenes(){
        return $this->hasMany('App\Models\Imagen');
    }
}
