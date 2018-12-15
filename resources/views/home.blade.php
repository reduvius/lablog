@extends('layouts.app')

@section('title')
    Home Page
@endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
@endsection

@section('content')
    <div class="col-3 col-s-4">
        <p>Technologies used in making of this demo website:</p>
        <ul>
            <li>HTML5 &#10004;</li>
            <li>CSS3 &#10004;</li>
            <li>PHP &#10004;</li>
            <li>Laravel &#10004;</li>
            <li>MySQL &#10004;</li>
            <li>JavaScript &#10004;</li>
            <li>jQuery &#10004;</li>
            <li>Git &#10004;</li>
            <li>Vagrant &#10004;</li>
        </ul>
    </div>
    <div class="col-7 col-s-8">
        @auth
            <h1>Welcome, !</h1>
        @endauth

        @guest
            <h1>Welcome to my demo blog!</h1>
        @endguest

        <p>A small blog for demonstration purposes only.</p>
        <p>This project doesn't use any PHP framework, it's vanilla PHP.</p>
        <p>There is no database migration library, but database (only structure)
            dump .sql file is included in /db/structure folder. You have to
            import it manually.
        </p>
    </div>
    <div class="col-2 col-s-12">

    </div>
@endsection

@section('js')
    <script src="{{ URL::asset('js/home.js') }}"></script>
@endsection
