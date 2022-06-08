@extends('layouts.base')

@section('content')
    <h1 class="text-white text-3xl my-2">
        @yield('error_code')
    </h1>
    <p class="text-white">
        @yield('error_message')
    </p>
@stop

@section('nav')
    <a href="/">home</a>
@stop
