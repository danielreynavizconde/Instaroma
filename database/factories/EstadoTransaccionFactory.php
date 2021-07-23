<?php

namespace Database\Factories;

use App\Models\EstadoTransaccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstadoTransaccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EstadoTransaccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['Nulo','Pagado']),
        ];
    }
}
