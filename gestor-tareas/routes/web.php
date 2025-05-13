<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::get('/', fn() => redirect()->route('projects.index'));
Route::resource('projects', ProjectController::class);
Route::resource('tasks', TaskController::class);
