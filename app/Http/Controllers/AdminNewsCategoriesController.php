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

class AdminNewsCategoriesController extends Controller
{
    public function showAdminNewsCategories(){
       

        $categories = Category::all();

        
        return view('admin.news-categories', compact("categories"));
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
    public function create(Request $request)
    {
       
        $category = new Category();

        $valitated = $request->validate([
            'category' => ['required', 'min:2', 'unique:App\Models\Category,category'],
        ]);

        $category->category = $valitated['category'];
        $category->save();

        return redirect()->back()->with('status', 'CATEGORY CREATED');

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
    public function edit($id, Request $request)
    {
       
        $category = Category::findOrFail($id);

        $valitated = $request->validate([
            'category' => ['required', 'min:2', 'unique:App\Models\Category,category'],
        ]);

        $category->category = $valitated['category'];
        $category->save();

        return redirect()->back()->with('status', 'CATEGORY EDITED');
    }

    public function delete($id){
        
        if($id == 1){
        
            return redirect()->back()->with('status', 'CATEGORY GENERAL CAN NOT DELETED');
           }
        Category::findOrFail($id)->delete();

        return redirect()->back()->with('status', 'CATEGORY DELETED');

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
