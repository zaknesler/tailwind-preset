@extends('layouts.base')

@section('title', 'Reset your password')
@section('show-header', false)

@section('content-full')
    <div class="h-full flex">
        <div class="p-6 m-auto max-w-xs w-full">
            <div class="flex items-center justify-center">
                <a href="/" class="font-semibold text-gray-700 hover:text-gray-900 no-underline">{{ config('app.name') }}</a>
            </div>

            <div class="mt-6 mx-auto max-w-xs text-center text-gray-600">
                Reset your password
            </div>

            <form action="{{ route('password.request') }}" method="POST" class="mt-6">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}" />

                <div>
                    <label>
                        <span class="text-xs font-medium text-gray-600 {{ $errors->first('email', 'text-red-700') }}">Email</span>
                        <input
                            autofocus
                            required
                            tabindex="1"
                            type="email"
                            name="email"
                            value="{{ old('email') ?? $email }}"
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
                        <span class="text-xs font-medium text-gray-600 {{ $errors->first('password', 'text-red-700') }}">New Password</span>
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

                <div class="mt-3">
                    <label>
                        <span class="text-xs font-medium text-gray-600 {{ $errors->first('password_confirmation', 'text-red-700') }}">Confirm New Password</span>
                        <input
                            required
                            tabindex="3"
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

                <div class="mt-6 text-sm text-right">
                    <button tabindex="4" class="btn px-5 py-2">Reset password</button>
                </div>
            </form>
        </div>
    </div>
@endsection
