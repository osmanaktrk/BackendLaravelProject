@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
@endsection

@section('title')
    <title>FAQ</title>
@endsection

@section('content')
    <main>
        <div class="main-container">

            <div class="faq-container">
                <h4>FAQ QUESTIONS</h4>

                @foreach ($categories as $category)
                    <div class="faq-category">
                        <span>{{ $category->category }}</span>

                        @foreach ($category->questions as $question)
                            <div class="faq-question">



                                <span>{{ $question->question }}</span>
                                <div class="faq-answar">
                                    <span>{{ $question->answer }}</span>
                                </div>
                                @if (Auth::user()->usertype == 'admin')
                                    <div class="buttons">
                                        <button class="edit-button">EDIT</button>
                                        <form class="delete" action="{{ route('faq-delete', $question->id) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <input class="delete-btn" type="submit" value="DELETE"
                                                onclick="return confirm('ARE YOU SURE?')">
                                        </form>
                                    </div>
                                @endif

                                <div class="edit-question">
                                    <form action="{{ route('faq-edit', $question->id) }}" method="post">
                                        @csrf
                                        @method('put')

                                        <div class="faq-categor">
                                            <label for="categor">Category: </label>
                                            <select name="faq_category_id" id="categor" required>

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
                                        @error('question')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                        <textarea name="question" class="question" required>{{ $question->question }}</textarea>
                                        @error('answer')
                                            <span class="answer">{{ $message }}</span>
                                        @enderror
                                        <textarea name="answer" class="answer" required>{{ $question->answer }}</textarea>
                                        <input type="submit" value="SUBMIT">

                                    </form>

                                    <div class="cancel">
                                        <button class="cancel-btn">CANCEL</button>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach

                    @if (Auth::user()->usertype == 'admin')
                        <div class="create-box">
                    <button id="create-btn">CREATE</button>
                </div>
                    @endif
                


                @if (Auth::user()->usertype == 'admin')
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

                            @error('question')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            <textarea name="question" id="question" required>{{ old('question') }}</textarea>
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
                @endif



            </div>
            @auth
                <div class="faq-request">
                    <h4>FAQ REQUEST</h4>
                    <form action="{{route('faq-request')}}" method="post">

                        @csrf

                        @error('user_id')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="number" name="user_id" id="user_id" value="{{ Auth::user()->id }}" required readonly
                            style="display: none">

                        @error('request')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <textarea name="request" id="request" required>{{ old('request') }}</textarea>

                        <input type="submit" value="SUBMIT">

                    </form>
                </div>
            @endauth


        </div>


    </main>
@endsection

@section('js')
    <script src="{{ asset('js/faq.js') }}"></script>
@endsection
