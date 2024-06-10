@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/news-index.css') }}">
@endsection
@section('title')
    <title>News</title>
@endsection

@section('content')
    <main>

        <div class="main-container">


            <div class="news-container">

                <h1 class="news-title">{{ $news->title }}</h1>

                <div class="news-img">

                    <img src="{{ asset($news->cover) }}" alt="demo">
                </div>

                <div class="news-info">
                    <span class="news-category">{{ $news->category->category }}</span>
                    <span class="news-writer">by 
                        @if ($news->user->name != null)
                            {{ $news->user->name }}
                        @else
                            Deleted User
                        @endif
                         At
                        {{ $news->created_at->format('d/M/Y H:i') }}</span>
                </div>
                <p class="news-content">{{ $news->content }}</p>
                @auth
                @if (Auth::user()->usertype == 'admin' || Auth::user()->usertype == 'writer')
                   
                    <a class="edit-news-btn" href="{{route('edit-news', $news->id )}}">EDIT NEWS</a>

                @endif
                @if (Auth::user()->usertype == 'admin')
                   
                    <form class="delete-news" action="{{route('delete-news', $news->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input class="delete-news-btn" type="submit" value="DELETE" onclick="return confirm('ARE YOU SURE?')">

                    </form>
                    
                    
                @endif
            @endauth

            </div>

            <h3 class="comment-head">COMMENTS</h3>


            @isset($news->comments)
                @foreach ($news->comments as $item)
                    <div class="comment-container">
                        <div class="comment-top">
                            <span class="comment-writer">by
                                @if ($item->user->name != null)
                                    {{ $item->user->name }}
                                @else
                                    Deleted User
                                @endif
                                 at
                                {{ $item->created_at->format('d/M/Y H:i') }}</span>
                            @auth
                                @if (Auth::user()->usertype == 'admin' || Auth::user()->id == $item->user->id)
                                    <button class="edit-btn">EDIT</button>

                                    <form class="delete" action="{{route('comment-delete', $item->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input class="delete-btn" type="submit" value="DELETE"
                                            onclick="return confirm('ARE YOU SURE?')">
                                    </form>
                                @endif
                            @endauth



                        </div>


                        <p class="comment">{{ $item->comment }}</p>

                           


                        @auth
                            <div class="edit-comment">

                                <form action="{{ route('comment-update', $item->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <label for="comment">EDIT COMMENT:</label>
                                    @error('comment')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                    <br>
                                    <textarea name="comment" id="comment">{{ $item->comment }}</textarea>
                                    <br>

                                    <input type="submit" value="EDIT">



                                </form>
                                <button class="cancel">CANCEL</button>
                            </div>


                        @endauth


                    </div>
                @endforeach
            @endisset







            @guest
                <form class="comment-write" action="#" method="post">
                    @csrf
                    <label for="comment">Write A Comment:</label>
                    <br>
                    <textarea readonly class="comment_guest" name="comment" id="comment">LOG IN OR REGISTER TO WRITE A COMMENT</textarea>
                    <br>
                    <input type="button" value="SUBMIT" onclick="alert('YOU HAVE TO LOG IN OR REGISTER TO WRITE A COMMENT')"
                        readonly>
                </form>
            @endguest

            @auth
                <form class="comment-write" action="{{ route('comment-write', $news->id) }}" method="post">
                    @csrf
                    <label for="comment">Write A Comment:</label>
                    @error('comment')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <br>
                    <textarea name="comment" id="comment">{{ old('comment') }}</textarea>
                    <br>
                    <input type="submit" value="SUBMIT">
                </form>
            @endauth






        </div>
    </main>
@endsection

@section('js')
    <script src="{{ asset('js/news-index.js') }}"></script>
@endsection
