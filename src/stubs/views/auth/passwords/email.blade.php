@extends('layouts/base')

@section('title', 'Reset Password')

@section('show-header', false)

@section('content-full')
    <div class="bg-grey-lightest w-screen h-screen flex flex-col items-center overflow-auto">
        <div class="m-auto max-w-xs w-full">
            <div class="my-8 font-semibold">
                <a class="text-grey-darker no-underline hover:underline flex items-center" href="/">
                    <svg class="text-grey-dark fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.41 11H21a1 1 0 0 1 0 2H5.41l5.3 5.3a1 1 0 0 1-1.42 1.4l-7-7a1 1 0 0 1 0-1.4l7-7a1 1 0 0 1 1.42 1.4L5.4 11z"/></svg>
                    <span class="ml-3">Home</span>
                </a>
            </div>

            <div class="bg-white rounded">
                <div class="block rounded-t w-full h-2 bg-blue"></div>

                <form class="w-full border border-t-0 p-8 mb-8" action="{{ route('password.email') }}" method="POST">
                    @csrf

                    <div class="text-lg text-grey-darkest text-center mb-8">Reset password</div>

                    @if (session('status'))
                        <div class="mb-8">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="block mb-4">
                        <div class="relative">
                            <div class="absolute pin-y pin-l flex items-center text-grey pointer-events-none pl-3">
                                <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/></svg>
                            </div>

                            <input autofocus required type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="block appearance-none w-full h-full border bg-grey-lightest text-grey-darker py-3 pr-3 pl-9 rounded{{ $errors->first('email', ' border-red') }}" />
                        </div>

                        @if ($errors->has('email'))
                            <div class="mt-2 text-sm font-semibold text-red-light">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <div class="block w-full">
                        <input class="appearance-none w-full border-0 bg-blue hover:bg-blue-dark text-white rounded cursor-pointer p-3" type="submit" value="Send Reset Link" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
