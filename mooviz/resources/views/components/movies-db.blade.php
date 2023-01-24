<!-- display all the movies in the database for the admin.
It is possible to modify or delete a movie. -->

<h2>MOVIES FROM THE DB</h2>

@foreach($movies as $movie)
    <form method="GET" action="{{ route('show.movie.admin', $movie['id']) }}">
        @csrf
        <input type="hidden" name="title" value="{{ $movie['title'] }}" />
        <input type="hidden" name="overview" value="{{ $movie['overview'] }}" />
        <input type="hidden" name="release_date" value="{{ $movie['release_date'] }}" />
        <input type="hidden" name="poster_path" value="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}" />
        <input type="hidden" name="vote_average" value="{{ $movie['vote_average'] }}" />
        <input type="hidden" name="vote_count" value="{{ $movie['vote_count'] }}" />
        <input type="hidden" name="id" value="{{ $movie['id'] }}" />

        <p>{{ $movie['title'] }}</p>
        <p>{{ $movie['overview'] }}</p>
        <p>{{ $movie['release_date'] }}</p>
        <img src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}" alt="image du film" />
        <p>{{ $movie['vote_average'] }}</p>
        <p>{{ $movie['vote_count'] }}</p>
        <button type="submit">Modify this Add</button>
    </form>
    <form method="POST" action="{{ route('destroy.movie', $movie['id']) }}">
        @method ('delete')
        @csrf
        <input type="hidden" name="id" value="{{ $movie['id'] }}" />
        <button type="submit">Delete this Add</button>
    </form>
    @endforeach
    <div class="h-10">
        {{ $movies->links() }}
    </div>