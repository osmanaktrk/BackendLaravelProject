<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/news', function(){
    return view('news');
})->name('news');

Route::get('/allnews', function(){
    return view('allnews');
})->name('allnews');

Route::get('/writenews', function(){
    return view('writenews');
})->name('writenews');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});









require __DIR__.'/auth.php';
