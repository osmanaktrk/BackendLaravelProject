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
            <div class="home-news-1-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo"></div>
            <div><span class="home-news-category">Category</span><span class="home-news-writer">by Osman at date </span></div>
            
            <a href="" class="home-news-1-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
        </div>
        <div class="home-news-2">
            <div class="home-news-2-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                <span class="home-news-category">Category</span>
                <span class="home-news-writer">by Osman at date </span>
            </div>
            
            <a href="" class="home-news-2-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
        </div>
        <div class="home-news-3">
            <div class="home-news-3-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                <span class="home-news-category">Category</span>
                <span class="home-news-writer">by Osman at date </span>
            </div>
            <a href="" class="home-news-3-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
        </div>


    </div>
    
    
    <div class="category-news">
        <h2>Latest 5 News</h2>

        <div class="category-latest-5">
            {{-- <div class="categories">
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
                
            </div> --}}
            <div class="latest-5-news-container">
                
                <div class="latest-5-news">
                    <div class="latest-5-news-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                        <span class="latest-5-news-category">Category</span>
                        <span class="latest-5-news-writer">by Osman at date </span>
                    </div>
                    <a href="" class="latest-5-news-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                        reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                        veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                        assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
                </div>
                <div class="latest-5-news">
                    <div class="latest-5-news-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                        <span class="latest-5-news-category">Category</span>
                        <span class="latest-5-news-writer">by Osman at date </span>
                    </div>
                    <a href="" class="latest-5-news-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                        reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                        veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                        assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
                </div>
                <div class="latest-5-news">
                    <div class="latest-5-news-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                        <span class="latest-5-news-category">Category</span>
                        <span class="latest-5-news-writer">by Osman at date </span>
                    </div>
                    <a href="" class="latest-5-news-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                        reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                        veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                        assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
                </div>
                <div class="latest-5-news">
                    <div class="latest-5-news-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                        <span class="latest-5-news-category">Category</span>
                        <span class="latest-5-news-writer">by Osman at date </span>
                    </div>
                    <a href="" class="latest-5-news-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                        reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                        veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                        assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
                </div>
                <div class="latest-5-news">
                    <div class="latest-5-news-img"><img src="{{asset('img/news/demo.webp')}}" alt="demo">
                        <span class="latest-5-news-category">Category</span>
                        <span class="latest-5-news-writer">by Osman at date </span>
                    </div>
                    <a href="" class="latest-5-news-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ad nihil laborum hic voluptas rerum,
                        reiciendis nesciunt quisquam minus aspernatur modi iure laudantium architecto aut unde, a voluptatum
                        veritatis. Aperiam, culpa quibusdam nisi molestias ipsum iusto excepturi, omnis a impedit corrupti,
                        assumenda esse veniam. Alias dicta esse id nemo tempore?</a>
                </div>
            </div>
        </div>

    </div>

</main>
@endsection

