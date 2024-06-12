@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin-contact-messages.css')}}">
@endsection

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content')
    
    <div class="contact-main-container">
        <h4>CONTACT MESSAGES</h4>
        @foreach ($contacts as $contact)

        <div class="contact-messages">
            <div><a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ifkv=AS5LTAStb4Wlti3qgV0HLIZqnBQR6XGnvjOkxEUQXj_hvVYVpJ1M04l5O31SHBLEXDvu3O-OxRvWZg&rip=1&sacu=1&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-1425705971%3A1718203470983034&ddm=0">
            <button>SEND E-MAIL</button>
            </a>
                
                <br>
                <form action="{{route('admin-contact-delete')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="number" name="contactId" id="contactId" value="{{$contact->id}}" required readonly hidden>
                    <input class="delete" type="submit" value="DELETE MESSAGE">
                </form>
           </div>

            <div>
                <span>SENDER NAME</span>
                <br>
                <span>{{$contact->name}}</span>
            </div>

            <div>
                <span>SENDER E-MAIL</span>
                <br>
                <span>{{$contact->email}}</span>
            </div>

           @if ($contact->user_id)
            <div>
                <span>USERNAME</span>
                <br>
                <a href="{{ route('admin-users') }}"><button>{{$contact->user->name}}</button></a>
            </div>
           @endif

           
           <div>
            <span>MESSAGE</span>
            <br>
            <span class="contact-message">{{$contact->message}}</span>
           </div>

           



        </div>

        @endforeach
       


    </div>


@endsection

@section('js')
    
@endsection

