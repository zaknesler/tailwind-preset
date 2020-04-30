@extends('layouts.base')

@section('title', __('Sign in'))
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
                {{ __('Sign in to your account') }}
            </div>

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf

                <div class="space-y-4">
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

                    <div>
                        <label>
                            <div class="mb-1 text-xs font-medium text-gray-600 {{ $errors->first('password', 'text-red-700') }}">
                                {{ __('Password') }}
                            </div>

                            <input
                                required
                                tabindex="2"
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
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input
                            checked
                            tabindex="3"
                            type="checkbox"
                            name="remember"
                            class="form-checkbox focus:shadow-transition text-brand-500 cursor-pointer"
                        />

                        <span class="ml-2 text-gray-600 text-sm select-none">
                            {{ __('Remember me') }}
                        </span>
                    </label>

                    <button tabindex="4" class="btn px-5 py-2 text-sm">
                        {{ __('Sign in') }}
                    </button>
                </div>

                <div class="text-sm text-center">
                    @if (Route::has('register'))
                        <a tabindex="5" href="{{ route('register') }}" class="font-semibold text-gray-700 hover:text-gray-800 hover:underline">{{ __('Create account') }}</a>
                    @endif

                    @if (Route::has('register') and Route::has('password.request'))
                        <span class="mx-1 text-gray-500">&middot;</span>
                    @endif

                    @if (Route::has('password.request'))
                        <a tabindex="6" href="{{ route('password.request') }}" class="text-gray-700 hover:text-gray-800 hover:underline">{{ __('Forgot password?') }}</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
