<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [MenuController::class, 'index']);
Route::get('/add', [MenuController::class, 'create']);
Route::get('/menu/edit/{id}', [MenuController::class, 'edit']);
Route::get('/menu/delete/{id}', [MenuController::class, 'destroy']);

Route::post('/menuadd', [MenuController::class, 'store']);
Route::post('/menu/update', [MenuController::class, 'update']);





