@extends('layouts/base')

@section('title', '503 Service Unavailable')
@section('show-header', false)

@section('content-full')
    <div class="h-full flex flex-col items-center justify-center text-center">
        <div class="max-w-xs text-3xl text-gray-700">{{ $exception->getMessage() ?: 'We\'ll be right back' }}</div>
    </div>
@endsection
