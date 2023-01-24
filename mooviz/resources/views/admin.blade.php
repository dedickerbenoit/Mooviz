<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navigation')
    <div class="grid  justify-center mx-12">
        <button>
            <a href="{{route('movies.api')}}">Movies from API </a>
        </button>
        <button>
            <a href="{{ route('admin')}}">Movies in DB</a>
        </button>
    </div>
    @if (isset ($period))
        @include('components.movies-api')
    @endif
    @if (isset ($movies))
        @include('components.movies-db')
    @endif
    @if (isset ($movie))
        @include('components.movie-modify')
    @endif

</body>