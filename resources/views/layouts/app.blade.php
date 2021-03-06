<!DOCTYPE html>
<html lang="en">
    <head>
		<title>@yield('title') - Lablog</title>
	    <meta charset="UTF-8">
		<meta name="description" content="Demo website">
		<meta name="keywords" content="blog, web, development">
		<meta name="author" content="VexOn">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- LOAD CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" />
        @yield('css')
        <!-- LOAD ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
            integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
            crossorigin="anonymous">
        <!-- LOAD jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>

    <body>
        <!-- ************************** HEADER **************************** -->
        <header>
            <h2>Lablog: a simple demo blog, made in Laravel</h2>
            <p><span>{</span> work in progress... <span>}</span></p>
        </header>

        <!-- *********************** NAVIGATION BAR *********************** -->
        <nav class="topnav" id="myTopnav">
            <!-- LEFT -->
            <a href="/"><i class='fas fa-home'></i></a>
            <a href="/posts"><i class='fas fa-newspaper'></i> Posts</a>
            <a href="/gallery"><i class='fas fa-images'></i> Gallery</a>
            @if (Auth::user())
                <!-- DROPDOWN: MY -->
                <div class="l-nav dropdown" id="ddn1">
                    <button class="dropbtn">
                        My <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="/my-posts">
                            <i class='fas fa-newspaper'></i> Posts
                        </a>
                        <a href="/my-gallery">
                            <i class='fas fa-images'></i> Gallery
                        </a>
                    </div>
                </div>
                <!-- DROPDOWN: NEW -->
                <div class="l-nav dropdown" id="ddn2">
                    <button class="dropbtn">
                        New <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="/new-post/get-form">
                            <i class='fas fa-sticky-note'></i> Post
                        </a>
                        <a href="/new-image/get-form">
                            <i class='fas fa-image'></i> Image
                        </a>
                    </div>
                </div>
            @endif
            <!-- SEARCH -->
            <div class="l-nav search-container">
                <form action="/search" method="get">
                    <input type="search" placeholder="Search by title"
                        name="title">
                    <button type="submit"><i class='fas fa-search'></i></button>
                </form>
            </div>
            <!-- RIGHT -->
            <div class="r-nav">
                @if (Auth::user())
                    <!-- DROPDOWN: USER -->
                    <div class="dropdown" id="ddn3">
                        <button class="dropbtn">
                            <i class='fas fa-user'></i>
                            <i class='fas fa-caret-down'></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="/profile">
                                <i class='fas fa-id-card'></i> My Profile
                            </a>
                            <a href="/logout">
                                <i class='fas fa-sign-out-alt'></i> Sign out
                            </a>
                        </div>
                    </div>
                @else
                    <a href="/register">
                        <i class='fas fa-user-plus'></i> Sign up
                    </a>
                    <a href="/login">
                        <i class='fas fa-sign-in-alt'></i> Sign in
                    </a>
                @endif
            </div>
            <!-- COLLAPSE NAVBAR BUTTON -->
            <a href="javascript:void(0);" class="trigram"
                onclick="collapseNav()">&#9776;
            </a>
        </nav>

        <!-- *********************** CONTENT BLOCK ************************ -->
        <div id="main" class="row">
		    @yield('content')
        </div>

        <!-- ************************** FOOTER **************************** -->
        <footer>
            <div id="l-footer">
                <p>Developed by <span>Vex</span>, 2018.</p>
                <p>Contact: <span>samplemail@mail.com</span></p>
            </div>
            <div id="r-footer">
                <a href="https://www.linkedin.com/" target="_blank">
                    <i class='fab fa-linkedin-in'></i>
                </a>
                <a href="https://github.com/reduvius/lablog" target="_blank"
                    title="GitHub repository of this app">
                    <i class='fab fa-github'></i>
                </a>
                <a href="https://www.facebook.com/" target="_blank">
                    <i class='fab fa-facebook-f'></i>
                </a>
            </div>
        </footer>

        <!-- ************************** LOAD JS *************************** -->
        <script src="{{ URL::asset('js/layout.js') }}"></script>
        @yield('js')
    </body>

</html>
