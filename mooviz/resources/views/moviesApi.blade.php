<!DOCTYPE html>
<html>

<head>
    <title>My Movies</title>
</head>

<body>
    <h1>My Movies</h1>
    
        
        @foreach($moviesApi as $movieApi)
        <form method="POST" action={{route('StoreMovie')}}>
            @csrf
            <input type="hidden" name="title" value="{{ $movieApi['title'] }}" />
            <input type="hidden" name="overview" value="{{ $movieApi['overview'] }}" />
            <input type="hidden" name="release_date" value="{{ $movieApi['release_date'] }}" />
            <input type="hidden" name="poster_path" value="https://image.tmdb.org/t/p/w500{{$movieApi['poster_path']}}" />
            <input type="hidden" name="vote_average" value="{{ $movieApi['vote_average'] }}" />
            <input type="hidden" name="vote_count" value="{{ $movieApi['vote_count'] }}" />
            <input type="hidden" name="id" value="{{ $movieApi['id'] }}" />

            <p>{{ $movieApi['title'] }}</p>
            <p>{{ $movieApi['overview'] }}</p>
            <p>{{ $movieApi['release_date'] }}</p>
            <img src="https://image.tmdb.org/t/p/w500{{$movieApi['poster_path']}}" alt="image du film" />
            <p>{{ $movieApi['vote_average'] }}</p>
            <p>{{ $movieApi['vote_count'] }}</p>
            <button type="submit">Add the movie to DB</button>
        </form>
        @endforeach
    
</body>


</html>