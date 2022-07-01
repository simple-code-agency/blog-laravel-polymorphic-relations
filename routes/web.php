<?php

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

Route::get('/sweets', [\App\Http\Controllers\SweetController::class, 'index'])->name('sweets');
Route::get('/items', [\App\Http\Controllers\ItemController::class, 'index'])->name('items');
Route::get('/books', [\App\Http\Controllers\BookController::class, 'index'])->name('books');
