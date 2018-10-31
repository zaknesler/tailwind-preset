@extends('layouts/base')

@section('title', 'Sign in')

@section('show-header', false)

@section('content-full')
    <div class="min-h-full h-full bg-grey-lightest flex flex-col items-center overflow-auto">
        <div class="m-auto max-w-sm w-full sm:px-8">
            <div class="m-8">
                <div class="text-xl text-center mb-8">
                    <a class="text-grey-darker hover:text-grey-darkest no-underline" href="/">{{ config('app.name') }}</a>
                </div>

                <div class="bg-white rounded">
                    <div class="block rounded-t w-full h-2 bg-blue"></div>

                    <div class="w-full border border-t-0 rounded-b p-8">
                        <div class="text-lg text-grey-darkest text-center mb-8">Verify your email</div>

                        <div class="md:w-64 mx-auto text-center mb-8">
                            @if (session('resent'))
                                <p>A fresh verification link has been sent to your email</p>
                            @else
                                <p>Please check your email for a verification link</p>
                            @endif
                        </div>

                        <div class="text-center text-sm text-grey-dark">
                            Didn't get the email? <a class="font-semibold text-blue-dark no-underline hover:underline" href="{{ route('verification.resend') }}">Resend</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
