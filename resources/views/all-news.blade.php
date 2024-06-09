@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/all-news.css') }}">
@endsection

@section('title')
    <title>All News</title>
@endsection

@section('content')
    <main>


        <h1 class="all-news-head">All News</h1>

        <div class="category-news">


            <div class="category-all">
              
                <div class="categories">
                    <h3>Categories</h3>


                    
                        <label for="all-categories">All Category: <span class="category-num">{{$news->count()}}</span><br>
                            <input type="checkbox" name="all-categories" id="all-categories" checked>
                        </label>
                        

                   
                    
                    

                    @foreach ($categories as $category)
                       
                            
                        <label for="{{ $category->category }}">{{ $category->category }}: <span class="category-num">{{$category->news->count()}}</span><br>
                            <input class="input-categories" type="checkbox" name="{{ $category->category }}" id="{{ $category->category }}" checked>
                        </label>

                        
                    @endforeach





                </div>
                <div class="all-news-container">

                    @foreach ($news as $item)
                        <div class="all-news" category="{{ $item->category->category }}">
                            <div class="all-news-img">
                                <div class="all-news-img-box">
                                    <img src="{{ asset($item->cover) }}" alt="demo">
                                </div>
                                <span class="all-news-category">{{ $item->category->category }}</span>
                                <span class="all-news-writer">by {{ $item->user->name }} at
                                    {{ $item->created_at->format('d/M/Y  H:i') }}</span>
                            </div>
                            <a href="{{route('news', $item->id)}}" class="all-news-title">{{$item->title}}</a>
                        </div>
                    @endforeach





                </div>
            </div>

        </div>
    </main>
@endsection

@section('js')
    <script src="{{asset('js/all-news.js')}}"></script>    
@endsection
