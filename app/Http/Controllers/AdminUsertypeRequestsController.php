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

class AdminUsertypeRequestsController extends Controller
{
    public function showAdminUsertypeRequests(){
       


        
        return view('admin.usertype-requests');
    }

    public function accept(Request $request){
        $validated = $request->validate([
            "requestId" => 'required',
        ]);

        $requestId = $validated['requestId'];
        $usertype = UsertypeRequest::findOrFail($requestId);
        $userId = $usertype->user_id;
        $user = User::findOrFail($userId);
        $user->usertype->$usertype->request;
        $user->save();



        return redirect()->back()->with("status", "REQUEST ACCEPTED");
    }

    public function reject(Request $request){
        $validated = $request->validate([
            "requestId" => 'required',
        ]);
        $requestId = $validated['requestId'];
        UsertypeRequest::findOrFail($requestId)->delete();

        return redirect()->back()->with('status', "REQUEST REJECTED");
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
