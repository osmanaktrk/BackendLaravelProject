<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;



Route::get('/', [NewsController::class, 'home']);

Route::get('/home', [NewsController::class, 'home'])->name('home');

Route::get('/all-news', [NewsController::class, 'index'])->name('all-news');

Route::get('/write-news', [NewsController::class, 'create'])->name('write-news');

Route::get('/latest-news', [NewsController::class, 'lastNews'])->name('latest-news');

Route::get('/news', function(){
    return view('news');
})->name('news');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});









require __DIR__.'/auth.php';
