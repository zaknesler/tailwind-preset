@extends('layouts/base')

@section('title', 'Sign in')
@section('show-header', false)

@section('content-full')
    <div class="min-h-full h-full bg-gray-100 flex flex-col items-center overflow-auto">
        <div class="p-0 m-auto max-w-md w-full">
            <div class="m-6 sm:m-10">
                <div class="text-xl text-center">
                    <a class="text-gray-700 hover:text-gray-800 no-underline" href="/">
                        {{ config('app.name') }}
                    </a>
                </div>

                <div class="mt-8 bg-white rounded-lg">
                    <div class="h-3 block rounded-t-lg w-full bg-brand-500"></div>

                    <form class="w-full rounded-b-lg shadow-xl" action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="p-8 text-gray-700 text-center">Sign in to your account</div>

                        <div class="px-8">
                            <div class="form-group">
                                <div class="relative">
                                    <div class="form-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z" />
                                        </svg>
                                    </div>

                                    <input
                                        autofocus
                                        required
                                        tabindex="1"
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="Email"
                                        class="form-input"
                                    />
                                </div>

                                @if ($errors->has('email'))
                                    <div class="form-error">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="mt-4 form-group">
                                <div class="relative">
                                    <div class="form-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                        </svg>
                                    </div>

                                    <input
                                        required
                                        tabindex="2"
                                        type="password"
                                        name="password"
                                        value="{{ old('password') }}"
                                        placeholder="Password"
                                        class="form-input"
                                    />
                                </div>

                                @if ($errors->has('password'))
                                    <div class="form-error">{{ $errors->first('password') }}</div>
                                @endif
                            </div>

                            <div class="mt-6 flex items-center justify-between">
                                <label class="flex items-center select-none">
                                    <input tabindex="3" type="checkbox" name="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }} />

                                    <span class="ml-2 text-sm">Remember me</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a tabindex="5" class="text-sm text-gray-600 no-underline hover:underline" href="{{ route('password.request') }}">Forgot password?</a>
                                @endif
                            </div>
                        </div>

                        <div class="mt-6 px-8 py-6 bg-gray-100 flex items-center justify-between rounded-b-lg">
                            <input tabindex="4" class="btn px-8" type="submit" value="Sign in" />

                            @if (Route::has('register'))
                                <div class="text-sm text-gray-600">
                                    Need an account? <a tabindex="6" class="font-semibold text-gray-700 no-underline hover:underline" href="{{ route('register') }}">Sign up</a>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
