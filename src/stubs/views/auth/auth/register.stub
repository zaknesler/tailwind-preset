@extends('layouts.base')

@section('title', __('Sign up'))
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
                {{ __('Create a new account') }}
            </div>

            <form action="{{ route('register') }}" method="POST" class="space-y-6">
                @csrf

                <div class="space-y-4">
                    <div>
                        <label>
                            <div class="mb-1 text-xs font-medium text-gray-600 {{ $errors->first('name', 'text-red-700') }}">
                                {{ __('Name') }}
                            </div>

                            <input
                                autofocus
                                required
                                tabindex="1"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                class="form-input block w-full {{ $errors->first('name', 'border-red-500') }}"
                                placeholder="John Doe"
                            />

                            @if ($errors->has('name'))
                                <div class="px-3 py-2 mt-2 text-xs font-semibold border border-red-200 bg-red-100 text-red-700 rounded-lg">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </label>
                    </div>

                    <div>
                        <label>
                            <div class="mb-1 text-xs font-medium text-gray-600 {{ $errors->first('email', 'text-red-700') }}">
                                {{ __('Email') }}
                            </div>

                            <input
                                required
                                tabindex="2"
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

                    <div>
                        <label>
                            <div class="mb-1 text-xs font-medium text-gray-600 {{ $errors->first('password', 'text-red-700') }}">
                                {{ __('Password') }}
                            </div>

                            <input
                                required
                                tabindex="3"
                                type="password"
                                name="password"
                                class="form-input block w-full {{ $errors->first('password', 'border-red-500') }}"
                                placeholder="••••••••"
                            />

                            @if ($errors->has('password'))
                                <div class="px-3 py-2 mt-2 text-xs font-semibold border border-red-200 bg-red-100 text-red-700 rounded-lg">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </label>
                    </div>

                    <div>
                        <label>
                            <div class="mb-1 text-xs font-medium text-gray-600 {{ $errors->first('password_confirmation', 'text-red-700') }}">
                                {{ __('Confirm Password') }}
                            </div>

                            <input
                                required
                                tabindex="4"
                                type="password"
                                name="password_confirmation"
                                class="form-input block w-full {{ $errors->first('password_confirmation', 'border-red-500') }}"
                                placeholder="••••••••"
                            />

                            @if ($errors->has('password_confirmation'))
                                <div class="px-3 py-2 mt-2 text-xs font-semibold border border-red-200 bg-red-100 text-red-700 rounded-lg">
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                            @endif
                        </label>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="text-sm">
                        {{ __('Have an account?') }}

                        <a tabindex="6" href="{{ route('login') }}" class="font-semibold text-gray-700 hover:text-gray-800 hover:underline">
                            {{ __('Sign in') }}
                        </a>
                    </div>

                    <button tabindex="5" class="btn px-5 py-2 text-sm">
                        {{ __('Sign up') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
