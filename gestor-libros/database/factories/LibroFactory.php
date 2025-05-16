<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->word(),
            'descripcion'=> $this->faker->text(200),
            'ano_publicacion'=>$this->faker->numberBetween(2000,2025),
            'autor_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
