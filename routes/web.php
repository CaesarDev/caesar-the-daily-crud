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

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');


Route::get('posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('posts/create', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::get('/search/', [\App\Http\Controllers\PostController::class, 'search'])->name('search');
Route::post('/search/', [\App\Http\Controllers\PostController::class, 'searchResults'])->name('posts.search');

Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::get('/votes/{post}', [\App\Http\Controllers\VotesController::class, 'store'])->name('votes.store');
Route::get('/votes/{vote}/thank-you', [\App\Http\Controllers\VotesController::class, 'show'])->name('votes.thank-you');
