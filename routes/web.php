<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionRequestController;
use App\Http\Controllers\UsertypeRequestController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminCommentsController;
use App\Http\Controllers\AdminContactMessagesController;
use App\Http\Controllers\AdminFaqCategoriesController;
use App\Http\Controllers\AdminFaqQuestionsController;
use App\Http\Controllers\AdminFaqRequestsController;
use App\Http\Controllers\AdminNewsCategoriesController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminUsertypeRequestsController;





Route::get('/', [NewsController::class, 'home']);

Route::get('/home', [NewsController::class, 'home'])->name('home');

Route::get('/all-news', [NewsController::class, 'index'])->name('all-news');



Route::get('/latest-news', [NewsController::class, 'lastNews'])->name('latest-news');

Route::get('/news/{newsId}',[NewsController::class, 'showNewsById'] )->name('news');

Route::get('/fag', [QuestionController::class, 'index'])->name('faq');


Route::post('/contact', [ContactController::class, 'store'])->name('contact');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware(['auth', 'banned'])->group(function () {
    Route::put('/profile', [ProfileController::class, 'userInfo'])->name('profile.info');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/write-news', [NewsController::class, 'create'])->name('write-news');
    
    Route::middleware('writer')->post('/write-news', [NewsController::class, 'store'])->name('store-news');
    
    Route::middleware('writer')->get('/edit-news/{id}', [NewsController::class, 'showEdit'])->name('edit-news');
    
    Route::middleware('writer')->put('/edit-news/{id}', [NewsController::class, 'storeEdit'])->name('edit-news');
    
    Route::middleware('admin')->delete('/delete-news/{id}', [NewsController::class, 'delete'])->name('delete-news');

    Route::post('comment-write{newsId}', [CommentController::class, 'store'] )->name("comment-write");
    
    Route::put('comment-update{id}', [CommentController::class, 'update'] )->name("comment-update");
    
    Route::middleware('admin')->delete('comment-delete{id}', [CommentController::class, 'delete'] )->name("comment-delete");


    Route::middleware('admin')->post('/faq', [QuestionController::class, 'store'])->name('faq-create');

    Route::middleware('admin')->delete('/faq/{id}', [QuestionController::class, 'delete'])->name('faq-delete');

    Route::middleware('admin')->put('/faq/{id}', [QuestionController::class, 'update'])->name('faq-edit');
    
    Route::post('faq-request', [QuestionRequestController::class, 'store'])->name('faq-request');

    Route::post("/usertype-request", [UsertypeRequestController::class, 'store'])->name('usertype-request');

    Route::middleware('admin')->group(function(){
        

        Route::get('/admin-dashboard', [AdminDashboardController::class, 'showAdminDashboard'])->name("admin-dashboard");
    
        Route::get('/admin-comments', [AdminCommentsController::class, 'showAdminComments'])->name("admin-comments");
        
        Route::get('/admin-contacts-messages', [AdminContactMessagesController::class, 'showAdminContactMessages'])->name("admin-contacts-messages");
        
        Route::get('/admin-faq-categories', [AdminFaqCategoriesController::class, 'showAdminFaqCategories'])->name("admin-faq-categories");
        
        Route::get('/admin-faq-questions', [AdminFaqQuestionsController::class, 'showAdminFaqQuestions'])->name("admin-faq-questions");
        
        Route::get('/admin-faq-requests', [AdminFaqRequestsController::class, 'showAdminFaqRequests'])->name("admin-faq-requests");
        
        Route::get('/admin-news-categories', [AdminNewsCategoriesController::class, 'showAdminNewsCategories'])->name("admin-news-categories");
        
        Route::post('/admin-news-categories-create', [AdminNewsCategoriesController::class, 'create'])->name('admin-news-categories-create');
    
        Route::put('admin-news-categories-edit/{id}', [AdminNewsCategoriesController::class, 'edit'])->name('admin-news-categories-edit');
    
        Route::delete('/admin-news-categories-delete/{id}', [AdminNewsCategoriesController::class, 'delete'])->name('admin-news-categories-delete');
    
    
        Route::get('/admin-news', [AdminNewsController::class, 'showAdminNews'])->name("admin-news");
        
        Route::get('/admin-users', [AdminUsersController::class, 'showAdminUsers'])->name("admin-users");
    
        Route::get('/admin-userstype-requests', [AdminUsertypeRequestsController::class, 'showAdminUsertypeRequests'])->name("admin-userstype-requests");
    
        Route::delete('admin-user-delete/{id}', [AdminUsersController::class, 'deleteUser'])->name('admin-user-delete');

        Route::put('/admin-usertype-accept', [AdminUsertypeRequestsController::class, 'accept'])->name("admin-usertype-accept");

        Route::delete('/admin-usertype-reject', [AdminUsertypeRequestsController::class, 'reject'])->name("admin-usertype-reject");

        Route::put('/admin-userpassword-reset', [AdminUsersController::class, 'resetPassword'])->name('admin-userpassword-reset');

        Route::put('/admin-user-block', [AdminUsersController::class, 'userBlock'])->name('admin-user-block');

        Route::put('/admin-user-unblock', [AdminUsersController::class, 'userUnBlock'])->name('admin-user-unblock');

        Route::post('/admin-user-update', [AdminUsersController::class, 'updateUser'])->name('admin-user-update');

        Route::post('/admin-user-create', [AdminUsersController::class, 'createUser'])->name("admin-user-create");





    });

    


});










require __DIR__.'/auth.php';
