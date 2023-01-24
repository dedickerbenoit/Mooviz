<!-- display movies list from DB to non-connected people -->

@foreach($movies as $movie)
<a href=" {{route('show.movie', $movie->id)}} ">
    <div>
        <img src="{{$movie->poster_path}}" alt=" affiche du film" />
    </div>
</a>
@endforeach
<div class="text-xl">
    {{ $movies->links() }}
</div>
