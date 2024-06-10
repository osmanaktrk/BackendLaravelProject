@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin-dashboard.css')}}">
@endsection

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content')

<div class="boxes">

    <a class="box" href="{{route('admin-users')}}">
        <span>All Users: {{$users->count()}}</span>
        <span>Admins: {{$users->where("usertype", "admin")->count()}}</span>
        <span>Writers: {{$users->where("usertype", "writer")->count()}}</span>
        <span>Users: {{$users->where("usertype", "user")->count()}}</span>
        
    </a>

    <a class="box" href="{{route('admin-news')}}">
        <span>All News: {{$news->count()}}</span>

    </a>

    <a class="box" href="{{route('admin-news-categories')}}">
        <span>All News-Categories: {{$newsCategories->count()}}</span>
        @foreach ($newsCategories as $category)
            <span>{{$category->category}}: {{$category->news->count()}} </span>
        @endforeach


    </a>

    <a class="box" href="{{route('admin-contacts-messages')}}">
        <span>All Messages: {{$contacts->count()}}</span>


    </a>

    <a class="box" href="{{route('admin-faq-questions')}}">
        <span>FAQ: {{$faqQuestions->count()}}</span>


    </a>

    <a class="box" href="{{route('admin-faq-categories')}}">
        <span>All FAQ-Categories: {{$faqCategories->count()}}</span>
        @foreach ($faqCategories as $category)
            <span>{{$category->category}}: {{$category->questions->count()}}</span>
        @endforeach


    </a>

    <a class="box" href="{{route('admin-faq-requests')}}">
        <span>All FAQ-Requests: {{$faqRequests->count()}}</span>

        @foreach ($faqRequests as $request)
            <span>User: {{$request->user->name}}: {{$request->count()}} </span>
        @endforeach


    </a>

    <a class="box" href="{{route('admin-userstype-requests')}}">
        <span>Usertype-Requests: {{$usertypeRequests->count()}}</span>
        @foreach ($usertypeRequests as $request)
            <span>User: {{$request->user->name}}</span>
            
        @endforeach


    </a>

    <a class="box" href="{{route('admin-comments')}}">
        <span>All Comments: {{$comments->count()}}</span>
        <span>Users: {{$comments->groupBy("user_id")->count()}}</span>
        <span>News: {{$comments->groupBy("news_id")->count()}}</span>

    </a>
    
</div>






@endsection

