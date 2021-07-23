<?php

namespace Database\Factories;

use App\Models\Destino;
use Illuminate\Database\Eloquent\Factories\Factory;

class DestinoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Destino::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_cliente' => $this->faker->randomElement(['1','2','3']),
            'pais' => $this->faker->randomElement(['Perú','Perú','Perú']),
            'departamento' => $this->faker->randomElement(['La Libertad','Lima','Tumbes']),
            'provincia' => $this->faker->randomElement(['Trujillo','Lima','Tumbes']),
            'distrito' => $this->faker->randomElement(['La Esperanza','La Victoria','Tumbecito']),
            'direccion' => $this->faker->address(),
        ];
    }
}
