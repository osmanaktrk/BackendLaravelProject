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

class AdminFaqRequestsController extends Controller
{

    public function showAdminFaqRequests(){
      

        $requests = QuestionRequest::all();
        $categories = FaqCategory::all();

        $users = User::all();

        $userIds = QuestionRequest::orderBy('user_id')->get()->groupBy('user_id')->keys();


        
        return view('admin.faq-requests', compact('requests', 'categories', 'users', 'userIds'));
    }

    public function deleteRequest(Request $request){

        $request->validate([
            'requestId' => 'required',
        ]);

        QuestionRequest::findOrFail($request->requestId)->delete();

        return redirect()->back()->with("status", 'REQUEST DELETED');
    }

    public function acceptRequest(Request $request){

        $validated = $request->validate([
            'faq_category_id' => 'required',
            'requestId' => 'required',
            'question' => ['required', 'min:5'],
            'answer' => ['required', 'min:5'],
        ]);

        $faq = new Question();

        $faq->question = $validated['question'];
        $faq->answer = $validated['answer'];
        $faq->faq_category_id = $validated['faq_category_id'];
        $faq->save();

        QuestionRequest::findOrFail($request->requestId)->delete();



        return redirect()->back()->with("status", "REQUEST ACCEPTED");
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
