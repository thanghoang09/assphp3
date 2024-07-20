<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
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


Route::get('/', [ArticleController::class, 'getArticles'])->name('home');
Route::get('/detail/{id}', [ArticleController::class, 'articleDetail'])->name('detail');
Route::get('/category/{id}', [ArticleController::class, 'showArticleByCategory'])->name('category');

Route::get('/search', [ArticleController::class, 'search'] )->name('search');

