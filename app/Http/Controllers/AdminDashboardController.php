<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\FaqCategory;
use App\Models\News;
use App\Models\Question;
use App\Models\QuestionRequest;
use App\Models\User;
use App\Models\UsertypeRequest;
use Illuminate\Support\Facades\Auth;



class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showAdminDashboard()
    {
        

        $users = User::all();
        $news = News::all();
        $newsCategories = Category::all();
        $contacts = Contact::all();
        $faqQuestions = Question::all();
        $faqCategories = FaqCategory::all();
        $faqRequests = QuestionRequest::all();
        $usertypeRequests = UsertypeRequest::all();
        $comments = Comment::all();
        

        return view("admin.dashboard", compact(['users', 'news', 'newsCategories', 'contacts', 'faqQuestions', 'faqCategories', 'faqRequests', 'usertypeRequests', 'comments']));
    }

    
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
