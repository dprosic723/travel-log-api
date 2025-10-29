<?php

use App\Http\Controllers\TravelLogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/travel-logs', [TravelLogController::class, 'store']);