<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opinion>
 */
class OpinionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_usuario'=>$this->faker->userName(),
            'valoracion'=>$this->faker->numberBetween(1,5),
            'comentario'=>$this->faker->sentence(),
            'libro_id'=>$this->faker->numberBetween(1,30)
        ];
    }
}
