<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ndoc' => $this->faker->sentence(),
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->name(),
            'telefonoCelular' => $this->faker->sentence(),
            'activo' => $this->faker->randomElement(['1','1'])
        ];
    }
}
