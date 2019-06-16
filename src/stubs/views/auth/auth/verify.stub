@extends('layouts.base')

@section('title', 'Verify your email')
@section('show-header', false)

@section('content-full')
    <div class="h-full flex">
        <div class="p-6 m-auto max-w-xs w-full">
            <div class="flex items-center justify-center">
                <a href="/" class="font-semibold text-gray-700 hover:text-gray-900 no-underline">{{ config('app.name') }}</a>
            </div>

            <div class="mt-6 mx-auto max-w-xs text-center">
                <div class="text-gray-600">
                    @if (session('resent'))
                        We have sent you a fresh verification link, please check your email.
                    @else
                        You must verify your email address before proceeding. Please check your email for a verification link.
                    @endif
                </div>

                <div class="my-6 mx-auto w-16 h-px block bg-gray-400"></div>

                <div>Didn't get the email? <a href="{{ route('verification.resend') }}" class="font-semibold text-brand-600 hover:text-brand-800">Resend it</a></div>
            </div>
        </div>
    </div>
@endsection
