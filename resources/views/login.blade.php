@extends('layouts.app')

@section('title')
    Sign In
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
                <h1><i class='fas fa-sign-in-alt'></i> Sign In</h1>
                <hr>

                <p id="val-info"></p>
            </div>

            <form name="login" method="post" action="/login"
                onsubmit="return validateForm()">
                @csrf
                <label for="email">
                    <i class='fas fa-envelope'></i><b> Email</b>
                </label>
                <input type="email" placeholder="Enter Email" name="email">

                <label for="password">
                    <i class='fas fa-key'></i><b> Password</b>
                </label>
                <input type="password" placeholder="Enter Password"
                    name="password">

                <hr>

                <input type="submit" value="Sign In">
            </form>

            <p id="bt">Don't have an account?
                <a href="/register">Sign up.</a>
            </p>
        </div>
    </div>
    <div class="col-4 col-s-3"></div>
@endsection

@section('js')
    <script src="{{ URL::asset('js/login.js') }}"></script>
@endsection
