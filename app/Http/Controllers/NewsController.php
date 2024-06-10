<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;


class NewsController extends Controller
{

    public function home()
    {
        $last = News::latest()->get();

        if(isset($last[0])){
            $news[0] = $last[0];
        }
        if(isset($last[1])){
            $news[1] = $last[1];
        }
        if(isset($last[2])){
            $news[2] = $last[2];
        }
        if(isset($last[3])){
            $news[3] = $last[3];
        }
        if(isset($last[4])){
            $news[4] = $last[4];
        }

        


        return view('home', compact('news'));
    }


    public function lastNews()
    {
        $news = News::latest()->get()[0];

        return view('news.index', compact('news'));
    }


    public function showNewsById($newsId)
    {
        $news = News::findOrFail($newsId);
        return view('news.index', compact('news'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->get();
        $categories = Category::all();
        return view('news.all', compact('news', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('news.write', compact('categories'));
    }

    public function delete($id){

    
        News::findOrFail($id)->deleteOrFail();

        Comment::where('news_id', $id)->delete();

        $news = News::latest()->get();


        $categories = Category::all();

        return redirect()->route('all-news', compact('news', 'categories'))->with("status", "NEWS DELETED");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => ['required', 'min:5'],
            'cover' => ['required', 'image', 'max:10240'],
            'content' => ['required', 'min:5'],
            'category' => 'required',

        ]);

        $news = new News();


        $news->title = $validated['title'];
        $news->content = $validated['content'];
        $news->category_id = $validated['category'];
        $news->user_id = Auth::user()->id;
        $news->save();




        $coverExt = $validated['cover']->getClientOriginalExtension();
        $coverName = $news->id;
        $cover = $coverName . '.' . $coverExt;
        $validated['cover']->move(public_path('img/news/'), $cover);
        $news->cover = 'img/news/' . $cover;
        $news->save();


        return redirect()->route('home')->with('status', 'NEW A NEWS CREATED');
    }

    public function storeEdit($id, Request $request)
    {
       

        $news = News::findOrFail($id);

        $validated = $request->validate([
            'title' => ['required', 'min:5'],
            'cover' => ['image', 'max:10240'],
            'content' => ['required', 'min:5'],
            'category' => 'required',

        ]);

        if (isset($validated['cover'])) {
            $coverExt = $validated['cover']->getClientOriginalExtension();
            $coverName = $news->id;
            $cover = $coverName . '.' . $coverExt;
            $validated['cover']->move(public_path('img/news/'), $cover);
            $news->cover = 'img/news/' . $cover;
        }



        $news->title = $validated['title'];
        $news->content = $validated['content'];
        $news->category_id = $validated['category'];
        
        $news->save();
        $newsId = $id;
        return redirect()->route('news', compact('newsId'))->with('status', 'NEWS EDITED');
    }


    public function showEdit($id)
    {
        

        $news = News::findOrFail($id);
        $categories = Category::all();

        return view('news.edit', compact('categories', 'news'));
    }
    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
