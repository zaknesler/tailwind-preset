@extends('layouts.base')

@section('title', __('Welcome'))
@section('show-header', false)

@section('content-full')
    <div class="h-screen flex">
        @if (Route::has('login'))
            <div class="m-8 absolute top-0 right-0">
                <ul class="space-x-6 flex items-baseline font-semibold text-brand-600">
                    @auth
                        <li><a class="hover:text-brand-800" href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    @else
                        <li><a class="hover:text-brand-800" href="{{ route('login') }}">{{ __('Sign in') }}</a></li>

                        @if (Route::has('register'))
                            <li><a class="hover:text-brand-800" href="{{ route('register') }}">{{ __('Sign up') }}</a></li>
                        @endif
                    @endauth
                </ul>
            </div>
        @endif

        <div class="p-6 m-auto text-center font-semibold">
            <h1 class="leading-tight text-4xl text-gray-700">{{ config('app.name') }}</h1>

            <ul class="mt-8 space-y-3 sm:space-y-0 sm:space-x-6 block sm:flex items-baseline text-brand-600">
                <li><a class="hover:text-brand-800" href="https://laravel.com/docs">Docs</a></li>
                <li><a class="hover:text-brand-800" href="https://laracasts.com">Laracasts</a></li>
                <li><a class="hover:text-brand-800" href="https://laravel-news.com">News</a></li>
                <li><a class="hover:text-brand-800" href="https://blog.laravel.com">Blog</a></li>
                <li><a class="hover:text-brand-800" href="https://nova.laravel.com">Nova</a></li>
                <li><a class="hover:text-brand-800" href="https://forge.laravel.com">Forge</a></li>
                <li><a class="hover:text-brand-800" href="https://github.com/laravel/laravel">GitHub</a></li>
            </ul>
        </div>
    </div>
@endsection
