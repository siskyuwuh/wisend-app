<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DistanceDataController;
use App\Http\Controllers\Api\CustomerDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customer-data', [CustomerDataController::class, 'index']);
Route::get('/distance-location', [DistanceDataController::class, 'index']);
// Route::get('/distance-location/{distanceLocation:slug}', [DistanceDataController::class, 'index']);
