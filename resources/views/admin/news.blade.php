@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-news.css') }}">
@endsection

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content')
    <div class="news-main-container">
        <div class="main-buttons">
            <a href="{{ route('write-news') }}" onclick="return confirm('ARE YOU SURE TO LEAVE THE PAGE')"><button>Create
                    News</button></a>
            <div class="category-select">
                <label for="categories">Categories</label>
                <select name="category" id="categories">
                    <option value="0" selected>Select Categori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach

                </select>
            </div>

            <div class="category-select">
                <label for="writers">Writer</label>
                <select name="writers" id="writers">
                    <option value="0" selected>Select Writer</option>
                    @foreach ($users as $user)
                        @foreach ($userIds as $id)
                            @if ($id == $user->id)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endif
                        @endforeach
                    @endforeach




                </select>
            </div>










        </div>

        @foreach ($news as $item)
            <div class="news-all" category="{{$item->category->id}}" writer="{{$item->user_id}}">

                <div class="news-title">
                    <span>Title</span>
                    <span class="title">{{ $item->title }}</span>

                </div>

                <div class="news-cover">
                    <img src="{{ asset($item->cover) }}" alt="cover">
                </div>

                <div class="news-content">
                    <span>Content</span>
                    <span class="content">{{ $item->content }}</span>

                </div>

                <div class="news-category">
                    <span>Category</span>
                    <span>{{ $item->category->category }}</span>
                </div>

                <div class="news-date">
                    <span>Publish Date</span>
                    <span>{{ $item->created_at->format('d/M/Y H:i') }}</span>

                </div>

                <div class="news-writer">
                    <span>Writer Name</span>
                    <span>{{ $item->user->name }}</span>
                </div>

                <div class="news-comments">
                    <span>Comments: {{ $item->comments->count() }}</span>
                    <a href="{{ route('admin-comments') }}"><button>EDIT COMMENTS</button></a>
                </div>

                <div class="news-buttons">
                    <a href="{{ route('news', $item->id) }}"><button>READ NEWS</button></a>
                    <a href="{{ route('edit-news', $item->id) }}"><button>EDIT NEWS</button></a>

                    <form class="delete-news" action="{{ route('delete-news', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="delete-news-btn" type="submit" value="DELETE NEWS"
                            onclick="return confirm('ARE YOU SURE?')">

                    </form>
                </div>



            </div>
        @endforeach



    </div>
@endsection

@section('js')
    <script src="{{ asset('js/admin-news.js') }}"></script>
@endsection
