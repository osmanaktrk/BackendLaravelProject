@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('title')
    <title>Profile</title>
@endsection

@section('content')
    <main>

        <div class="profile">


            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>


            <div class="profile-information">

                <h3>Profile Information</h3>
                <p>Update your account's profile information.</p>

                <form action="{{ route('profile.info') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="profile-information-avatar">
                        <div class="profile-avatar-box">
                            <img id="profile-avatar" src="{{ asset($user->avatar) }}" alt="Profile Avatar">
                        </div>
                        <input type="file" name="avatar" id="avatar" accept="image/*" required>
                        @error('avatar')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="profile-information-birthday">
                        <label for="birthday">Birthday: </label>
                        @error('birthday')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="date" name="birthday" id="birthday" value="{{ old('birthday', $user->birthday) }}">
                    </div>

                    <div class="profile-information-about">
                        <label for="about">About Me: </label><br><br>
                        @error('about')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <textarea name="about" id="about">{{ old('about', $user->about) }}</textarea>
                    </div>
                    <input type="submit" value="UPDATE">

                </form>



            </div>



            <div class="profile-register">

                <h3>Register Information</h3>
                <p>Update your account's profile name and email address.</p>
                <form action="{{ route('profile.update') }}" method="post">
                    @csrf
                    @method('patch')

                    <div class="profile-register-name">
                        <label for="name">Name</label><br>
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input class="input-box" type="text" name="name" id="name"
                            value="{{ old('name', $user->name) }}" required>
                    </div>

                    <div class="profile-register-email">
                        <label for="email">E-mail</label><br>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input class="input-box" type="email" name="email" id="email"
                            value="{{ old('email', $user->email) }}" required>
                    </div>
                    <input type="submit" value="UPDATE">

                </form>

            </div>



            <div class="profile-password">

                <h3>Update Password</h3>
                <p>Ensure your account is using a long, random password to stay secure.
                </p>
                <form action="{{ route('password.update') }}" method="post">
                    @csrf
                    @method('put')

                    <div class="profile-password-current">
                        <label for="update_password_current_password">Current Password</label><br>
                        @error('current_password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input class="input-box" type="password" name="current_password"
                            id="update_password_current_password" autocomplete="current-password" required>
                    </div>


                    <div class="profile-passwort-new">
                        <label for="update_password_password">New Password</label><br>
                        @error('current_password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input class="input-box" type="password" name="password" id="update_password_password"
                            autocomplete="new-password" required>
                    </div>


                    <div class="profile-password-confirm">
                        <label for="update_password_password_confirmation">Confirm Password</label><br>
                        @error('password_confirmation')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input class="input-box" type="password" name="password_confirmation"
                            id="update_password_password_confirmation" autocomplete="new-password" required>
                    </div>

                    <input type="submit" value="UPDATE">


                </form>

            </div>

            <div class="profile-usertype">
                <h3>User Type</h3>
                <p>Create a request to change user type</p>
                <form action="{{ route('usertype-request') }}" method="post">
                    @csrf

                    <input type="number" name="user_id" id="user_id" value="{{ Auth::user()->id }}" readonly hidden
                        required>

                    <div class="profile-usertype-update">


                        <label for="usertype">Requested User Type: </label>
                        @if (Auth::user()->UsertypeRequest->count() > 0)
                            <select name="usertype" id="usertype" required disabled>

                                @if (Auth::user()->usertype == 'user')
                                    <option selected disabled value="user">user</option>
                                @else
                                    <option value="user">user</option>
                                @endif

                                @if (Auth::user()->usertype == 'writer')
                                    <option selected disabled value="writer">writer</option>
                                @else
                                    <option value="writer">writer</option>
                                @endif

                                @if (Auth::user()->usertype == 'admin')
                                    <option selected disabled value="admin">admin</option>
                                @else
                                    <option value="admin">admin</option>
                                @endif




                            </select>
                            <span class="error">ALREADY REQUESTED</span>
                        @else
                            <select name="usertype" id="usertype" required>

                                @if (Auth::user()->usertype == 'user')
                                    <option selected disabled value="user">user</option>
                                @else
                                    <option value="user">user</option>
                                @endif

                                @if (Auth::user()->usertype == 'writer')
                                    <option selected disabled value="writer">writer</option>
                                @else
                                    <option value="writer">writer</option>
                                @endif

                                @if (Auth::user()->usertype == 'admin')
                                    <option selected disabled value="admin">admin</option>
                                @else
                                    <option value="admin">admin</option>
                                @endif




                            </select>
                        @endif


                    </div>

                    @if (Auth::user()->UsertypeRequest->count() > 0)
                        <input type="submit" value="REQUEST" disabled>
                        <span class="error">ALREADY REQUESTED</span>
                    @else
                        <input type="submit" value="REQUEST">
                    @endif

                    

                </form>

            </div>


            <div class="profile-delete">

                <h3>Delete Account</h3>
                <p>Once your account is deleted, all of its resources and data will be permanently deleted. Before
                    deleting your account, please download any data or information that you wish to retain.
                </p>
                <form action="{{ route('profile.destroy') }}" method="post">
                    @csrf
                    @method('delete')

                    <input type="submit" value="DELETE ACCOUNT"
                        onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE YOUR ACCOUNT')">
                </form>

            </div>

        </div>


    </main>
@endsection

@section('js')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection
