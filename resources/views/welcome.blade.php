<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <?php
$min = 1;
$max = 2;
if (isset($_GET['result']) && is_numeric($_GET['result']) && $_GET['result'] >= $min && $_GET['result'] <= $max) {
    $result = $_GET['result'];
    if ($result == 1) {
        $disc = "index.php?result=1の時のディスクリプション";
    } else if ($result == 2) {
        $disc = "index.php?result=2の時のディスクリプション";
    }
    ?>
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="TWITTER_TITLE" />
        <meta property="og:url" content="https://posty-v2.herokuapp.com/" />
        <meta property="og:title" content="OG_TITLE" />
        <meta property="og:description" content="OG_DESC" />
        <meta property="og:image" content="/images/01.jpg" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php }else{ ?>
    <!-- <meta property="og:type" content="article">
    <meta property="og:site_name" content="サイトネーム">
    <meta property="og:title" content="タイトル">
    <meta property="og:description" content="デフォルトのディスクリプション">
    <meta property="og:image" content="https://testooooooooooooo.co.jp/images/ogp.png">
    <meta property="og:url" content="https://testooooooooooooo.co.jp/index.php">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="サイトネーム" />
    <meta name="twitter:title" content="タイトル" />
    <meta name="twitter:description" content="デフォルトのディスクリプション" />
    <meta name="twitter:image" content="https://testooooooooooooo.co.jp/images/ogp.png">
    <meta name="twitter:url" content="https://testooooooooooooo.co.jp/index.php"> -->
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
