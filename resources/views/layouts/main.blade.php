<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('css')
    @yield('title')
</head>

<body>

    <header class="header">
        <ul class="nav-ul">
            <a href="/">
                <li>HOME</li>
            </a>
            <a href="{{route('latest-news')}}">
                <li>LATEST NEWS</li>
            </a>
            <a href="{{route('all-news')}}">
                <li>ALL NEWS</li>
            </a>
            <a href="#">
                <li>ABOUT</li>
            </a>
            <a href="#">
                <li>FAQ</li>
            </a>

            {{-- daha sonra silinecek --}}
            <a href="{{route('profile.edit')}}">
                <li>PROFILE</li></a>

            <a href="{{route('write-news')}}">
                <li>WRITE NEWS</li>
            </a>
            
            @guest
            <a href="{{ route('login') }}">
                <li>LOG IN</li>
            </a>
            <a href="{{ route('register') }}">
                <li>REGISTER</li>
            </a>
            @endguest

            @auth
                @if (Auth::user()->usertype == 'writer')
                <a href="{{route('write-news')}}">
                    <li>WRITE NEWS</li>
                </a>
                @endif

                @if (Auth::user()->usertype == "admin")
                <a href="{{route('write-news')}}">
                    <li>WRITE NEWS</li>
                </a>
                <a href="#">
                    <li>ADMIN DASHBOARD</li>
                </a>
                @endif
            @endauth
        </ul>


        <div class="nav-user">
            <div class="user-avatar">
                <a href="{{route('profile.edit')}}"><img src="{{asset('img/avatars/default.svg')}}" alt="User Avatar"></a>
                <span class="username">Welcome Username</span>
                <form action="{{ route('logout') }}" method="post">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>
        </div>
    </header>

    @yield('content')



    <footer>
        <div class="footer">
            <h4>Copyright ©2024 All rights reserved</h4>
        </div>


    </footer>

    @yield('js')
</body>

</html>
