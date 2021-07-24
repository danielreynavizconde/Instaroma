<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empresa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ruc' => $this->faker->randomElement(['10887765423']),
            'nombre' => $this->faker->randomElement(['Instaroma']),
            'razon_social' => $this->faker->randomElement(['Instaroma EIRL']),
            'descripcion' => $this->faker->randomElement(['Somos un emprendimiento, dedicados a la venta de insumos y jabones artesanales hechos con glicerina, aromas y colores según tu gusto para todo tipo de evento especial para ti. ']),
            'direccion' => $this->faker->randomElement(['Zela 311, 2do nivel. Trujillo']),
        ];
    }
}
