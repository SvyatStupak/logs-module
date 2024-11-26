<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoggerController;

Route::post('/log', [LoggerController::class, 'log']);
Route::post('/log/{type}', [LoggerController::class, 'logTo']);
Route::post('/log-to-all', [LoggerController::class, 'logToAll']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
