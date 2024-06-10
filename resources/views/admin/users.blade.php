@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-users.css') }}">
@endsection

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content')
    <div class="users-main-container">

        @foreach ($users as $user)
            <div class="users-container">

                <div class="user-container-box">
                    <div class="users-container-top">
                        <div>
                            <span>User Name</span>
                            <span>{{ $user->name }}</span>
                        </div>

                        <div>
                            <span>E-Mail</span>
                            <span>{{ $user->email }}</span>
                        </div>

                        <div>
                            <span>Usertype</span>
                            <span>{{ $user->usertype }}</span>
                        </div>


                        <div>
                            <span>Banned</span>
                            <span>
                                @if ($user->is_banned == 0)
                                    No
                                @else
                                    Yes
                                @endif
                            </span>
                        </div>



                    </div>

                    <div class="users-container-bottom">
                        <button>News: {{ $user->news->count() }}</button>
                        <button>Comments: {{ $user->comments->count() }}</button>

                        @if ($user->UsertypeRequest->count() > 0)
                            <div class="usertype-request">



                                @foreach ($user->UsertypeRequest as $item)
                                    <button>Usertype Request: {{ $item->request }}</button>
                                    <div>
                                        <form action="{{ route('admin-usertype-accept') }}" method="post">
                                            @csrf
                                            @method('put')
                                            @error('requestId')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                            <input type="number" name="requestId" id="requestId"
                                                value="{{ $item->id }}" required readonly hidden>
                                            <input type="submit" value="ACCEPT">
                                        </form>

                                        <form action="{{ route('admin-usertype-reject') }}" method="post">
                                            @csrf
                                            @method('delete')
                                            @error('requestId')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                            <input type="number" name="requestId" id="requestId"
                                                value="{{ $item->id }}" readonly required hidden>
                                            <input class="user-block-btn" type="submit" value="REJECT"
                                                onclick="return confirm('ARE YOUE SURE')">
                                        </form>
                                    </div>
                                @endforeach



                            </div>
                        @endif

                        <div class="user-password-reset">
                            <form action="{{ route('admin-userpassword-reset') }}" method="post">
                                @csrf
                                @method('put')

                                @error('password')
                                    <span class="">{{ $message }}</span>
                                @enderror
                                <input style="display: none" type="number" name="userId" value="{{ $user->id }}"
                                    hidden readonly required>
                                <input type="text" name="password" required>
                                <input type="submit" value="RESET PASSWORD">
                            </form>

                        </div>






                        <button class="users-edit-btn">User Edit</button>

                        @if ($user->is_banned)
                            <form action="{{ route('admin-user-unblock') }}" method="post">
                                @csrf
                                @method('put')
                                <input type="number" name="userId" value="{{ $user->id }}" required readonly hidden>
                                <input class="user-block-btn" type="submit" value="UNBLOCK"
                                    onclick="return confirm('ARE YOUE SURE')">
                            </form>
                        @else
                            <form action="{{ route('admin-user-block') }}" method="post">
                                @csrf
                                @method('put')
                                <input type="number" name="userId" value="{{ $user->id }}" readonly required hidden>
                                <input class="user-block-btn" type="submit" value="BLOCK"
                                    onclick="return confirm('ARE YOUE SURE')">
                            </form>
                        @endif


                        <form action="{{ route('admin-user-delete', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="user-delete-btn" type="submit" value="DELETE"
                                onclick="return confirm('ARE YOUE SURE')">
                        </form>


                    </div>
                </div>









                <div class="profile">
                    <div class="profile-information">



                        <form action="{{ route('admin-user-update') }}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="profile-information-avatar">
                                <div class="profile-avatar-box">
                                    <img class="profile-avatar" src="{{ asset($user->avatar) }}" alt="Profile Avatar">
                                </div>
                                <input type="file" name="avatar" id="avatar" accept="image/*">
                                @error('avatar')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="profile-information-birthday">
                                <label for="birthday">Birthday: </label>
                                @error('birthday')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input type="date" name="birthday" id="birthday"
                                    value="{{ old('birthday', $user->birthday) }}">
                            </div>

                            <div class="profile-information-about">
                                <label for="about">About Me: </label><br><br>
                                @error('about')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <textarea name="about" id="about">{{ old('about', $user->about) }}</textarea>
                            </div>

                            <div>
                                <input type="number" name="userId" value="{{ $user->id }}" readonly required hidden>
                                <input type="submit" value="UPDATE">
                            </div>


                        </form>

                        <button class="cancel">CANCEL</button>



                    </div>


                </div>




            </div>
        @endforeach






    </div>
@endsection

@section('js')
    <script src="{{ asset('js/admin-users.js') }}"></script>
@endsection
