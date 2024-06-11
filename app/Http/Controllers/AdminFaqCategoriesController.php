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

class AdminFaqCategoriesController extends Controller
{

    public function showAdminFaqCategories(){
        

        $categories = FaqCategory::all();


        
        return view('admin.faq-categories', compact('categories'));
    }



    public function createCategory(Request $request){

        $request->validate([
            'category' => ['required', 'unique:App\Models\FaqCategory,category'],
        ]);

        $category = new FaqCategory();
        $category->category = $request->category;
        $category->save();

        return redirect()->back()->with("status", "FAQ-CATEGORY CREATED");
    }

    public function deleteCategory(Request $request){

        $request->validate([
            'categoryId' => 'required',
        ]);

        FaqCategory::findOrFail($request->categoryId)->delete();


        return redirect()->back()->with('status', 'FAQ-CATEGORY DELETED');
    }

    public function editCategory(Request $request){

            $validated = $request->validate([
                'categoryId' => 'required',
                'category' => ['required', 'unique:App\Models\FaqCategory,category'],
            ]);

            $category = FaqCategory::findOrFail($validated['categoryId']);
            $category->category = $validated['category'];
            $category->save();
            

        return redirect()->back()->with('status', 'FAQ-CATEGORY UPDATED');
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
