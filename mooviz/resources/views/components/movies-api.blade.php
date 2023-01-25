<!-- display movies list from API to connected-people. This is a weekly or daily trending movie list -->
<!-- you can add a movie to the DB by clicking on the button "Add the movie to DB" -->

<h2 class="col-span-5 text-xl font-bold text-center mx-auto border-b-2 border-red-400">MOVIES FROM THE API</h2>
<div class="flex-col col-span-5 text-center space-x-4 border-2 w-fit rounded-lg px-4 py-2 m-2">
    <h1>
        @if($period == 'day')
        Movies trending daily
        @elseif($period == 'week')
        Movies trending weekly
        @endif
    </h1>

    <form action="{{ route('movies.api') }}" method="GET">
        @csrf
        <label>
            <input type="radio" name="period" value="day" checked> Day
        </label>
        <label>
            <input type="radio" name="period" value="week"> Week
        </label>
        <button type="submit" class="l-1 py-2 px-4 rounded-lg border hover:border-red-400">Submit</button>
    </form>
</div>

@foreach($moviesApi as $movieApi)
<form method="POST" action="{{route('store.movie') }}" class="m-4 p-1 border-2 rounded-lg relative">
    @csrf
    <input type="hidden" name="title" value="{{ $movieApi['title'] }}" />
    <input type="hidden" name="overview" value="{{ $movieApi['overview'] }}" />
    <input type="hidden" name="release_date" value="{{ $movieApi['release_date'] }}" />
    <input type="hidden" name="poster_path" value="{{$movieApi['poster_path']}}" />
    <input type="hidden" name="vote_average" value="{{ $movieApi['vote_average'] }}" />
    <input type="hidden" name="vote_count" value="{{ $movieApi['vote_count'] }}" />
    <input type="hidden" name="id" value="{{ $movieApi['id'] }}" />
    <img src="https://image.tmdb.org/t/p/w500{{$movieApi['poster_path']}}" alt="image du film" class="rounded-lg" />
    <p class="pb-10">{{ $movieApi['overview'] }}</p>
    <button type="submit" class="l-1 py-2 px-4 rounded-lg border hover:border-red-400 absolute bottom-0">Add the movie to DB</button>
</form>
@endforeach