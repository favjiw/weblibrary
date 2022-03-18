<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class,'index']);
Route::get('/list', [BookController::class,'index']);
Route::get('/detail/{id_book}', [BookController::class,'show']);
Route::get('/add', [BookController::class,'create']);
Route::post('/added', [BookController::class,'store']);
Route::get('/edit/{id_book}', [BookController::class,'edit']);
Route::post('updated/{id_book}', [BookController::class,'updateBook']);
Route::delete('/list/{id_book}', [BookController::class,'destroy']);
