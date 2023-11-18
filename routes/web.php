<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\CarController as Cars;
use App\Http\Controllers\BrandController as Brands;
use App\Http\Controllers\HomeController as Home;

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

Route::get('/', [ Home::class, 'index' ]) -> name('home.index');

Route::get('/posts', [ Posts::class, 'index' ]) -> name('posts.index');
Route::get('/posts/create', [ Posts::class, 'create' ]) -> name('posts.create');
Route::get('/posts/{id}', [ Posts::class, 'show' ]) -> name('posts.show');
Route::post('/posts', [ Posts::class, 'store' ]) -> name('posts.store');

Route::resource('cars',Cars::class);
Route::resource('brands',Brands::class);

//Route::get('/cars', [ Cars::class, 'index']) -> name('cars.index');
//Route::get('/cars/create' , [ Cars::class,'create']) -> name('cars.create');
//Route::post('/cars', [ Cars::class, 'store']) -> name('cars.store');
//Route::get('/cars/{id}', [ Cars::class, 'show']) -> name('cars.show');
//Route::get('/cars/{id}/edit' , [ Cars::class,'edit']) -> name('cars.edit');
//Route::put('/cars/{id}', [ Cars::class, 'update']) -> name('cars.update');
//Route::delete('/cars/{id}' , [ Cars::class,'destroy']) -> name('cars.destroy');




