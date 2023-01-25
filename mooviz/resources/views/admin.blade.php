<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navigation')
    <div class="flex place-content-center space-x-10 text-2xl font-bold">
        <button class="hover:text-red-400">
            <a href="{{route('movies.api')}}">Movies from API </a>
        </button>
        <button class="hover:text-red-400">
            <a href="{{ route('admin')}}">Movies in DB</a>
        </button>
    </div>
    <div class="grid grid-cols-5 gap-2">
        @if (isset ($period))
            @include('components.movies-api')
        @endif
        @if (isset ($movies))
            @include('components.movies-db')
        @endif
        @if (isset ($movie))
            @include('components.movie-modify')
        @endif
    </div>
    <a href="https://www.themoviedb.org/" target="_blank" class="hover:underline fixed bottom-0 right-0">Powered by TMDB</a>
</body>