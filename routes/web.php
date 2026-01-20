<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitoController;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
Route::get('/', [HabitoController::class, 'index'])->name('habitos.index');
Route::get('/crear', [HabitoController::class, 'create'])->name('habitos.create');
Route::post('/guardar', [HabitoController::class, 'store'])->name('habitos.store');
Route::get('/editar/{id}', [HabitoController::class, 'edit'])->name('habitos.edit');
Route::post('/actualizar/{id}', [HabitoController::class, 'update'])->name('habitos.update');
Route::get('/eliminar/{id}', [HabitoController::class, 'destroy'])->name('habitos.destroy');
