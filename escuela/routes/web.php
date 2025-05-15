<?php

use App\Models\Alumno;
use App\Http\Controllers\AlumnoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index');})->name('inicio');
Route::get('alumnos/{alumno}/confirmar', [AlumnoController::class, 'confirmar'])->name('alumnos.confirmar');
Route::get('alumnos/search', [AlumnoController::class, 'search'])->name('alumnos.search');
Route::resource('alumnos', AlumnoController::class);