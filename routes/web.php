<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('/unpublished', [PostController::class, 'indexAll'])->name('posts.all');

Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts/create', [PostController::class, 'store'])->name('posts.store');

Route::get('/search/', [PostController::class, 'search'])->name('search');
Route::post('/search/', [PostController::class, 'searchResults'])->name('posts.search');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/votes/{post}', [\App\Http\Controllers\VotesController::class, 'store'])->name('votes.store');
Route::get('/votes/{vote}/thank-you', [\App\Http\Controllers\VotesController::class, 'show'])->name('votes.thank-you');
