<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->word(),
            'nivel'=>$this->faker->numberBetween(1,4),
            'horasAcademicas'=>$this->faker->numberBetween(20,200),
            'profesor_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
