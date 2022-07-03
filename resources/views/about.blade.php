@extends('layouts.base')

@section('title', 'About')

@section('content')
    <h1 class="text-white text-3xl">About me</h1>
    <p class="text-white">
        Interested in sysdev, embedded systems & 3D rendering. Astronomy lover<br>
        Sometimes I play with <a href="https://blender.org" style="text-decoration: underline;">Blender</a> for 3D modeling<br>
        Sovereignty and open-source defender, pay attention to the politic trends and EU decisions<br>
        Fell in love with Rust but still like my old friend C<br>
    </p>

    <h2 class="text-white text-2xl py-2">Languages</h2>
    
    <table class="w-full table-auto text-gray border-collapse border text-center rounded-lg">
        <tr>
            <th class="border bg-blue">Native/fluent</td>
            <td class="border">French 🇫🇷</td>
            <td class="border">English 🇬🇧</td>
        </tr>
        <tr>
            <th class="border bg-blue">Learning</td>
            <td class="border">German 🇩🇪</td>
            <td class="border">Russian 🇷🇺</td>
        </tr>
        <tr class="bg-dark text-darkgray">
            <th class="border">Some basics</td>
            <td class="border">Spanish 🇪🇸</td>
            <td class="border">Dutch 🇳🇱</td>
        </tr>
    </table>

    <h2 class="text-white text-2xl py-2">Hyperlinks</h2>

    <p class="text-white">
        <a href="https://github.com/antoninhrlt">github.com/antoninhrlt</a><br>
        <a href="https://twitter.com/antoninhrltdev">twitter.com/antoninhrltdev</a><br>
        <a href="https://blog.antoninhrlt.com">blog.antoninhrlt.com</a>
    </p>
@stop

@section('nav')
    <a href="/">home</a>,
    <a href="projects">projects</a>
@stop
