<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $alumno = new Alumno();
        $alumno->nombre = 'Jone Martinez';
        $alumno->edad = 18;
        $alumno->telefono = '658944122';
        $alumno->direccion = 'Gran Via, 3';
        $alumno->save();

        $alumno = new Alumno();
        $alumno->nombre = 'Eider Urrutia';
        $alumno->edad = 20;
        $alumno->telefono = '523669944';
        $alumno->direccion = 'Ornilla, 2';
        $alumno->save();

        $alumno = new Alumno();
        $alumno->nombre = 'Unai Errigoitia';
        $alumno->edad = 18;
        $alumno->telefono = '698774422';
        $alumno->direccion = 'Hirubide, 45';
        $alumno->save();


    }
}
