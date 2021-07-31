<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $table = "imagen";

    //relacion uno a muchos inversa
    public function producto(){
        return $this->belongsTo('App\Models\Producto');
    }
    
}
