@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-faq-questions.css') }}">
@endsection

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content')
    <div class="faq-main-container">
        <div class="faq-container-top">

            <div>
                <button class="create-faq-btn">Create FAQ</button>
            </div>



            @foreach ($categories as $category)
                <div>
                    <label for="{{ $category->category }}">{{ $category->category }}</label>
                    <br>
                    <input type="checkbox" value="{{$category->category}}" checked class="categories-check" name="{{ $category->category }}" id="{{ $category->category }}"
                        value="{{ $category->category }}">
                </div>
            @endforeach

        </div>

        <div class="create-question">
            <form action="{{ route('faq-create') }}" method="post">
                @csrf
                <div id="faq-category">
                    <label for="category">Category: </label>
                    <select name="faq_category_id" id="category" required>
                        <option disabled selected hidden>Select</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                        @endforeach


                    </select>
                </div>


                <label for="question">Question: </label>
                @error('question')
                    <span class="error">{{ $message }}</span>
                @enderror
                <textarea name="question" id="question" required>{{ old('question') }}</textarea>
                <label for="answer">Answer: </label>
                @error('answer')
                    <span class="answer">{{ $message }}</span>
                @enderror
                <textarea name="answer" id="answer" required>{{ old('answer') }}</textarea>
                <input type="submit" value="SUBMIT">

            </form>
            <div class="create-cancel">
                <button class="create-cancel-btn">CANCEL</button>
            </div>
        </div>


        <div class="faq-categories">
            <h4>FAQ-CATEGORY QUESTIONS</h4>
            @foreach ($categories as $category)

            <div class="category-questions-box" category="{{$category->category}}">
                <h4>{{ $category->category }}</h4>
                @foreach ($category->questions as $question)
                    <div class="category-questions">
                        <div class="question">
                            <span>{{ $question->question }}</span>
                            <div class="answer">
                                <span>{{ $question->answer }}</span>
                            </div>
                            <div class="buttons">
                                <button class="edit-questions-btn">EDIT QUESTION</button>
                                
                                <form action="{{ route('faq-delete', $question->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="delete" type="submit" value="DELETE QUESTION"
                                        onclick="return confirm('ARE YOU SURE?')">
                                </form>
                            </div>
                            

                            <div class="edit-question">
                                <form action="{{ route('faq-edit', $question->id) }}" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="faq-categor">
                                        <label for="edit-category">Category: </label>
                                        <select name="faq_category_id" id="edit-category" required>

                                            @foreach ($categories as $category)
                                                @if ($category->id == $question->faq_category_id)
                                                    <option value="{{ $category->id }}" selected>
                                                        {{ $category->category }}
                                                    </option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->category }}
                                                    </option>
                                                @endif
                                            @endforeach


                                        </select>
                                    </div>
                                    @error('question-edit')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                    <textarea name="question-edit" class="question-edit" required>{{ $question->question }}</textarea>
                                    @error('answer-edit')
                                        <span class="answer-edit">{{ $message }}</span>
                                    @enderror
                                    <textarea name="answer" class="answer-edit" required>{{ $question->answer }}</textarea>
                                    <input type="submit" value="SUBMIT">

                                </form>

                                <div class="edit-cancel">
                                    <button class="edit-cancel-btn">CANCEL</button>
                                </div>

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
    <script src="{{asset('js/admin-faq-questions.js')}}"></script>
    
@endsection
