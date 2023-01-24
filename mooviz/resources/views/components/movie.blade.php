<div class="grid grid-cols-2">
    <button class="w-fit mx-auto text-xl px-6 py-4">
        <a href="{{route('home')}}">
            Home page
        </a>
    </button>
    <div>
        <p>{{$movie->title}}</p>
        <p>{{$movie->overview}}</p>
        <p>{{$movie->release_date}}</p>
        <p>{{$movie->vote_average}}</p>
        <p>{{$movie->vote_count}}</p>
    </div>
    <img src="{{$movie->poster_path}}" alt="affiche du film" class="h-36" />
</div>