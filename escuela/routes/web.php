<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () { return view('index');})->name('inicio');
    Route::get('alumnos/{alumno}/confirmar', [AlumnoController::class, 'confirmar'])->name('alumnos.confirmar');
    Route::get('alumnos/search', [AlumnoController::class, 'search'])->name('alumnos.search');
    Route::resource('alumnos', AlumnoController::class);
    Route::get('cursos/{curso}/confirmar', [CursoController::class, 'confirmar'])->name('cursos.confirmar');
    Route::resource('cursos',  CursoController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
