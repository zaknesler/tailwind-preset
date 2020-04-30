@extends('layouts.base')

@section('title', __('Verify your email'))
@section('show-header', false)

@section('content-full')
    <div class="h-full flex">
        <div class="p-6 m-auto space-y-6 max-w-xs w-full">
            <div class="flex items-center justify-center">
                <a href="/" class="font-semibold text-gray-700 hover:text-gray-900 no-underline">
                    {{ config('app.name') }}
                </a>
            </div>

            <div class="space-y-6 mx-auto text-center">
                <div class="text-gray-600">
                    @if (session('resent'))
                        {{ __('We have sent you a fresh verification link, please check your email.') }}
                    @else
                        {{ __('You must verify your email address before proceeding. Please check your email for a verification link.') }}
                    @endif
                </div>

                <div class="mx-auto w-16 h-px block bg-gray-400"></div>

                <div>
                    {{ __('Didn\'t get the email?') }}
                    <form action="{{ route('verification.resend') }}" method="POST" id="resendForm" class="hidden">@csrf</form>
                    <a href="#" onclick="document.querySelector('#resendForm').submit()" class="font-semibold text-brand-600 hover:text-brand-800">{{ __('Resend it') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
