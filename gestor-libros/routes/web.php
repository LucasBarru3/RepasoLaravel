<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [LibroController::class, 'index']);
    Route::get('libros/{libro}/confirmar', [LibroController::class, 'confirmar'])->name('libros.confirmar');
    Route::resource('libros', LibroController::class);
    Route::resource('autores', AutorController::class);
    Route::resource('opiniones', OpinionController::class);
});

require __DIR__.'/auth.php';
