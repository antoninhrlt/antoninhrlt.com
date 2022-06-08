@extends('layouts.base')

@section('title', 'About')

@section('content')
    <h1 class="text-white text-3xl">About me</h1>
    <p class="text-white">
        My name is Antonin Hérault, I live in France<br>
        I enjoy system development, embedded systems & 3D rendering<br>
        Passionate about Astronomy
    </p>
    <br>

    <h1 class="text-white text-3xl">Languages</h1>
    <p class="text-white">
        <b>French</b> (native), <b>English</b> (fluent)<br>
        <i>Getting by in...</i> <b>Spanish</b> and <b>Russian</b> (written)<br>
        <i>Learning...</i> <b>Dutch</b> and <b>German</b>
    </p>
    <br>

    <h1 class="text-white text-3xl">Useful links</h1>
    <p class="text-white">
        Github : <a href="https://github.com/antoninhrlt" style="text-decoration: underline;">@antoninhrlt</a><br>
        Twitter : <a href="https://twitter.com/antoninhrltdev" style="text-decoration: underline;">@antoninhrltdev</a><br>
        Blog : <a href="https://blog.antoninhrlt.com" style="text-decoration: underline;">blog.antoninhrlt.com</a>
    </p>
    <br>
@stop

@section('nav')
    <a href="/">home</a>,
    <a href="projects">projects</a>
@stop
