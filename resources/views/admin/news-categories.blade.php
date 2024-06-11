@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-news-categories.css') }}">
@endsection

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content')
    <div class="main-container">

        <div class="category-create">
            <form action="{{ route('admin-news-categories-create') }}" method="post">
                @csrf
                <label for="category-name">New Category: </label>
                <input type="text" name="category" id="category-name" required>

                <input type="submit" value="CREATE">
            </form>
        </div>

        <div class="all-categories">
            <h4>CATEGORIES</h4>
            @foreach ($categories as $category)
                <div>
                    
                    <span>Category: {{ $category->category }} </span>
                    <form action="{{route('admin-news-categories-delete', $category->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input class="delete-btn" type="submit" value="Delete Category" onclick="return confirm('ARE YOU SURE')">

                    </form>
                    <button class="category-edit-btn">Edit Category</button>
                    <div style="display: none">
                        <form class="category-edit-form" action="{{ route('admin-news-categories-edit', $category->id) }}"
                            method="post">
                            @csrf
                            @method('put')
                            <input type="text" name="category" value="{{ $category->category }}" required>
                            @error('category')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            <input type="submit" value="SUBMIT">
                        </form>
                        <button>CANCEL</button>
                    </div>

                    
                    

                </div>
            @endforeach



        </div>

        <div class="all-category-news">
            <div class="news-by-category">
                 <h4>NEWS BY CATEGORY</h4>
                 <label for="news-category">Categories</label>
                 <select name="news-category" id="news-category">
                    <option value="0" selected>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                 </select>
            </div>
           
            @foreach ($categories as $category)
            <div class="category-news" category="{{$category->id}}">
                <h4>{{$category->category}}</h4>
                @foreach ($category->news as $item)
                    <div>
                        <h5>{{$item->title}}</h5>
                        <p>{{$item->content}}</p>
                        <div>
                            <a href="{{route('edit-news', $item->id)}}" onclick="return confirm('ARE YOU SURE TO LEAVE THE PAGE')"><button>EDIT NEWS</button></a>
                            
                            <form action="{{route('delete-news', $item->id)}}" method="post">
                                @csrf
                                @method('delete')
                                
                                <input type="submit" value="DELETE NEWS" onclick="return confirm('ARE SURE TO DELETE')">

                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
                
            @endforeach

        </div>

    </div>
@endsection

@section('js')
    <script src="{{ asset('js/admin-news-categories.js') }}"></script>
@endsection
