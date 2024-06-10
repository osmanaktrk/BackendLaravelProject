@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news-edit.css') }}">
@endsection

@section('title')
    <title>Edit News</title>
@endsection

@section('content')
    <main>

    <div class="form">
        <form action="{{ route('edit-news', $news->id) }}" method="post" enctype="multipart/form-data">

            @method('put')
            @csrf

            <div class="title">
                <label for="">Title: </label>
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
                <input type="text" name="title" id="title" value="{{ $news->title }}">
            </div>


            <div class="cover-img">
                <img id="cover-img" src="{{ asset($news->cover) }}" alt="Cover Preview">
            </div>
            <div class="cover-select">
                <label for="cover">Cover: </label>
                @error('cover')
                    <span class="error">{{ $message }}</span>
                @enderror
                <input accept="image/*" type="file" name="cover" id="cover">
            </div>

            <div class="category">
                <label for="category">Category: </label>
                @error('category')
                    <span class="error">{{ $message }}</span>
                @enderror
                <select name="category" id="category" value="{{ $news->category_id }}">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach

                </select>
            </div>
            <div class="content">
                <label for="content">Content: </label>
                @error('content')
                    <span class="error">{{ $message }}</span>
                @enderror
                <textarea name="content" id="content">{{ $news->content }}</textarea>
            </div>

            <div class="submit">
                <input type="submit" value="EDIT">
                <a class="cancel" href="{{ route('news', $news->id) }}">CANCEL</a>
            </div>

        </form>
        @if (Auth::user()->usertype == 'admin')
            <form class="delete-news" action="{{ route('delete-news', $news->id) }}" method="post">
                @csrf
                @method('delete')
                <input class="delete-news-btn" type="submit" value="DELETE" onclick="return confirm('ARE YOU SURE?')">

            </form>
        @endif
    </div>
        

        

    </main>
@endsection
@section('js')
    <script src="{{ asset('js/news-edit.js') }}"></script>
@endsection
