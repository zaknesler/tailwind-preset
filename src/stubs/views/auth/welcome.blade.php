@extends('layouts/base')

@section('title', 'Welcome')

@section('show-header', false)

@section('content-full')
    <div class="min-h-full h-full w-full flex flex-col items-center justify-center">
        @if (Route::has('login'))
            <div class="absolute pin-t pin-r m-8">
                <ul class="list-reset flex items-center -mr-6">
                    @auth
                        <li class="mr-6"><a class="font-semibold text-blue-dark no-underline hover:underline" href="{{ route('home') }}">Home</a></li>
                    @else
                        <li class="mr-6"><a class="font-semibold text-blue-dark no-underline hover:underline" href="{{ route('login') }}">Sign in</a></li>

                        @if (Route::has('register'))
                            <li class="mr-6"><a class="font-semibold text-blue-dark no-underline hover:underline" href="{{ route('register') }}">Sign up</a></li>
                        @endif
                    @endauth
                </ul>
            </div>
        @endif

        <h1 class="font-light text-5xl mb-6">{{ config('app.name') }}</h1>

        <ul class="list-reset flex flex-col sm:flex-row items-center -mb-4 sm:-mr-6">
            <li class="mb-4 sm:mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://laravel.com/docs">Documentation</a></li>
            <li class="mb-4 sm:mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://laracasts.com">Laracasts</a></li>
            <li class="mb-4 sm:mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://laravel-news.com">News</a></li>
            <li class="mb-4 sm:mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://nova.laravel.com">Nova</a></li>
            <li class="mb-4 sm:mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://forge.laravel.com">Forge</a></li>
            <li class="mb-4 sm:mr-6"><a class="text-blue-dark no-underline hover:underline" href="https://github.com/laravel/laravel">GitHub</a></li>
        </ul>
    </div>
@endsection
