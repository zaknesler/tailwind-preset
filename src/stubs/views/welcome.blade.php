<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name') }}</title>

        <link rel="dns-prefetch" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" type="text/css" />

        <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
    </head>
    <body class="font-sans text-base font-normal roman tracking-normal leading-normal bg-white text-grey-darker antialiased">
        <div class="w-screen h-screen flex flex-col items-center justify-center">
            @if (Route::has('login'))
                <div class="absolute pin-t pin-r m-8">
                    <ul class="list-reset flex items-center -mr-6">
                        @auth
                            <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="{{ route('home') }}">Home</a></li>
                        @else
                            <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="{{ route('login') }}">Login</a></li>
                            <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </div>
            @endif

            <div class="font-light text-5xl mb-6">Laravel</div>

            <ul class="list-reset flex items-center -mr-6">
                <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://laravel.com/docs">Documentation</a></li>
                <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://laracasts.com">Laracasts</a></li>
                <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://laravel-news.com">News</a></li>
                <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://forge.laravel.com">Forge</a></li>
                <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://github.com/laravel/laravel">GitHub</a></li>
            </ul>
        </div>
    </body>
</html>
