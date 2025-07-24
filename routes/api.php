<?php

use App\Http\Controllers\CantonController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\ProvinciaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('provincias', ProvinciaController::class);

Route::apiResource('cantones', CantonController::class);

Route::apiResource('distritos', DistritoController::class);

Route::apiResource('lugares', LugarController::class);