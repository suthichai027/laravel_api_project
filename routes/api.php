<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/booking', [BookingController::class, 'index']);
Route::post('/booking', [BookingController::class, 'store']);
Route::get('/booking/{id}', [BookingController::class,'show']);
Route::put('/booking/{id}', [BookingController::class,'update']);
Route::patch('/booking/{id}', [BookingController::class,'Patch']);
Route::delete('/booking/{id}', [BookingController::class,'destroy']);