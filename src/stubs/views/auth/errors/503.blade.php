@extends('layouts/base')

@section('title', '503 Service Unavailable')

@section('show-header', false)

@section('content-full')
    <div class="h-full flex flex-col items-center justify-center text-center">
        <div class="font-semibold text-3xl text-grey-darker">503</div>

        <div class="block w-16 h-1 bg-blue my-6"></div>

        <div class="text-lg text-grey-dark">We'll be right back.</div>
    </div>
@endsection
