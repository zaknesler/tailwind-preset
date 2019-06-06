@extends('layouts.base')

@section('title', '503 Service Unavailable')
@section('show-header', false)

@section('content-full')
    <div class="h-full flex">
        <div class="p-6 m-auto max-w-xs w-full">
            <div class="mx-auto max-w-xs text-center">
                <div class="my-6 text-lg text-gray-600">{{ $exception->getMessage() ?: 'We\'re performing some maintenance, check back soon' }}</div>
            </div>
        </div>
    </div>
@endsection
