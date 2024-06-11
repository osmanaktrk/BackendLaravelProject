<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    
    @yield('title')
</head>

<body>

    <nav class="nav-top">

        @if (session('status'))
            <span class="status">{{ session('status') }}</span>
        @endif
        <ul class="nav-ul">


            <a href="{{ route('home') }}">
                <li>HOME</li>
            </a>
            <a href="{{ route('latest-news') }}">
                <li>LATEST NEWS</li>
            </a>
            <a href="{{ route('all-news') }}">
                <li>ALL NEWS</li>
            </a>
            <a href="{{route('about')}}">
                <li>ABOUT</li>
            </a>
            <a href="{{ route('faq') }}">
                <li>FAQ</li>
            </a>
            <a href="{{ route('write-news') }}">
                <li>WRITE NEWS</li>
            </a>
            <a href="{{ route('admin-dashboard') }}">
                <li>ADMIN DASHBOARD</li>
            </a>

            <a href="{{ route('profile.edit') }}">
                <li>PROFILE</li>
            </a>

        </ul>

    </nav>



    <nav class="nav-left">
        <a href="{{route('admin-dashboard')}}" class="nav-left-top">
            ADMIN PANEL
        </a>
        <div class="nav-left-links">
            <ul>

                <a href="{{ route('admin-users') }}">
                    <li class="a-admin-users" >USERS</li>
                </a>
                <a href="{{ route('admin-news') }}">
                    <li class="a-admin-news">NEWS</li>
                </a>
                <a href="{{ route('admin-news-categories') }}">
                    <li class="a-admin-news-categories">NEWS-CATEGORIES</li>
                </a>
                <a href="{{ route('admin-comments') }}">
                    <li class="a-admin-comments">NEWS-COMMENTS</li>
                </a>
                <a href="{{ route('admin-contacts-messages') }}">
                    <li class="a-admin-contacts-messages">CONTACT MESSAGES</li>
                </a>
                <a href="{{ route('admin-faq-questions') }}">
                    <li class="a-admin-faq-questions">FAQ</li>
                </a>
                <a href="{{ route('admin-faq-categories') }}">
                    <li class="a-admin-faq-categories">FAQ-CATEGORIES</li>
                </a>
                <a href="{{ route('admin-faq-requests') }}">
                    <li class="a-admin-faq-requests">FAQ-REQUESTS</li>
                </a>
                <a href="{{ route('admin-userstype-requests') }}">
                    <li class="a-admin-userstype-requests">USERTYPE-REQUESTS</li>
                </a>
                

            </ul>

        </div>


        <div class="user-info">

            <span class="username">Welcome {{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" value="LOG OUT" onclick="return confirm('ARE YOU SURE YOU WANT TO LOG OUT?')">
            </form>


        </div>

    </nav>

    <nav class="nav-right">

        <div class="nav-right-container">

            @yield('content')
        </div>

    </nav>


    @yield('js')

</body>

</html>
