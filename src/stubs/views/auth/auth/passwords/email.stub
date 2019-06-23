@extends('layouts.base')

@section('title', 'Reset your password')
@section('show-header', false)

@section('content-full')
    <div class="h-full flex">
        <div class="p-6 m-auto max-w-xs w-full">
            <div class="flex items-center justify-center">
                <a href="/" class="font-semibold text-gray-700 hover:text-gray-900 no-underline">{{ config('app.name') }}</a>
            </div>

            <div class="mt-6 text-center text-gray-600">
                Enter your email address and we'll send you a link to reset your password
            </div>

            @if (session('status'))
                <div class="mt-6 px-4 py-3 bg-gray-100 text-gray-700 rounded-lg text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="POST" class="mt-6">
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

                <div class="mt-6 text-sm flex items-center justify-between">
                    <div>
                        Remember it? <a tabindex="3" href="{{ route('login') }}" class="font-semibold text-gray-700 hover:text-gray-800 hover:underline">Sign in</a>
                    </div>

                    <button tabindex="2" class="btn px-5 py-2">Send Link</button>
                </div>
            </form>
        </div>
    </div>
@endsection
