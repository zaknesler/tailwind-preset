@extends('layouts/base')

@section('title', 'Reset your password')
@section('show-header', false)

@section('content-full')
    <div class="min-h-full h-full bg-gray-100 flex flex-col items-center overflow-auto">
        <div class="p-0 sm:px-8 m-auto max-w-lg w-full">
            <div class="m-6 sm:m-10">
                <div class="text-xl text-center">
                    <a class="text-gray-700 hover:text-gray-800 no-underline" href="/">
                        {{ config('app.name') }}
                    </a>
                </div>

                <div class="mt-8 bg-white rounded-lg">
                    <div class="h-3 block rounded-t-lg w-full bg-brand-500"></div>

                    <form class="w-full rounded-b-lg shadow-xl" action="{{ route('password.email') }}" method="POST">
                        @csrf

                        <div class="p-8 text-gray-700 text-center">Reset your password</div>

                        <div class="px-8">
                            @if (session('status'))
                                <div class="mb-6 p-3 flex border border-brand-200 bg-brand-100 text-brand-700 leading-tight rounded-lg text-sm">
                                    <div class="ml-3">{{ session('status') }}</div>
                                </div>
                            @endif

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
                                        class="form-input {{ $errors->first('email', 'border-red') }}"
                                    />
                                </div>

                                @if ($errors->has('email'))
                                    <div class="form-error">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="mt-8 px-8 py-6 bg-gray-100 flex items-center justify-between rounded-b-lg">
                            <input tabindex="4" class="btn px-8" type="submit" value="Send Link" />

                            @if (Route::has('register'))
                                <div class="text-sm text-gray-600">
                                    Remember it? <a tabindex="6" class="font-semibold text-gray-700 no-underline hover:underline" href="{{ route('login') }}">Sign in</a>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
