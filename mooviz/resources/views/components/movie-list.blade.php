@foreach($movies as $movie)
<a href=" {{route('show.movie', $movie->id)}} " class="grid grid-cols-2">
    <div class="mx-12">
        <p class="text-lg">{{$movie->title}}</p>
        <p>{{$movie->overview}}</p>
        <p>{{$movie->release_date}}</p>
        <p>{{$movie->vote_average}}</p>
        <p>{{$movie->vote_count}}</p>
    </div>
    <div>
        <img src="{{$movie->poster_path}}" alt=" affiche du film" />
    </div>
</a>
@endforeach