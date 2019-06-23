@extends('layouts.base')

@section('title', 'Sign in')
@section('show-header', false)

@section('content-full')
    <div class="h-full flex">
        <div class="p-6 m-auto max-w-xs w-full">
            <div class="flex items-center justify-center">
                <a href="/" class="font-semibold text-gray-700 hover:text-gray-900 no-underline">{{ config('app.name') }}</a>
            </div>

            <div class="mt-6 mx-auto max-w-xs text-center text-gray-600">
                Sign in to your account
            </div>

            <form action="{{ route('login') }}" method="POST" class="mt-6">
                @csrf

                <div>
                    <label>
                        <span class="text-xs font-medium text-gray-600 {{ $errors->first('email', 'text-red-700') }}">Email</span>
                        <input
                            autofocus
                            required
                            tabindex="1"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="mt-1 form-input block w-full {{ $errors->first('email', 'border-red-500') }}"
                            placeholder="you@example.com"
                        />

                        @if ($errors->has('email'))
                            <div class="px-3 py-2 mt-2 text-xs font-semibold bg-red-100 text-red-700 rounded-lg">{{ $errors->first('email') }}</div>
                        @endif
                    </label>
                </div>

                <div class="mt-3">
                    <label>
                        <span class="text-xs font-medium text-gray-600 {{ $errors->first('password', 'text-red-700') }}">Password</span>
                        <input
                            required
                            tabindex="2"
                            type="password"
                            name="password"
                            class="mt-1 form-input block w-full {{ $errors->first('password', 'border-red-500') }}"
                            placeholder="••••••••"
                        />

                        @if ($errors->has('password'))
                            <div class="px-3 py-2 mt-2 text-xs font-semibold bg-red-100 text-red-700 rounded-lg">{{ $errors->first('password') }}</div>
                        @endif
                    </label>
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <label class="flex items-center">
                        <input
                            checked
                            tabindex="3"
                            type="checkbox"
                            name="remember"
                            class="form-checkbox focus:shadow-transition text-brand-500 cursor-pointer"
                        />
                        <span class="ml-2 text-gray-600 text-sm select-none">Remember me</span>
                    </label>

                    <button tabindex="4" class="btn px-5 py-2 text-sm">Sign in</button>
                </div>

                <div class="mt-6 text-sm text-center">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-semibold text-gray-700 hover:text-gray-800 hover:underline">Create account</a>
                    @endif

                    @if (Route::has('register') && Route::has('password.request'))
                        <span class="mx-1 text-gray-500">&middot;</span>
                    @endif

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-gray-700 hover:text-gray-800 hover:underline">Forgot password?</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
