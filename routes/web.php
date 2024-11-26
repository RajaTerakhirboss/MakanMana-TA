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

use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// Resource routes untuk semua tabel
Route::resource('menu', MenuController::class);
Route::resource('restoran', RestoranController::class);
Route::resource('user', UserController::class);
Route::resource('admin', AdminController::class);
