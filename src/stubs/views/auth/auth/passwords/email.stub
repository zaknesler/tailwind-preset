@extends('layouts.base')

@section('title', __('Reset your password'))
@section('show-header', false)

@section('content-full')
    <div class="h-full flex bg-gray-100">
        <div class="p-6 space-y-6 m-auto max-w-xs w-full">
            <div class="flex items-center justify-center">
                <a href="/" class="font-semibold text-gray-700 hover:text-gray-900 no-underline">
                    {{ config('app.name') }}
                </a>
            </div>

            <div class="mx-auto text-center text-gray-600">
                {{ __('Enter your email and we\'ll send you a link to reset your password') }}
            </div>

            @if (session('status'))
                <div class="px-4 py-3 text-sm rounded-lg shadow-sm bg-white text-gray-700">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label>
                        <div class="mb-1 text-xs font-medium text-gray-600 {{ $errors->first('email', 'text-red-700') }}">
                            {{ __('Email') }}
                        </div>

                        <input
                            autofocus
                            required
                            tabindex="1"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-input block w-full {{ $errors->first('email', 'border-red-500') }}"
                            placeholder="you@example.com"
                        />

                        @if ($errors->has('email'))
                            <div class="px-3 py-2 mt-2 text-xs font-semibold border border-red-200 bg-red-100 text-red-700 rounded-lg">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </label>
                </div>

                <div class="flex items-center justify-between">
                    <div class="text-sm">
                        {{ __('Remember it?') }}

                        <a tabindex="3" href="{{ route('login') }}" class="font-semibold text-gray-700 hover:text-gray-800 hover:underline">
                            {{ __('Sign in') }}
                        </a>
                    </div>

                    <button tabindex="2" class="btn px-5 py-2 text-sm">
                        {{ __('Send Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
