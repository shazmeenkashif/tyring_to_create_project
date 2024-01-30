<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:sanctum')->post("/task/create", [TaskController::class,"store"]);
Route::middleware('auth:sanctum')->get("/task/get", [TaskController::class,"index"]);
Route::middleware('api')->post('/user/login',[UserController::class,"loginUser"]);
Route::middleware('api')->post('/user/signup',[UserController::class,"signUp"]);
Route::middleware('auth:sanctum')->put("/task/update/{id}",[TaskController::class,"update"]);