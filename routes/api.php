<?php

use App\Http\Controllers\Api\V1\MovieController;
use App\Http\Controllers\Api\V1\GenreController;
use App\Http\Controllers\Api\V1\ActorController;
use App\Http\Controllers\Api\V1\ReviewController;
use App\Http\Controllers\Api\V1\DirectorController;
use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\Api\V1\FavoriteController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ✅ Add Login Route
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// ✅ Remove 'namespace' (Not needed in Laravel 8+)
Route::group(['prefix' => 'v1', 'middleware' => 'auth:sanctum'], function () {
    Route::apiResource('movies', MovieController::class);
    Route::apiResource('genres', GenreController::class);
    Route::apiResource('actors', ActorController::class);
    Route::apiResource('reviews', ReviewController::class);
    Route::apiResource('directors', DirectorController::class);
    Route::apiResource('tickets', TicketController::class);
    Route::apiResource('favorites', FavoriteController::class);
});
