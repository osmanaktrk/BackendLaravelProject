<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\FaqCategory;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = FaqCategory::all();
        

        return view("faq", compact('categories'));
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
        

        $validated = $request->validate([
            'faq_category_id' => 'required',
            'question' => ['required', 'min:5'],
            'answer' => ['required', 'min:5'],
        ]);

        $question = new Question();

        $question->faq_category_id = $validated['faq_category_id'];
        $question->question = $validated['question'];
        $question->answer = $validated['answer'];

        $question->save();

        return redirect()->back()->with("status", "FAQ CREATED");
    }

    public function delete($id, Request $request){

        Question::findOrFail($id)->deleteOrFail();

        return redirect()->back()->with("status", "FAQ DELETED");
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {

        
        $question = Question::findOrFail($id);

        $validated = $request->validate([
            'faq_category_id' => 'required',
            'question' => ['required', 'min:5'],
            'answer' => ['required', 'min:5'],
        ]);

        $question->faq_category_id = $validated['faq_category_id'];
        $question->question = $validated['question'];
        $question->answer = $validated['answer'];

        $question->save();

        return redirect()->back()->with("status", "FAQ UPDATED");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
