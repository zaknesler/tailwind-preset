<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name') }}</title>

        <link rel="dns-prefetch" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" type="text/css" />

        <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-base font-normal roman tracking-normal leading-normal bg-white text-grey-darker antialiased">
        <div id="app" v-cloak>
            @include('layouts/partials/_header')

            @include('layouts/partials/_content')
        </div>
    </body>
</html>
