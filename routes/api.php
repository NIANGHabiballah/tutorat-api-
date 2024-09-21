<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\AffectationController;
use App\Http\Controllers\SeanceController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('utilisateurs', UtilisateurController::class);
Route::get('/utilisateurs', [UtilisateurController::class, 'index']);
Route::apiResource('modules', ModuleController::class);
Route::apiResource('affectations', AffectationController::class);
Route::apiResource('seances', SeanceController::class);
