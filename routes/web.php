<?php

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

Route::get('/', [\App\Http\Controllers\IndexController::class, "index"]);

Route::get('/info', [\App\Http\Controllers\InfoController::class, "index"]);

Route::get('/Order', [\App\Http\Controllers\OrderController::class, "index"]);

Route::get('/Storage', [\App\Http\Controllers\StorageController::class, "index"]);

