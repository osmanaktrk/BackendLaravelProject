@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-faq-categories.css') }}">
@endsection

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content')
    <div class="faq-categories-main-container">
        <div class="new-faq-category">
            <form action="{{ route('admin-faq-categories-create') }}" method="post">
                @csrf
                <label for="new-category">New FAQ-Category: </label>
                @error('category')
                    <span class="error">{{ $message }}</span>
                @enderror
                <input type="text" name="category" id="new-category">
                <input type="submit" value="Create">

            </form>
        </div>

        <div class="categories">
            <h4>FAQ-CATEGORIES</h4>
            @foreach ($categories as $category)
                <div>
                    <span>FAQ-Category: {{ $category->category }}</span>

                    <form action="{{ route('admin-faq-categories-delete') }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="number" name="categoryId" id="categoryId" value="{{ $category->id }}" required
                            readonly hidden>
                        <input class="delete" type="submit" value="Delete">

                    </form>

                    <button class="category-edit-btn">Edit</button>

                    <form style="display: none" class="category-edit" action="{{ route('admin-faq-categories-edit') }}"
                        method="post">
                        @csrf
                        @method('put')
                        <input type="number" name="categoryId" id="categoryId" value="{{ $category->id }}" required
                            readonly hidden>
                        @error('category')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="text" name="category" id="category" value="{{ $category->category }}">
                        <input type="submit" value="Submit">
                    </form>
                    <button>Cancel</button>
                </div>
            @endforeach
        </div>

        <div class="faq-categories">
            <h4>FAQ-CATEGORY QUESTIONS</h4>
            @foreach ($categories as $category)

            <div class="category-questions-box">
                <h4>{{ $category->category }}</h4>
                @foreach ($category->questions as $question)
                    <div class="category-questions">
                        <div class="question">
                            <span>{{ $question->question }}</span>
                            <div class="answer">
                                <span>{{ $question->answer }}</span>
                            </div>
                            <div class="buttons">
                                <a href="{{route('admin-faq-questions')}}" onclick="return confirm('ARE YOUE SURE TO LEAVE THIS PAGE')"><button>EDIT</button></a>
                                
                                <form action="{{ route('faq-delete', $question->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="delete" type="submit" value="DELETE"
                                        onclick="return confirm('ARE YOU SURE?')">
                                </form>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
                


            @endforeach

        </div>



    </div>
@endsection

@section('js')
    <script src="{{ asset('js/admin-faq-categories.js') }}"></script>
@endsection
