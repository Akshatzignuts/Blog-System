<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\postController;
use App\Http\Controllers\yourController;
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

Route::get('/about', function () {
    return view('about');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/blog', [BlogController::class, 'blogIndex']);
Route::post('/blog/create', [BlogController::class, 'blogContent']);
Route::get('/post', [postController::class, 'postIndex']);
Route::get('/post/view', [BlogController::class, 'display']);
Route::get('/your/Blogs', [yourController::class, 'show']);
Route::get('/edit/blog{id}', [BlogController::class, 'edit']);
Route::post('/edit/{id}', [BlogController::class, 'update']);
Route::get('blog/delete{id}', [BlogController::class, 'remove']);
require __DIR__ . '/auth.php';
