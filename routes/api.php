<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PapersController;
use App\Http\Controllers\API\VerController;


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

/**
 * API
 */
Route::get('ver', [VerController::class, 'index']);

Route::apiResource('papers', PapersController::class);
// Route::get('paper', [PapersController::class, 'index']);
// Route::get('paper/getAll', [PapersController::class, 'showAll']);
// Route::get('paper/get/{paper_id}', [PapersController::class, 'show']);