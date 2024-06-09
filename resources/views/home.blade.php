@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
@endsection

@section('title')
    <title>Home</title>
@endsection

@section('content')
<main>
    <div class="home">
        <div class="home-news-1">
            <div class="home-news-1-img">
                <img src="{{asset($news[0]->cover)}}" alt="demo">
            </div>
            <div>
                <span class="home-news-category">{{$news[0]->category->category}}</span>
                <span class="home-news-writer">by {{$news[0]->user->name}} at {{$news[0]->created_at->format("d/M/Y H:i")}}</span>
            </div>
            
            <a href="{{route('news', $news[0]->id)}}" class="home-news-1-title">{{$news[0]->title}}</a>
        </div>
        <div class="home-news-2">
            <div class="home-news-2-img">

                <div class="home-news-2-img-box">
                    <img src="{{asset($news[1]->cover)}}" alt="demo">
                </div>

                <span class="home-news-category">{{$news[1]->category->category}}</span>
                <span class="home-news-writer">by {{$news[1]->user->name}} at {{$news[1]->created_at->format("d/M/Y H:i")}}</span>
            </div>
            
            
            <a href="{{route('news', $news[1]->id)}}" class="home-news-2-title">{{$news[1]->title}}</a>
        </div>
        <div class="home-news-3">

            <div class="home-news-3-img">
                <div class="home-news-3-img-box">
                    <img src="{{asset($news[2]->cover)}}" alt="demo">
                </div>
                <span class="home-news-category">{{$news[2]->category->category}}</span>
                <span class="home-news-writer">by {{$news[2]->user->name}} at {{$news[2]->created_at->format("d/M/Y H:i")}}</span>
            </div>

            <a href="{{route('news', $news[2]->id)}}" class="home-news-3-title">{{$news[2]->title}}</a>
        </div>


    </div>
    
    
    <div class="category-news">
        <h2>Latest 5 News</h2>

        <div class="category-latest-5">
           
            <div class="latest-5-news-container">
                
                <div class="latest-5-news">
                    <div class="latest-5-news-img">
                        <div class="latest-5-news-img-box">
                            <img src="{{asset($news[0]->cover)}}" alt="demo">
                        </div>
                        <span class="latest-5-news-category">{{$news[0]->category->category}}</span>
                        <span class="latest-5-news-writer">by {{$news[0]->user->name}} at {{$news[0]->created_at->format("d/M/Y H:i")}}</span>
                    </div>
                    <a href="{{route('news', $news[0]->id)}}" class="latest-5-news-title">{{$news[0]->title}}</a>
                </div>

                <div class="latest-5-news">
                    <div class="latest-5-news-img">
                        <div class="latest-5-news-img-box">
                            <img src="{{asset($news[1]->cover)}}" alt="demo">
                        </div>
                        <span class="latest-5-news-category">{{$news[1]->category->category}}</span>
                        <span class="latest-5-news-writer">by {{$news[1]->user->name}} at {{$news[1]->created_at->format("d/M/Y H:i")}}</span>
                    </div>
                    <a href="{{route('news', $news[1]->id)}}" class="latest-5-news-title">{{$news[1]->title}}</a>
                </div>

                <div class="latest-5-news">
                    <div class="latest-5-news-img">
                        <div class="latest-5-news-img-box">
                            <img src="{{asset($news[2]->cover)}}" alt="demo">
                        </div>
                        <span class="latest-5-news-category">{{$news[2]->category->category}}</span>
                        <span class="latest-5-news-writer">by {{$news[2]->user->name}} at {{$news[2]->created_at->format("d/M/Y H:i")}}</span>
                    </div>
                    <a href="{{route('news', $news[2]->id)}}" class="latest-5-news-title">{{$news[2]->title}}</a>
                </div>

                <div class="latest-5-news">
                    <div class="latest-5-news-img">
                        <div class="latest-5-news-img-box">
                            <img src="{{asset($news[3]->cover)}}" alt="demo">
                        </div>
                        <span class="latest-5-news-category">{{$news[3]->category->category}}</span>
                        <span class="latest-5-news-writer">by {{$news[3]->user->name}} at {{$news[3]->created_at->format("d/M/Y H:i")}}</span>
                    </div>
                    <a href="{{route('news', $news[3]->id)}}" class="latest-5-news-title">{{$news[3]->title}}</a>
                </div>

                <div class="latest-5-news">
                    <div class="latest-5-news-img">
                        <div class="latest-5-news-img-box">
                            <img src="{{asset($news[4]->cover)}}" alt="demo">
                        </div>
                        <span class="latest-5-news-category">{{$news[4]->category->category}}</span>
                        <span class="latest-5-news-writer">by {{$news[4]->user->name}} at {{$news[4]->created_at->format("d/M/Y H:i")}}</span>
                    </div>
                    <a href="{{route('news', $news[4]->id)}}" class="latest-5-news-title">{{$news[4]->title}}</a>
                </div>






            </div>
        </div>

    </div>

</main>
@endsection

