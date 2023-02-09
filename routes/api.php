<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DamageLevelController;
use App\Http\Controllers\DisasterTypeController;
use App\Http\Controllers\PublicServiceController;
use App\Http\Controllers\DisasterController;

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
Route::get('/cities', [CityController::class, 'index']);
Route::post('/cities/create', [CityController::class, 'store']);
Route::get('/damage-level', [DamageLevelController::class, 'index']);
Route::post('/damage-level', [DamageLevelController::class, 'store']);
Route::get('/disaster-type', [DisasterTypeController::class, 'index']);
Route::post('/disaster-type', [DisasterTypeController::class, 'store']);
Route::get('/public-services', [PublicServiceController::class, 'index']);
Route::post('/public-services', [PublicServiceController::class, 'store']);
Route::get('/disaster', [DisasterController::class, 'index']);
//Route::post('/disaster', [DisasterController::class, 'store']);
