@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-faq-requests.css') }}">
@endsection

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content')
    <div class="requests-main-container">

        <div class="request-container-box">
            <h4>FAQ REQUESTS</h4>

            <div class="writer">
                <label for="writers">User</label>
                <select name="writers" id="writers">
                    <option value="0" selected>Select User</option>
                    @foreach ($users as $user)
                        @foreach ($userIds as $id)
                            @if ($id == $user->id)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endif
                        @endforeach
                    @endforeach




                </select>
            </div>
            @foreach ($requests as $request)
                <div class="request-container" writer="{{$request->user_id}}">

                    <div class="request-content">
                        <span>User: {{ $request->user->name }} </span>

                        <span>{{ $request->request }}</span>
                        <div class="buttons">

                            <button class="edit-request-btn">Accept Request</button>
                            <form action="{{route('admin-faq-request-delete')}}" method="post">
                                @csrf
                                @method("delete")
                                <input type="number" value="{{$request->id}}" hidden readonly required name="requestId" id="requestId">
                                <input type="submit" class="delete-request" value="Delete Request">
                            </form>

                            

                        </div>
                    </div>

                    <div class="edit-request">
                        <form action="{{route('admin-faq-request-accept')}}" method="post">
                            @csrf
                            <div id="faq-category">
                                <label for="category">Category: </label>
                                @error('faq_category_id')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <select name="faq_category_id" id="category" required>
                                    <option disabled selected hidden>Select</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <input type="number" value="{{$request->id}}" hidden readonly required name="requestId" id="requestId">
                            @error('question')
                                <span class="error">{{$message}}</span>                                
                            @enderror
                            <textarea name="question" required id="question">{{$request->request}}</textarea>
                            @error('answer')
                                <span class="error">{{$message}}</span>
                            @enderror
                            <textarea name="answer" required id="answer">{{old('answer')}}</textarea>
                            <input type="submit" value="SUBMIT">

                        </form>
                        <div>
                            <button>CANCEL</button>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>





    </div>
@endsection

@section('js')
    <script src="{{ asset('js/admin-afq-requests.js') }}"></script>
@endsection
