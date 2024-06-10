<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @yield('css')
    @yield('title')
</head>

<body>

    <nav class="nav-top">

        @if (session('status'))
            <h1 class="status">{{ session('status') }}</h1>
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
            <a href="#">
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
        <div class="nav-left-top">
            ADMIN PANEL
        </div>
        <div class="nav-left-links">
            <ul>
                
                <a href=""><li>USERS</li></a>
                <a href=""><li>NEWS</li></a>
                <a href=""><li>NEWS-CATEGORIES</li></a>
                <a href=""><li>CONTACT MESSAGES</li></a>
                <a href=""><li>FAQ</li></a>
                <a href=""><li>FAQ-CATEGORIES</li></a>
                <a href=""><li>FAQ-REQUESTS</li></a>
                <a href=""><li>USERTYPE-REQUESTS</li></a>
                <a href=""><li>COMMENTS</li></a>
               
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
