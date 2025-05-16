<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\OpinionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LibroController::class, 'index']);
Route::get('libros/{libro}/confirmar', [LibroController::class, 'confirmar'])->name('libros.confirmar');
Route::resource('libros', LibroController::class);
Route::resource('autores', AutorController::class);
Route::resource('opiniones', OpinionController::class);
