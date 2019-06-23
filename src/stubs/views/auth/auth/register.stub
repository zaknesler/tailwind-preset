@extends('layouts.base')

@section('title', 'Sign up')
@section('show-header', false)

@section('content-full')
    <div class="h-full flex">
        <div class="p-6 m-auto max-w-xs w-full">
            <div class="flex items-center justify-center">
                <a href="/" class="font-semibold text-gray-700 hover:text-gray-900 no-underline">{{ config('app.name') }}</a>
            </div>

            <div class="mt-6 mx-auto max-w-xs text-center text-gray-600">
                Create a new account
            </div>

            <form action="{{ route('register') }}" method="POST" class="mt-6">
                @csrf

                <div>
                    <label>
                        <span class="text-xs font-medium text-gray-600 {{ $errors->first('name', 'text-red-700') }}">Name</span>
                        <input
                            autofocus
                            required
                            tabindex="1"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            class="mt-1 form-input block w-full {{ $errors->first('name', 'border-red-500') }}"
                            placeholder="John Doe"
                        />

                        @if ($errors->has('name'))
                            <div class="px-3 py-2 mt-2 text-xs font-semibold bg-red-100 text-red-700 rounded-lg">{{ $errors->first('name') }}</div>
                        @endif
                    </label>
                </div>

                <div class="mt-3">
                    <label>
                        <span class="text-xs font-medium text-gray-600 {{ $errors->first('email', 'text-red-700') }}">Email</span>
                        <input
                            required
                            tabindex="2"
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
                            tabindex="3"
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

                <div class="mt-3">
                    <label>
                        <span class="text-xs font-medium text-gray-600 {{ $errors->first('password_confirmation', 'text-red-700') }}">Confirm Password</span>
                        <input
                            required
                            tabindex="4"
                            type="password"
                            name="password_confirmation"
                            class="mt-1 form-input block w-full {{ $errors->first('password_confirmation', 'border-red-500') }}"
                            placeholder="••••••••"
                        />

                        @if ($errors->has('password_confirmation'))
                            <div class="px-3 py-2 mt-2 text-xs font-semibold bg-red-100 text-red-700 rounded-lg">{{ $errors->first('password_confirmation') }}</div>
                        @endif
                    </label>
                </div>

                <div class="mt-6 text-sm flex items-center justify-between">
                    <div>
                        Have an account? <a tabindex="6" href="{{ route('login') }}" class="font-semibold text-gray-700 hover:text-gray-800 hover:underline">Sign in</a>
                    </div>

                    <button tabindex="5" class="btn px-5 py-2">Sign up</button>
                </div>
            </form>
        </div>
    </div>
@endsection
