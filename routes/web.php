<?php

use App\Http\Controllers\viewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [viewsController::class, 'indexView'])->name('indexView');
Route::get('insertEmployee', [viewsController::class, 'insertEmployeeView'])->name('insertEmployeeView');