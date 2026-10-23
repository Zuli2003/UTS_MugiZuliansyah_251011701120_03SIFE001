<?php

use App\Http\Controllers\ToyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToyController::class, 'home'])->name('home');
Route::get('/mainan', [ToyController::class, 'index'])->name('toys.index');
Route::get('/mainan/{toy}', [ToyController::class, 'show'])->name('toys.show');
