@extends('layouts/base')

@section('title', '500 Internal Server Error')

@section('show-header', false)

@section('content-full')
    <div class="h-full flex flex-col items-center justify-center text-center">
        <div class="font-semibold text-3xl text-grey-darker">500</div>

        <div class="block w-16 h-1 bg-blue my-6"></div>

        <div class="text-lg text-grey-dark">Something went wrong.</div>

        <div class="mt-6">
            <a class="text-blue-dark no-underline hover:underline inline-flex items-center" href="{{ url()->previous() }}">
                <svg class="text-blue fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3.828 9l6.071-6.071-1.414-1.414L0 10l.707.707 7.778 7.778 1.414-1.414L3.828 11H20V9H3.828z"/></svg>
                <span class="ml-3">Go back</span>
            </a>
        </div>
    </div>
@endsection
