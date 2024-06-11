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

// Route::get('/', [\App\Http\Controllers\IndexController::class, "index"]);

Route::get('/', [\App\Http\Controllers\InfoController::class, "index"])->name('info.index');

Route::get('/order', [\App\Http\Controllers\OrderController::class, "index"])->name('order.index');
Route::get('/order/create', [\App\Http\Controllers\OrderController::class, "create"]);
Route::get('/order/update', [\App\Http\Controllers\OrderController::class, "update"]);

Route::post('/order', [\App\Http\Controllers\OrderController::class, "store"])->name('order.store');


Route::get('/storage', [\App\Http\Controllers\StorageController::class, "index"])->name('storage.index');

Route::get('/main', [\App\Http\Controllers\MainController::class, "index"])->name('main.index');


