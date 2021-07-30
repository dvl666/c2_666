<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolasController;

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

Route::get("med/get", [ConsolasController::class, "getMed"]);

Route::get("tmed/get", [ConsolasController::class, "getTmed"]);

Route::get("666/get", [ConsolasController::class, "getDatos"]);

Route::post("616/post", [ConsolasController::class, "crearDatos"]);