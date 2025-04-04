<?php

use App\Http\Controllers\empleadosController;
use App\Http\Controllers\viewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas Get
Route::get('index', [viewsController::class, 'indexView'])->name('indexView');
Route::get('home', [viewsController::class, 'homeView'])->name('homeView');
Route::get('/empleado/registrar', [viewsController::class, 'insertEmployeeview'])->name('insertEmployee');
Route::get('insertProjects', [viewsController::class, 'insertProjectsView'])->name('insertProjects');
Route::get('reportProjects', [viewsController::class, 'reportProjectsView'])->name('reportProjects');

// Rutas Post
Route::post('/empleados', [empleadosController::class, 'store'])->name('empleados.store');