<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [AlumnoController::class, 'index'] )->name('alumnos.index');
// Route::get('alumnos', [AlumnoController::class, 'index'] )->name('alumnos.index');
// Route::get('alumnos/create', [AlumnoController::class, 'create'] )->name('alumnos.create');
// Route::post('alumnos/store', [AlumnoController::class, 'store'] )->name('alumnos.store');
// Route::get('alumnos/edit/{alumno}', [AlumnoController::class, 'edit'] )->name('alumnos.edit');
// Route::put('alumnos/update/{alumno}', [AlumnoController::class, 'update'] )->name('alumnos.update');
// Route::get('alumnos/{alumno}', [AlumnoController::class, 'show'] )->name('alumnos.show');
// Route::get('alumnos/confirm/{alumno}', [AlumnoController::class, 'confirm'] )->name('alumnos.confirm');
// Route::delete('alumnos/{alumno}', [AlumnoController::class, 'destroy'] )->name('alumnos.destroy');

// Route::controller(AlumnoController::class)->group(function () {
//     Route::get('alumnos', 'index')->name('alumnos.index');
//     Route::get('alumnos/create', 'create')->name('alumnos.create');
//     Route::post('alumnos/store', 'store')->name('alumnos.store');
//     Route::get('alumnos/edit/{alumno}', 'edit')->name('alumnos.edit');
//     Route::put('alumnos/update/{alumno}', 'update')->name('alumnos.update');
//     Route::get('alumnos/{alumno}', 'show')->name('alumnos.show');
//     Route::get('alumnos/confirm/{alumno}', 'confirm')->name('alumnos.confirm');
//     Route::delete('alumnos/{alumno}', 'destroy')->name('alumnos.destroy');

// });

// ALUMNOS ***************************
Route::get('alumnos/confirm/{alumno}', [AlumnoController::class, 'confirm'] )->name('alumnos.confirm');
Route::resource('alumnos', AlumnoController::class);

// CURSOS ******************************
Route::get('cursos', [CursoController::class, 'index'] )->name('cursos.index');
Route::get('cursos/create', [CursoController::class, 'create'] )->name('cursos.create');
Route::post('cursos/store', [CursoController::class, 'store'] )->name('cursos.store');
Route::get('cursos/edit/{curso}', [CursoController::class, 'edit'] )->name('cursos.edit');
Route::put('cursos/update/{curso}', [CursoController::class, 'update'] )->name('cursos.update');
Route::delete('cursos/{curso}', [CursoController::class, 'destroy'] )->name('cursos.destroy');

// PROFESORES
Route::get('profesores', [ProfesorController::class, 'index'] )->name('profesores.index');
Route::get('profesores/create', [ProfesorController::class, 'create'] )->name('profesores.create');
Route::post('profesores/store', [ProfesorController::class, 'store'] )->name('profesores.store');
Route::get('profesores/edit/{profesor}', [ProfesorController::class, 'edit'] )->name('profesores.edit');
Route::put('profesores/update/{profesor}', [ProfesorController::class, 'update'] )->name('profesores.update');
Route::delete('profesores/{profesor}', [ProfesorController::class, 'destroy'] )->name('profesores.destroy');
