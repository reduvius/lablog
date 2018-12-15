@extends('layouts.app')

@section('title')
    Sign Up
@endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/log-reg.css') }}" />
@endsection

@section('content')
    <div class="col-4 col-s-3"></div>
    <div class="col-4 col-s-6">
        <!-- FORM ELEMENT -->
        <div id="container">
            <div id="form-head">
                <h1><i class='fas fa-user-plus'></i> Sign Up</h1>
                <p>Please, fill in this form to create an account.</p>
                <hr>

                <p id="val-info"></p>
            </div>

            <form name="reg" method="post" action="/register"
                onsubmit="return validateForm()">
                @csrf
                <label for="name">
                    <i class='fas fa-user'></i><b> Username</b>
                </label>
                <input type="text" placeholder="Enter Username" name="name">

                <label for="email">
                    <i class='fas fa-envelope'></i><b> Email</b>
                </label>
                <input type="email" placeholder="Enter Email" name="email">

                <label for="password">
                    <i class='fas fa-key'></i><b> Password</b>
                </label>
                <input type="password" placeholder="Enter Password"
                    name="password">

                <label for="password_confirm">
                    <i class='fas fa-key'></i><b> Repeat Password</b>
                </label>
                <input type="password" placeholder="Repeat Password"
                    name="password_confirm">

                <hr>

                <input type="submit" value="Sign Up">
            </form>

            <p id="bt">Already have an account?
                <a href="/login">Sign in.</a>
            </p>
        </div>
    </div>
    <div class="col-4 col-s-3"></div>
@endsection

@section('js')
    <script src="{{ URL::asset('js/register.js') }}"></script>
@endsection
