<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if ($attributes->get('title')) {{ $attributes->get('title') }} &dash; {{ config('app.name') }} @else {{ config('app.name') }} @endif</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,600">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="h-full font-sans font-normal text-base tracking-normal leading-normal bg-white text-gray-700">
    <div id="app" class="h-full">
        @if ($attributes->get('content-full'))
            {{ $slot }}
        @else
            @include('partials/_header')

            <div class="p-6">
                @if (session('status'))
                    <div class="mb-6 px-4 py-3 block rounded-lg text-sm border bg-gray-100 text-gray-800">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="max-w-2xl mx-auto">
                    {{ $slot }}
                </div>
            </div>
        @endif
    </div>
</body>
</html>
