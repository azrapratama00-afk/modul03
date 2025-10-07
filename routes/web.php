<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TamuController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/data', [TamuController::class, 'data']);
Route::post('/daftar', [TamuController::class, 'daftar']);
