<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Autor;
use App\Models\Libro;
use App\Models\Opinion;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Autor::factory(10)->create();
        Libro::factory(30)->create();
        Opinion::factory(30)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
