<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <?php
        if (isset($_GET['utm_content']) && is_string($_GET['utm_content'])) {
            $type = $_GET['utm_content'];
            if ($type == "kadokawa") {
                $title = "1ですー";
                $description = "1のdesc";
                $t = 1;
            } else if ($type == "mori") {
                $title = "2ですー";
                $description = "2のdesc";
                $t = 2;
            } else {
                $title = "default";
                $description = "default";
            }
            
            ?>
            <!-- twitter cardのサイズ -->
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:site" content="@yanb9999" />
            <meta property="og:url" content="https://posty-v2.herokuapp.com/" />
            <meta property="og:title" content="{{$title}}" />
            <meta property="og:description" content="{{$description}}" />
            <!-- 画像URL -->
            <meta property="og:image" content="https://posty-v2.herokuapp.com/images/{{$t}}.jpg" />
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php } ?>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
