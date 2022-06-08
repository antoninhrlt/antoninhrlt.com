@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col items-center justify-center text-center w-full">
        <img src="images/profile_picture.jpg" alt="profile picture" class="w-60 my-2"/>
        <h1 class="text-white text-3xl font-sans">Antonin Hérault</h1>
        <p class="text-lightgray font-sans">(Anтo)</p>
    </div>
    <div class="py-4 w-full z-10">
        <button class="bg-blue text-white py-2 my-2 px-4">
            <a href="https://blog.antoninhrlt.com" class="button">Blog</a>
        </button>

        <button class="bg-blue text-white py-2 my-2 px-4">
            <a href="https://github.com/junon-corp" class="button">Junon</a>
        </button>

        <button class="bg-blue text-white py-2 my-2 px-4">
            <a href="https://github.com/antoninhrlt" class="button">Github</a>
        </button>
    </div>
@stop

@section('nav')
    <a href="about">about</a>,
    <a href="projects">projects</a>
@stop
