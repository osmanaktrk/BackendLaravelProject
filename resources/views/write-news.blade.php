@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/writenews.css')}}">
@endsection

@section('title')
    <title>Write News</title>
@endsection

@section('content')
<main>

    <form action="" method="post" enctype="multipart/form-data">
        
        <div class="title">
            <label for="">Title: </label>
            <input type="text" name="title" id="title">
        </div>
        

        <div class="cover-img">
            <img id="cover-img" src="#" alt="Cover Preview">
        </div>
        <div class="cover-select">
            <label for="cover">Cover: </label>
            <input accept="image/*" type="file" name="cover" id="cover">
        </div>
        
        <div class="category">
            <label for="category">Category: </label>
            <select name="category" id="category">
                <option value="1">Category1</option>
                <option value="2">Category2</option>
                <option value="3">Category3</option>
            </select>
        </div>
        <div class="content">
            <label for="content">Content: </label>
            <textarea name="content" id="content"></textarea>
        </div>

        <div class="submit">
            <input type="submit" value="SUBMIT">
        </div>




    </form>





</main>
    
@endsection
@section('js')
    <script src="{{asset('js/writenews.js')}}"></script>
@endsection