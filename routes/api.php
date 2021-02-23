<?php

use App\Http\Controllers\GameApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// REST API routes

Route::get('/games', [GameApiController::class, 'display']);
Route::get('/games/{game}', [GameApiController::class, 'specific']);
Route::post('/games', [GameApiController::class, 'store']);
Route::put('/games/{game}', [GameApiController::class, 'update']);
Route::delete('/games/{game}', [GameApiController::class, 'destroy']);


