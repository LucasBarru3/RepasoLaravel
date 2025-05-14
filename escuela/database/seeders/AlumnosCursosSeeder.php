<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Curso;
class AlumnosCursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Alumno::all() as $alumno) {
            $cursosAleatorios = Curso::inRandomOrder()->limit(rand(1, 3))->pluck('id');
            $alumno->cursos()->attach($cursosAleatorios);
        }
        
    }
}
