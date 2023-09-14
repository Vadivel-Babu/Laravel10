<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductController::class,'index']);
Route::get('/Products/create',[ProductController::class,'create']);
Route::post('/Products/store',[ProductController::class,'store']);
Route::put('/Products/{id}/update',[ProductController::class,'update']);
Route::get('/Products/{id}/show',[ProductController::class,'show']);
Route::get('/Products/{id}/edit',[ProductController::class,'edit']);
Route::get('/Products/{id}/delete',[ProductController::class,'destroy']);
