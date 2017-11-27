<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top nav-container">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand nav-text" href="{{ url('/') }}">
                        Bakit List
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-text" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-text" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav-text" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<style type="text/css">
    .nav-container {
        background-color: #D5A253;
    }

    .navbar-brand {
        font-family: Acme-Regular;
        font-size: 25px;
    }

    .nav-text {
        color: #F4F4F4 !important;
    }

    .dropdown-toggle:focus {
        background-color: #936A4A !important;
    }

    .dropdown-menu a:hover {
        background-color: #936A4A !important;
    }

    body {
        background-color: #f4f4f4;
    }

    .panel-heading {
        text-align: center;
        color: #f4f4f4 !important;
        font-size: 20px;
        background-color: #D5A253 !important;
    }

    .button-login {
        color: #ffffff;
        background-color: #B85750;
        border: none;
        border-radius: 6px;
        box-shadow: 0px 0px 2px 0px #6c332f;
        min-width: 150px;
        font-weight: bold;
        font-size: 12pt;
        outline: none;

        transition: 0.1s ease-in-out;
    }

    .button-login:hover {
        background-color: #9a4943;
        outline: none;

        transition: 0.1s ease-in-out;
    }

    .button-login:active {
        color: #f5f5f5;
        background-color: #6c332f;
        box-shadow: 0px 0px 2px 0px #6c332f;

        transition: 0.1s ease-in-out;
    }
</style>