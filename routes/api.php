<?php

use App\Http\Controllers\AuthController;
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

// Public routes

//User routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

//Poem routes
Route::get('poems', [PoemController::class, 'index']);
Route::get('poems/{id}', [PoemController::class, 'show']);
Route::get('poems/search/{title}', [PoemController::class, 'search']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
//    User routes
    Route::post('logout', [AuthController::class, 'logout']);

//    Poems routes
    Route::post('poems', [PoemController::class, 'store']);
    Route::put('poems/{id}', [PoemController::class, 'update']);
    Route::delete('poems/{id}', [PoemController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
