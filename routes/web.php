<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [ HomeController::class, 'index' ]);
Route::get('/posts', [ Posts::class, 'index' ]);
Route::get('/posts/create', [ Posts::class, 'create' ]);
Route::get('/posts/{id}', [ Posts::class, 'show' ]);
Route::post('/posts', [ Posts::class, 'store' ]);
Route::get('/cars', [ CarController::class, 'index']);
Route::get('/cars/create' , [ CarController::class,'create']);
Route::get('/cars/edit/{id}' , [ CarController::class,'edit']);
Route::post('/cars/update/{id}', [ CarController::class, 'update']);
Route::get('/cars/delete/{id}' , [ CarController::class,'destroy']);
Route::get('/cars/{id}', [ CarController::class, 'show']);
Route::post('/cars', [ CarController::class, 'store']);

