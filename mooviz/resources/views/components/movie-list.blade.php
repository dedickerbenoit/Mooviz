<!-- display movies list from DB to non-connected people -->

@foreach($movies as $movie)
<a href=" {{route('show.movie', $movie->id)}} " class="scale-80 shadow-xl hover:scale-110 hover:shadow-2xl transition">
    <div>
        <img src="{{$movie->poster_path}}" alt=" affiche du film" class="rounded-lg" />
    </div>
</a>
@endforeach
<div class="w-1/2 absolute bottom-0">
    {{ $movies->links() }}
</div>