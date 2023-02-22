<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/category')->group(function () {
    Route::get('/marbel', [ProductController::class, 'marbel']);
    Route::get('/kid', [ProductController::class, 'kid']);
    Route::get('/book', [ProductController::class, 'book']);
    Route::get('/song', [ProductController::class, 'song']);
});

Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{tampil}', [NewsController::class, 'tampil']);

Route::prefix('/Program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan', [ProgramController::class, 'kunjungan']);
});

Route::get('/about-us', [AboutController::class, 'about']);

Route::resource('/contact-us', ContactController::class);
