<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Home</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 head-text">
                    <h1>Bakit List</h1>
                </div>
                <div class="col-md-6 col-md-offset-3 content">
                    @if (Route::has('login'))
                        @auth
                        <div class="col-md-6 col-md-offset-3 buttons">
                            <a href="{{ url('/task') }}"><button>Home</button></a>
                        </div>            
                        @else
                        <div class="col-md-6 buttons">
                            <a href="{{ route('login') }}"><button>Login</button></a>
                        </div>
                        <div class="col-md-6 buttons">
                            <a href="{{ route('register') }}"><button>Register</button></a>
                        </div>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>

<style type="text/css">
    @font-face{
        font-family: LT Chickenhawk;
        src: url('/fonts/LT Chickenhawk.ttf');
    }

    body{
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/bg.jpg');
    }

    .head-text h1 {
        font-family: LT Chickenhawk;
        font-size: 100px;
        text-align: center;
        color: #f5f5f5;
    }

    .content {
        background-color: #f5f5f5;
        max-height: 100%;
        max-width: 100%;
        border: none;
        border-radius: 6px;
        text-align: center;
        padding: 20px 0px 20px 0px;

        /*display: flex;
        justify-content: center;
        align-items: center;*/

        box-shadow: 0px 0px 2px 0px #D5A253;
    }

    .buttons button {
        color: #ffffff;
        padding: 10px;
        margin: 20px 0px 20px 0px;
        background-color: #B85750;
        border: none;
        border-radius: 6px;
        box-shadow: 0px 0px 2px 0px #6c332f;
        min-width: 150px;
        font-weight: bold;
        font-size: 20pt;
        outline: none;

        transition: 0.1s ease-in-out;
    }

    .buttons button:hover {
        background-color: #9a4943;
        outline: none;

        transition: 0.1s ease-in-out;
    }

    .buttons button:active {
        color: #f5f5f5;
        background-color: #6c332f;
        box-shadow: 0px 0px 2px 0px #6c332f;

        transition: 0.1s ease-in-out;
    }
</style>