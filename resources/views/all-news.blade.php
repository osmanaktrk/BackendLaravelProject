@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/allnews.css')}}">
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
                <h4>Categories</h4>
                <div>
                    <label for="demo1">Demo1</label>
                    <input type="checkbox" name="demo1" id="demo1">
                </div>
                <div>
                    <label for="demo2">Demo2</label>
                    <input type="checkbox" name="demo2" id="demo2">
                </div>
                <div>
                    <label for="demo3">Demo3</label>
                    <input type="checkbox" name="demo3" id="demo3">
                </div>
                
            </div>
            <div class="all-news-container">
                
                <div class="all-news">
                    <div class="all-news-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                        <span class="all-news-category">Category</span>
                        <span class="all-news-writer">by Osman at date </span>
                    </div>
                    <a href="" class="all-news-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                        reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                        veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                        assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
                </div>
                
                <div class="all-news">
                    <div class="all-news-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                        <span class="all-news-category">Category</span>
                        <span class="all-news-writer">by Osman at date </span>
                    </div>
                    <a href="" class="all-news-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                        reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                        veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                        assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
                </div>

                <div class="all-news">
                    <div class="all-news-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                        <span class="all-news-category">Category</span>
                        <span class="all-news-writer">by Osman at date </span>
                    </div>
                    <a href="" class="all-news-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                        reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                        veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                        assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
                </div>

                <div class="all-news">
                    <div class="all-news-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                        <span class="all-news-category">Category</span>
                        <span class="all-news-writer">by Osman at date </span>
                    </div>
                    <a href="" class="all-news-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                        reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                        veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                        assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
                </div>
            </div>
        </div>

    </div>
</main>



@endsection