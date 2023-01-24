<!DOCTYPE html>
<html>

<head>
    <title>My Movies</title>
</head>

<body>
    <h1>Modify a Movie</h1>

    <form method="POST" action="{{ route('update.movie', $movie['id']) }}">
        @method ('patch')
        @csrf
        <input name="title" value="{{ $movie['title'] }}" />
        <input name="overview" value="{{ $movie['overview'] }}" />
        <input name="release_date" value="{{ $movie['release_date'] }}" />
        <input name="poster_path" value="{{ $movie['poster_path'] }}" />
        <input name="vote_average" value="{{ $movie['vote_average'] }}" />
        <input name="vote_count" value="{{ $movie['vote_count'] }}" />
        <input name="id" value="{{ $movie['id'] }}" />

        <!-- <p>{{ $movie['title'] }}</p>
        <p>{{ $movie['overview'] }}</p>
        <p>{{ $movie['release_date'] }}</p>
        <img src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}" alt="image du film" />
        <p>{{ $movie['vote_average'] }}</p>
        <p>{{ $movie['vote_count'] }}</p> -->
        <button type="submit">Confirm</button>
    </form>
    <button>Cancel</button>
</body>


</html>