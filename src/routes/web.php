<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Route::get('/', function () {
|     return view('welcome');
});
*/


Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts',[ContactController::class, 'store']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::patch('/categories', [CategoryController::class, 'index']);
Route::patch('/categories', [CategoryController::class, 'store']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::patch('/categories/update', [CategoryController::class, 'update']);
Route::delete('/categories/delete', [CategoryController::class, 'destroy']);
Route::get('/admin', [AuthController::class, 'admin']);
Route::get('/admins/search', [AuthController::class, 'search']);



