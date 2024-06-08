@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endsection
@section('title')
    <title>Last News</title>
@endsection

@section('content')
    <main>

        <div class="main-container">


            <div class="news-container">

                <h4 class="news-title">DEMO</h4>

                <div class="news-img">

                    <img src="{{ asset('img/news/demo.webp') }}" alt="demo">
                </div>

                <div class="news-info">
                    <span class="news-category">Category</span>
                    <span class="news-writer">by Osman At</span>
                </div>
                <p class="news-content">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, quisquam ad sunt totam maxime a quas
                    aspernatur blanditiis dignissimos, odio in, atque veniam iure numquam deserunt similique? Voluptatem
                    corrupti assumenda neque hic saepe consequatur pariatur incidunt sint, reprehenderit quasi maiores
                    itaque doloribus ducimus quibusdam rerum blanditiis facilis officiis illum laudantium?
                </p>

            </div>

            <h3 class="comment-head">COMMENTS</h3>
            <div class="comment-container">

                <span class="comment-writer">by Osman At</span>

                <p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate officia velit
                    architecto ea aspernatur inventore error omnis nulla dicta odio. Esse, repudiandae error deleniti quae
                    officia qui placeat quas corrupti amet odit, natus consequatur perferendis veniam quod explicabo
                    molestias. Illum ipsa reprehenderit quidem, eligendi asperiores quasi nesciunt doloribus aliquid
                    deleniti.
                </p>



            </div>
            <div class="comment-container">

                <span class="comment-writer">by Osman At</span>

                <p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate officia velit
                    architecto ea aspernatur inventore error omnis nulla dicta odio. Esse, repudiandae error deleniti quae
                    officia qui placeat quas corrupti amet odit, natus consequatur perferendis veniam quod explicabo
                    molestias. Illum ipsa reprehenderit quidem, eligendi asperiores quasi nesciunt doloribus aliquid
                    deleniti.
                </p>



            </div>

            @guest
            <form class="comment-write" action="#" method="post">
                @csrf
                <label for="comment">Write A Comment:</label>
                <br>
                <textarea readonly class="comment_guest" name="comment" id="comment">YOU HAVE TO LOG IN OR REGISTER TO WTITE A COMMENT</textarea>
                <br>
                <input type="button" value="SUBMIT" onclick="alert('YOU HAVE TO LOG IN OR REGISTER TO WTITE A COMMENT')" readonly>
            </form>
            @endguest

            @auth
            <form class="comment-write" action="" method="post">
                @csrf
                <label for="comment">Write A Comment:</label>
                @error('comment')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>
                <textarea name="comment" id="comment" ></textarea>
                <br>
                <input type="button" value="SUBMIT">
            </form>
            @endauth




            

        </div>
    </main>
@endsection
