<!-- Allows you to modify a movie in the database. -->
<h1 class="text-2xl font-bold text-gray-400">Modify a Movie</h1>
<div class="border-2 rounded-lg shadow-xl col-span-5 mx-10 p-5 ">
    <form method="POST" action="{{ route('update.movie', $movie['id']) }}">
        @method ('patch')
        @csrf
        <div class="grid grid-cols-3">
            <p>Title:</p>
            <input name="title" value="{{ $movie['title'] }}" class=" col-span-2" />
        </div>
        <div class="grid grid-cols-3 ">
            <p>Overview:</p>
            <textarea name="overview" class="w-full col-span-2">{{ $movie['overview'] }}</textarea>
        </div>
        <div class="grid grid-cols-3 ">
            <p>Release Date:</p>
            <input name="release_date" value="{{ $movie['release_date'] }}" class=" col-span-2" />
        </div>
        <div class="grid grid-cols-3 ">
            <p>Poster Path:</p>
            <textarea name="poster_path" class="w-full col-span-2">{{ $movie['poster_path'] }}</textarea>
        </div>
        <div class="grid grid-cols-3 ">
            <p>Vote Average:</p>
            <input name="vote_average" value="{{ $movie['vote_average'] }}" class=" col-span-2" />
        </div>
        <div class="grid grid-cols-3 ">
            <p>Vote Count:</p>
            <input name="vote_count" value="{{ $movie['vote_count'] }}" class=" col-span-2" />
        </div>
        <div class="text-center space-x-4">
            <button type="submit" class="py-2 px-4 rounded-lg border hover:border-red-400">Confirm</button>

        </div>

    </form>
            <a href="/admin" class="py-2 px-4 rounded-lg border hover:border-red-400">Cancel</a>
</div>