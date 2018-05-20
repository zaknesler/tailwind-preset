@extends('layouts/base')

@section('content')
    <example-component title="Dashboard">
        You are signed in as <span class="font-medium">{{ Auth::user()->name }}</span>.
    </example-component>
@endsection
