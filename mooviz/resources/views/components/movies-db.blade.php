<!-- display all the movies in the database for the admin.
It is possible to modify or delete a movie. -->

<h2 class="col-span-5 text-xl font-bold text-center mx-auto border-b-2 border-red-400 ">MOVIES FROM THE DB</h2>

@foreach($movies as $movie)
<div class="p-2">
    <form method="GET" action="{{ route('show.movie.admin', $movie['id']) }}">
        @csrf
        <input type="hidden" name="title" value="{{ $movie['title'] }}" />
        <input type="hidden" name="overview" value="{{ $movie['overview'] }}" />
        <input type="hidden" name="release_date" value="{{ $movie['release_date'] }}" />
        <input type="hidden" name="poster_path" value="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}" />
        <input type="hidden" name="vote_average" value="{{ $movie['vote_average'] }}" />
        <input type="hidden" name="vote_count" value="{{ $movie['vote_count'] }}" />
        <input type="hidden" name="id" value="{{ $movie['id'] }}" />
        <img src="{{$movie['poster_path']}}" alt="image du film" class="rounded-lg shadow-xl" />
        <button type="submit" class="my-1 py-2 px-4 rounded-lg border hover:border-red-400">Modify this Add</button>
    </form>
    <form method="POST" action="{{ route('destroy.movie', $movie['id']) }}">
        @method ('delete')
        @csrf
        <input type="hidden" name="id" value="{{ $movie['id'] }}" />
        <button type="submit" class="l-1 py-2 px-4 rounded-lg border hover:border-red-400">Delete this Add</button>
    </form>
</div>

@endforeach
<div class="h-10 col-span-5">
    {{ $movies->links() }}
</div>