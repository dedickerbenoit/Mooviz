<!-- Displays a movie for non-connected people. -->
<div class="grid grid-cols-2">
    <button class="w-fit mx-auto text-xl px-6 py-4">
        <a href="/">
            Home page
        </a>
    </button>
    <div>
        <p>Title: {{$movie->title}}</p>
        <p>Overview: {{$movie->overview}}</p>
        <p>Release date: {{$movie->release_date}}</p>
        <p>Vote average: {{$movie->vote_average}}</p>
        <p>Vote count: {{$movie->vote_count}}</p>
    </div>
    <img src="{{$movie->poster_path}}" alt="affiche du film" class="h-36" />
</div>