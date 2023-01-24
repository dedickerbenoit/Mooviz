<!DOCTYPE html>
<html>

<head>
    <title>My Movies</title>
</head>

<body>
    <h1>My Movies</h1>
    <form method="POST" action={{route('StoreMovie')}}>
        @csrf
        @foreach($movies as $movie)
        <div>
            <input type="hidden" name="title" value={{$movie['title']}} />
            <input type="hidden" name="overview" value={{$movie['overview']}} />
            <input type="hidden" name="release_date" value={{$movie['release_date']}} />
            <input type="hidden" name="poster_path" value=https://image.tmdb.org/t/p/w500{{$movie['poster_path']}} />
            <input type="hidden" name="vote_average" value={{$movie['vote_average']}} />
            <input type="hidden" name="vote_count" value={{$movie['vote_count']}} />


            <p>{{ $movie['title'] }}</p>
            <p>{{ $movie['overview'] }}</p>
            <p>{{ $movie['release_date'] }}</p>
            <img src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}" alt="image du film" />
            <p>{{ $movie['vote_average'] }}</p>
            <p>{{ $movie['vote_count'] }}</p>
            <button type="submit">Add the movie to DB</button>
        </div>
        @endforeach
    </form>
</body>


</html>