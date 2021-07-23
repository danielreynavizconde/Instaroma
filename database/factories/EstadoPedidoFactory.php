<?php

namespace Database\Factories;

use App\Models\EstadoPedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstadoPedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EstadoPedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['Procesado','Enviado','Entregado']),
        ];
    }
}
