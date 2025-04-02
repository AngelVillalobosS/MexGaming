<?php

use App\Http\Controllers\viewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [viewsController::class, 'indexView'])->name('indexView');
Route::get('/empleado/registrar', [viewsController::class, 'insertEmployeeview'])->name('insertEmployee');
Route::get('insertProjects', [viewsController::class, 'insertProjectsView'])->name('insertProjects');
Route::get('reportProjects', [viewsController::class, 'reportProjectsView'])->name('reportProjects');