<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\ScreeningController;
use Illuminate\Support\Facades\Route;

Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/{id}', [FilmController::class, 'show']);
Route::post('/films/store', [FilmController::class, 'store']);
Route::post('/films/update/{id}', [FilmController::class, 'update']);
Route::delete('/films/{id}', [FilmController::class, 'destroy']);

Route::get('/screenings/{day}', [ScreeningController::class, 'index']);
