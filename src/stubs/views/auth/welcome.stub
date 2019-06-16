@extends('layouts.base')

@section('title', 'Welcome')
@section('show-header', false)

@section('content-full')
    <div class="h-full flex relative">
        @if (Route::has('login'))
            <div class="m-8 absolute top-0 right-0">
                <ul class="-mr-6 flex items-baseline font-semibold text-brand-600">
                    @auth
                        <li class="mr-6">
                            <a class="hover:text-brand-800" href="{{ route('home') }}">Home</a>
                        </li>
                    @else
                        <li class="mr-6">
                            <a class="hover:text-brand-800" href="{{ route('login') }}">Sign in</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="mr-6">
                                <a class="hover:text-brand-800" href="{{ route('register') }}">Sign up</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        @endif

        <div class="p-6 m-auto text-center font-semibold">
            <h1 class="leading-tight text-4xl text-gray-700">{{ config('app.name') }}</h1>

            <ul class="-mb-4 sm:-mr-6 mt-8 block sm:flex items-baseline text-brand-600">
                <li class="mb-4 sm:mr-6">
                    <a class="hover:text-brand-800" href="https://laravel.com/docs">Docs</a>
                </li>

                <li class="mb-4 sm:mr-6">
                    <a class="hover:text-brand-800" href="https://laracasts.com">Laracasts</a>
                </li>

                <li class="mb-4 sm:mr-6">
                    <a class="hover:text-brand-800" href="https://laravel-news.com">News</a>
                </li>

                <li class="mb-4 sm:mr-6">
                    <a class="hover:text-brand-800" href="https://blog.laravel.com">Blog</a>
                </li>

                <li class="mb-4 sm:mr-6">
                    <a class="hover:text-brand-800" href="https://nova.laravel.com">Nova</a>
                </li>

                <li class="mb-4 sm:mr-6">
                    <a class="hover:text-brand-800" href="https://forge.laravel.com">Forge</a>
                </li>

                <li class="mb-4 sm:mr-6">
                    <a class="hover:text-brand-800" href="https://github.com/laravel/laravel">GitHub</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
