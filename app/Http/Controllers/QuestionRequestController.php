<?php

namespace App\Http\Controllers;

use App\Models\QuestionRequest;
use Illuminate\Http\Request;

class QuestionRequestController extends Controller
{
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
        $validated = $request->validate([
            'user_id' => 'required',
            'request' => ['required', 'min:5'],
        ]);

        $question = new QuestionRequest();

        $question->user_id = $validated['user_id'];
        $question->request = $validated['request'];

        $question->save();

        return redirect()->back()->with("status", "REQUEST CREATED");


    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionRequest $questionRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionRequest $questionRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionRequest $questionRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionRequest $questionRequest)
    {
        //
    }
}
