<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\Destino;
use App\Models\EstadoPedido;
use App\Models\EstadoTransaccion;
use App\Models\Imagen;
use App\Models\Empresa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Slider::factory(5)->create();
        EstadoPedido::factory(3)->create();
        EstadoTransaccion::factory(3)->create();
        Categoria::factory(4)->create();
        Producto::factory(50)->create();
        Cliente::factory(20)->create();
        Destino::factory(20)->create();
        Imagen::factory(20)->create();
        Empresa::factory(1)->create();
    }
}
