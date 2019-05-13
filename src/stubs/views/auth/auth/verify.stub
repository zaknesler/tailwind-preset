@extends('layouts/base')

@section('title', 'Verify your email')
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

                    <div class="w-full rounded-b-lg shadow-xl text-center">
                        <div class="p-8 text-gray-700">Verify your email</div>

                        <div class="px-8 text-gray-600 max-w-xs mx-auto">
                            @if (session('resent'))
                                <p>We have just sent you a fresh verification link!</p>
                            @else
                                <p>You must verify your email! Check your email for a link.</p>
                            @endif
                        </div>

                        <div class="mt-6 px-8 py-6 bg-gray-100 text-gray-600 text-sm text-center rounded-b-lg">
                            Didn't get the email?
                            <a tabindex="1" class="font-semibold text-gray-700 no-underline hover:underline" href="{{ route('verification.resend') }}">Resend it</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@extends('layouts/base')

@section('title', 'Verify your email')
@section('show-header', false)

@section('content-full')
    <div class="min-h-full h-full bg-gray-100 flex flex-col items-center overflow-auto">
        <div class="p-0 sm:px-8 m-auto max-w-md w-full">
            <div class="m-8">
                <div class="text-xl text-center">
                    <a class="text-gray-700 hover:text-gray-800 no-underline" href="/">
                        {{ config('app.name') }}
                    </a>
                </div>

                <div class="mt-8 bg-white rounded-lg">
                    <div class="h-3 block rounded-t-lg w-full bg-brand-500"></div>

                    <div class="p-8 w-full rounded-b-lg shadow-lg">
                        <div class="text-gray-700 text-center">Verify your email</div>

                        ./mt-8

                        <div class="mt-8 p-3 flex border border-brand-lighter bg-brand-100 text-brand-600 rounded-lg text-sm">
                            <div class="ml-3">
                                @if (session('resent'))
                                    A fresh verification link has been sent to your email.
                                @else
                                    Please check your email for a verification link.
                                @endif
                            </div>
                        </div>

                        @if (Route::has('register'))
                            <div class="mt-8 text-center text-sm text-gray-600">
                                Didn't get the email? <a tabindex="3" class="font-semibold text-gray-700 hover:text-gray-800 no-underline" href="{{ route('verification.resend') }}">Resend</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
