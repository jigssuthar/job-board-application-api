<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::apiResource('jobs', App\Http\Controllers\JobController::class);
    Route::post('jobs/{job}/apply', [App\Http\Controllers\JobApplicationController::class, 'store']);
    Route::get('jobs/{job}/applications', [App\Http\Controllers\JobApplicationController::class, 'index']);
    Route::get('jobs/search', [App\Http\Controllers\JobController::class, 'search']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

