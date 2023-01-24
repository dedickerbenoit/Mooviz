<!-- Allows you to modify a movie in the database. -->
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
        <button type="submit">Confirm</button>
    </form>
    <button><a href="/admin/movies">Cancel</a></button>