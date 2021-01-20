<?php

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

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

Route::get('', [CobaController::class, 'index']);
Route::get('/friends', [CobaController::class, 'index']);
Route::get('/friends/create', [CobaController::class, 'create']);
Route::post('/friends', [CobaController::class, 'store']);