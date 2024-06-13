<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
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
    public function store($newsId, Request $request)
    {
        $validated = $request->validate([
            'comment'=> ['required', 'min:5'],
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->news_id = $newsId;
        $comment->comment = $validated['comment'];
        $comment->save();
   
        
        return redirect()->back()->with("status", "COMMENT CREATED");
    }

    public function delete($id, Request $request)
    {
        $comment = Comment::findOrFail($id);
        if(Auth::user()->id != $comment->user_id && Auth::user()->usertype != 'admin'){
            abort(403, "UNAUTHORIZED ENTRY");
        }

        $comment->deleteOrFail();
       

        return redirect()->back()->with("status", "COMMENT DELETED");
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        
        $comment = Comment::findOrFail($id);
        $validated = $request->validate([
            'comment'=> ['required', 'min:5'],
        ]);

        $comment->comment = $validated['comment'];
        $comment->save();

        return redirect()->back()->with("status", "COMMENT EDITED");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
