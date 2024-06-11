@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin-comments.css')}}">
@endsection

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content')

    <div class="comments-main-container">
        <div class="comments-top-container">
            

            <div>
                <span>SEARCH BY USERNAME</span>
                <br>
                <br>
                <input type="search" name="search-username" id="search-username">
                <label for="search-username"><button>SEARCH</button></label>
            </div>

            <div>
                <span>SEARCH BY NEWS</span>
                <br>
                <br>
                <input type="search" name="search-news" id="search-news">
                <label for="search-news"><button>SEARCH</button></label>
            </div>

        </div>


        @foreach ($comments as $comment)
        
        <div class="comment-container-box" user="{{$comment->user->name}}" news="{{$comment->news->title}}">
            <div class="comment-container">

                <div>
                    <button class="edit-btn">Edit Comment</button>
                    <br>
                    <form class="delete" action="{{route('comment-delete', $comment->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input class="delete-btn" type="submit" value="Delete Comment"
                            onclick="return confirm('ARE YOU SURE?')">
                    </form>
                </div>

                <div>
                    <span>USERNAME</span>
                    <br>

                    @if ($comment->user->name != null)
                    <a href="{{ route('admin-users') }}"><button>{{$comment->user->name}}</button></a>

                    @else
                        <span>Deleted User</span>
                    @endif
                </div>

                

                <div>
                    <span>NEWS TITLE</span>
                    <br>
                    <span class="comment-title">{{$comment->news->title}}</span>
                    <br>
                    <a href="{{ route('news', $comment->news->id) }}"><button>READ NEWS</button></a>
                </div>

                <div>
                    <span>COMMENT</span>
                    <br>
                    <span class="comment-title">{{$comment->comment}}</span>
                </div>
                
                

                



            </div>

            <div class="edit-comment">

                <form action="{{ route('comment-update', $comment->id) }}" method="post">
                    @csrf
                    @method('put')
                    <label for="edit-comment">EDIT COMMENT:</label>
                    @error('comment')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <br>
                    <textarea name="comment" id="edit-comment">{{ $comment->comment }}</textarea>
                    <br>

                    <input type="submit" value="EDIT">



                </form>
                <br>
                <button class="cancel">CANCEL</button>
            </div>
            
        </div>
            

            

        @endforeach

    </div>


    
@endsection

@section('js')
    <script src="{{asset('js/admin-comments.js')}}"></script>
    
@endsection

