<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
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
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'message' => ['required', 'min:5'],
        ]);


        $contact = new Contact();
        $contact->name = $validated['name'];
        $contact->email = $validated['email'];
        $contact->message = $validated['message'];

        if(isset($request->user_id)){
            $contact->user_id = $request->user_id;
        }
        $contact->save();


        return redirect()->back()->with("status", "MESSAGE SENDED");
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
