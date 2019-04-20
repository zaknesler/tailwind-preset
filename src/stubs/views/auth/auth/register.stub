@extends('layouts/base')

@section('title', 'Sign up')
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

                    <form class="w-full rounded-b-lg shadow-xl" action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="p-8 text-gray-700 text-center">Create an account</div>

                        <div class="px-8">
                            <div class="form-group">
                                <div class="relative">
                                    <div class="form-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z" />
                                        </svg>
                                    </div>

                                    <input
                                        autofocus
                                        required
                                        tabindex="1"
                                        type="text"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Name"
                                        class="form-input {{ $errors->first('name', 'border-red') }}"
                                    />
                                </div>

                                @if ($errors->has('name'))
                                    <div class="form-error">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="mt-4 form-group">
                                <div class="relative">
                                    <div class="form-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z" />
                                        </svg>
                                    </div>

                                    <input
                                        required
                                        tabindex="2"
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="Email"
                                        class="form-input {{ $errors->first('email', 'border-red') }}"
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
                                        tabindex="3"
                                        type="password"
                                        name="password"
                                        value="{{ old('password') }}"
                                        placeholder="Password"
                                        class="form-input {{ $errors->first('password', 'border-red') }}"
                                    />
                                </div>

                                @if ($errors->has('password'))
                                    <div class="form-error">{{ $errors->first('password') }}</div>
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
                                        tabindex="4"
                                        type="password"
                                        name="password_confirmation"
                                        value="{{ old('password_confirmation') }}"
                                        placeholder="Confirm Password"
                                        class="form-input {{ $errors->first('password_confirmation', 'border-red') }}"
                                    />
                                </div>

                                @if ($errors->has('password_confirmation'))
                                    <div class="form-error">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="mt-8 px-8 py-6 bg-gray-100 flex items-center justify-between rounded-b-lg">
                            <input tabindex="4" class="btn px-8" type="submit" value="Sign up" />

                            @if (Route::has('register'))
                                <div class="text-sm text-gray-600">
                                    Have an account? <a tabindex="6" class="font-semibold text-gray-700 no-underline hover:underline" href="{{ route('login') }}">Sign in</a>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
