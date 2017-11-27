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
                            <a href="{{ url('/tasks') }}"><button>Home</button></a>
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
    body{
        background: #f4f4f4;
    }

    .head-text h1 {
        font-family: Acme-Regular;
        font-size: 100px;
        text-align: center;
        color: #757575;
    }

    .content {
        background-color: #ffffff;
        max-height: 100%;
        max-width: 100%;
        border: none;
        border-radius: 6px;
        text-align: center;
        padding: 20px 0px 20px 0px;

        /*display: flex;
        justify-content: center;
        align-items: center;*/

        box-shadow: 0px 0px 2px 0px #6EA4CA;
    }

    .buttons button {
        color: #ffffff;
        padding: 10px;
        margin: 20px 0px 20px 0px;
        background-color: #2579A9;
        border: none;
        border-radius: 6px;
        box-shadow: 0px 0px 2px 0px #6EA4CA;
        min-width: 150px;
        font-weight: bold;
        font-size: 20pt;
        outline: none;

        transition: 0.1s ease-in-out;
    }

    .buttons button:hover {
        background-color: #39729B;
        outline: none;

        transition: 0.1s ease-in-out;
    }

    .buttons button:active {
        color: #F4F4F4;
        background-color: #0C3C60;
        box-shadow: 0px 0px 2px 0px #6EA4CA;

        transition: 0.1s ease-in-out;
    }
</style>