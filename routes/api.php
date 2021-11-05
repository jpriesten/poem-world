<?php

use App\Http\Controllers\PoemController;
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

Route::get('poems', [PoemController::class, 'index']);
Route::get('poems/{id}', [PoemController::class, 'show']);
Route::post('poems', [PoemController::class, 'store']);
Route::put('poems/{id}', [PoemController::class, 'update']);
Route::delete('poems/{id}', [PoemController::class, 'destroy']);
Route::get('poems/search/{title}', [PoemController::class, 'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
