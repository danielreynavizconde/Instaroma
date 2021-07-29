<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre=$this->faker->name();
        return [
            'sku' => $this->faker->randomElement(['1','2','3']),
            'nombre' => $nombre,
            'slug' => Str::slug($nombre, '-'),
            'descripcion' => $this->faker->randomElement(['Ingredientes primarios como manteca, aceite de coco, aceite de oliva, sebo purificado, o soda caústica, se combinan con ingredientes adicionales y se mezclan (recomendamos hacerlo con una licuadora de mano). ','Ingredientes primarios como manteca, aceite de coco, aceite de oliva, sebo purificado, o soda caústica, se combinan con ingredientes adicionales y se mezclan (recomendamos hacerlo con una licuadora de mano). ','Ingredientes primarios como manteca, aceite de coco, aceite de oliva, sebo purificado, o soda caústica, se combinan con ingredientes adicionales y se mezclan (recomendamos hacerlo con una licuadora de mano). ']),
            'precio_actual' => $this->faker->randomElement(['20','30','50']),
            'precio_anterior' => $this->faker->randomElement(['60','70','90']),
            'categoria_id' => $this->faker->randomElement(['1','2']),
            'imagen' => $this->faker->imageUrl(1280,1280),
            'iva' => $this->faker->randomElement(['18','18','18']),
            'stock' => $this->faker->randomElement(['12','30','32']),
            'filtro' => $this->faker->randomElement(['1','2','3']),
            'activo' => $this->faker->randomElement(['1','1','1'])
        ];
    }
}
