<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\SweetController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sweets', [SweetController::class, 'index'])->name('sweets');
Route::get('/items', [ItemController::class, 'index'])->name('items');
Route::get('/books', [BookController::class, 'index'])->name('books');

Route::post('/likeable', [LikeController::class, 'store'])->name('like');
