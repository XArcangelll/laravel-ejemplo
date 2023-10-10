<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{

    //protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => fake()->sentence() ,
           'descripcion' => fake()->paragraph(),
           'slug'=> fake()->slug(),
           'categoria' => fake()->randomElement(['desarrollo web','desarrollo movil']),
           'marca_id' => fake()->randomElement([1,2])
        ];
    }
}
