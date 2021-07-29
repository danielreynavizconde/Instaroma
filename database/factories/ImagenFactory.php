<?php

namespace Database\Factories;

use App\Models\Imagen;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imagen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            //
            'producto_id' => $this->faker->randomElement(['1','1','2']),
            'url' => $this->faker->imageUrl(1280,1280),
            'activo' => $this->faker->randomElement(['1','1','1'])
        ];
    }
}
