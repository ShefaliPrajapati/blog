<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />
    <style>
        body {
            padding-top: 56px;
        }


        html{ font-size: 100%; height: 100%;  overflow-x: hidden; touch-action: manipulation; }

        body{ font-size: 15px; font-family: 'Roboto', sans-serif; width: 100%; height: 100%; margin: 0; font-weight: 300;
            -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; word-wrap: break-word;
            background: #EDF3F3; color: #000; }

        h1, h2, h3, h4, h5, h6, p, a, ul, span, li, img{ margin: 0; padding: 0; font-weight: 300; }

        h1,h2,h3,h4,h5,h6{ line-height: 1.5; }

        p{ line-height: 1.6; font-family: 'Maven Pro', sans-serif; font-weight: 400; color: #444; }

        h1{ font-size: 4em; line-height: 1; }
        h2{ font-size: 2.8em; line-height: 1.1; }
        h3{ font-size: 2em; }
        h4{ font-size: 1.2em; }
        h5{ font-size: 1.1em; }
        h6{ font-size: .9em; letter-spacing: 1px; }

        a, button{ display: inline-block; text-decoration: none; color: inherit; transition: all .3s; }

        a:focus, a:active, a:hover,
        button:focus, button:active, button:hover{ text-decoration: none; color: #498BF9; }

        b{ font-weight: 500; }

        img{ width: 100%; }

        li{ list-style: none; display: inline-block; }

        span{ display: inline-block; }

        header{ font-weight: 400; }



        /* ---------------------------------
        2. COMMONS FOR PAGE DESIGN
        --------------------------------- */

        .section .heading{ padding-bottom: 70px; }

        .color-white{ color: #fff; }

        .display-table{ display: table; height: 100%; width: 100%; }

        .display-table-cell{ display: table-cell; vertical-align: middle; }

        .card{ background: #b6cece; border: 0; }

        .no-side-padding{ padding-right: 0px; padding-left: 0px; }

        .no-left-padding{ padding-left: 0px; }

        .no-right-padding{ padding-right: 0px; }

        .icon{ font-size: 2em; }


        ::-webkit-input-placeholder { font-size: .9em; letter-spacing: 1px; }

        ::-moz-placeholder { font-size: .9em; letter-spacing: 1px; }

        :-ms-input-placeholder { font-size: .9em; letter-spacing: 1px;  }

        :-moz-placeholder { font-size: .9em; letter-spacing: 1px;  }



        /* ---------------------------------
        3. MENU
        --------------------------------- */

        header{ overflow: hidden; background: #fff; box-shadow: 0px 2px 10px rgba(0,0,0, .3); margin-bottom: 50px; }

        header .logo{ float: left; height: 20px; margin: 20px 30px; }

        header .logo img{ height: 100%; width: auto; }


        header .main-menu{ display: inline-block; float: left; }

        header .main-menu > li{ float: left; }

        header .main-menu > li > a{ color:#fff; height: 60px; line-height: 60px; padding: 0 25px; border-right: 1px solid #eee; }

        header .main-menu > li > a:hover{  background: #eee; }

        header .main-menu > li:first-child > a{ border-left: 1px solid #eee; }


        header .visible.main-menu{ display: block; }



        /* SEARCH AREA */

        header .src-area{ position: relative; height: 60px; width: 50%; float: right; display: inline-block; background: #F5F7F6; }

        header .src-area .src-input{ position: absolute; top: 0; bottom: 0; left: 0; right: 0; width: 100%;
            padding: 0 20px 0 70px; background: transparent; border: 0; outline: 0; }

        header .src-area .src-input:focus{ box-shadow: 0px 0px 1px #aaa; }

        header .src-area .src-btn{ position: absolute; top: 0; bottom: 0; left: 0; width: 40px; background: none; border: 0;
            font-size: 1.2em; outline: 0; margin-left: 20px; opacity: .6; cursor: pointer; z-index: 10; }


        /* NAV ICON */

        .menu-nav-icon{ display: none; height: 60px; width: 50px; text-align: center; line-height: 60px; cursor: pointer;
            position: absolute; right: 0; font-size: 1.8em; }

        /* ---------------------------------
        5. BLOG POST
        --------------------------------- */

        .post-area{ box-shadow: 0px 0px 5px rgba(0,0,0,.1); border-bottom: 1px solid #eee; background: #fff; }

        .post-area .post-info{ position: relative; padding: 30px 0; }

        .post-area .post-info .left-area{ height: 70px; width: 70px; border-radius: 100px; overflow: hidden; position: absolute;
            top: 50%; margin-top: -35px; border: 6px	solid #fff; box-shadow: 0px 0px 5px rgba(0,0,0,.3); }

        .post-area .post-info .middle-area{ padding-left: 90px; display: inline-block; }

        .post-area .post-info .date{ display: inline-block; color: #999; }

        .post-area .post-info .right-area{ float: right; }


        /* ---------------------------------
        6. MAIN POST ( LEF AREA )
        --------------------------------- */

        .main-post{ border-right: 1px solid #ddd; }

        .main-post .blog-post-inner{ padding-right: 30px; }

        .main-post .title{ margin-bottom: 30px; }

        .main-post .para{ margin: 30px 0; }

        .main-post ul.tags{ margin: 30px 0; }

        .main-post ul.tags > li > a{ padding: 7px 10px; margin-bottom: 10px; margin-right: 10px; float: left;
            border: 1px solid #ddd; background: #ddd; }

        .main-post ul.tags > li > a:hover{ background: none; }


        /* ICONS */

        .main-post .post-icons-area{ margin: 30px 0; padding: 30px 30px 30px 0; overflow: hidden;
            border-top: 1px solid #ddd; border-bottom: 1px solid #ddd; }

        .main-post ul.post-icons{ float: left; }

        .main-post ul.post-icons > li > a{ padding-right: 15px; }

        .main-post ul.post-icons > li > a > i{ padding-right: 10px; font-size: 1.1em; opacity: .5; }

        .main-post ul.icons{ float: right; }

        .main-post ul.icons > li > a > i{ padding-left: 15px; font-size: 1.1em; opacity: .5; }


        /* POST FOOTER */

        .main-post .post-footer.post-info{ margin-top: 30px; padding-right: 30px; }

        .main-post .post-footer{ margin-bottom: 30px; }



    </style>
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="main-menu navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="{{ Request::is('category*') ? 'active' : '' }}">
                                    <a href="{{ route('category.index') }}">
                                        <span>Category</span>
                                    </a>
                                </li>
                                    <li class="nav-item"><a href="{{ route('home') }}">Posts</a></li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="row">
            @yield('content')
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script>
    $( ".datepicker" ).datepicker();
    function filter() {
        let date = $('#date').val();
        $.ajax({
            type: "GET",
            url: '{{ route('filter') }}',
            data: {date:date },
            success: function( data ) {
                console.log(data);
                $('#posts_date').html(data);
            }
        });
    }
</script>
</body>
</html>
