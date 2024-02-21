<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/posts', [PostController::class, 'index']);
//     Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/react', function () {
    return view('react');
});

Route::get('/', [PostController::class, 'index']);
Route::middleware('auth')->group(function () {
     // Set /posts as the default landing page
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
