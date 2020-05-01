@extends('layouts.base')

@section('title', __('Confirm your password'))
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
                {{ __('Please confirm your password before continuing') }}
            </div>

            <form action="{{ route('password.confirm') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label>
                        <div class="mb-1 text-xs font-medium text-gray-600 {{ $errors->first('password', 'text-red-700') }}">
                            {{ __('Password') }}
                        </div>

                        <input
                            autofocus
                            required
                            tabindex="1"
                            type="password"
                            name="password"
                            value="{{ old('password') }}"
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

                <div class="flex items-center justify-between">
                    <div class="text-sm">
                        @if (Route::has('password.request'))
                            <a tabindex="3" href="{{ route('password.request') }}" class="font-semibold text-gray-700 hover:text-gray-800 hover:underline">
                                {{ __('Forgot password?') }}
                            </a>
                        @endif
                    </div>

                    <button tabindex="2" class="btn px-5 py-2 text-sm">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
