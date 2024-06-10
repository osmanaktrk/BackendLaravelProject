@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/news-write.css')}}">
@endsection

@section('title')
    <title>Write News</title>
@endsection

@section('content')
<main>

    <form class="form" action="{{route('store-news')}}" method="post" enctype="multipart/form-data">
        
        @csrf

        <div class="title">
            <label for="">Title: </label>
            @error('title')
                <span class="error">{{$message}}</span>
            @enderror
            <input type="text" name="title" id="title" value="{{old('title')}}">
        </div>
        

        <div class="cover-img">
            <img id="cover-img" src="#" alt="Cover Preview">
        </div>
        <div class="cover-select">
            <label for="cover">Cover: </label>
            @error('cover')
                <span class="error">{{$message}}</span>
            @enderror
            <input accept="image/*" type="file" name="cover" id="cover" value="{{old('cover')}}">
        </div>
        
        <div class="category">
            <label for="category">Category: </label>
            @error('category')
                <span class="error">{{$message}}</span>
            @enderror
            <select name="category" id="category" >
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
                
            </select>
        </div>
        <div class="content">
            <label for="content">Content: </label>
            @error('content')
                <span class="error">{{$message}}</span>
            @enderror
            <textarea name="content" id="content">{{old('content')}}</textarea>
        </div>

        <div class="submit">
            <input type="submit" value="SUBMIT">
        </div>




    </form>





</main>
    
@endsection
@section('js')
    <script src="{{asset('js/news-write.js')}}"></script>
@endsection