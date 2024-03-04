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

    //Route::get('comment', [CommentController::class, 'index']);
    Route::get('view/blog/comment/{id}', [CommentController::class, 'view']);
    Route::post('/comment/added', [CommentController::class, 'addComment']);
    Route::get('comment/display', [CommentController::class, 'displayComment']);
    Route::get('edit/comment/{id}', [CommentController::class, 'editComment']);
    Route::post('edit/blog/comment/{id}', [CommentController::class, 'updateComment']);
    Route::get('delete/comment/{id}', [CommentController::class, 'deleteComment']);
    //Route::resource('comments{id}', CommentController::class)->only(['view', 'updateComment', 'deleteComment']);


    Route::get('all/blogs', [BlogController::class, 'allpost']);
    Route::get('/blog', [BlogController::class, 'blogIndex']);
    Route::post('/blog/create', [BlogController::class, 'blogContent']);

    Route::get('/view/blog/{id}', [BlogController::class, 'view']);
    Route::get('/post/delete/{id}', [BlogController::class, 'delete']);
    Route::get('/post/view', [BlogController::class, 'display']);
    Route::get('/edit/blog/{id}', [BlogController::class, 'edit']);
    Route::post('/edit/{id}', [BlogController::class, 'update']);
});


require __DIR__ . '/auth.php';