<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'nombre'=> $this->faker->firstName() . ' '. $this->faker->lastName(),
            'edad'=>$this->faker->randomElement([18,19,20,21]),
            'telefono'=>$this->faker->phoneNumber(),
            'direccion'=>$this->faker->address()
        ];
    }
}
