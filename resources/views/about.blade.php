@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('title')
    <title>ABOUT</title>
@endsection

@section('content')
    
    <div class="about-main-container">
        <h1>ABOUT MY PROJECT</h1>

        <div class="about-container">
            <a href="https://github.com/osmanaktrk/BackendLaravelProject.git">GitHub Link: https://github.com/osmanaktrk/BackendLaravelProject.git</a>
            <br><br>
            <a href="https://www.bbc.com/news">News Source: https://www.bbc.com/news</a>
            <br><br>
            <a href="https://unsplash.com/s/photos/user">Users Avatar Source: https://unsplash.com/s/photos/user</a>
            <br><br>
            <h4>My Preparation Papers</h4>
            <br>
            <div class="my-papers">
                <img src="{{asset('img/mysources/src-1.jpeg')}}" alt="scr1">
            <img src="{{asset('img/mysources/src-1.jpeg')}}" alt="scr1">
            </div>
            <br><br>
            <p>I wrote all of my project myself, I did not use Bootstrap, but I looked at many websites for inspiration. I never did any copy pasting. Of course, I did a lot of research on the internet about the errors I encountered and watched many videos on YouTube, but these were not a series of creating projects from start to finish, so I cannot leave a link here as a single source.</p>
            <br><br>
            <h4>Over My Project</h4>
            <p>There are 3 user types in my project:</p>
            <ul>
                <li>Admin</li>
                <li>Writer</li>
                <li>User</li>
            </ul>
            <p>Users can request to change their type, and only the admin can change it or accapt or reject the requests.</p>

            <ul>
                <li>Visitors: 
                    <ul>
                        <li>Can read all the news</li>
                        <li>Can send a message to the admin by filling out the contact form.</li>
                        <li>Can register and log in</li>
                    </ul>
                </li>

                <li>
                    Users: 
                    <ul>
                        <li>
                            Can edit their own user data:
                            <ul>
                                <li>Username</li>
                                <li>Birthday</li>
                                <li>BirthdayAvatar</li>
                                <li>BirthdayAvatarAbout</li>
                            </ul>
                        </li>
                        <li>Can write comments on the news</li>
                        <li>Can edit or delete own comment, and admin can edit and delete users own comments, no one else</li>
                        <li>Can request to create new question that might be addet to the FAQ</li>
                    </ul>
                </li>

                <li>
                    Writers: 
                    <ul>
                        <li>Can do anything the user can do.</li>
                        <li>Can write news</li>
                        <li>Can edit but not delete news, only admin can delete news</li>
                    </ul>
                </li>

                <li>
                    Admin: 
                    <ul>
                        <li>Can only admin acces ADMIN DASHBOARD</li>
                        <li>Can do anything the user and the writer do can do.</li>
                        <li>Can contral all with the admin dashboard.</li>
                        <li>Can create new user in the admin dashboard</li>
                        <li>Can determine userstype</li>
                        <li>Can accept or reject usertype requests</li>
                        <li>Can chabge users password in the admin dashboard</li>
                        <li>Can block users</li>
                        <li>Can edit and delete users</li>
                        <li>Can determines news-categories</li>
                        <li>Can edit and delete user comments</li>
                        <li>Can read contact-messages in the admin dashboard</li>
                        <li>Can determines FAQ categories</li>
                        <li>Can FAQ create, edit and delete</li>
                        <li>Can accept users FAQ request</li>
                        <li>Has different authorization in other functions on the site.</li>
                    </ul>
                </li>
                
            </ul>

            <p>Sitemap</p>
            <ul>
                <li>HOME => Public</li>
                <li>LATEST NEWS => Public</li>
                <li>ALL NEWS => Public</li>
                <li>ABOUT => Public</li>
                <li>FAQ => Public</li>
                <li>WRITE NEWS => For Writers and Admins</li>
                <li>ADMIN DASHBOARD => For Admins
                    <ul>
                        <li>ADMIN PANEL => For Admins</li>
                        <li>USERS => For Admins</li>
                        <li>NEWS => For Admins</li>
                        <li>NEWS-CATEGORIES => For Admins</li>
                        <li>NEWS-COMMENTS => For Admins</li>
                        <li>CONTACT-MESSAGES => For Admins</li>
                        <li>FAQ => For Admins</li>
                        <li>FAQ-CATEGORIES => For Admins</li>
                        <li>FAQ-REQUESTS => For Admins</li>
                        <li>USERTYPE-REQUESTS => For Admins</li>
                    </ul>
                </li>
                <li>PROFILE => For Al Users</li>
            </ul>
            
            
        </div>
    </div>


@endsection