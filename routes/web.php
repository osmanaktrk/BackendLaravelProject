<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;



Route::get('/', [NewsController::class, 'home']);

Route::get('/home', [NewsController::class, 'home'])->name('home');

Route::get('/all-news', [NewsController::class, 'index'])->name('all-news');



Route::get('/latest-news', [NewsController::class, 'lastNews'])->name('latest-news');

Route::get('/news/{newsId}',[NewsController::class, 'showNewsById'] )->name('news');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::put('/profile', [ProfileController::class, 'userInfo'])->name('profile.info');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/write-news', [NewsController::class, 'create'])->name('write-news');
    
    Route::post('/write-news', [NewsController::class, 'store'])->name('store-news');
    
    Route::get('/edit-news/{id}', [NewsController::class, 'showEdit'])->name('edit-news');
    
    Route::put('/edit-news/{id}', [NewsController::class, 'storeEdit'])->name('edit-news');
    
    Route::delete('/delete-news/{id}', [NewsController::class, 'delete'])->name('delete-news');

    Route::post('comment-write{newsId}', [CommentController::class, 'store'] )->name("comment-write");
    
    Route::put('comment-update{id}', [CommentController::class, 'update'] )->name("comment-update");
    
    Route::delete('comment-delete{id}', [CommentController::class, 'delete'] )->name("comment-delete");






});










require __DIR__.'/auth.php';
