<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index'])->name('home');
Route::post('/{id}/create', [TodoController::class, 'create'])->name('create');
Route::post('/{id}/update', [TodoController::class, 'update'])->name('update');
