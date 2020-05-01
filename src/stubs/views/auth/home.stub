@extends('layouts.base')

@section('title', __('Home'))
@section('show-header', true)

@section('content')
    @if (session('status'))
        <div class="mb-6 px-4 py-3 block rounded-lg text-sm border bg-gray-100 text-gray-800">
            {{ session('status') }}
        </div>
    @endif

    <example-component title="Dashboard">
        You are signed in!
    </example-component>

    {{-- <div class="mt-6 border rounded-lg">
        <div class="px-4 py-3 border-b bg-gray-100 text-gray-600 font-semibold rounded-t-lg">Dashboard</div>
        <div class="p-4 bg-white text-gray-700 rounded-b-lg overflow-hidden">
            Markup without Vue!
        </div>
    </div> --}}
@endsection
