<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


Route::middleware('web')->get('/', [UserController::class, 'showUsers'])->name('home');
Route::get('/user/{id}', [UserController::class,'showSingleUser'])->name('view.user');
// Route::get('/user',[UserController::class,'showUser'] );
Route::post('/add', [UserController::class, 'addUser'])->name('addUser');
Route::view('newuser', '/addUser');
Route::get('/update/{id}', [UserController::class,'update'])->name('update.user');
Route::get('/updatepage/{id}', [UserController::class,'updateUser'])->name('updateUser');
 