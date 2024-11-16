<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\VeterinarioController;
use App\Http\Controllers\MascotaController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('duenos')->group(function () {
    Route::get('/', [PropietarioController::class, 'index'])->name('duenos.index');
    Route::get('/crear', [PropietarioController::class, 'create'])->name('duenos.create');
    Route::post('/', [PropietarioController::class, 'store'])->name('duenos.store');
    Route::get('/{id}/editar', [PropietarioController::class, 'edit'])->name('duenos.edit');
    Route::put('/{id}', [PropietarioController::class, 'update'])->name('duenos.update');
    Route::delete('/{id}', [PropietarioController::class, 'destroy'])->name('duenos.destroy');
});


Route::prefix('veterinarios')->group(function () {
    Route::get('/', [VeterinarioController::class, 'index'])->name('veterinarios.index');
    Route::get('/crear', [VeterinarioController::class, 'create'])->name('veterinarios.create');
    Route::post('/', [VeterinarioController::class, 'store'])->name('veterinarios.store');
    Route::get('/{id}/editar', [VeterinarioController::class, 'edit'])->name('veterinarios.edit'); // Formulario para editar
    Route::put('/{id}', [VeterinarioController::class, 'update'])->name('veterinarios.update');
    Route::delete('/{id}', [VeterinarioController::class, 'destroy'])->name('veterinarios.destroy');
});

Route::prefix('mascotas')->group(function () {
    Route::get('/', [MascotaController::class, 'index'])->name('mascotas.index');
    Route::get('/crear', [MascotaController::class, 'create'])->name('mascotas.create');
    Route::post('/', [MascotaController::class, 'store'])->name('mascotas.store');
    Route::get('/{id}/editar', [MascotaController::class, 'edit'])->name('mascotas.edit');
    Route::put('/{id}', [MascotaController::class, 'update'])->name('mascotas.update');
    Route::delete('/{id}', [MascotaController::class, 'destroy'])->name('mascotas.destroy');
});




