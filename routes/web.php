<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;

Route::get('/absen', [AbsenController::class, 'index'])->name('absen.index');
Route::get('/absen/create', [AbsenController::class, 'create'])->name('absen.create');
Route::post('/absen/store', [AbsenController::class, 'store'])->name('absen.store');
Route::get('/absen/edit/{id}', [AbsenController::class, 'edit'])->name('absen.edit');
Route::put('/absen/update/{id}', [AbsenController::class, 'update'])->name('absen.update');
Route::delete('/absen/delete/{id}', [AbsenController::class, 'destroy'])->name('absen.destroy');
