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
            <a href="#">
                <li>HOME</li>
            </a>
            <a href="#">
                <li>LATEST NEWS</li>
            </a>
            <a href="#">
                <li>ALL NEWS</li>
            </a>
            <a href="#">
                <li>ABOUT</li>
            </a>
            <a href="#">
                <li>FAQ</li>
            </a>
            @guest
            <a href="#">
                <li>LOG IN</li>
            </a>
            <a href="#">
                <li>REGISTER</li>
            </a>
            @endguest
            @auth
                @if (Auth::user()->usertype == 'writer')
                <a href="#">
                    <li>WRITE NEWS</li>
                </a>
                @endif

                @if (Auth::user()->usertype == "admin")
                <a href="#">
                    <li>WRITE NEWS</li>
                </a>
                <a href="#">
                    <li>ADMIN DASHBOARD</li>
                </a>
                @endif
            @endauth
        </ul>


        <div class="nav-user">
            user info
        </div>
    </header>

    @yield('content')



    <footer>
        <div class="footer">
            <h4>Copyright ©2024 All rights reserved</h4>
        </div>


    </footer>

</body>

</html>
