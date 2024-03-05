<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\postController;
use App\Http\Controllers\CommentController;
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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/blog/{id}', [CommentController::class, 'view']);
    Route::group(['prefix' => '/comment'], function () {
        Route::post('/add', [CommentController::class, 'addComment']);
        Route::get('/edit/{id}', [CommentController::class, 'editComment']);
        Route::post('/edit/{id}', [CommentController::class, 'updateComment']);
        Route::get('/delete/{id}', [CommentController::class, 'deleteComment']);
    });

    Route::get('/all/blogs', [BlogController::class, 'posts']);
    Route::get('post/view', [BlogController::class, 'display']);
    
    Route::group(['prefix' => '/blog'], function () {
        Route::get('', [BlogController::class, 'blogIndex']);
        Route::post('/create', [BlogController::class, 'addBlog']);
        Route::get('/view/{id}', [BlogController::class, 'view']);
        Route::get('/delete/{id}', [BlogController::class, 'delete']);
        Route::get('/edit/{id}', [BlogController::class, 'edit']);
        Route::post('/edit/{id}', [BlogController::class, 'update']);
    });
});


require __DIR__ . '/auth.php';