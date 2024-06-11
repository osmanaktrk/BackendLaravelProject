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
        <br>
        <span>Usertype Admin: {{$users->where("usertype", "admin")->count()}}</span>
     
        <span>Usertype Writer: {{$users->where("usertype", "writer")->count()}}</span>

        <span>Usertype User: {{$users->where("usertype", "user")->count()}}</span>
        
    </a>

    <a class="box" href="{{route('admin-news')}}">
        <span>All News: {{$news->count()}}</span>
       

    </a>

    <a class="box" href="{{route('admin-news-categories')}}">
        <span>All News-Categories: {{$newsCategories->count()}}</span>
        <br>
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
        <br>
        @foreach ($faqCategories as $category)
            <span>{{$category->category}}: {{$category->questions->count()}}</span>
        @endforeach


    </a>

    <a class="box" href="{{route('admin-faq-requests')}}">
        <span>All FAQ-Requests: {{$faqRequests->count()}}</span>
        <br>
        @foreach ($faqRequests as $request)
            <span>Requested User: {{$request->user->name}}: {{$request->count()}} </span>
        @endforeach


    </a>

    <a class="box" href="{{route('admin-userstype-requests')}}">
        <span>Usertype-Requests: {{$usertypeRequests->count()}}</span>
        <br>
        @foreach ($usertypeRequests as $request)
           
            <span>Requested User: {{$request->user->name}}, Request: {{$request->user->usertype}} to {{$request->request}}</span>
            

        @endforeach


    </a>

    <a class="box" href="{{route('admin-comments')}}">
        <span>All Comments: {{$comments->count()}}</span>
        <br>
        <span>Users: {{$comments->groupBy("user_id")->count()}}</span>
        <span>News: {{$comments->groupBy("news_id")->count()}}</span>

    </a>
    
</div>






@endsection

