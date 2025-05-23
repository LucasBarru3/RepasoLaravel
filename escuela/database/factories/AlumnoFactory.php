<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_ape' => $this->faker->name(),
            'edad'=> $this->faker->numberBetween(18,100),
            'telefono'=> $this->faker->phoneNumber(),
            'direccion'=>$this->faker->address()
        ];
    }
}
