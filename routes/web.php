<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/articles', [ArticleController::class,'index']);
Route::post('/articles', [ArticleController::class,'store']);
Route::get('/articles/create', [ArticleController::class,'create']);
Route::get('/articles/{id}', [ArticleController::class,'edit']);
Route::put('/articles/{id}', [ArticleController::class,'update']);
Route::delete('/articles/{id}', [ArticleController::class,'destroy']);