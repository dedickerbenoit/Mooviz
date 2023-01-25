<!-- Displays a movie for non-connected people. -->
<div class="col-span-5 mx-auto grid grid-cols-2 px-20 border-2 rounded-lg w-1/2 py-2 shadow-2xl">

    <div class="space-y-4">
        <p>Title: {{$movie->title}}</p>
        <p>Overview: {{$movie->overview}}</p>
        <p>Release date: {{$movie->release_date}}</p>
        <p>Vote average: {{$movie->vote_average}}</p>
        <p>Vote count: {{$movie->vote_count}}</p>
    </div>
    <img src="{{$movie->poster_path}}" alt="affiche du film" class="h-full rounded-lg" />
    <button class="col-span-2 w-fit l-1 py-2 px-4 rounded-lg border hover:border-red-400">
        <a href="/">
            Home page
        </a>
    </button>
</div>